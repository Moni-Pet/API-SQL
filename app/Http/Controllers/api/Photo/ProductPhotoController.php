<?php

namespace App\Http\Controllers\api\Photo;

use App\Http\Controllers\Controller;
use App\Http\Requests\photos\StoreProductPhotoRequest;
use App\Http\Requests\photos\UpdateProductPhotoRequest;
use App\Models\Product;
use App\Models\ProductPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productPhotos = ProductPhoto::with('product')->get();

        if ($productPhotos->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron imágenes de productos registradas.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las imágenes de los productos fueron encontradas",
            'error_code' => null,
            'data' => $productPhotos,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductPhotoRequest $request)
    {
        $product = Product::findOrFail($request->product_id);
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

        $productPhoto = ProductPhoto::create([
            'product_id' => $request->product_id,
            'photo_link' => $url,
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Imagen creada correctamente.',
            'data' => $productPhoto,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $productPhoto = ProductPhoto::with('product')->find($id);

        if (!$productPhoto) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la imagen especificada.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Imagen encontrada",
            'error_code' => null,
            'data' => $productPhoto,
        ], 200);
    }

    public function showProductPhotos(int $id)
    {
        $productPhotos = ProductPhoto::with('product')->where('product_id', $id)->get();

        if ($productPhotos->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron imágenes para el producto especificado.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Imágenes del producto encontradas",
            'error_code' => null,
            'data' => $productPhotos,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductPhotoRequest $request, int $id)
    {
        $productPhoto = ProductPhoto::find($id);

        if (!$productPhoto) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la imagen especificada.",
                'data' => null
            ], 404);
        }

        $photoLink = $productPhoto->photo_link;

        if ($request->hasFile('photo')) {
            $product = Product::find($productPhoto->product_id);

            if (!$product) {
                return response()->json([
                    'result' => false,
                    'msg' => 'El producto no existe.',
                    'data' => null,
                ], 404);
            }

            $productName = preg_replace('/\s+/', '_', strtolower($product->name));

            if($photoLink) {
                $oldPath = ltrim(parse_url($photoLink, PHP_URL_PATH), '/');
                Storage::disk('digitalocean')->delete($oldPath);
            }

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $productName . '_' . uniqid() . '.' . $extension;
            $oldPath = $file->storeAs('products', $filename, 'digitalocean');

            if (!$oldPath) {
                return response()->json([
                    'result' => false,
                    'msg' => 'Error al subir la foto.',
                    'data' => null,
                ], 500);
            }

            $photoLink = Storage::url($oldPath);
        }

        $productPhoto->update($request->only('product_id') + ['photo_link' => $photoLink]);

        return response()->json([
            'result' => true,
            'msg' => 'Imagen actualizada correctamente.',
            'error_code' => null,
            'data' => $productPhoto
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $productPhoto = ProductPhoto::find($id);

        if (!$productPhoto) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la imagen especificada.",
                'data' => null
            ], 404);
        }

        if ($productPhoto->photo_link) {
            $path = ltrim(parse_url($productPhoto->photo_link, PHP_URL_PATH), '/');
            Storage::disk('digitalocean')->delete($path);
        }

        $productPhoto->delete();

        return response()->json([
            'result' => true,
            'msg' => 'Foto eliminada correctamente.',
            'data' => null,
        ], 200);
    }
}
