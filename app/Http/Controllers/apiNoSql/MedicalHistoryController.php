<?php

namespace App\Http\Controllers\apiNoSql;

use App\Helpers\FastApiHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\NoSqlRequest\MedicalHistoryRequest;
use App\Models\Pet;
use Illuminate\Http\Request;

class MedicalHistoryController extends Controller
{
    public function store(MedicalHistoryRequest $request)
    {
        $report = [
            'petId' => $request->petId,
            'events' => [
                'date' => now(),
                'type' => $request->type,
                'description' => $request->description,
                'veterinario' => $request->veterinario
            ]
        ];

        $response = FastApiHelper::request('post', '/medical-history', $report);

        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }

    public function index(int $pet_id)
    {
        $pet = Pet::find($pet_id);
        if (! $pet){
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }
        $response = FastApiHelper::request('get', "/medical-history/{$pet_id}");
        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }

    public function show(int $pet_id, int $index)
    {
        $pet = Pet::find($pet_id);
        if (! $pet){
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }
        $response = FastApiHelper::request('get', "/medical-history/{$pet_id}/{$index}");
        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }

    public function destroy(int $pet_id, int $index)
    {
        $pet = Pet::find($pet_id);
        if (! $pet){
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }
        $response = FastApiHelper::request('delete', "/medical-history/{$pet_id}/{$index}");
        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }
}
