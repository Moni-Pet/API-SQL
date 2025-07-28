<?php

namespace App\Http\Controllers\api\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\products\StoreTypeCategoryRequest;
use App\Http\Requests\products\UpdateTypeCategoryRequest;
use App\Models\CategoryType;
use Illuminate\Http\Request;

class CategoryTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryTypes = CategoryType::all();

        if ($categoryTypes->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron tipos de categorías de productos registrados.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los tipos de categorías de productos fueron encontrados",
            'error_code' => null,
            'data' => $categoryTypes,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeCategoryRequest $request)
    {
        $categoryType = CategoryType::create([
            'type_category' => $request->type_category
        ]);

        return response()->json([
            'result' => true,
            'msg' => "Tipo de categoría de productos creado correctamente.",
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $categoryType = CategoryType::find($id);

        if (!$categoryType) {
            return response()->json([
                'result' => false,
                'msg' => "El tipo de categoría de productos no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Tipo de categoría de productos encontrado",
            'error_code' => null,
            'data' => $categoryType,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeCategoryRequest $request, int $id)
    {
        $categoryType = CategoryType::find($id);

        if (!$categoryType) {
            return response()->json([
                'result' => false,
                'msg' => "El tipo de categoría de productos no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $categoryType->update($request->only(['type_category']));

        return response()->json([
            'result' => true,
            'msg' => "Tipo de categoría de productos modificado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $categoryType = CategoryType::find($id);

        if (!$categoryType) {
            return response()->json([
                'result' => false,
                'msg' => "El tipo de categoría de productos no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $categoryType->delete();

        return response()->json([
            'result' => true,
            'msg' => "Tipo de categoría de productos eliminado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }
}
