<?php

namespace App\Http\Controllers\apiNoSql;

use App\Helpers\FastApiHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\NoSqlRequest\ReportsRequest;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function store(ReportsRequest $request)
    {
        $report = [
            'userId' => auth()->id(),
            'reports' => [
                'date' => now(),
                'type' => $request->type,
                'description' => $request->description,
                'place' => $request->place
            ]
        ];

        $response = FastApiHelper::request('post', '/reports', $report);

        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }

    public function index(?int $user_id = null)
    {
        $userId = $user_id ?? auth()->id();
        $response = FastApiHelper::request('get', "/reports/{$userId}");
        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }

    public function show(int $index, ?int $user_id = null)
    {
        $userId = $user_id ?? auth()->id();
        $response = FastApiHelper::request('get', "/reports/{$userId}/{$index}");
        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }

    public function destroy(int $index, ?int $user_id = null)
    {
        $userId = $user_id ?? auth()->id();
        $response = FastApiHelper::request('delete', "/reports/{$userId}/{$index}");
        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }
    public function all()
    {
        $res = FastApiHelper::request('get', '/reports/obtener/all/reports');

        return response()->json([
            'result'     => $res['success'],
            'msg'        => $res['msg'],
            'error_code' => $res['error_code'],
            'data'       => $res['data'],
        ], $res['status']);
    }
}
