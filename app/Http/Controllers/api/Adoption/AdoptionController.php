<?php

namespace App\Http\Controllers\api\Adoption;

use App\Http\Controllers\Controller;
use App\Http\Requests\adoption\StoreAdoptionRequest;
use App\Http\Requests\adoption\UpdateAdoptionRequest;
use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adoptions = Adoption::with('adopter.user', 'pet.PetPhothos')->get();

        if ($adoptions->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron adopciones registrados.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las adopciones fueron encontradas",
            'error_code' => null,
            'data' => $adoptions,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdoptionRequest $request)
    {
        $date = now();
        $delivery_date = $date->copy()->addDays(3)->setTime(13, 0); 

        $adoption = Adoption::create([
            'adopter_id' => $request->adopter_id,
            'pet_id' => $request->pet_id,
            'date' => $date,
            'adoption_status' => $request->adoption_status,
            'notes' => $request->notes,
            'delivery_date' => $delivery_date
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Adopción creada correctamente.',
            'error_code' => null,
            'data' => $adoption
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $adoption = Adoption::with('adopter.user', 'pet.PetPhothos')->find($id);

        if (!$adoption) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la adopcion especificada.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Adopción encontrada",
            'error_code' => null,
            'data' => $adoption,
        ], 200);
    }

    /**
     * Display the specified resource by adopter.
     */
    public function showAdoptionByAdopter(int $id)
    {
        $adoption = Adoption::with('adopter.user', 'pet.PetPhothos')->where('adopter_id', $id)->get();

        if ($adoption->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron las adopciones vinculadas con el usuario.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Adopciones encontradas para el adoptante",
            'error_code' => null,
            'data' => $adoption,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdoptionRequest $request, int $id)
    {
        $adoption = Adoption::find($id);

        if (!$adoption) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la adopcion especificada.",
                'data' => null
            ], 404);
        }

        $adoption->update($request->only([
            'adopter_id',
            'pet_id',
            'date',
            'adoption_status',
            'notes',
            'delivery_date'
        ]));

        return response()->json([
            'result' => true,
            'msg' => 'Adopción modificada correctamente.',
            'error_code' => null,
            'data' => $adoption
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $adoption = Adoption::find($id);

        if (!$adoption) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la adopcion especificada.",
                'data' => null
            ], 404);
        }

        $adoption->delete();

        return response()->json([
            'result' => true,
            'msg' => 'Adopción eliminada correctamente.',
            'error_code' => null,
            'data' => null
        ], 200);
    }
}
