<?php

namespace App\Http\Controllers\api\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\products\StoreGadgetUserRequest;
use App\Http\Requests\products\UpdateGadgetUserRequest;
use App\Models\GadgetUser;
use Illuminate\Http\Request;

class GadgetUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gadgetsUser = GadgetUser::with('product', 'user')->get();

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
        $gadgetUser = GadgetUser::create([
            'product_id' => $request->product_id,
            'user_id' => $request->user_id
        ]);

        return response()->json([
            'result' => true,
            'msg' => 'Gadget asignado correctamente al usuario.',
            'error_code' => null,
            'data' => null
        ], 200);
    }

    /**
     * Display the specified resource.
     */

    public function show(int $id)
    {
        $gadgetUser = GadgetUser::with('product', 'user')->find($id);

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

        $gadgetUser = GadgetUser::with('product', 'user')->where('user_id', $userId)->get();

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
            'product_id',
            'user_id'
        ]));
        
        return response()->json([
            'result' => true,
            'msg' => "Gadget modificado correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
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
}
