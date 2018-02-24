<?php
// de esta manera se definen constantes en PHP
define('NOMBRE_SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'blog');

// Rutas de la web
// Cuando se suba la pagina a un servidor, todas las direcciones se cambian desde aca.
// sino tendria que actualizarlas en cada uno de los archivos de la pagina.
define("SERVIDOR", "http://localhost/ma-programacion");
define("RUTA_CONTACTO", SERVIDOR . "/contacto");
define("RUTA_PLANES", SERVIDOR . "/planes");
define("RUTA_PORTFOLIO", SERVIDOR . "/portfolio");
define("RUTA_QUIENES_SOMOS", SERVIDOR . "/quienes-somos");
define("RUTA_SERVICIOS", SERVIDOR . "/servicios");
define("RUTA_UBICACION", SERVIDOR . "/ubicacion");
define("RUTA_MAIL", SERVIDOR . "/mail");

//Recursos
define('RUTA_CSS', SERVIDOR . '/css/');
define('RUTA_JS', SERVIDOR . '/js/');
define('RUTA_IMG', SERVIDOR . '/img/');
// define('DIRECTORIO_RAIZ', realpath(dirname(__FILE__)."/..")); para < PHP v5.3
define('DIRECTORIO_RAIZ', realpath(__DIR__."/..")); // para > PHP v5.3