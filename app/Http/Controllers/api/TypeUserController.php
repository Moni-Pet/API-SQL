<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\TypesUser;
use Illuminate\Http\Request;

class TypeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typesUsers = TypesUser::all();
        
        if ($typesUsers->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron tipos de usuarios registrados.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los tipos de usuarios fueron encontrados",
            'error_code' => null,
            'data' => $typesUsers,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $typesUser = TypesUser::find($id);

        if (!$typesUser) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontró el tipo de usuario especificado.",
                'error_code' => 404,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Tipo de usuario encontrado.",
            'error_code' => null,
            'data' => $typesUser,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypesUser $typesUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypesUser $typesUser)
    {
        //
    }
}
