<?php
$titulo = "MA Programación Diseño y Programación de Sitios Web - Portfolio";
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$header = 'Portfolio';
$parrafo = 'Nuestros trabajos.';

include_once 'plantillas/jumbotron.inc.php';
?>

<div class="container container-404">
	<div class="row">
		<div class="col text-center">
			<h1>... Página en construcción ...</h1>
			<img src="<?php echo RUTA_IMG; ?>construction.png" class="img-fluid" alt="Responsive image">
			<br>
			<br>
			<h2>Lamentamos los inconvenientes</h2>
			<br>
			<h3><a href="<?php echo SERVIDOR; ?>">&#60&#60 Volver al Inicio</a></h3>
			<br>
		</div>
	</div>	
</div>
<?php
include_once 'plantillas/cierre.inc.php';
