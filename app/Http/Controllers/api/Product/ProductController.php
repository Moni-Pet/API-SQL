<?php

namespace App\Http\Controllers\api\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\products\StoreProductRequest;
use App\Http\Requests\products\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('productPhotos', 'categories')->get();

        if ($products->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron productos registrados.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los productos fueron encontrados",
            'error_code' => null,
            'data' => $products,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'exists' => $request->exists,
            'discount' => $request->filled('discount') ? $request->discount : 0.00
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Producto creado correctamente.',
            'error_code' => null,
            'data' => null
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $product = Product::with('productPhotos', 'categories')->find($id);

        if (!$product) {
            return response()->json([
                'result' => false,
                'msg' => "El producto no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Producto encontrado",
            'error_code' => null,
            'data' => $product,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, int $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'result' => false,
                'msg' => "El producto no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $product->update($request->only([
            'name',
            'price',
            'exists',
            'discount'
        ]));

        return response()->json([
            'result' => true,
            'msg' => "Producto modificado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'result' => false,
                'msg' => "El producto no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $product->delete();

        return response()->json([
            'result' => true,
            'msg' => "Producto eliminado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }
}
