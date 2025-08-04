<?php

namespace App\Http\Controllers\api\Worker;

use App\Http\Controllers\Controller;
use App\Models\TypesUser;
use App\Models\User;
use Database\Seeders\UsersSeeder;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workers = User::where('user_type_id', 2)->get();
        if($workers->count() <= 0){
            return response()->json([
                'result' => false,
                'msg' => "No hay trabajadores registrados."
            ]);
        }
        return response()->json([
                'result' => true,
                'msg' => "Trabajadores encontrados.",
                'data' => $workers
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
