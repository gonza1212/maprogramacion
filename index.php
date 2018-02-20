<?php

include_once 'app/config.inc.php';

$componentesUrl = parse_url($_SERVER['REQUEST_URI']);

/* Esto devuelve la ruta ignorando la parte que indica el servidor */
$ruta = $componentesUrl['path'];

/* explode() sirve para romper un String a partir de un caracter indicado pero puede dejar elementos con espacios vacios
  si no hay ningun caracter atras o adelante del '/' */
$partesRuta = explode('/', $ruta);
/* Este metodo hace que todos los elementos con espacios vacios apunten a null */
$partesRuta = array_filter($partesRuta);
/* Este metodo elimina todos los elementos que apuntan a null y devuelve un array mas chico que contenga solo elementos
  validos */
$partesRuta = array_slice($partesRuta, 0);

$rutaElegida = 'vistas/404.php';
/* KISS: Keep It Simple Stupid */
if ($partesRuta[0] == 'ma-programacion') {
    if (count($partesRuta) == 1) {
        $rutaElegida = 'vistas/home.php';
    } else if (count($partesRuta) == 2) {
        switch ($partesRuta[1]) {
            case 'contacto':
                $rutaElegida = 'vistas/contacto.php';
                break;
            case 'planes':
                $rutaElegida = 'vistas/planes.php';
                break;
            case 'portfolio':
                $rutaElegida = 'vistas/portfolio.php';
                break;
            case 'quienes-somos':
                $rutaElegida = 'vistas/quienesSomos.php';
                break;
            case 'ubicacion':
                $rutaElegida = 'vistas/ubicacion.php';
                break;
        }
    } else if (count($partesRuta) == 3) {
        
    }
    if (!empty($partesRuta[1]) && $partesRuta[1] == 'gestor') {
        
    }
    if(!empty($partesRuta[1]) && $partesRuta[1] == 'recuperacion-clave') {
        
    }
}

include_once $rutaElegida;