<?php

namespace App\Http\Controllers\api\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\orders\StoreOrderRequest;
use App\Http\Requests\orders\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

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
        
        $order = Order::create([
            'user_id' => $request->user_id,
            'purchase_date' => $purchase_date,
            'pickup_date' => $pickup_date,
            'price' => $request->price,
            'status' => $request->status,
            'transferce_code' => $request->transferce_code
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Orden creada correctamente.',
            'error_code' => null,
            'data' => null
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

        if ($nuevoStatus === 'cancelado' && $statusAnterior !== 'cancelado') {
            $detalles = $orden->details;
            
            foreach ($detalles as $detalle) {
                $producto = $detalle->product;
                $producto->stock += $detalle->quantity;
                $producto->save();
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
}
