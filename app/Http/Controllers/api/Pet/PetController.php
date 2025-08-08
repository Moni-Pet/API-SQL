<?php

namespace App\Http\Controllers\api\Pet;

use App\Http\Controllers\Controller;
use App\Http\Requests\pet\StorePetRequest;
use App\Http\Requests\pet\UpdatePetRequest;
use App\Models\Pet;
use App\Models\PetPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
{
    protected $fastApiUrl;

    public function __construct()
    {
        $this->fastApiUrl = config('services.fastapi.url');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pet::with('breed.typePet', 'user', 'petPhotos')->get();

        if ($pets->count() === 0) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Las mascotas fueron encontradas",
            'error_code' => null,
            'data' => $pets,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetRequest $request)
    {
        //Http::delete("{$this->fastApiUrl}/rfid");
        //$uid = $this->esperarUidDesdeFastAPI();

        /*if (!$uid) {
            return response()->json([
                'result' => false,
                'msg' => 'No se pudo leer el UID RFID en el tiempo esperado.',
                'error_code' => 1503,
                'data' => null
            ], 408); // 408 Request Timeout
        }
        if (Pet::where('uid', $uid)->exists()) {
            return response()->json([
                'result' => false,
                'msg' => 'Este UID ya está registrado en otra mascota.',
                'error_code' => 1506,
                'errors' => [
                    'uid' => ['El UID leído ya está en uso. Escanea otro chip.']
                ],
                'data' => null
            ], 422);
        }*/

        $pet = Pet::create([
            'breed_id' => $request->breed_id,
            'name' => $request->name,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'weight' => $request->weight,
            'height' => $request->height,
            'description' => $request->description,
            'status' => "Personal",
            'spayed' => $request->spayed,
            'user_id' => $request->user()->id,
            'uid' => null
        ]);

        $petName = preg_replace('/\s+/', '_', strtolower($pet->name));

        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();
        $filename = $petName . '_' . uniqid() . '.' . $extension;

        $path = $file->storeAs('pets', $filename, 'digitalocean');

        if (!$path) {
            return response()->json([
                'result' => false,
                'msg' => 'Error al subir la foto.',
                'data' => null,
            ], 500);
        }

        $url = Storage::url($path);

        $petPhoto = PetPhoto::create([
            'pet_id' => $pet->id,
            'photo_link' => $url,
        ]);

        return response()->json([
            'result' => true,
            'msg' => "Mascota creada correctamente.",
            'error_code' => null,
            'data' => null
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $pet = Pet::with('breed.typePet', 'user', 'petPhotos')->find($id);

        if (!$pet) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Mascota encontrada",
            'error_code' => null,
            'data' => $pet,
        ], 200);
    }

    public function showUserPets(?int $id = null)
    {
        $userId = $id ?? auth()->id();

        $pets = Pet::with('breed.typePet', 'user', 'petPhotos')->where('user_id', $userId)->get();

        if ($pets->isEmpty()) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => "Mascotas del usuario encontradas",
            'error_code' => null,
            'data' => $pets,
        ], 200);
    }

    public function petList(Request $request) {
        $validated = $request->validate([
            'petIds' => 'required|array',
            'pretIds.*' => 'integer|exists:pets,id',
        ]);

        $pets = Pet::whereIn('id', $validated['petIds'])
            ->with('breed.typePet', 'user', 'petPhotos')
            ->get();
        
        return response()->json([
            'result' => true,
            'msg' => "Listado de mascotas",
            'error_code' => null,
            'data' => $pets,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetRequest $request, int $id)
    {
        $pet = Pet::find($id);

        if (!$pet) {
            return response()->json([
                'result' => false,
                'msg' => "El recurso solicitado no fue encontrado.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $pet->update($request->only([
            'breed_id',
            'name',
            'birthday',
            'gender',
            'spayed',
            'size',
            'weight',
            'height',
            'description',
            'status',
            'user_id'
        ]));

        return response()->json([
            'result' => true,
            'msg' => "Mascota modificada correctamente.",
            'error_code' => null,
            'data' => null,
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $pet = Pet::find($id);

        if (!$pet) {
            return response()->json([
                'result' => false,
                'msg' => "La mascota no está registrada.",
                'error_code' => 1201,
                'data' => null
            ], 404);
        }

        $pet->delete();

        return response()->json([
            'result' => true,
            'msg' => "Mascota eliminada correctamente.",
            'error_code' => null,
            'data' => null,
        ], 200);
    }

    public function consultarPorRFID()
    {
        // Eliminar primero cualquier UID viejo (opcional, si quieres empezar limpio)
        Http::delete('http://192.168.100.8:8000/api/v1/rfid/');

        // Esperar a que haya un UID válido
        $uid = $this->esperarUidDesdeFastAPI();

        if (!$uid) {
            return response()->json([
                'result' => false,
                'msg' => 'No se pudo leer ningún UID RFID en el tiempo esperado.',
                'error_code' => 1504,
                'data' => null
            ], 408);
        }

        // Buscar mascota
        $pet = Pet::with('breed.typePet', 'user', 'petPhotos')->where('uid', $uid)->first();

        // Borrar el UID una vez leído (para evitar repeticiones)
        Http::delete('http://192.168.100.8:8000/api/v1/rfid/');

        if (!$pet) {
            return response()->json([
                'result' => false,
                'msg' => 'No se encontró ninguna mascota con el UID leído.',
                'error_code' => 1201,
                'errors' => [
                    'uid' => ['El UID no corresponde a ninguna mascota registrada.']
                ],
                'data' => null
            ], 404);
        }

        return response()->json([
            'result' => true,
            'msg' => 'Mascota encontrada.',
            'error_code' => null,
            'data' => $pet
        ], 200);
    }


    private function esperarUidDesdeFastAPI(int $segundos = 10)
    {
        $start = now();
        do {
            $response = Http::timeout(2)->get("{$this->fastApiUrl}/rfid/");

            if ($response->ok() && !empty($response['uid'])) {
                return $response['uid'];
            }
            sleep(1); // Espera 1 segundo antes de volver a preguntar
        } while (now()->diffInSeconds($start) < $segundos);
        return null;
    }
}
