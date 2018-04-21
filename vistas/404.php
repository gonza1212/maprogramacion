<?php
header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found', true, 404);

include_once 'app/config.inc.php';

$titulo = "Página no encontrada | MA Programación Diseño Web";

include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

?>
<div class="ir-arriba"><i class="fas fa-caret-square-up fa-3x" style="color: #00A1B5" title="Ir Arriba"></i></div>

<div class="container-fluid" style="padding: 0px;">
	<div class="jumbotron jumbotron-fluid jumbotron-imagen">
		<br>
		<h1 class="titulo-blanco text-center display-2">Oops!</h1>
		<br>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<br>
			<h2 class="titulo-blanco">No encontramos la página solicitada...</h2>
			<br><br><br>
		</div>
		<div class="col-md-6 parrafo-texto-blanco">
			<h3>¿A qué se debe?</h3>
			<br>
			<p>En general se debe a un error en la URL, por un error de tipeo o algo similar.<br><br>Si el problema persiste, por favor, comuníquese con el <a class="link-contacto" href="tel:+542804640444" style="font-size: 1.25em;">desarrollador del sitio</a>. Disculpe los inconvenientes.</p>
		</div>
		<div class="col-md-6 parrafo-texto-blanco text-center">
			<h3>¿Qué podemos hacer?</h3>
			<br>
			<a class="btn btn-primary btn-lg" href="<?php echo SERVIDOR; ?>">Volver al Inicio!</a>
		</div>
	</div>
		<br><br>
</div>

<?php
include_once 'plantillas/cierre.inc.php';