<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table =  "iv_usuario";

    protected $fillable = [
        'usuario', 
        'nombre', 
        'correo', 
        'celular', 
        'imagen', 
        'file_imagen',
        'cargo', 
        'id_cargo', 
        'habilitado', 
        'lang', 
        'seleccionado', 
        'clave', 
        'confirmar_clave'
    ];

    protected $casts = [
        'boton'=> 'array',
        'campo'=> 'array',
        'habilitado'=> 'boolean',
        'seleccionado'=> 'boolean',
    ];

    protected $hidden = ['clave' , 'confirmar_clave'];

    protected $attributes = [
        'lang'=> 'es',
        'boton'=> ['1' , '1' , '1' , '1'],
        'campo' => ['1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'],
    ];

    // public function setClavevAttribute($value)
    // {
    //     $this->attributes['clave'] = Hash::make($value);
    // }

    // public function cargo()
    // {
    //     return $this->belongsTo(Cargo::class, 'id_cargo');
    // }

    
public function getNavBarNotificaciones() {
    $htmlNotificaciones = <<<HTML
    <!-- Notifications: style can be found in dropdown.less -->
    <li class="dropdown notifications-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">10</span>
        </a>
        <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                    </li>
                </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
        </ul>
    </li>
HTML;

    return $htmlNotificaciones;
}



private function createMenuItem($name, $icon, $href, $text) {
    return <<<HTML
    <li>
        <a name="menu" href="{$href}">
            <i class="fa {$icon} text-light-blue"></i>
            <input type="hidden" name="carpeta" value="mtto">
            <input type="hidden" name="modulo" value="{$name}">
            <span>{$text}</span>
        </a>
    </li>
HTML;
}



}