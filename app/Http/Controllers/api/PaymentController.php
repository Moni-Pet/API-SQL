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

        $amount = $request->input('amount');
        $metadata = $request->input('metadata');

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => intval(round($amount * 100)),
                'currency' => 'mxn',
                'payment_method_types' => ['card'],
                'metadata' => $metadata,
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
        $userId = Auth::id();

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
                        $totalCalculated += $prod['price'] * $prod['quantity'];
                    }
                    $totalCalculated = round($totalCalculated, 2);
                    $amountReceived = round($paymentIntent->amount_received / 100, 2);

                    if ($totalCalculated !== $amountReceived) {
                        return response()->json(['error' => 'El monto pagado no coincide con el monto calculado'], 400);
                    }

                    $order = new Order();
                    $order->user_id = $userId;
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

                } elseif ($type === 'appointment') {
                    $services = $request->input('services');

                    $totalCalculated = 0;
                    foreach ($services as $service) {
                        $priceAfterDiscount = $service['price'] - ($service['discount'] ?? 0);
                        $totalCalculated += $priceAfterDiscount;
                    }
                    $totalCalculated = round($totalCalculated, 2);
                    $amountReceived = round($paymentIntent->amount_received / 100, 2);

                    if ($totalCalculated !== $amountReceived) {
                        return response()->json(['error' => 'El monto pagado no coincide con el monto calculado'], 400);
                    }

                    $appointment = new Appointment();
                    $appointment->user_id = $userId;
                    $appointment->pet_id = $request->input('pet_id');
                    $appointment->descripcion = $request->input('descripcion');
                    $appointment->creation_date = $purchase_date;
                    $appointment->date = $request->input('date');
                    $appointment->total_price = $totalCalculated;
                    $appointment->status = 'Pendiente';
                    $appointment->transferce_code = $paymentIntentId;
                    $appointment->type_appointment = $request->input('type_appointment');
                    $appointment->save();

                    foreach ($services as $service) {
                        $detail = new AppointmentDetail();
                        $detail->appointment_id = $appointment->id;
                        $detail->service_id = $service['service_id'];
                        $detail->price_service = $service['price'];
                        $detail->discount = $service['discount'] ?? 0.00;
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
