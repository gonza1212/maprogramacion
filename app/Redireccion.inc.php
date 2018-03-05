<?php

class Redireccion {
    
    // Cuando se invoca este metodo, se encargara de redirigir a la pagina que se le paso por parámetro.
    public static function redirigir($url) {
        // Se le pasa a que pagina redirigir, si se reescribe la direccion en la barra de url del navegador y el codigo del servidor de la accion
        // que se esta realizando.
        header('Location: ' . $url, true, 301);
        // IMPORTANTE: cortar la ejecucion despues de redirigir.
    }
}
