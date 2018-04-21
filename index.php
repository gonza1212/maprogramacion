<?php

include_once 'app/config.inc.php';
$componentesUrl = parse_url($_SERVER['REQUEST_URI']);
$ruta = $componentesUrl['path'];
$partesRuta = explode('/', $ruta);
$partesRuta = array_filter($partesRuta);
$partesRuta = array_slice($partesRuta, 0);
$rutaElegida = 'vistas/404.php';
/* KISS: Keep It Simple Stupid */
if ($partesRuta[0] == 'maprogramacion') {
    if (count($partesRuta) == 1) {
        $rutaElegida = 'vistas/home.php';
    } else if (count($partesRuta) == 2) {
        switch ($partesRuta[1]) {
            case 'servicios':
                $rutaElegida = 'vistas/servicios.php';
                break;
            case 'contacto':
                $rutaElegida = 'vistas/contacto.php';
                break;
            case 'quienes-somos':
                $rutaElegida = 'vistas/quienes-somos.php';
                break;
        }
    } else if (count($partesRuta) == 3) {
        
    }
}

include_once $rutaElegida;