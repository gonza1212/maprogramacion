<?php

include_once 'app/config.inc.php';
$titulo = "Inicio | MA Programación Diseño Web";
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

?>
<div class="ir-arriba"><i class="fas fa-caret-square-up fa-3x" style="color: #00A1B5" title="Ir Arriba"></i></div>

<div class="container-fluid" style="padding: 0px;">
	<div class="d-none d-lg-block d-xl-block">
		<div class="jumbotron jumbotron-fluid container-jumbotron-home">		
			<img src="img/teclado.jpg" class="img-fluid" alt="Responsive image" style="width: 100%;">
			<h1 class="titulo-blanco-home text-center display-2">MA Programación<br><small class="sub-titulo-blanco">Diseño de Sitios Web</small></h1>
			<a class="btn btn-home btn-primary btn-lg" href="<?php echo RUTA_CONTACTO; ?>">Contacto</a>
		</div>
	</div>
	<div class="d-block d-md-block d-sm-block d-lg-none d-xl-none">
		<div class="jumbotron jumbotron-fluid jumbotron-imagen-home container-jumbotron-home text-center">
			<br><br><br>
			<h1 class="titulo-blanco-home-sm">MA-P<br><small class="sub-titulo-blanco">Diseño Web</small></h1>
			<a class="btn btn-primary btn-lg" href="<?php echo RUTA_CONTACTO; ?>">Contacto</a>
			<br><br>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row text-center parrafo-texto-blanco">
	    <div class="col-md-3 caja-servicio caja-servicio-1">
	        <h2><i class="fas fa-mobile-alt fa-lg"></i> <i class="fas fa-tv fa-2x"></i> <i class="fas fa-tablet-alt fa-lg"></i></h2>
	        <br>
	        <h3>Responsive Design</h3>
	        <br>
	        <hr>
	    </div>
	    <div class="col-md-3 caja-servicio caja-servicio-2">
	        <h2><i class="fas fa-server fa-2x"></i></h2>
	        <br>
	        <h3>Hosting</h3>
	        <br>
	        <hr>
	    </div>
	    <div class="col-md-3 caja-servicio caja-servicio-3">
	        <h2><i class="fas fa-globe fa-2x"></i></h2>
	        <br>
	        <h3>Dominio</h3>
	        <br>
	        <hr>
	    </div>
	    <div class="col-md-3 caja-servicio caja-servicio-4">
	        <h2><i class="far fa-envelope fa-2x"></i></h2>
	        <br>
	        <h3>Correo</h3>
	        <br>
	        <hr>
	    </div>
	</div>
</div>

<div class="container-fluid fondo-diagonal">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-3">
			<br>
			<br>
			<h2 class="parrafo-texto-blanco text-center">MA Programación</h2>
			<br>
			<p class="parrafo-texto-blanco text-center">Diseñamos sitios web personales, corporativos, artísticos, publicitarios. Buscamos siempre un diseño moderno y elegante, equilibrando la simpleza con la funcionalidad.<br><br>Creamos sitios web que se ajusten a sus necesidades y con todo el soporte necesario.</p>
			<br>
			<br>
		</div>
		<div class="col-sm-5 text-right font-italic" style="font-size: 1.5em;">
			<br><br><a class="link-texto-blanco" href="<?php echo RUTA_QUIENES_SOMOS; ?>#historia">Nuestra Historia</a>
			<br><br><a class="link-texto-blanco" href="<?php echo RUTA_QUIENES_SOMOS; ?>#motivacion">Nuestra Motivación</a>
			<br><br><a class="link-texto-blanco" href="<?php echo RUTA_QUIENES_SOMOS; ?>#vision">Nuestros Objetivos</a>
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-12"><hr class="hr-separador-doble"><br></div>		
	</div>
</div>

<div class="container-fluid container-fondo">
	<div class="row">
		<div class="col-sm-12"><h2 class="parrafo-texto-blanco text-center">Distintos Planes para Distintas Necesidades</h2><br>
		<br></div>
		<div class="col">
			<div class="card mb-4 box-shadow bg-dark text-white">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal font-italic parrafo-texto-blanco"><i class="fas fa-tachometer-alt" style="color:tomato"></i> - Diseño Xpress</h4>
				</div>
				<div class="card-body bg-dark text-white">            
					<p class="parrafo-texto-blanco">En pocos días su sitio web estará en línea con dominio, en un Hosting de calidad y eficiente. Nosotros nos encargamos de todos los detalles.<br></p>
					<ul class="vinieta-checked parrafo-texto-blanco">
						<li><i class="fas fa-check" style="color: gray"></i>&nbsp;&nbsp;&nbsp; Hosting</li>
						<li><i class="fas fa-check" style="color: gray"></i>&nbsp;&nbsp;&nbsp; Dominio</li>
						<li><i class="fas fa-check" style="color: gray"></i>&nbsp;&nbsp;&nbsp; Visitas mensuales ilimitadas</li>
						<li><i class="fas fa-check" style="color: gray"></i>&nbsp;&nbsp;&nbsp; Diseño Adaptativo</li>
						<li><i class="fas fa-check" style="color: gray"></i>&nbsp;&nbsp;&nbsp; Integración de Página de Facebook</li>
						<li><i class="fas fa-check" style="color: gray"></i>&nbsp;&nbsp;&nbsp; Enlaces a todas las redes sociales</li>
					</ul>
					<div class="text-center"><a class="btn btn-info" href="<?php echo RUTA_SERVICIOS; ?>#agil">¡Ver qué mas incluye!</a></div>
				</div>
			</div>
        </div>
		<div class="col">
			<div class="card mb-4 box-shadow bg-dark text-white">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal parrafo-texto-blanco"><i class="fas fa-paint-brush" style="color: gold"></i> - Diseño Personalizado</h4>
				</div>
				<div class="card-body bg-dark text-white">            
					<p class="parrafo-texto-blanco">Tendrá control total sobre la apariencia, temática, estructura y funcionalidad de su sitio web puesto que lo diseñaremos a su medida en cada paso.<br></p>
					<ul class="vinieta-checked parrafo-texto-blanco">
						<li><i class="fas fa-check" style="color: gray"></i>&nbsp;&nbsp;&nbsp; Todo lo que incluye Diseño Xpress</li>
						<li><i class="fas fa-check" style="color: gray"></i>&nbsp;&nbsp;&nbsp; Publicaciones Automatizadas en redes sociales</li>
						<li><i class="fas fa-check" style="color: gray"></i>&nbsp;&nbsp;&nbsp; Servicio de Correo</li>
						<li><i class="fas fa-check" style="color: gray"></i>&nbsp;&nbsp;&nbsp; Base de Datos</li>
						<li><i class="fas fa-check" style="color: gray"></i>&nbsp;&nbsp;&nbsp; Auto-Administrable</li>
					</ul>
					<div class="text-center"><a class="btn btn-info" href="<?php echo RUTA_SERVICIOS; ?>#personalizado">¡Ver qué mas incluye!</a></div>
				</div>
			</div>
        </div>
	</div>
</div>

<div class="container-fluid container-fondo-solido-oscuro">
	<div class="row">
		<div class="col-sm-12 text-center parrafo-texto-blanco">
			<h2>Nuestras Habilidades</h2>
			<br>
			<p>Nos comprometemos con cada trabajo y ponemos a su disposición lo mejor de nosotros.</p>
			<br>
		</div>
		<div class="col-sm-4 text-center">
			<h3 class="parrafo-texto-blanco">Maquetado y Diseño</h3>
			<p class="parrafo-texto-blanco"><i class="far fa-paper-plane fa-2x"></i></p>
			<hr class="hr-habilidad-rojo">
			<p class="parrafo-texto-rojo">80%</p>
		</div>
		<div class="col-sm-4 text-center">
			<h3 class="parrafo-texto-blanco">Lenguajes y Frameworks</h3>
			<p class="parrafo-texto-blanco"><i class="fas fa-code fa-2x"></i></p>
			<hr class="hr-habilidad-verde">
			<p class="parrafo-texto-verde">90%</p>
		</div>
		<div class="col-sm-4 text-center">
			<h3 class="parrafo-texto-blanco">Esfuerzo y Compromiso</h3>
			<p class="parrafo-texto-blanco"><i class="far fa-handshake fa-2x"></i></p>
			<hr class="hr-habilidad-azul">
			<p class="parrafo-texto-azul">100%</p>
		</div>
	</div>
</div>
<!-- CUANDO HAGA POR LO MENOS UN TRABAJO HABILITO ESTA PARTE
<div class="container-fluid container-fondo-solido-celeste">
	<div class="row text-center">
		<div class="col-sm-12 text-center parrafo-texto-blanco">
			<h2>Portfolio</h2>
			<br>
			<p>Nuestros trabajos nos recomiendan.</p>
			<br>
		</div>
		<div class="col">
			<img src="<?php echo RUTA_IMG; ?>ejemplo-pagina.png" class="img-fluid" alt="Responsive image">
		</div>
		<div class="col">
			<img src="<?php echo RUTA_IMG; ?>ejemplo-pagina.png" class="img-fluid" alt="Responsive image">
		</div>
		<div class="col">
			<img src="<?php echo RUTA_IMG; ?>ejemplo-pagina.png" class="img-fluid" alt="Responsive image">
		</div>
		<div class="col">
			<img src="<?php echo RUTA_IMG; ?>ejemplo-pagina.png" class="img-fluid" alt="Responsive image">
		</div>
	</div>
</div>
-->
<div class="container-fluid imagen-fondo" id="contacto">
	<div class="row">
		<div class="col-md-4 fondo-blanco-translucido">
			<br>
			<h3 class="titulo-gris text-center">Contáctenos!</h3>
			<br>
			<h3><i class="fas fa-phone-square fa-lg" style="color: blueviolet;"></i> <a class="link-contacto" href="tel:+542804640444">280-4640444</a></h3>
			<h3 class="link-contacto"><i class="fab fa-whatsapp-square fa-lg" style="color: #25d366;"></i> <a class="link-contacto" href="tel:+542804640444">280-4640444</a></h3>
			<div class="d-none d-lg-block d-xl-block">
				<script>
	  				document.write('<h3 class="link-contacto"><i class="fas fa-envelope-square fa-lg" style="color: burlywood;"></i><a class="link-contacto" href="mailto:&#105;&#110;&#102;&#111;&#064;&#109;&#097;&#112;&#114;&#111;&#103;&#114;&#097;&#109;&#097;&#099;&#105;&#111;&#110;&#046;&#099;&#111;&#109;"> &#105;&#110;&#102;&#111;&#064;&#109;&#097;&#112;&#114;&#111;&#103;&#114;&#097;&#109;&#097;&#099;&#105;&#111;&#110;&#046;&#099;&#111;&#109;</a></h3>')
	  			</script>
  			</div>
  			<div class="d-block d-md-block d-sm-block d-lg-none d-xl-none">
  				<script>
  				document.write('<h4 class="link-contacto"><i class="fas fa-envelope-square fa-lg" style="color: burlywood;"></i><a class="link-contacto" href="mailto:&#105;&#110;&#102;&#111;&#064;&#109;&#097;&#112;&#114;&#111;&#103;&#114;&#097;&#109;&#097;&#099;&#105;&#111;&#110;&#046;&#099;&#111;&#109;"> &#105;&#110;&#102;&#111;&#064;&#109;&#097;&#112;&#114;&#111;&#103;&#114;&#097;&#109;&#097;&#099;&#105;&#111;&#110;&#046;&#099;&#111;&#109;</a></h4>')
  				</script>
  			</div>
			<h3 class="link-contacto"><i class="fab fa-linkedin fa-lg" style="color: #0077b5;"></i> <a class="link-contacto" href="https://www.linkedin.com/in/gonzalo-millapinda-6b1a3315b/" target="_blank">Gonzalo Millapinda</a></h3>
			<h3 class="link-contacto"><i class="fab fa-facebook-square fa-lg" style="color: #3b5998;"></i> <a class="link-contacto" href="https://www.facebook.com/maprogramacion.pm/" target="_blank">MA Programación</a></h3>
			<h3 class="link-contacto"><i class="fab fa-twitter-square fa-lg" style="color: #1da1f2;"></i> <a class="link-contacto" href="https://twitter.com/ma_programacion/" target="_blank">@ma_programacion</a></h3>
			<h3 class="link-contacto"><i class="fab fa-google-plus-square fa-lg" style="color: #dd4b39;"></i> <a class="link-contacto" href="https://plus.google.com/u/0/110903651943202441296/" target="_blank">MA Programación</a></h3>
		</div>
		<div class="col-sm-8 text-center parrafo-texto-blanco">			
			<div class="panel panel-default">
            <div class="panel-heading">
            	<br>
                <h3 class="titulo-gris">...ó díganos lo que piensa!</h3>
                <br>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="<?php echo RUTA_CONTACTO; ?>">
                	<?php
	                    if(isset($_POST['enviar'])) {
	                        require("app/class.phpmailer.php");
	                        require("app/class.smtp.php");
	                        $mail = new PHPMailer();
	                        $mail->Host = "mail.maprogramacion.com";  // specify main and backup server
	                        $mail->SMTPAuth = true;     // turn on SMTP authentication
	                        $mail->Username = "mainaccount@maprogramacion.com";  // SMTP username
	                        $mail->Password = "sanndu_3"; // SMTP password
	                        $mail->From = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	                        $mail->FromName = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);        // remitente
	                        $mail->AddAddress("info@maprogramacion.com", "Gonzalo");        // destinatario
	                        $mail->AddReplyTo(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL), "respuesta a");    // responder a
	                        $mail->WordWrap = 50;     // set word wrap to 50 characters
	                        $mail->IsHTML(true);     // set email
	                        $mail->Subject = "Mensaje desde MA Programacion | Home";
	                        $mail->Body    = filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING); 
	                        $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
	                        if(!$mail->Send()) {
	                        	echo '<div class="alert alert-danger" role="alert" style="text-shadow: 0px 0px 0px #000 !important;">
	                        	<h4 class="alert-heading">Oops!</h4>
	                        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                            	<span aria-hidden="true">&times;</span>
	                          	</button>
	                            	<p>El mensaje no se ha podido enviar. Intente más tarde o contacte con el desarrollador por Teléfono si el problema persiste.<br>Detalle: ' . $mail->ErrorInfo . '</p>
	                          	</div>';
	                        	} else {
	                        	echo '<div class="alert alert-primary" role="alert" style="text-shadow: 0px 0px 0px #000 !important;">
	                        	<h4 class="alert-heading">Gracias por escribirnos!</h4>
	                        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                            	<span aria-hidden="true">&times;</span>
	                          	</button>
	                            	<p>En breve nos comunicaremos con Usted.</p>
	                          	</div>';
	                        }
	                    }
	                    ?>
                    <div class="form-group">
                        <input type="text" name='nombre' class="form-control" placeholder="Nombre *" required>
                        <br>
                        <input type="email" name='email' class="form-control" placeholder="email *" required>
                        <br>
                        <div class="form-group">
                            <textarea class="form-control" name='mensaje' placeholder="Mensaje *" rows="5" required></textarea>
                        </div>
                        <label class="text-secondary"><small>Los campos marcados con * son obligatorios</small></label>
                        <br>
                        <div class="d-md-none d-lg-none d-xl-none d-sm-none">
	                        <button type="reset" class="btn btn-sm hvr-bounce-to-right">Limpiar</button>
	                        <button type="submit" name="enviar" class="btn btn-sm hvr-bounce-to-left">Enviar</button>
                        </div>
                        <div class="d-none d-sm-block">
	                        <button type="reset" class="btn btn-dark btn-lg">Limpiar</button>
	                        <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
		</div>
	</div>
</div>
</div>

<div class="container-fluid container-fondo-solido-celeste">
	<div class="row text-center" style="padding: 1em;">
		<div class="col fa-celeste-en-hover"><i class="fab fa-html5 fa-4x"></i><br><br></div>
		<div class="col fa-celeste-en-hover"><i class="fab fa-css3-alt fa-4x"></i><br><br></div>
		<div class="col fa-celeste-en-hover"><i class="fab fa-php fa-4x"></i><br><br></div>
		<div class="col fa-celeste-en-hover"><i class="fab fa-laravel fa-4x"></i><br><br></div>
		<div class="col fa-celeste-en-hover"><i class="fas fa-database fa-4x"></i><br><br></div>
		<div class="col fa-celeste-en-hover"><i class="fab fa-wordpress fa-4x"></i></div>
	</div>
</div>

<?php
include_once 'plantillas/cierre.inc.php';