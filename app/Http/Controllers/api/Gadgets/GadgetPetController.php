<?php

namespace App\Http\Controllers\api\Gadgets;

use App\Http\Controllers\Controller;
use App\Models\Gadget;
use App\Models\Pet;
use Illuminate\Http\Request;

class GadgetPetController extends Controller
{
    public function showGadgetsPet(int $pet_id)
    {
        $gadgets = Gadget::with('type')
            ->where('pet_id', $pet_id)
            ->get();

        if ($gadgets->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => 'No se encontraron gadgets asignados a esta mascota.',
                'error_code' => 1407,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => 'Gadgets asignados a la mascota encontrados correctamente.',
            'error_code' => null,
            'data' => $gadgets
        ], 200);
    }
    
    //Mascotas de un usuario con sus gadgets
    public function showGadgetsPets(Request $request)
    {
        $pets = Pet::with(['gadgets', 'breed.typePet', 'petPhotos', 'type'])->where('user_id', $request->user()->id)->get();

        if ($pets->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => 'No cuentas con mascotas.',
                'error_code' => 1407,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => 'Mascotas encontradas.',
            'error_code' => null,
            'data' => $pets
        ], 200);
    }

    public function assignPetGadget(Request $request, int $id_gadget)
    {
        $request->validate([
            'pet_id' => 'required|exists:pets,id'
        ], [
            'pet_id.required' => 'El campo pet_id es obligatorio.',
            'pet_id.exists' => 'La mascota seleccionada no existe.'
        ]);

        $gadget = Gadget::find($id_gadget);

        if (! $gadget) {
            return response()->json([
                'result' => false,
                'msg' => 'Gadget no encontrado.',
                'error_code' => 1406,
                'data' => null
            ], 404);
        }

        // Asignar la mascota al gadget
        $gadget->pet_id = $request->pet_id;
        $gadget->save();

        return response()->json([
            'result' => true,
            'msg' => 'Mascota asignada correctamente al gadget.',
            'error_code' => null,
            'data' => $gadget
        ], 200);
    }

    public function updatePetGadget(Request $request, int $id_gadget)
    {
        $request->validate([
            'pet_id' => 'required|exists:pets,id'
        ], [
            'pet_id.required' => 'El campo pet_id es obligatorio.',
            'pet_id.exists' => 'La mascota seleccionada no existe.'
        ]);

        $gadget = Gadget::find($id_gadget);

        if (! $gadget) {
            return response()->json([
                'result' => false,
                'msg' => 'Gadget no encontrado.',
                'error_code' => 1406,
                'data' => null
            ], 404);
        }

        $gadget->pet_id = $request->pet_id;
        $gadget->save();

        return response()->json([
            'result' => true,
            'msg' => 'Mascota reasignada correctamente al gadget.',
            'error_code' => null,
            'data' => $gadget
        ], 200);
    }

    public function deletePetGadget(int $id_gadget)
    {
        $gadget = Gadget::find($id_gadget);

        if (! $gadget) {
            return response()->json([
                'result' => false,
                'msg' => 'Gadget no encontrado.',
                'error_code' => 1406,
                'data' => null
            ], 404);
        }

        $gadget->pet_id = null;
        $gadget->save();

        return response()->json([
            'result' => true,
            'msg' => 'Mascota desvinculada del gadget correctamente.',
            'error_code' => null,
            'data' => $gadget
        ], 200);
    }
}
