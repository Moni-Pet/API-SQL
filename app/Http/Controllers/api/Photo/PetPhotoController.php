<?php

namespace App\Http\Controllers\api\Photo;

use App\Http\Controllers\Controller;
use App\Http\Requests\photos\StorePetPhotoRequest;
use App\Models\PetPhoto;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PetPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petPhotos = PetPhoto::with('Pets')->get();

        if ($petPhotos->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron imágenes registradas.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las fotos de mascotas fueron encontradas",
            'error_code' => null,
            'data' => $petPhotos,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetPhotoRequest $request)
    {
        return response()->json([
            'result' => true,
            'msg' => 'Foto subida correctamente.',
            'data' => null,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PetPhoto $petPhoto)
    {
        //
    }

    public function showPetPhotos(int $id) 
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PetPhoto $petPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PetPhoto $petPhoto)
    {
        //
    }
}
