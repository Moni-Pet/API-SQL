<?php

namespace App\Http\Controllers\api\Adoption;

use App\Http\Controllers\Controller;
use App\Http\Requests\adoption\StoreAdoptionFollowupRequest;
use App\Http\Requests\adoption\UpdateAdoptionFollowupRequest;
use App\Models\AdoptionFollowup;
use Illuminate\Http\Request;

class AdoptionFollowupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adoptionFollowups = AdoptionFollowup::with('adoption.pet', 'adoption.adopter.user')->get();

        if ($adoptionFollowups->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron seguimientos de adopciones registrados.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los seguimientos de adopción fueron encontrados",
            'error_code' => null,
            'data' => $adoptionFollowups,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdoptionFollowupRequest $request)
    {
        $adoptionFollowup = AdoptionFollowup::create([
            'adoption_id' => $request->adoption_id,
            'follow_up_date' => $request->follow_up_date,
            'animal_condition' => $request->animal_condition,
            'comment' => $request->comment,
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Seguimiento de adopción creado correctamente.',
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $adoptionFollowup = AdoptionFollowup::with('adoption.pet', 'adoption.adopter.user')->find($id);

        if (!$adoptionFollowup) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró el seguimiento d adopcion especificado.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Seguimiento de adopción encontrado",
            'error_code' => null,
            'data' => $adoptionFollowup,
        ], 200);
    }

    public function showFollowupsByAdopter(int $id)
    {
        $adoptionFollowups = AdoptionFollowup::with('adoption.pet', 'adoption.adopter.user')
            ->whereHas('adoption', function ($query) use ($id) {$query->where('adopter_id', $id);})
            ->get();

        if ($adoptionFollowups->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron seguimientos de adopción para la adopción especificada.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los seguimientos de adopción fueron encontrados",
            'error_code' => null,
            'data' => $adoptionFollowups,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdoptionFollowupRequest $request, int $id)
    {
        $adoptionFollowup = AdoptionFollowup::find($id);

        if (!$adoptionFollowup) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró el seguimiento de adopción especificado.",
                'data' => null
            ], 404);
        }

        $adoptionFollowup->update($request->only([
            'adoption_id',
            'follow_up_date',
            'animal_condition',
            'comment'
        ]));

        return response()->json([
            'result' => true,
            'msg' => 'Seguimiento de adopción modificado correctamente.',
            'error_code' => null,
            'data' => $adoptionFollowup
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $adoptionFollowup = AdoptionFollowup::find($id);

        if (!$adoptionFollowup) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró el seguimiento d adopcion especificado.",
                'data' => null
            ], 404);
        }

        $adoptionFollowup->delete();

        return response()->json([
            'result' => true,
            'msg' => 'Seguimiento de adopción eliminado correctamente.',
            'error_code' => null,
            'data' => null
        ], 200);
    }
}
