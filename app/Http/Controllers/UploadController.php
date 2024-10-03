<?php

namespace App\Http\Controllers;


use App\Exceptions\Custom\UploadException;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function subirArchivo(Request $request)
    {
        if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo');

            // Simulamos un error para demostrar el uso de UploadException
            if ($archivo->getError() !== UPLOAD_ERR_OK) {
                throw new UploadException($archivo->getError());
            }

            // Procesar el archivo...
        } else {
            throw new UploadException(UPLOAD_ERR_NO_FILE);
        }
    }
}

