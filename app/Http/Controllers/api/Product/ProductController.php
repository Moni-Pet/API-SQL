<?php

namespace App\Http\Controllers\api\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\products\StoreProductRequest;
use App\Http\Requests\products\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'discount' => $request->filled('discount') ? $request->discount : 0.00
        ]);

        $productName = preg_replace('/\s+/', '_', strtolower($product->name));

        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();
        $filename = $productName . '_' . uniqid() . '.' . $extension;

        $path = $file->storeAs('products', $filename, 'digitalocean');

        if (!$path) {
            return response()->json([
                'result' => false,
                'msg' => 'Error al subir la foto.',
                'data' => null,
            ], 500);
        }

        $url = Storage::url($path);

        $product->productPhotos()->create([
            'product_id' => $product->id,
            'photo_link' => $url,
        ]);


        return response()->json([
            'result' => true,
            'msg' => 'Producto creado correctamente.',
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $product = Product::with(['productPhotos', 'categories' => function ($query) {
            $query->withPivot('id');
            $query->withPivot('deleted_at');
        }])->find($id);
        
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

    public function productList(Request $request) {
        $validated = $request->validate([
            'productIds' => 'required|array',
            'productIds.*' => 'integer|exists:products,id',
        ]);

        $products = Product::whereIn('id', $validated['productIds'])
            ->with('productPhotos', 'categories')
            ->get();

        return response()->json([
            'result' => true,
            'msg' => "Lista de productos",
            'error_code' => null,
            'data' => $products,
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
            'description',
            'price',
            'stock',
            'discount'
        ]));

        return response()->json([
            'result' => true,
            'msg' => "Producto modificado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 201);
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

    public function productStats()
    {
        $products = Product::withCount('detailsOrders')->orderByDesc('details_orders_count')       // ordena de mayor a menor
        ->with('detailsOrders')->take(4)->get();

        if($products->count() <= 0){
            return response()->json([
                'result' => false,
                'msg' => "No hay estadisticas de los productos"
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los productos más vendidos",
            'data' => $products
        ]);
    }
}
