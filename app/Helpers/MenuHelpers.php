<?php

namespace App\Helpers;

class MenuHelpers
{
    public static function getNavBarNotificaciones()
    {
        // Tu código HTML aquí
        $htmlNotificaciones = <<<HTML
        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu">
            <!-- ... (el resto de tu código HTML) ... -->
        </li>
HTML;
        return $htmlNotificaciones;
    }

    public static function createMenuItem($name, $icon, $href, $text)
    {
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

    public static function getSeccionMenu($usuario) 
    {
        $html = "<section class=\"sidebar\">";
        $html .= "<ul class=\"sidebar-menu\">";
        $html .= "<li class=\"header\">MENU PRINCIPAL</li>";

        if (str_contains(strtolower($usuario->cargo), "administrador") || str_contains(strtolower($usuario->cargo), "producc")) {
            $html .= self::createMenuItem("kardexApartaPT", "archive", "#", "Vendido PT");
            $html .= self::createMenuItem("kardexPT", "archive", "#", "Inventario PT");
            $html .= self::createMenuItem("kardexMP", "archive", "#", "Inventario MP");
            // ... (añade más ítems según sea necesario)
        }

        // ... (añade más condiciones y ítems según sea necesario)

        $html .= "</ul>";
        $html .= "</section>";

        return $html;
    }
}