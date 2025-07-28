<?php

namespace App\Http\Controllers\api\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\products\StoreCategoryProductRequest;
use App\Http\Requests\products\UpdateCategoryProductRequest;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryProducts = CategoryProduct::with('product', 'product.productPhotos', 'category')->get();

        if ($categoryProducts->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron productos registrados.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las relaciones producto-categoría fueron encontradas",
            'error_code' => null,
            'data' => $categoryProducts,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryProductRequest $request)
    {
        $categoryProduct = Product::findOrFail($request->product_id);
        $categoryProduct->categories()->syncWithoutDetaching($request->category_id);

        return response()->json([
            'result' => true,
            'msg' => 'Categorías asociadas correctamente al producto.',
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $categoryProduct = CategoryProduct::with('product', 'product.productPhotos', 'category')->find($id);

        if (!$categoryProduct) {
            return response()->json([
                'result' => false,
                'msg' => "La relación producto-categoría no está registrada.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Relación producto-categoría encontrada",
            'error_code' => null,
            'data' => $categoryProduct,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryProductRequest $request, int $id)
    {
        $categoryProduct = CategoryProduct::find($id);

        if (!$categoryProduct) {
            return response()->json([
                'result' => false,
                'msg' => "La relación producto-categoría no está registrada.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $categoryProduct->update($request->only([
            'category_id',
            'product_id'
        ]));

        return response()->json([
            'result' => true,
            'msg' => 'La relación producto-categoría modificada correctamente',
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $categoryProduct = CategoryProduct::find($id);

        if (!$categoryProduct) {
            return response()->json([
                'result' => false,
                'msg' => "La relación producto-categoría no está registrada.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $categoryProduct->delete();

        return response()->json([
            'result' => true,
            'msg' => 'La relación producto-categoría eliminada correctamente',
            'error_code' => null,
            'data' => null
        ], 200);
    }
}
