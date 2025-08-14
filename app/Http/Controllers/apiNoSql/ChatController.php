<?php

namespace App\Http\Controllers\apiNoSql;

use App\Helpers\FastApiHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\NoSqlRequest\ChatRequest;
use App\Models\Adopter;
use App\Models\Adoption;
use App\Models\Pet;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Enviar mensaje (user/admin)
     * POST /api/chat/send
     * Body: user_id, mascota_id, sender (user|admin), text
     */
    public function send(ChatRequest $request)
    {
        $authUser = auth()->user();
        $petId = $request->pet_id;

        if ($authUser->user_type_id == 1) {
            $sender = 'admin';
            $adopter = Adopter::where('user_id', $request->user_id)->first();
            if (! $adopter) {
                return response()->json([
                    'result' => false,
                    'msg' => 'El usuario no es un adoptante.',
                    'error_code' => 403,
                    'data' => null
                ], 403);
            }
            $adopterId = $adopter->id;
        } else {
            $adopter = Adopter::where('user_id', $authUser->id)->first();
            if (! $adopter) {
                return response()->json([
                    'result' => false,
                    'msg' => 'No autorizado: no eres un adoptante registrado.',
                    'error_code' => 403,
                    'data' => null
                ], 403);
            }
            $adoption = Adoption::where('adopter_id', $adopter->id)
                ->where('pet_id', $petId)
                ->first();

            if (!$adoption) {
                return response()->json([
                    'result' => false,
                    'msg' => 'No autorizado: la mascota no está asociada a tu cuenta.',
                    'error_code' => 403,
                    'data' => $petId
                ], 403);
            }
            $adopterId = $adopter->id;
            $sender = 'adopter';
        }

        $payload = [
            'adopterId'    => $adopterId,
            'petId' => $request['pet_id'],
            'sender'    => $sender,
            'txt'      => $request['text'],
        ];

        $response = FastApiHelper::request('post', '/chat/mensaje', $payload);

        return response()->json([
            'result'     => $response['success'],
            'msg'        => $response['msg'],
            'error_code' => $response['error_code'],
            'data'       => $response['data'],
        ], $response['status']);
    }

    /**
     * ADMIN: listar conversaciones (usuarios/adoptantes) con último mensaje.
     * GET /api/chat/admin/conversations?skip=&limit=
     */
    public function adminConversations()
    {
        // FastAPI debe exponer /chat/admin/conversaciones
        $res = FastApiHelper::request('get', '/chat/admin/conversaciones');

        return response()->json([
            'result'     => $res['success'],
            'msg'        => $res['msg'],
            'error_code' => $res['error_code'],
            'data'       => $res['data'],
        ], $res['status']);
    }

    /**
     * Listar mascotas con conversación para un usuario
     * GET /api/chat/user/pets?user_id=123
     * (Sirve para adoptante o admin)
     */
    public function listUserPets(?int $adopter_id = null)
    {
        $authUser = auth()->user();

        if ($authUser && $authUser->user_type_id == 1 && $adopter_id) {
            $adopter = Adopter::find($adopter_id);
            if (!$adopter) {
                return response()->json([
                    'result' => false,
                    'msg' => 'No autorizado: no eres un adoptante registrado.',
                    'error_code' => 403,
                    'data' => null
                ], 403);
            }
            $adopterId = $adopter_id;
        } else {
            $adopter = Adopter::where('user_id', $authUser->id)->first();
            if (! $adopter) {
                return response()->json([
                    'result' => false,
                    'msg' => 'No autorizado: no eres un adoptante registrado.',
                    'error_code' => 403,
                    'data' => null
                ], 403);
            }
            $adopterId = $adopter->id;
        }
        $res = FastApiHelper::request('get', "/chat/adopter/pets/{$adopterId}");

        return response()->json([
            'result'     => $res['success'],
            'msg'        => $res['msg'],
            'error_code' => $res['error_code'],
            'data'       => $res['data'],
        ], $res['status']);
    }

    /**
     * Historial de mensajes de una mascota (por adoptante).
     * - ADMIN: puede ver cualquier adoptante (adopter_id por query)
     * - ADOPTANTE: se resuelve su adopter_id desde auth
     * GET /api/chat/history?pet_id=&adopter_id? (opcional para admin)
     */
    public function history(int $pet_id, ?int $adopter_id = null)
    {
        $authUser = auth()->user();
        $pet = Pet::find($pet_id);
        if (!$pet) {
            return response()->json([
                'result' => false,
                'msg' => 'Mascota no encontrada.',
                'error_code' => 404,
                'data' => null
            ], 404);
        }

        $petId = $pet_id;

        if ($authUser && $authUser->user_type_id == 1 && $adopter_id) {
            $adopter = Adopter::find($adopter_id);
            if (!$adopter) {
                return response()->json([
                    'result' => false,
                    'msg' => 'No autorizado: no eres un adoptante registrado.',
                    'error_code' => 403,
                    'data' => null
                ], 403);
            }
            $adopterId = $adopter_id;
        } else {
            $adopter = Adopter::where('user_id', $authUser->id)->first();
            if (! $adopter) {
                return response()->json([
                    'result' => false,
                    'msg' => 'No autorizado: no eres un adoptante registrado.',
                    'error_code' => 403,
                    'data' => null
                ], 403);
            }
            $adoption = Adoption::where('adopter_id', $adopter->id)
                ->where('pet_id', $petId)
                ->exists();
            if (! $adoption) {
                return response()->json([
                    'result' => false,
                    'msg' => 'No autorizado: la mascota no está asociada a tu cuenta.',
                    'error_code' => 403,
                    'data' => $petId
                ], 403);
            }
            $adopterId = $adopter->id;
        }

        $res = FastApiHelper::request('get', "/chat/historial/{$adopterId}/{$petId}");

        return response()->json([
            'result'     => $res['success'],
            'msg'        => $res['msg'],
            'error_code' => $res['error_code'],
            'data'       => $res['data'],
        ], $res['status']);
    }

    /**
     * Marcar mensajes como vistos.
     * - viewer = 'adopter' si es adoptante
     * - viewer = 'admin' si es admin
     * PATCH /api/chat/seen
     * Body: pet_id, (admin puede enviar adopter_id)
     */
    public function markSeen(int $pet_id, ?int $adopter_id = null)
    {
        $authUser = auth()->user();
        $pet = Pet::find($pet_id);
        if (!$pet) {
            return response()->json([
                'result' => false,
                'msg' => 'Mascota no encontrada.',
                'error_code' => 404,
                'data' => null
            ], 404);
        }
        $petId = (int) $pet->id;

        if ($authUser && (int)$authUser->user_type_id === 1) {
            // ADMIN: puede marcar para cualquier adoptante (obligatorio indicar adopter_id)
            if (!$adopter_id) {
                return response()->json([
                    'result' => false,
                    'msg' => 'Falta el adopter_id.',
                    'error_code' => 422,
                    'data' => null
                ], 422);
            }
            $adopter = Adopter::find($adopter_id);
            if (! $adopter) {
                return response()->json([
                    'result' => false,
                    'msg' => 'Adoptante no encontrado.',
                    'error_code' => 404,
                    'data' => null
                ], 404);
            }
            $viewer    = 'admin';
            $adopterId = $adopter->id;
        } else {
            $adopter = Adopter::where('user_id', $authUser->id)->first();
            if (! $adopter) {
                return response()->json([
                    'result' => false,
                    'msg' => 'No autorizado: no eres un adoptante registrado.',
                    'error_code' => 403,
                    'data' => null
                ], 403);
            }

            $adoption = Adoption::where('adopter_id', $adopter->id)
                ->where('pet_id', $petId)
                ->exists();

            if (! $adoption) {
                return response()->json([
                    'result' => false,
                    'msg' => 'No autorizado: la mascota no está asociada a tu cuenta.',
                    'error_code' => 403,
                    'data' => $petId
                ], 403);
            }

            $viewer    = 'adopter';
            $adopterId = (int) $adopter->id;
        }

        // 3) Llamar a FastAPI
        // PATCH /chat/visto  body: { adopterId, petId, viewer }
        $payload = [
            'adopterId' => $adopterId,
            'petId'     => $petId,
            'viewer'    => $viewer,
        ];

        $res = FastApiHelper::request('patch', '/chat/visto', $payload);

        return response()->json([
            'result'     => $res['success'],
            'msg'        => $res['msg'],
            'error_code' => $res['error_code'],
            'data'       => $res['data'],
        ], $res['status']);
    }
}
