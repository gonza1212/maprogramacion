<?php
$titulo = "MA Programación Diseño y Programación de Sitios Web - Planes";
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$header = 'Distintos Planes';
$parrafo = 'Para distintas necesidades y circunstancias.';

include_once 'plantillas/jumbotron.inc.php';
?>

<div class="container-fluid container-home-1">
	<div class="row text-center"">
		<div class="col">
		<h3 class="distintos-planes">Nos ajustamos a sus circunstancias</h3>
		<div class="text-left">
		<br>
		<p>Sitios Web en línea con Hosting y Dominio a cargo del cliente.<br><br>Sitios Web con hosting, dominio y mantenimiento por parte de MA Pogramación, todo incluido reducida una cuota mensual.<br><br>Mantenimiento de sitios y sistemas de manera regular a precio fijo o según la necesidad y urgencia.<br><br>O cualquier otra circunstancia!</p>
		<br>
		</div>
	</div>
</div>
</div>
		<hr>
		<div class="container-fluid">
		<div class="row">
		<div class="col  container-home-2">
		<h5>¿Necesita algo diferente?</h5>
		<br>
		<h5>¿No quiere la molestia de buscar y pagar su propio dominio y hosting?</h5>
		<br>
		<h5>¿Ya tiene contratado un servicio de Hosting y quiere sólo el sitio para ponerlo en línea?</h5>
		<br>
		<h5>¿Desea el producto final con el código fuente para hacerle mantenimiento por su cuenta?</h5>
		</div> 
		<div class="col  container-home-2">
		<h3>¡No dude en consultarnos!<br><br>Nos adaptamos a lo que más le convenga a Usted</h3>
		<br>
		<a href="<?php echo RUTA_CONTACTO; ?>" class="btn hvr-sweep-to-right">Contáctenos</a>
		</div>
		</div>
	</div>

<?php
include_once 'plantillas/cierre.inc.php';