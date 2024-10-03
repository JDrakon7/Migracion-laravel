<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
      // Definir la tabla asociada si no sigue la convención
    protected $table = "iv_producto";


    // Los campos que se pueden asignar masivamente
    protected $fillable = [
        "codigo",
        "nombre",
        "descripcion",
        "costo",
        "idTipo",
        "idClasificacion",
        "idUnidad",
        "nomTipo",
        "nomClasificacion",
        "nomUnidad",
        "imagen",
        "habilitado",
        "boton",
        "campo",
        "seleccionado",
        "fileImagen",
    ];

     // Casts para convertir automáticamente arrays y otros tipos de datos
    protected $cast = [
        "boton" => "array",
        "campo" => "array",
        "habilitado" => "boolean",
        "seleccionado" => "boolean"
    ];

     // Ocultar atributos que no queremos exponer al serializar
    protected $hidden = ['fileImagen'];


    // Accessor para obtener los datos del botón
    public function getBotonAttribute($value) {
    {
        return $value ? json_decode($value , true) : ['1' , '' , '' , '1' ];

    }

    }

    // Mutator para establecer los valores del botón
    public function setBotonAttribute($value)
    {
        // Si el valor no es un array, usar el valor por defecto
        if(is_array($value) && count($value) === 4  )  {
            $this->attributes['boton'] = json_encode($value);
    }

    }

    // Accessor para el campo
    public function getCampoAttribute( $value)

    {
        // Si el valor no es un array, usar el valor por defecto
        return $value ? json_decode($value , true) : [
            'id'=> '1',
            'codigo' => '1',
            'nombre'=> '1',
            'descripcion' => '1',
            'idTipo'=> '1',
            'nomTipo'=> '1',
            'imagen'=> '1',
            'habilitado'=> '1'
        ];
    }

    // Mutator para establecer el campo
    public function setCampoAttribute($value)
    {
        if (is_array($value) && count($value) === 16) 
        {
            $this->attributes['campo'] = json_encode($value);

        }   

    }

}