<?php
include_once 'app/config.inc.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php
    if(!isset($titulo) || empty($titulo)) {
        $titulo = 'MA Programación Diseño y Programación de Sitios Web';
    }
    ?>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta charset="UTF-8">
	<meta name="google-site-verification" content="5kb05QDqhvLiIA8Mu8PkMuDBSbJ86R7DjSJKgKWHb50" />
	<meta name="title" content="<?php echo $titulo ?>">
	<meta name="description" content="Diseño de Sitios Web, Sistemas Web y de Escritorio, Hosting y Dominio incluidos, Software a medida, Servicios Web en Chubut, Diseño Web en Puerto Madryn">
	<meta name="keywords" content="websites, software a medida, diseño web, puerto madryn">
	<meta name="ROBOTS" content="INDEX, FOLLOW">
	<meta name="geo.region" content="AR-U" />
	<meta name="geo.placename" content="Puerto Madryn" />
	<meta name="geo.position" content="-42.769887;-65.048656" />
	<meta name="ICBM" content="-42.769887, -65.048656" />
	<meta http-equiv="content-language" content="es-ES" />
	<meta name="author" content="Millapinda Gonzalo" />
	<meta http-equiv="Window-target" content="_top">
	<meta http-equiv="X-UA-COMPATIBLE" content="IE EDGE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titulo ?></title>
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>fa-svg-with-js.css">
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>ihover.min.css" >
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>hover-min.css" >
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>imagehover.min.css" >
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>estilos.css">
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>carousel.css">
</head>
<body>