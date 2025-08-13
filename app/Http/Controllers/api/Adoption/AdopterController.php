<?php

namespace App\Http\Controllers\api\Adoption;

use App\Http\Controllers\Controller;
use App\Http\Requests\adoption\StoreAdopterRequest;
use App\Http\Requests\adoption\UpdateAdopterRequest;
use App\Models\Adopter;
use Illuminate\Http\Request;

class AdopterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adopters = Adopter::with('city', 'state', 'user')->get();

        if ($adopters->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron adoptantes registrados.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los adoptantes fueron encontrados",
            'error_code' => null,
            'data' => $adopters,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdopterRequest $request)
    {
        $adopter = Adopter::create([
            'user_id' => $request->user_id,
            'phone' => $request->phone,
            'street' => $request->street,
            'neighborhood' => $request->neighborhood,
            'city_id' => $request->city_id,
            'state_id' => $request->state_id,
            'postal_code' => $request->postal_code,
            'reference' => $request->reference,
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Adoptante creado correctamente.',
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $adopter = Adopter::with('city', 'state', 'user', 'adoptions.pet.breed.typePet')->where('user_id',  $id)->first();

        if (!$adopter) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró el adoptante especificado.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Adoptante encontrado",
            'error_code' => null,
            'data' => $adopter,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdopterRequest $request, int $id)
    {
        $adopter = Adopter::find($id);

        if (!$adopter) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró el adoptante especificado.",
                'data' => null
            ], 404);
        }

        $adopter->update($request->only([
            'user_id',
            'phone',
            'street',
            'neighborhood',
            'city_id',
            'state_id',
            'postal_code',
            'reference'
        ]));

        return response()->json([
            'result' => true,
            'msg' => 'Adoptante modificado correctamente.',
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $adopter = Adopter::find($id);

        if (!$adopter) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró el adoptante especificado.",
                'data' => null
            ], 404);
        }

        $adopter->delete();

        return response()->json([
            'result' => true,
            'msg' => 'Adoptante eliminado correctamente.',
            'error_code' => null,
            'data' => null
        ], 200);
    }
}
