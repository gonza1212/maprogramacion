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
                <h4 class="text-white"><i class="fas fa-edit"></i> Escríbenos</h4>
                <br>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="<?php echo RUTA_CONTACTO; ?>">
                    <div class="form-group">
                        <?php
                        if(isset($_POST['enviar'])) {
                            include_once('envio.php');
                        }
                        ?>
                        <input type="text" class="form-control" placeholder="Nombre *" required>
                        <br>
                        <input type="email" class="form-control" placeholder="email *" required="">
                        <br>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Mensaje *" rows="5" required=""></textarea>
                        </div>
                        <label class="text-secondary"><small>Los campos marcados con * son obligatorios</small></label>
                        <br>
                        <button type="reset" class="btn hvr-bounce-to-right">Limpiar</button>
                        <button type="submit" name="enviar" class="btn hvr-bounce-to-left">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
		</div>
		<div class="col-sm-4">
			<a href="tel:+542804640444"><h3><i class="fas fa-phone-square"></i> 280-4640444</h3></a>
			<br>
			<h3 class="text-white">Redes Sociales</h3>
			<a href="#">Facebook</a>, <a href="#">Twitter</a>, <a href="#">YouTube</a>, <a href="#">Fotolog (?)</a>
			<br>
		</div>
	</div>
</div>

<?php
include_once 'plantillas/cierre.inc.php';
