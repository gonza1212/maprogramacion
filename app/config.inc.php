<?php
// Rutas de la web
define("SERVIDOR", "http://localhost/maprogramacion");
define("RUTA_CONTACTO", SERVIDOR . "/contacto");
define("RUTA_QUIENES_SOMOS", SERVIDOR . "/quienes-somos");
define("RUTA_SERVICIOS", SERVIDOR . "/servicios");

//Recursos
define('RUTA_CSS', SERVIDOR . '/css/');
define('RUTA_JS', SERVIDOR . '/js/');
define('RUTA_IMG', SERVIDOR . '/img/');
// define('DIRECTORIO_RAIZ', realpath(dirname(__FILE__)."/..")); para < PHP v5.3
define('DIRECTORIO_RAIZ', realpath(__DIR__."/..")); // para > PHP v5.3