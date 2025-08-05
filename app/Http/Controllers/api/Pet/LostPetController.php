<?php

namespace App\Http\Controllers\api\Pet;

use App\Http\Controllers\Controller;
use App\Models\LostPet;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class LostPetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lost = LostPet::with(['pet', 'user'])->where('status',  true)->get();
        if($lost->isEmpty()){
            return response()->json([
                'result' => false,
                'msg' => "No hay reportes de desaparición"
            ], 404);
        }
        return response()->json([
            'result' => true,
            'msg' => "Reportes encontrados.",
            'data' => $lost
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $lost = LostPet::with(['pet', 'user', 'userFind'])->where('status',  true)->where('user_id', $request->user()->id)->get();
        if($lost->isEmpty()){
            return response()->json([
                'result' => false,
                'msg' => "No hay reportes de desaparición"
            ], 404);
        }
        return response()->json([
            'result' => true,
            'msg' => "Reportes encontrados.",
            'data' => $lost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
