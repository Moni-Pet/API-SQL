<?php

namespace App\Http\Controllers\apiNoSql;

use App\Helpers\FastApiHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\NoSqlRequest\CommentsRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(CommentsRequest $request)
    {
        $product = Product::find($request['product_id']);
        if (! $product) {
            return response()->json([
                'result' => false,
                'msg' => 'El recurso solicitado no fue encontrado.',
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $comment = [
            'productId' => (int) $request['product_id'],
            'comments' => [
                'title'=> $request['title'],
                'rate'=>$request['rate'],
                'userId' => auth()->id(),
                'comment' => $request['comment'],
                'date' => now()
            ]
        ];

        $response = FastApiHelper::request('post', '/comments', $comment);

        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }
    public function index(int $product_id)
    {
        $product = Product::find($product_id);
        if (! $product) {
            return response()->json([
                'result' => false,
                'msg' => 'El recurso solicitado no fue encontrado.',
                'error_code' => 1201,
                'data' => null
            ], 404);
        }
        $response = FastApiHelper::request('get', "/comments/{$product_id}");

        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }

    public function destroy(int $product_id, int $index)
    {
        $product = Product::find($product_id);
        if (! $product) {
            return response()->json([
                'result' => false,
                'msg' => 'El recurso solicitado no fue encontrado.',
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $response = FastApiHelper::request('delete', "/comments/{$product_id}/{$index}");

        return response()->json([
            'result' => $response['success'],
            'msg' => $response['msg'],
            'error_code' => $response['error_code'],
            'data' => $response['data'],
        ], $response['status']);
    }
}
