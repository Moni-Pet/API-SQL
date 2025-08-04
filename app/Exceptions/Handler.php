<?php

namespace App\Exceptions;

use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /*public function render($request, Throwable $e)
    {
        if ($e instanceof QueryException) {
            $errorCode = $exeption->errorInfo[1] ?? null;

            switch ($errorCode) {
                case 1062: // Clave unica duplicda
                    $msg = 'Ya existe un registro con estos datos.';
                    $error_code = 1301;
                    break;
                case 1451: // Restricción de clave foranea: no se puede borrar
                    $msg = 'No se puede eliminar este registro por que esta relacionado con otros datos.';
                    $error_code = 1302;
                    break;
                case 1452: // Restriccion de clave foranea: no se puede insertar
                    $msg = 'Uno de los datos relacionados no existe.';
                    $error_code = 1303;
                    break;
                default:
                    $msg = 'Error en la base de datos.';
                    $error_code = 1304;
            }
            return response()->json([
                'result' => false,
                'msg' => $msg,
                'error_code' => $error_code,
                'data' => null
            ], 400);
        }

        if (app()->environment('production')) {
            return response()->json([
                'result' => false,
                'msg' => 'Ocurrió un error interno al procesar la solicitud.',
                'error_code' => 9001,
                'data' => null
            ], 500);
        }

        return parent::render($request, $e);
    }*/
}
