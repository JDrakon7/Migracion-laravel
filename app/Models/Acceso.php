<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acceso extends Model
{
    protected $table = "iv_usuario";

    protected $fillable = [
        "nombre",
        "usuario",
        "clave",
        "correo_electronico",
        "celular",
        "imagen",
        "cargo",
        "fecha_registro",
        "habilitado"
    ];

    public $timesteps = false;

    public function cargo()
    {
        return $this-> belongsTo(Lista:: class,"id_cargo");
    }

    //Metodo acceso 
    public static function acceso($txtUsuario , $txtPassword)
    {
        //Consulta de Elequent

        return self::where("usuario" , $txtUsuario)
        ->where("clave", $txtPassword)
        ->where("habilitado" , 1)
        ->first();
    }
}
