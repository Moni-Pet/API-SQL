<?php

namespace App\Http\Controllers\api\City;

use App\Http\Controllers\Controller;
use App\Http\Requests\cities\StoreCitiesRequest;
use App\Http\Requests\cities\UpdateCitiesRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::with('state')->get();

        if ($cities->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron ciudades registradas.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las ciudades fueron encontradas",
            'error_code' => null,
            'data' => $cities,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCitiesRequest $request)
    {
        $city = City::create([
            'city' => $request->city,
            'state_id' => $request->state_id
        ]);

        return response()->json([
            'result' => true,
            'msg' => "Ciudad creada correctamente.",
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $city = City::with('state')->find($id);

        if (!$city) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la ciudad especificada.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Ciudad encontrada",
            'error_code' => null,
            'data' => $city,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCitiesRequest $request, int $id)
    {
        $city = City::find($id);

        if (!$city) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la ciudad especificada.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }
        
        $city->update($request->only([
            'city',
            'state_id'
        ]));

        return response()->json([
            'result' => true,
            'msg' => "Ciudad modificada correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $city = City::find($id);

        if (!$city) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró la ciudad especificada.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }
        
        $city->delete();

        return response()->json([
            'result' => true,
            'msg' => "Ciudad eliminada correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }
}
