<?php
include_once 'app/config.inc.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php
    if(!isset($titulo) || empty($titulo)) {
        $titulo = 'MA Programación';
    }
    echo "<title>$titulo</title>";
    ?>
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>fa-svg-with-js.css">
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>ihover.min.css" >
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>hover-min.css" >
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>imagehover.min.css" >
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>estilos.css">
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>carousel.css">
</head>
<body>