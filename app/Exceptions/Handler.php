<?php

namespace App\Exceptions;

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
     * A list of the exception types that are not reported.+
     * |
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
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        // Manejando errores personalizados como en el Handler de PHP puro

        // Error deprecado del usuario
        if ($exception instanceof \ErrorException && $exception->getSeverity() === E_USER_DEPRECATED) {
            return response()->json([
                'message' => 'Se ha detectado una funcionalidad obsoleta.',
            ], 400);
        }

        // Advertencia de usuario
        if ($exception instanceof \ErrorException && $exception->getSeverity() === E_USER_WARNING) {
            return response()->json([
                'message' => 'Advertencia del usuario: se ha detectado un problema.',
            ], 400);
        }

        // Capturar errores de tipo "notice"
        if ($exception instanceof \ErrorException && $exception->getSeverity() === E_USER_NOTICE) {
            return response()->json([
                'message' => 'Aviso del sistema: acción notificada.',
            ], 200);
        }

        return parent::render($request, $exception); // Dejar que Laravel maneje otras excepciones
    }
}
