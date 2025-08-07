<?php

namespace App\Http\Controllers\api\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\products\StoreCategoryRequest;
use App\Http\Requests\products\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::with('typeCategory')->get();

        if ($category->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron categorías registradas.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las categorías fueron encontradas",
            'error_code' => null,
            'data' => $category,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create([
            'category' => $request->category,
            'type_category_id' => $request->type_category_id
        ]);

        return response()->json([
            'result' => true,
            'msg' => "Categoría creada correctamente.",
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $category = Category::with('typeCategory')->find($id);

        if (!$category) {
            return response()->json([
                'result' => false,
                'msg' => "La categoría no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Categoría encontrada.",
            'error_code' => null,
            'data' => $category,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, int $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'result' => false,
                'msg' => "La categoría no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $category->update($request->only(['category', 'type_category_id']));

        return response()->json([
            'result' => true,
            'msg' => "La categoría modificada correctamente.",
            'error_code' => null,
            'data' => null,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json([
                'result' => false,
                'msg' => "La categoría no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $category->delete();

        return response()->json([
            'result' => true,
            'msg' => "Categoría eliminada correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }
}
