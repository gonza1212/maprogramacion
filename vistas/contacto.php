<?php

include_once 'app/config.inc.php';

$titulo = "Contacto | MA Programación Diseño Web";

include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

?>
<div class="ir-arriba"><i class="fas fa-caret-square-up fa-3x" style="color: #00A1B5" title="Ir Arriba"></i></div>

<div class="container-fluid" style="padding: 0px;">
	<div class="jumbotron jumbotron-fluid jumbotron-imagen">
		<br>
		<div class="d-none d-lg-block d-xl-block">
			<h1 class="titulo-blanco text-center display-2">Contacto</h1>
		</div>
		<div class="d-block d-md-block d-sm-block d-lg-none d-xl-none">			
			<h1 class="titulo-blanco text-center">Contacto</h1>
		</div>
		<br>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-7 text-center parrafo-texto-blanco">			
			<div class="panel panel-default">
	            <div class="panel-heading">
	            	<br>
	                <h3 class="titulo-blanco-2">¡Escríbanos!</h3>
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
	                        $mail->Subject = filter_var($_POST['asunto'], FILTER_SANITIZE_STRING);
	                        $mail->Body    = filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING) . '<br><br>Tel: ' . filter_var($_POST['tel'], FILTER_SANITIZE_NUMBER_INT);
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
	                        <input type="number" name='tel' class="form-control" placeholder="N° Tel. o Celular (Opcional)">
	                        <br>
	                        <input type="email" name='email' class="form-control" placeholder="email *" required>
	                        <br>
	                        <input type="text" name='asunto' class="form-control" placeholder="Asunto *" required>
	                        <br>
	                        <div class="form-group">
	                            <textarea class="form-control" name='mensaje' placeholder="Mensaje *" rows="10" required></textarea>
	                        </div>
	                        <label class="text-secondary"><small>Los campos marcados con * son obligatorios</small></label>
	                        <br>
	                        <button type="reset" class="btn btn-dark btn-lg">Limpiar</button>
	                        <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
	                    </div>
	                </form>
	            </div>
			</div>
		</div>
		<div class="col-md-4">
			<br>
			<h3 class="text-center parrafo-texto-blanco">...o Búsquenos!</h3>
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
	</div>
	<br>
</div>

<?php
include_once 'plantillas/cierre.inc.php';