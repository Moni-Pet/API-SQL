<?php

namespace App\Http\Controllers\api\Pet;

use App\Http\Controllers\Controller;
use App\Http\Requests\pet\StoreBreedRequest;
use App\Http\Requests\pet\UpdateBreedRequest;
use App\Models\Breed;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breeds = Breed::with('typePet')->get();

        if ($breeds->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las razas fueron encontradas",
            'error_code' => null,
            'data' => $breeds,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBreedRequest $request)
    {
        $breed = Breed::create([
            'type_pet_id' => $request->type_pet_id,
            'breed' => $request->breed
        ]);

        return response()->json([
            'result' => true,
            'msg' => "Raza de mascota creada correctamente.",
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $breed = Breed::with(['typePet', 'pets'])->find($id);

        if(!$breed) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Raza encontrada.",
            'error_code' => null,
            'data' => $breed,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBreedRequest $request, int $id)
    {
        $breed = Breed::find($id);

        if(!$breed) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $breed->update($request->only(['type_pet_id', 'breed']));

        return response()->json([
            'result' => true,
            'msg' => "Raza modificada correctamente.",
            'error_code' => null,
            'data' => null,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $breed = Breed::find($id);

        if(!$breed) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $breed->delete();

        return response()->json([
            'result' => true,
            'msg' => "Raza eliminada correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }
}
