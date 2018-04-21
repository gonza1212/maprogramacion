<?php

include_once 'app/config.inc.php';

$titulo = "Quiénes Somos | MA Programación Diseño Web";

include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

?>
<div class="ir-arriba"><i class="fas fa-caret-square-up fa-3x" style="color: #00A1B5" title="Ir Arriba"></i></div>

<div class="container-fluid" style="padding: 0px;">
	<div class="jumbotron jumbotron-fluid jumbotron-imagen">
		<br>
		<div class="d-none d-lg-block d-xl-block">
			<h1 class="titulo-blanco text-center display-2">Quiénes Somos</h1>
		</div>
		<div class="d-block d-md-block d-sm-block d-lg-none d-xl-none">			
			<h1 class="titulo-blanco text-center">Quiénes Somos</h1>
		</div>
		<br>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-8" id="historia">
		<h2 class="titulo-blanco">Historia</h2>
		<br>
		<p class="parrafo-texto-blanco">Comenzó como un consejo; luego fue la necesidad de algunos allegados y entonces fue cuando vi que el acceso a los servicios web no estaban al alcance de todos: algunos servicios son muy caros y, por otro lado, muchos no tienen el conocimiento para solicitarlos.<br>Los servicios web gratuitos abundan en Internet pero muchos que han intentado utilizarlos, fracasan o simplemente se rinden ante la dificultad. Y aunque unos han podido obtener algunos resultados, lo cierto es que si uno tiene necesidades específicas, o simplemente una idea, la mejor manera de realizarla es teniendo profundos conocimientos de desarrollo web, lenguajes, arquitecturas y paradigmas. Además para quien nunca estuvo en el tema, iniciar la búsqueda de un servicio de Hosting adecuado, contratar un dominio y dominar las técnicas de puesta en línea de un sitio web puede ser un enorme dolor de cabeza.<br><br>Por esta razón desde MA Programación brindamos servicios web de forma accesible para cualquier persona que desee tener un sitio web pero quiera evitar la parte difícil. Además nos enfocamos en dar soluciones de manera rápida y siempre dando todo el soporte que el cliente necesite.</p>		
		</div>
		<div class="col-sm-4">
			<br>
			<img src="<?php echo RUTA_IMG; ?>logo.png" class="img-fluid" alt="Responsive image">
		</div>
		<div class="col-sm-12" id="motivacion">
		<br>
		<h4 class="titulo-blanco">Motivación</h4>
		<br>
		<p class="parrafo-texto-blanco">Brindar servicios de diseño web a negocios nuevos y pequeños, aquellos que desean comenzar a tener presencia en la web pero sin que tengan que pagar grandes sumas por un sitio ni esperar largos procesos de desarrollo; acercarles un sitio bien diseñado y funcional a clientes que no deseen invertir demasiado en herramientas informáticas pero que estén precisando de ellas.</p>
		<br>
		<h4 class="titulo-blanco" id="vision">Visión</h4>
		<br>
		<p class="parrafo-texto-blanco">Acercar nuestros servicios a todo tipo de negocios medianos y pequeños, en la provincia y en el resto del país, con bajo costo inicial y mensual pero con altas prestaciones y calidad en el producto final, fidelizando nuestros clientes a través de continuas mejoras y optimizaciones sin costo adicional.</p>
		<br>
		<br>
		</div>
	</div>
	</div>
</div>

<?php
include_once 'plantillas/cierre.inc.php';