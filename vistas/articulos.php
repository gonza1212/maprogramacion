<?php

include_once 'app/config.inc.php';

$titulo = "Últimos Artículos | MA Programación Diseño Web";

include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

?>
<div class="ir-arriba"><i class="fas fa-caret-square-up fa-3x" style="color: #00A1B5" title="Ir Arriba"></i></div>

<div class="container-fluid" style="padding: 0px;">
	<div class="jumbotron jumbotron-fluid jumbotron-imagen">
		<h1 class="titulo-blanco text-center display-2">Artículos</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2 class="titulo-blanco">Preguntas y Respuestas sobre el Diseño Web</h2>
		</div>
	</div>
</div>

<?php
include_once 'plantillas/cierre.inc.php';