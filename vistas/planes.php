<?php
$titulo = "MA Programación Diseño y Programación de Sitios Web - Planes";
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$header = 'Distintos Planes';
$header_sm = 'Planes';
$parrafo = 'Para distintas necesidades y circunstancias.';
$parrafo_sm = 'Adaptables';

include_once 'plantillas/jumbotron.inc.php';
?>

<div class="container-fluid container-home-1">
	<div class="row col-md-10 offset-sm-1"">
		<div class="col">
		<h3 class="distintos-planes text-center">Nos ajustamos a sus circunstancias</h3>
		<br>
		<div class="row">
			<div class="col">
				<div class="card mb-4 box-shadow bg-dark text-white">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal">Diseño Ágil</h4>
					</div>
					<div class="card-body bg-dark text-white">            
						<p class="parrafo-planes">En un plazo no mayor a 14 días corridos, el sitio web estará en línea en un Hosting de calidad, eficiente y sin límite de visitas mensuales. Nosotros nos encargamos de todos los detalles: diseño adaptativo, contratación del dominio, integración de sus redes sociales, etc.<br><br>Antes de ponerlo en línea, usted podrá ver el resultado. Si tiene alguna sugerencia o pretende algo diferente, hacemos los cambios necesarios. Cuando el sitio esté en línea, será lo que usted esperaba y lo que necesita.</p>
					</div>
				</div>
	        </div>
	        <div class="col">
				<div class="card mb-4 box-shadow bg-dark text-white">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal">Diseño a Medida</h4>
					</div>
					<div class="card-body bg-dark text-white">            
						<p class="parrafo-planes">En un plazo no mayor a 21 días corridos construiremos un sitio de acuerdo a lo que usted necesita: apariencia, temática, funciones, acceso a usuarios, etc. Desde el principio hasta el final tendrá el control total de lo que se hace y cómo queda, podrá pedir vistas parciales y ver el sitio completo antes de subirlo al hosting.<br><br>Todo lo que haga falta para que su sitio funcione, correrá por parte nuestra: diseño adaptativo, hosting de calidad, contratación del dominio, servicio de correo, etc.</p>
					</div>
				</div>
	        </div>
	        <div class="col">
				<div class="card mb-4 box-shadow bg-dark text-white">
					<div class="card-header">
						<h4 class="my-0 font-weight-normal">Sistemas</h4>
					</div>
					<div class="card-body bg-dark text-white">            
						<p class="parrafo-planes">Si lo que necesita es un sistema de administración, contáctenos, realizamos sistemas en entornos de escritorio o entorno web.<br><br></p>
					</div>
				</div>
	        </div>
		</div>
		<hr>
		<p class="text-center distintos-planes">Todos los planes pueden ajustarse al Plan Mensual de Mantenimiento</p>
		<br>
		<p class="parrafo-planes"><strong>¿Qué es el Plan de Mantenimiento?</strong><br><br>Todos los sitios web precisan de 3 aspectos fundamentales para permanecer en línea y que sea útil para el dueño: un servidor eficiente que lo mantenga en línea (Hosting), un nombre para que lo puedan encontrar (Dominio) y un código bien escrito que lo haga funcionar correctamente.<br><br>En nuestro Plan Mensual de Mantenimiento nos encargamos de todo:</p>
		<ul class="parrafo-planes">
			<li><strong>Hosting:</strong> el sitio web estará alojado en un servidor de calidad, sin límites de visitas mensuales, rápido y con uno de los mayores tiempos en línea del mercado.</li>
			<li><strong>Dominio:</strong> contratamos el dominio que usted desee: .com, .net, .org, entre otros.</li>
			<li><strong>Mantenimiento:</strong> las necesidades de los negocios cambian constantemente y el sitio debe reflejar ese dinamismo. Será nuestra responsabilidad atender esta necesidad y brindarle todo el soporte necesario. Estaremos en contacto cada vez que lo necesite.</li>
		</ul> 
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
		<h5>¿Ya tiene contratado un servicio de Hosting y quiere sólo el sitio para ponerlo en línea?</h5>
		<br>
		<h5>¿Desea el producto final con el código fuente para hacerle mantenimiento por su cuenta?</h5>
		<br>
		<h5>¿Hizo su propio sitio y desea ponerlo en línea sin pasar por los dolores de cabeza de buscar un hosting y un dominio que le sirvan?</h5>
		</div> 
		<div class="col  container-home-2">
		<h3>¡No dude en consultarnos!<br><br>Nos adaptamos a lo que más le convenga a Usted</h3>
		<br>
		<div class="d-md-none d-lg-none d-xl-none d-sm-none">
		<a href="<?php echo RUTA_CONTACTO; ?>" class="btn btn-sm hvr-sweep-to-right">Contacto</a>
        </div>
        <div class="d-none d-sm-block">
		<a href="<?php echo RUTA_CONTACTO; ?>" class="btn hvr-sweep-to-right">Contáctenos</a>
        </div>
		</div>
		</div>
	</div>

<?php
include_once 'plantillas/cierre.inc.php';