<?php
$titulo = "Servicios";
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$header = 'Servicios';
$parrafo = 'A su disposición.';

include_once 'plantillas/jumbotron.inc.php';
?>

<div class="container container-home-1">
	<div class="row" id="s-pocos">
		<h3><i class="fas fa-sync fa-spin"></i> Sitios Web en pocos días</h3>
		<hr>
		<p class="text-justify">Diseño de su sitio web en pocos días y a bajo costo pero asegurando un estilo moderno y visualmente atractivo, sin perder en ningún momento funcionalidad, y logrando cumplir con los estándares actuales de calidad en sitios web: Responsive Design y Técnicas de posicionamiento SEO.</p>        
	</div>
	<div class="row" id="s-medida">
		<h3><i class="fas fa-spinner fa-pulse"></i> Sitios Web a Medida</h3>
		<hr>
		<p class="text-justify">El sitio se ajustará con precisión a sus necesidades, contendrá lo que usted desea, dónde y de la manera que usted lo quiera. El producto final será un sitio web justo como Usted lo necesita y auto-administrable, ya que le daremos las herramientas para que pueda gestionar el contenido de su sitio de manera sencilla, limpia e intuitiva.</p>      
	</div>
	<div class="row" id="s-admin">
		<h3><i class="fas fa-cog fa-spin"></i> Sistemas de Administración</h3>
		<hr>
		<p class="text-justify">Diseño y creación de sistemas de administración en entornos de escritorio o entornos web, dirigido principalmente a pequeñas y medianas empresas, negocios que están empezando y dueños que necesitan un sistema para agilizar ciertos procesos pero no desean invertir demasiado en herramientas informáticas.</p>
	</div>	
	<hr>		
	<div id="carousel" class="carousel carousel-fade" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img class="d-block w-100" src="<?php echo RUTA_IMG; ?>banner1.png" alt="First slide">
			</div> <!-- close carousel-item 1 -->
			<div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
				<img class="d-block w-100" src="<?php echo RUTA_IMG; ?>banner3.png" alt="Second slide">
			</div> <!-- close carousel-item 2 -->
			<div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
				<img class="d-block w-100" src="<?php echo RUTA_IMG; ?>banner2.png" alt="Third slide">
			</div> <!-- close carousel-item 3 -->
		</div> <!-- close carousel-inner -->
		<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>


<?php
include_once 'plantillas/cierre.inc.php';
