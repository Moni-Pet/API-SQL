<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentDetail;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function createPaymentIntent(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $amount = floatval($request->input('amount'));
        $metadata = $request->input('metadata', []);

        if ($amount < 5) {
            return response()->json(['error' => 'El monto mínimo permitido es $5 MXN'], 400);
        }

        $metadataForStripe = [];
        foreach ($metadata as $key => $value) {
            $metadataForStripe[$key] = is_array($value) ? json_encode($value) : (string) $value;
        }

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => intval(round($amount * 100)),
                'currency' => 'mxn',
                'payment_method_types' => ['card'],
                'metadata' => $metadataForStripe,
            ]);

            return response()->json([
                'clientSecret' => $paymentIntent->client_secret,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function confirmPayment(Request $request)
    {
        $paymentIntentId = $request->input('paymentIntentId');

        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            $paymentIntent = PaymentIntent::retrieve($paymentIntentId);

            if ($paymentIntent->status === 'succeeded') {
                $type = $paymentIntent->metadata->type ?? null;
                $purchase_date = Carbon::now();
                $pickup_date = $purchase_date->copy()->addDays(3)->setTime(10, 0);

                if ($type === 'order') {
                    $products = $request->input('products');

                    $totalCalculated = 0;
                    foreach ($products as $prod) {
                        $discount = $prod['discount'] ?? 0;
                        $discountMultiplier = 1 - ($discount / 100);
                        $totalCalculated += ($prod['price'] * $discountMultiplier) * $prod['quantity'];
                    }
                    $totalCalculated = round($totalCalculated, 2);
                   /* $amountReceived = round($paymentIntent->amount_received / 100, 2);

                    if ($totalCalculated !== $amountReceived) {
                        return response()->json(['error' => 'El monto pagado no coincide con el monto calculado'], 400);
                    } */

                    $order = new Order();
                    $order->user_id = ($request->user_id != null ? $request->user_id : $request->user()->id);
                    $order->purchase_date = $purchase_date;
                    $order->pickup_date = $pickup_date;
                    $order->price = $totalCalculated;
                    $order->status = 'Pendiente';
                    $order->transferce_code = $paymentIntentId;
                    $order->save();

                    foreach ($products as $prod) {
                        $detail = new OrderDetail();
                        $detail->order_id = $order->id;
                        $detail->product_id = $prod['product_id'];
                        $detail->quantity = $prod['quantity'];
                        $detail->price = $prod['price'];
                        $detail->discount = $prod['discount'] ?? 0.00;
                        $detail->save();
                    }

                } else if ($type === 'appointment') {
                        $services = $request->input('services');

                        if (is_string($services)) {
                            $services = json_decode($services, true);
                        }

                        $appointment = new Appointment();
                        $appointment->user_id = ($request->user_id != null ? $request->user_id : $request->user()->id);
                        $appointment->pet_id = $request->input('pet_id');
                        $appointment->descripcion = $request->input('description');
                        $appointment->creation_date = $purchase_date;
                        $appointment->date = $request->input('date');

                        $totalPrice = 0;
                        foreach ($services as $service) {
                            $price = floatval($service['price']);
                            $discount = floatval($service['discount'] ?? 0);
                            $totalPrice += $price - $discount;
                        }
                        $appointment->total_price = $totalPrice;

                        $appointment->status = 'Pendiente';
                        $appointment->transferce_code = $paymentIntentId;
                        $appointment->type_appointment = $request->input('type_appointment');
                        $appointment->save();

                        foreach ($services as $service) {
                            $detail = new AppointmentDetail();
                            $detail->appointment_id = $appointment->id;
                            $detail->service_id = $service['service_id'];
                            $detail->price_service = floatval($service['price']);
                            $detail->discount = floatval($service['discount'] ?? 0.00);
                            $detail->save();
                        }
                    }
                return response()->json([
                    'result' => true,
                    'msg' => "Pago confirmado y registro creado correctamente.",
                    'error_code' => null,
                    'data' => null
                ], 201);
                
                return response()->json(['message' => 'Pago confirmado y registro creado correctamente.']);
            }

            return response()->json(['error' => 'El pago no ha sido completado.'], 400);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
