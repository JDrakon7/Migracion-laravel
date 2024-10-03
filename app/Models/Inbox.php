<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    
    protected $fillable = [
        "path",
        "tipo",
        "tipoTabla",
        "tabla",
        "tablaTitulo",
        "tablaId",
        "boton",
        "datos",
        "datoSeleccionado",
        "cantidadPorPagina",
        "pagina",
        ];



    protected $casts = [
        "boton"=> "array",
        "datos"=> "array",
        ];

    public function tabla()
    {
        return $this->belongsTo("tablaId");
    }

    public function getBotonAttribute($value)
    {
        return json_decode($value , true);
    }

    public function sendBotonAttribute($value){ 
        $this->attributes["boton"] = $value; 
    }

    public function getHtmlCantidadDatosAttribute()
    {
        $html = "";
        if (count($this->datos) > 0) {
            $html .= "1-" . count($this->datos);
        } else {
            $html .= "0";
        }
        return $html;
    }

    public function getHtmlDataTableHead($inbox, $texto)
{
    $html = "";
    if (!empty($inbox->tipo) && !empty($inbox->tabla)) {
        // Usamos el helper de Laravel para cargar la vista adecuada
        $html = view('inbox.html.' . $inbox->tipo . '.' . $inbox->tabla, ['texto' => $texto])->render();
    }
    return $html;

}
    public function getHtmlDataTable($inbox, $texto)
    {
        $html = "";

        if(!empty($inbox->tipo) && !empty($inbox->tabla)) {
            $cantidadPorPagina = Constante::where('clave' , 'PAGINA')->first()->valor ?? 15;     

            $cantidadInicial = ($inbox->pagina > 0) ? ($inbox->pagina - 1) * $cantidadPorPagina : 0;            

            if (in_array($inbox->tabla , ["usuario" , "lista" , "producto" , "orden" , "kardex" , "entrada"])){

            
                $html = view('inbox.html.' . $inbox->tipo . '.' . $inbox->tabla, [
                    'datos'=> $inbox->datos,
                    'texto'=> $texto,
                    'cantidadPorPagina'=> $cantidadPorPagina,
                    'cantidadInicial'=> $cantidadInicial
                    ])->render();
            
        } else {
            $html = view('inbox.html.default',[
                'datos'=> $inbox->datos,
                'texto'=> $texto,
                ])->render();
            }
        } else {

            $html = "Error en los datos de configuración. Favor ingrese nuevamente, si persiste contacte con el administrador del sistema.";
        }  
        return $html;
}  

}

