<?php
/* Este metodo es fundamental para que, cuando los robots de Google, Yahoo u otro buscador revisen la pagina
sepan que si llegaron hasta esta parte, el enlace que siguieron es invalido.
 * Basicamente este metodo envia un codigo al navegador o al cliente */
header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found', true, 404);

$titulo = 'MA Programación Diseño y Programación de Sitios Web Error 404';

include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$header = 'Ups!';
$parrafo = 'No encontramos esa página...';

include_once 'plantillas/jumbotron.inc.php';
?>

<div class="container container-404">
	<div class="row">
		<div class="col-12 text-center">
			<img src="<?php echo RUTA_IMG; ?>404.png">
		</div>
		<div class="col-6">
			<h2>Posibles razones</h2>
			<p>
				- Un error en la url<br>
				- Un enlace desactualizado<br>
				- ¿Un error de tipeo?<br>
			</p>
		</div>
		<div class="col-6">
			<h2>Qué podemos hacer</h2>
			<p>
				Muy sencillo: <a class="btn btn-primary" href="<?php echo SERVIDOR; ?>">&#60&#60 Volver al Inicio</a>
			</p>
		</div>
	</div>
</div>

<?php
include_once 'plantillas/cierre.inc.php';