<?php

namespace App\Http\Controllers\api\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\orders\StoreOrderRequest;
use App\Http\Requests\orders\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Notifications\OrderCancelledNotification;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('user', 'details.product.productPhotos')->get();

        if ($orders->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron ordenes registradas.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las ordenes fueron encontradas",
            'error_code' => null,
            'data' => $orders,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $purchase_date = now();
        $pickup_date = $purchase_date->copy()->addDays(3)->setTime(10, 0); 
        $user_id = ($request->user_id != null ? $request->user_id : $request->user()->id);
        $order = Order::create([
            'user_id' => $user_id,
            'purchase_date' => $purchase_date,
            'pickup_date' => $pickup_date,
            'price' => $request->price,
            'status' => "Pendiente",
            'transferce_code' => $request->transferce_code
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Orden creada correctamente.',
            'error_code' => null,
            'data' => [
                'order_id' => $order->id
            ]
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $orders = Order::with('user', 'details.product.productPhotos')->find($id);

        if (!$orders) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontro la orden especificada.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Orden encontrada",
            'error_code' => null,
            'data' => $orders,
        ], 200);
    }

    /**
     * Ordenen por usuario
     */

    public function showUserOrden(?int $id = null){
        $userId = $id ?? auth()->id();

        $orders = Order::with('user', 'details.product.productPhotos')->where('user_id', $userId)->get();

        if ($orders->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron ordenes vinculadas con el usuario.",
                'data' => null
            ], 404);
        }
        
        return response()->json([
            'result' => true,
            'msg' => "Ordenes del usuario encontradas",
            'error_code' => null,
            'data' => $orders,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, int $id)
    {
        $orden = Order::with('details.product')->find($id);

        if (!$orden) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontro la orden especificada.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $nuevoStatus = $request->status;
        $statusAnterior = $orden->status;

        if ($nuevoStatus === 'Cancelada' && $statusAnterior !== 'Cancelada') {
            $detalles = $orden->details;
            
            foreach ($detalles as $detalle) {
                $producto = $detalle->product;
                $producto->stock += $detalle->quantity;
                $producto->save();
            }

            if (auth()->check() && in_array(auth()->user()->user_type_id, [1, 2])) {
                if ($orden->user) {
                    $orden->user->notify(new OrderCancelledNotification($orden));
                    event(new \App\Events\OrderCancelledEvent($orden));
                }
            }
        }

        $orden->update($request->only([
            'pickup_date',
            'price',
            'status',
            'transferce_code'
        ]));

        return response()->json([
            'result' => true,
            'msg' => 'Orden modificada correctamente.',
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $orden = Order::find($id);

        if (!$orden) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontro la orden especificada.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $orden->delete();

        return response()->json([
            'result' => true,
            'msg' => 'Orden eliminada correctamente.',
            'error_code' => null,
            'data' => null
        ], 200);
    }

    public function ordersToday()
    {
        $orders = Order::with('user', 'details.product.productPhotos')->whereDate('pickup_date', now())->get();
        if($orders->count() <= 0){
            return response()->json([
                'result' => false,
                'msg' => "No hay ordenes para el día de hoy"
            ], 404);
        }
        return response()->json([
                'result' => true,
                'msg' => "Ordenes para el día de hoy",
                'data' => $orders
        ]);
    }
}
