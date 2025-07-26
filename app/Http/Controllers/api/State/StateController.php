<?php

namespace App\Http\Controllers\api\State;

use App\Http\Controllers\Controller;
use App\Http\Requests\state\StoreStateRequest;
use App\Http\Requests\state\UpdateStateRequest;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::all();

        if ($states->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron estados registrados.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los estados fueron encontrados",
            'error_code' => null,
            'data' => $states,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStateRequest $request)
    {
        $state = State::create([
            'state' => $request->state
        ]);

        return response()->json([
            'result' => true,
            'msg' => "Estado creado correctamente.",
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $state = State::find($id);

        if (!$state) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró estado especificado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Estado encontrado",
            'error_code' => null,
            'data' => $state,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStateRequest $request, int $id)
    {
        $state = State::find($id);

        if (!$state) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró estado especificado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $state->update($request->only(['state'])); 

        return response()->json([
            'result' => true,
            'msg' => "Estado modificado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $state = State::find($id);

        if (!$state) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró estado especificado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $state->delete();

        return response()->json([
            'result' => true,
            'msg' => "Estado eliminado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }
}
