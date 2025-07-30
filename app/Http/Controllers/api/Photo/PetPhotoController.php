<?php

namespace App\Http\Controllers\api\Photo;

use App\Http\Controllers\Controller;
use App\Http\Requests\photos\StorePetPhotoRequest;
use App\Http\Requests\photos\UpdatePetPhotoRequest;
use App\Models\Pet;
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
        $pet = Pet::findOrFail($request->pet_id);
        $petName = preg_replace('/\s+/', '_', strtolower($pet->name));

        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();
        $filename = $petName . '_' . uniqid() . '.' . $extension;

        $path = $file->storeAs('pets', $filename, 'digitalocean');

        if (!$path) {
            return response()->json([
                'result' => false,
                'msg' => 'Error al subir la foto.',
                'data' => null,
            ], 500);
        }

        $url = Storage::url($path);

        $petPhoto = PetPhoto::create([
            'pet_id' => $request->pet_id,
            'photo_link' => $url,
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Foto subida correctamente.',
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $petPhoto = PetPhoto::with('Pets')->find($id);

        if (!$petPhoto) {
            return response()->json([
                'result' => false,
                'msg' => 'Foto no encontrada.',
                'data' => null,
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => 'Foto encontrada.',
            'data' => $petPhoto,
        ]);
    }

    public function showPetPhotos(int $id) 
    {
        $petPhotos = PetPhoto::with('Pets')->where('pet_id', $id)->get();

        if ($petPhotos->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => 'No se encontraron fotos para esta mascota.',
                'data' => null,
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => 'Fotos de mascota encontradas.',
            'data' => $petPhotos,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetPhotoRequest $request, int $id)
    {
        $petPhoto = PetPhoto::find($id);

        if (!$petPhoto) {
            return response()->json([
                'result' => false,
                'msg' => 'Foto no encontrada.',
                'data' => null,
            ], 404);
        }

        $photoLink = $petPhoto->photo_link;

        if ($request->hasFile('photo')) {
            $pet = Pet::find($petPhoto->pet_id);

            if (!$pet) {
                return response()->json([
                    'result' => false,
                    'msg' => 'La mascota asociada a esta foto no existe.',
                    'data' => null,
                ], 404);
            }

            $petName = preg_replace('/\s+/', '_', strtolower($pet->name));

            if ($photoLink) {
                $oldPath = ltrim(parse_url($photoLink, PHP_URL_PATH), '/');
                Storage::disk('digitalocean')->delete($oldPath);
            }

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $petName . '_' . uniqid() . '.' . $extension;
            $path = $file->storeAs('pets', $filename, 'digitalocean');

            if (!$path) {
                return response()->json([
                    'result' => false,
                    'msg' => 'Error al subir la nueva foto.',
                    'data' => null,
                ], 500);
            }

            $photoLink = Storage::url($path);
        }

        $petPhoto->update($request->only('pet_id') + ['photo_link' => $photoLink]);

        return response()->json([
            'result' => true,
            'msg' => 'Foto actualizada correctamente.',
            'error_code' => null,
            'data' => null
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $petPhoto = PetPhoto::find($id);

        if (!$petPhoto) {
            return response()->json([
                'result' => false,
                'msg' => 'Foto no encontrada.',
                'data' => null,
            ], 404);
        }

        if ($petPhoto->photo_link) {
            $path = ltrim(parse_url($petPhoto->photo_link, PHP_URL_PATH), '/');
            Storage::disk('digitalocean')->delete($path);
        }

        $petPhoto->delete();

        return response()->json([
            'result' => true,
            'msg' => 'Foto eliminada correctamente.',
            'data' => null,
        ], 200);
    }
}
