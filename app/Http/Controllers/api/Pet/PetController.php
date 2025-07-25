<?php

namespace App\Http\Controllers\api\Pet;

use App\Http\Controllers\Controller;
use App\Http\Requests\pet\StorePetRequest;
use App\Http\Requests\pet\UpdatePetRequest;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pet::with('Breed.TypePet', 'user', )->get();

        if ($pets->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las mascotas fueron encontradas",
            'error_code' => null,
            'data' => $pets,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetRequest $request)
    {
        $pet = Pet::create([
            'breed_id' => $request->breed_id,
            'name' => $request->name,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'spayed' => $request->spayed,
            'size' => $request->size,
            'weight' => $request->weight,
            'height' => $request->height,
            'description' => $request->description,
            'status' => $request->status,
            'user_id' => $request->user_id
        ]);

        return response()->json([
            'result' => true,
            'msg' => "Mascota creada correctamente.",
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $pet = Pet::with('Breed.TypePet', 'user', )->find($id);

        if ($pet->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Mascota encontrada",
            'error_code' => null,
            'data' => $pet,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetRequest $request, int $id)
    {
        $pet = Pet::find($id);

        if(!$pet) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $pet->update($request->only([
            'breed_id',
            'name',
            'birthday',
            'gender',
            'spayed',
            'size',
            'weight',
            'height',
            'description',
            'status',
            'user_id'
        ]));

        return response()->json([
            'result' => true,
            'msg' => "Mascota modificada correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $pet = Pet::find($id);

        if(!$pet) {
            return response()->json([
                'result' => false,
                'msg' => "La mascota no está registrada.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $pet->delete();

        return response()->json([
            'result' => true,
            'msg' => "Mascota eliminada correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }
}
