<?php
$titulo = "MA Programación Diseño y Programación de Sitios Web - Contacto";
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$header = 'Contacto';
$header_sm = 'Contacto';
$parrafo = '';
$parrafo_sm = '';

include_once 'plantillas/jumbotron.inc.php';
?>

<div class="container">
	<div class="row">
		<div class="col-sm-8">
 			<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-white"><i class="fas fa-edit"></i> Escríbanos</h4>
                <br>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="<?php echo RUTA_CONTACTO; ?>">
                    <div class="form-group">
                    <input type="hidden" name="exito">
                    <input type="hidden" name="mensaje_exito">
                    <?php
                    if(isset($_POST['enviar'])) {
                        require("app/class.phpmailer.php");
                        require("app/class.smtp.php");

                        $mail = new PHPMailer();
                        // set mailer to

                        $mail->Host = "mail.maprogramacion.com";  // specify main and backup server
                        $mail->SMTPAuth = true;     // turn on SMTP authentication
                        $mail->Username = "mainaccount@maprogramacion.com";  // SMTP username
                        $mail->Password = "sanndu_3"; // SMTP password

                        $mail->From = $_POST['email'];
                        $mail->FromName = $_POST['nombre'];        // remitente
                        $mail->AddAddress("info@maprogramacion.com", "Gonzalo");        // destinatario

                        $mail->AddReplyTo($_POST['email'], "respuesta a");    // responder a

                        $mail->WordWrap = 50;     // set word wrap to 50 characters
                        $mail->IsHTML(true);     // set email

                        $mail->Subject = "Mensaje desde Web";
                        $mail->Body    = $_POST['mensaje'];
                        $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

                        if(!$mail->Send())
                        {
                           echo "Message could not be sent. <p>";
                           echo "Mailer Error: " . $mail->ErrorInfo;
                           exit;
                        	} else {
                        	echo '<div class="alert alert-primary" role="alert">
                        	<h4 class="alert-heading">Gracias por escribirnos!</h4>
                        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            	<span aria-hidden="true">&times;</span>
                          	</button>
                            	<p>En breve nos comunicaremos con Usted.</p>
                          	</div>';
                        }
                    }
                    ?>
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
	                        <button type="reset" class="btn hvr-bounce-to-right">Limpiar</button>
	                        <button type="submit" name="enviar" class="btn hvr-bounce-to-left">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
		</div>
		<div class="col-sm-4">
            <h5 class="text-secondary">Conózcanos:</h5>
                <h5>
                    <script type='text/javascript'>
                    var foo="var a=\'Str\',b=\'rom\',c=\'C\',d=\'har\',e=\'ode\'"+
                    ",f=\'.f\',g=\'(\',h=\')\',i=\'ing\';var q=0,r=1,s=2,t=3,u=4"+
                    ",v=5,w=6,x=7,y=8,z=9;var bar=\'\';var foo=\"/a\"+eval(a+i+f"+
                    "+b+c+d+c+e+g+w+s+h)+\"om\"+eval(a+i+f+b+c+d+c+e+g+w+q+h)+\""+
                    "n.ccioamaograpro\"+eval(a+i+f+b+c+d+c+e+g+w+u+h)+\"minfsp;&"+
                    "nb/i\"+eval(a+i+f+b+c+d+c+e+g+w+s+h)+\"\"+eval(a+i+f+b+c+d+"+
                    "c+e+g+t+u+h)+\"\"+eval(a+i+f+b+c+d+c+e+g+w+s+h)+\"\"+eval(a"+
                    "+i+f+b+c+d+c+e+g+w+q+h)+\"opevel-en;fabsps&n\"+eval(a+i+f+b"+
                    "+c+d+c+e+g+t+u+h)+\"fass=clasp;&nb\"+eval(a+i+f+b+c+d+c+e+g"+
                    "+w+s+h)+\"\"+eval(a+i+f+b+c+d+c+e+g+w+q+h)+\"iom\"+eval(a+i"+
                    "+f+b+c+d+c+e+g+t+u+h)+\"n.ccioamaograpro\"+eval(a+i+f+b+c+d"+
                    "+c+e+g+w+u+h)+\"minfto:ail=\"+eval(a+i+f+b+c+d+c+e+g+t+u+h)"+
                    "+\"mrefa h\"+eval(a+i+f+b+c+d+c+e+g+w+q+h)+\"\";for(i=0;i<f"+
                    "oo.length;i+=3){bar+=foo.charAt(i+2)+foo.charAt(i+1)+foo.ch"+
                    "arAt(i);}bar=bar.split(\'\').reverse().join(\'\');document."+
                    "write(ue(bar));function ue(str) {str=str.replace(/&lt;/g,'<"+
                    "');str=str.replace(/&gt;/g,'>');str=str.replace(/&nbsp;/g,'"+
                    " ');return str;}";eval(foo);
                    </script>
                </h5>
            <hr>
			<h5 class="text-secondary">O llámenos, podemos concertar una visita en persona:</h5>
			<a href="tel:+542804640444"><h3><i class="fas fa-phone-square"></i> 280-4640444</h3></a>			
		</div>
	</div>
</div>

<?php
include_once 'plantillas/cierre.inc.php';
?>