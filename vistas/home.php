<?php
include_once 'app/config.inc.php';

include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$header = 'MA Programación';
$parrafo = 'Diseño y Programación de Sitios y Sistemas Web.';

include_once 'plantillas/jumbotron.inc.php';
?>

<div class="container-fluid container-home-1">
  <div class="row">
  <div class="col">
      <div class="ih-item circle effect6 scale_up"><a href="#">
        <div class="img"><img src="<?php echo RUTA_IMG; ?>responsive-design.jpg" alt="img"></div>
        <div class="info">
          <h3>Responsive Design</h3>
          <p>Diseño Web Adaptativo</p>
        </div></a></div>
        <br>
        <p>Diseño Web Adaptativo para que su sitio o aplicación se visualice correctamente en todos los dispositivos, desde Smartphones hasta Monitores 4K.</p>
  </div>
  <div class="col">
    <div class="ih-item circle effect6 scale_up"><a href="#">
        <div class="img"><img src="<?php echo RUTA_IMG; ?>seo.jpg" alt="img"></div>
        <div class="info">
          <h3>SEO</h3>
          <p>Posicionamiento</p>
        </div></a></div>
        <br>
        <p>Diseñamos teniendo en cuenta los estándares para lograr una correcta indexación por los buscadores más usados y técnicas de SEO para lograr el mejor posicionamiento en los resultados de búsqueda.</p>
  </div>
  <div class="col">
    <div class="ih-item circle effect6 scale_up"><a href="#">
        <div class="img"><img src="<?php echo RUTA_IMG; ?>plugins.jpg" alt="img"></div>
        <div class="info">
          <h3>Plugins</h3>
          <p>Integración Funcional</p>
        </div></a></div>
        <br>
        <p>Correcta integración de los plugins más actuales para sus necesidades: plugins para las redes sociales más usadas, para lograr sitios y aplicaciones intuitivas y modernas, herramientas de análisis como Google Analitycs, etc.</p>
  </div>
</div>
</div>
<br>
<br>
<div class="container-fluid container-home-2">
	<div class="row">
		<div class="col-12 text-right">
		<h2 class="distintos-planes">
			Distintos planes para distintas necesidades
		</h2>
		<br>
		<p>Páginas a bajo costo y en pocos días o hechas a medida según los requerimientos y necesidades del cliente, Sitios de publicidad o Aplicaciones de Gestión, Hosting por parte del cliente o Planes de mantenimiento mensual con Hosting y Dominio incluidos.</p>
		<br>
		<a href="<?php echo RUTA_PLANES; ?>" class="btn hvr-sweep-to-right">Ver más detalles</a>
		</div>
	</div>
</div>
<div class="container-fluid container-home-3" id="servicios-hover">
  <div class="row">
    <div class="col">
      <h3 class="titulo-sombra"> Sitios Web en pocos días</h3>
      <hr>
      <p class="text-justify">Diseño de su sitio web en pocos días y a bajo costo pero asegurando un estilo moderno y visualmente atractivo, sin perder en ningún momento funcionalidad, y logrando cumplir con los estándares actuales de calidad en sitios web: Responsive Design y Técnicas de posicionamiento SEO.</p>
    </div> 
    </div>       
  </div>
  <div class="container-fluid container-home-3" id="servicios-hover">
  <div class="row">
    <div class="col">
    <h3 class="titulo-sombra">Sitios Web a Medida</h3>
    <hr>
    <p class="text-justify">El sitio se ajustará con precisión a sus necesidades, contendrá lo que usted desea, dónde y de la manera que usted lo quiera. El producto final será un sitio web justo como Usted lo necesita y auto-administrable, ya que le daremos las herramientas para que pueda gestionar el contenido de su sitio de manera sencilla, limpia e intuitiva.</p>  
    </div>  
    </div>  
  </div>
  <div class="container-fluid container-home-3" id="servicios-hover">
  <div class="row">
    <div class="col">
    <h3 class="titulo-sombra">Sistemas de Administración</h3>
    <hr>
    <p class="text-justify">Diseño y creación de sistemas de administración en entornos de escritorio o entornos web, dirigido principalmente a pequeñas y medianas empresas, negocios que están empezando y dueños que necesitan un sistema para agilizar ciertos procesos pero no desean invertir demasiado en herramientas informáticas.</p>
    </div>
  </div>
  </div>  
  <div class="container-fluid container-home-3"> 
  <div class="row">
    <div class="col">
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
</div>
</div>

<?php
include_once 'plantillas/cierre.inc.php';