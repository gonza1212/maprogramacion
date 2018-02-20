<?php
$titulo = "Quiénes Somos";
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$header = 'Quiénes Somos';
$parrafo = 'De dónde venimos y hacia dónde vamos.';

include_once 'plantillas/jumbotron.inc.php';
?>

<div class="container-fluid container-home-1">
	<div class="row">
		<div class="col-sm-8">
		<h2 class="distintos-planes">Historia</h2>
		<br>
		<p>Nacido en la turística provincia argentina de Tierra del Fuego y graduado de Analista Programador Universitario en la Universidad Nacional de la Patagonia San Juan Bosco sede Puerto Madryn a fines del año 2016, busqué desarrollarme como programador profesional apuntando al diseño de aplicaciones de escritorio y gestión de bases de datos pero fue en el Desarrollo Web independiente donde encontré mi verdadera vocación en el área de la Informática.<br><br>
		Desde páginas sencillas y elegantes hasta ambiciosos sistemas web, desde HTML y CSS hasta el desarrollo de Backend con Frameworks PHP, me dedico constantemente al desarrollo y estudio de este inmenso mundo del Diseño Web.</p>		
		</div>
		<div class="demo pure-u-1 pure-u-sm-1-2 pure-u-md-1-3 pure-u-lg-1-4">
			<figure class="imghvr-hinge-left">
				<img src="<?php echo RUTA_IMG; ?>foto1.png" alt="example-image"/>
				<figcaption>
					<h3>Millapinda Gonzalo</h3>
					<p><hr>Analista Programador Universitario</p>
				</figcaption>
				<a href="javascript:;"></a>
			</figure>
		</div>
		</div>
		<div class="row">
		<div class="col">
		<br>
		<hr>
		<h4 class="distintos-planes">Motivación</h4>
		<br>
		<p>Brindar servicios de diseño web a negocios nuevos y pequeños sin que tengan que pagar grandes sumas ni esperar largos procesos de desarrollo, acercarles un sistema bien diseñado y funcional a clientes que no deseen invertir demasiado en herramientas informáticas pero que estén precisando de ellas.</p>
		<br>
		<hr>
		<h4 class="distintos-planes">Visión</h4>
		<br>
		<p>Acercar nuestros servicios a todo de negocios, medianos y pequeños, en la provincia y en el resto del país, con bajo costo inicial y mensual pero con altas prestaciones y calidad en el producto final.</p>
		</div>
		</div>
	</div>
	</div>
</div>
<?php
include_once 'plantillas/cierre.inc.php';

