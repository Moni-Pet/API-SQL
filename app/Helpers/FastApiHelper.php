<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FastApiHelper
{
    public static function request(string $method, string $endpoint, array $payload = [])
    {
        try {
            $baseUrl = config('services.fastapi.url');
            $url = rtrim($baseUrl, '/') . '/' . ltrim($endpoint, '/');

            $response = Http::timeout(seconds: 10)->{$method}($url, $payload);

            $data = $response->json();

            return [
                'success' => $response->successful(),
                'status' => $response->status(),
                'msg' => $data['msg'] ?? 'Sin mensaje de FastAPI',
                'data' => $data['data'] ?? null,
                'error_code' => $data['error_code'] ?? null
            ];
        } catch (\Exception $e) {
            Log::error('Error FastAPI: ' . $e->getMessage());

            return [
                'success' => false,
                'status' => 500,
                'msg' => 'No se pudo conectar con FastAPI',
                'data' => null,
                'error_code' => 1500
            ];
        }
    }
}
