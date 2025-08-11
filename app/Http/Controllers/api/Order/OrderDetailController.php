<?php

namespace App\Http\Controllers\api\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\orders\StoreOrderDetailRequest;
use App\Http\Requests\orders\UpdateOrderDetailRequest;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderDetails = OrderDetail::with('order', 'product.productPhotos')->get();

        if ($orderDetails->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron detalles de orden registrados.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los detalles de orden fueron encontrados",
            'error_code' => null,
            'data' => $orderDetails,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderDetailRequest $request)
    {
        $validated = $request->validated();
        $order_id = $validated['order_id'];
        $items = $validated['items'];
        $createdItems = [];

        foreach ($items as $item) {
            $product = Product::find($item['product_id']);

            if (!$product) {
                return response()->json([
                    'result' => false,
                    'msg' => "Producto con ID {$item['product_id']} no encontrado.",
                    'error_code' => 1202,
                    'data' => null
                ], 404);
            }

            $quantity = $item['quantity'];

            $createdItems[] = OrderDetail::create([
                'order_id' => $order_id,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'price' => $product->price,   
                'discount' => $product->discount,
            ]);

            $product->stock = max(0, $product->stock - $quantity);
            $product->save();
        }

        return response()->json([
            'result' => true,
            'msg' => 'Detalle de orden creado correctamente.',
            'error_code' => null,
            'data' => $createdItems
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $orderDetail = OrderDetail::with('order', 'product.productPhotos')->find($id);

        if (!$orderDetail) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontro el detalle de orden especificado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Detalle de orden encontrado",
            'error_code' => null,
            'data' => $orderDetail,
        ], 200);
    }
    
    /**
     * Display the order details for a specific order.
     */
    public function showOrderDetail(int $id)
    {
        $orderDetails = OrderDetail::with('product.productPhotos')->where('order_id', $id)->get();

        if ($orderDetails->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron detalles de orden de la orden especificada.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Detalles de la orden encontrados",
            'error_code' => null,
            'data' => $orderDetails,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderDetailRequest $request, int $id)
    {
        $orderDetail = OrderDetail::find($id);

        if (!$orderDetail) {
            return response()->json([
                'result' => false,
                'msg' => "El detalle de orden no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $oldProduct = Product::find($orderDetail->product_id);
        $oldQuantity = $orderDetail->quantity;

        $newProduct = Product::find($request->product_id);
        if (!$newProduct) {
            return response()->json([
                'result' => false,
                'msg' => "Producto con ID {$request->product_id} no encontrado.",
                'error_code' => 1202,
                'data' => null
            ], 404);
        }

        if ($oldProduct->id === $newProduct->id) {
            $quantityDifference = $request->quantity - $oldQuantity;

            if ($quantityDifference > 0) {
                if ($newProduct->stock < $quantityDifference) {
                    return response()->json([
                        'result' => false,
                        'msg' => "No hay suficiente stock para aumentar la cantidad del producto {$newProduct->name}.",
                        'error_code' => 1203,
                        'data' => null
                    ], 400);
                }
                $newProduct->stock -= $quantityDifference;
            } else {
                $newProduct->stock -= $quantityDifference;
            }
            $newProduct->stock = max(0, $newProduct->stock);
            $newProduct->save();

        } else {
            $oldProduct->stock += $oldQuantity;
            $oldProduct->save();

            if ($newProduct->stock < $request->quantity) {
                return response()->json([
                    'result' => false,
                    'msg' => "No hay suficiente stock para el producto {$newProduct->name}.",
                    'error_code' => 1203,
                    'data' => null
                ], 400);
            }

            $newProduct->stock -= $request->quantity;
            $newProduct->stock = max(0, $newProduct->stock);
            $newProduct->save();
        }

        $orderDetail->update($request->only([
            'order_id',
            'product_id',
            'quantity',
            'price',
            'discount'
        ]));

        return response()->json([
            'result' => true,
            'msg' => "Detalles de orden modificados correctamente.",
            'error_code' => null,
            'data' => null,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $orderDetail = OrderDetail::find($id);

        if (!$orderDetail) {
            return response()->json([
                'result' => false,
                'msg' => "El detalle de orden no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $orderDetail->delete();

        return response()->json([
            'result' => true,
            'msg' => "Detalle de orden eliminado correctamente.",
            'error_code' => null,
            'data' => null
        ], 200);
    }
}
