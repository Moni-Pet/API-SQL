<?php

namespace App\Http\Controllers\api\Pet;

use App\Http\Controllers\Controller;
use App\Http\Requests\pet\StorePetTypeRequest;
use App\Http\Requests\pet\UpdatePetTypeRequest;
use App\Models\TypePet;
use Illuminate\Http\Request;

class PetTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typesPet = TypePet::with(['breed.pets.petPhotos'])->get();

        if ($typesPet->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los tipos de mascotas fueron encontrados.",
            'error_code' => null,
            'data' => $typesPet,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetTypeRequest $request)
    {
        $typePet = TypePet::create([
            'type_pet' => $request->type_pet,
            'icono' => $request->icono
        ]);

        return response()->json([
                'result' => true,
                'msg' => "Tipo de mascota creada correctamente",
                'error_code' => null,
                'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $typePet = TypePet::where('id', $id)->with(['breed'])->first();
        
        if(!$typePet) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Tipo de mascota encontrado.",
            'error_code' => null,
            'data' => $typePet,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetTypeRequest $request, int $id)
    {
        $typePet = TypePet::find($id);
        
        if(!$typePet) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $typePet->update($request->only(['type_pet', 'icono']));

        return response()->json([
            'result' => true,
            'msg' => "Tipo de mascota modificada correctamente.",
            'error_code' => null,
            'data' => null,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $typePet = TypePet::find($id);

        if(!$typePet) {
            return response()->json([
                'result' => false,
                'msg' => "El tipo de mascota no está registrado.",
                'data' => null
            ], 404);
        }

        $typePet->delete();

        return response()->json([
            'result' => true,
            'msg' => "Tipo de mascota eliminada correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }
}
