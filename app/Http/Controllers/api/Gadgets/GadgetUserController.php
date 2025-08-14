<?php

namespace App\Http\Controllers\api\Gadgets;

use App\Http\Controllers\Controller;
use App\Http\Requests\gadgets\StoreGadgetUserRequest;
use App\Http\Requests\gadgets\UpdateGadgetUserRequest;
use App\Models\Gadget;
use App\Models\GadgetUser;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class GadgetUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gadgetsUser = GadgetUser::with('gadget.type', 'user')->get();

        if ($gadgetsUser->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron gadgets registrados.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los registros de gadget_user fueron encontrados",
            'error_code' => null,
            'data' => $gadgetsUser,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGadgetUserRequest $request)
    {
        $user_id = $request->user_id ?? auth()->id();
        $gadget = Gadget::where('mac_address', $request->mac_address)->first();
        if (GadgetUser::where('gadget_id', $gadget->id)->exists()) {
            return response()->json([
                'result' => false,
                'msg' => 'El gadget ya fue asignado a un usuario',
                'error_code' => 1405,
                'data' => null
            ], 422);
        }
        GadgetUser::create([
            'gadget_id' => $gadget->id,
            'user_id' => $user_id
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Gadget asignado correctamente al usuario.',
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */

    public function show(int $id)
    {
        $gadgetUser = GadgetUser::with('gadget.type', 'user')->find($id);

        if (!$gadgetUser) {
            return response()->json([
                'result' => false,
                'msg' => "El gadget no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "El gadget fue encontrado",
            'error_code' => null,
            'data' => $gadgetUser,
        ], 200);
    }

    public function showGadgetsUser(?int $id = null)
    {
        $userId = $id ?? auth()->id();

        $gadgetUser = GadgetUser::with('gadget.type', 'user')->where('user_id', $userId)->get();

        if ($gadgetUser->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => "No se encontraron gadgets vinculados con el usuario.",
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Los gadgets del usuario fueron encontrados",
            'error_code' => null,
            'data' => $gadgetUser,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGadgetUserRequest $request, int $id)
    {
        $gadgetUser = GadgetUser::find($id);

        if (!$gadgetUser) {
            return response()->json([
                'result' => false,
                'msg' => "El gadget no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $gadgetUser->update($request->only([
            'gadget_id',
            'user_id'
        ]));

        return response()->json([
            'result' => true,
            'msg' => "Gadget modificado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $gadgetUser = GadgetUser::find($id);

        if (!$gadgetUser) {
            return response()->json([
                'result' => false,
                'msg' => "El gadget no está registrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $gadgetUser->delete();

        return response()->json([
            'result' => true,
            'msg' => "Gadget eliminado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }
    //Gadget del usuario con sus mascotas
    public function showGadgetsPets(Request $request)
    {
        $gadgets = GadgetUser::with(['gadget.pet.breed.typePet', 'gadget.pet.petPhotos'])->where('user_id', $request->user()->id)->get();

        if ($gadgets->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => 'No cuentas con gadgets.',
                'error_code' => 1407,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => 'Gadgets encontrados.',
            'error_code' => null,
            'data' => $pets
        ], 200);
    }
    
}
