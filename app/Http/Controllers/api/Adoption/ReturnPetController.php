<?php

namespace App\Http\Controllers\api\Adoption;

use App\Http\Controllers\Controller;
use App\Http\Requests\adoption\StoreReturnPetRequest;
use App\Http\Requests\adoption\UpdateReturnPetRequest;
use App\Models\ReturnPet;
use Illuminate\Http\Request;

class ReturnPetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $returnPets = ReturnPet::with('adoption.pet', 'adoption.adopter.user')->get();

        if ($returnPets->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron devoluciones de mascotas registradas.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las devoluciones de mascotas fueron encontradas",
            'error_code' => null,
            'data' => $returnPets,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReturnPetRequest $request)
    {
        
        $returnPet = ReturnPet::create([
            'adoption_id' => $request->adoption_id,
            'date' => now(),
            'comment' => $request->comment,
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Devolución de mascota creada correctamente.',
            'error_code' => null,
            'data' => $returnPet
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $returnPet = ReturnPet::with('adoption.pet', 'adoption.adopter.user')->find($id);

        if (!$returnPet) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontro la devolucion de mascota especificada.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "La devolución de mascota encontrada.",
            'error_code' => null,
            'data' => $returnPet,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReturnPetRequest $request, int $id)
    {
        $returnPet = ReturnPet::find($id);

        if (!$returnPet) {
            return response()->json([
                'result' => false,
                'msg' => "La devolucion de mascota no está registrada.",
                'data' => null
            ], 404);
        }

        $returnPet->update($request->only(['adoption_id', 'date', 'comment']));

        return response()->json([
            'result' => true,
            'msg' => 'Devolucion de mascota modificada correctamente.',
            'error_code' => null,
            'data' => $returnPet
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $returnPet = ReturnPet::find($id);

        if (!$returnPet) {
            return response()->json([
                'result' => false,
                'msg' => "La devolucion de mascota no está registrada.",
                'data' => null
            ], 404);
        }

        $returnPet->delete();

        return response()->json([
            'result' => true,
            'msg' => 'Devolucion de mascota eliminada correctamente.',
            'error_code' => null,
            'data' => null
        ], 200);
    }
}
