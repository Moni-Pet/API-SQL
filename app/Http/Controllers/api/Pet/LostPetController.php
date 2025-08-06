<?php

namespace App\Http\Controllers\api\Pet;

use App\Http\Controllers\Controller;
use App\Models\LostPet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'pet_id' => 'required|exists:pets,id',
            'lat' => 'required|string',
            'lon' => 'required|string',
            'description' => 'nullable|string',
            'lost_date' => 'required|date',
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'result' => false,
                'msg' => 'Datos inválidos',
                'data' => $validator->errors(),
            ], 422);
        }

        $lostPet = LostPet::create($validator->validated());

        return response()->json([
            'result' => true,
            'msg' => 'Reporte generado.',
            'data' => $lostPet,
        ], 201);
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
     * Display the specified resource.
     */
    public function foundPet(Request $request, string $id)
    {
        $lost = LostPet::find($id);
        if(!$lost){
            return response()->json([
                'result' => false,
                'msg' => "No existe el reporte de desaparición."
            ], 404);
        }
        $lost->user_find_id = $request->user()->id;
        $lost->save();
        return response()->json([
            'result' => true,
            'msg' => "Se ha encontrado a la mascota."
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lost = LostPet::find($id);
        if(!$lost){
            return response()->json([
                'result' => false,
                'msg' => "No hay reportes de desaparición"
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'pet_id' => 'required|exists:pets,id',
            'lat' => 'required|string',
            'lon' => 'required|string',
            'description' => 'nullable|string',
            'lost_date' => 'required|date',
            'status' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'result' => false,
                'msg' => 'Datos inválidos',
                'data' => $validator->errors(),
            ], 422);
        }

        $lost->update($validator->validated());


        
        return response()->json([
            'result' => true,
            'msg' => "Reporte actualizado.",
            'data' => $lost
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lost = LostPet::find($id);
        if(!$lost){
            return response()->json([
                'result' => false,
                'msg' => "No existe el reporte de desaparición."
            ], 404);
        }
        $lost->delete();
        return response()->json([
            'result' => true,
            'msg' => "Reporte eliminado."
        ]);
    }
}
