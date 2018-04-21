<footer class="footer-fondo-imagen">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="sub-titulo-negro">Acerca de</h2>
				<hr>
				<p class="parrafo-texto-negro">
					&copy; 2018 MA Programación, radicada en Puerto Madryn, Chubut, desarrolla Sitios Web modernos y adaptativos para todo tipo de negocios.
					<br><br>
					Millapinda Gonzalo
					Analista Programador Universitario recibido en 2016 en UNPSJB sede Pto. Madryn. Entre mis grandes intereses están el Desarrollo Web, la lectura, la escritura y el aprendizaje en general.
				</p>
			</div>
			<div class="col">
				<h2 class="sub-titulo-negro">Redes Sociales</h2>
				<hr>
				<p class="parrafo-texto-negro">
					<a class="link-fa-wsp" href="tel:+542804640444"><i class="fab fa-whatsapp-square fa-2x"></i></a>&nbsp;&nbsp;
					<a class="link-fa-lin" href="https://www.linkedin.com/in/gonzalo-millapinda-6b1a3315b/" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>&nbsp;&nbsp;
					<a class="link-fa-fb" href="https://www.facebook.com/maprogramacion.pm/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>&nbsp;&nbsp;
					<a class="link-fa-tw" href="https://twitter.com/ma_programacion/" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>&nbsp;&nbsp;
					<a class="link-fa-gp" href="https://plus.google.com/u/0/110903651943202441296/" target="_blank"><i class="fab fa-google-plus-square fa-2x"></i></a>&nbsp;&nbsp;
				</p>
				<div class="fb-like" data-href="https://www.maprogramacion.com/" data-width="250" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
			</div>
			<div class="col">
				<h2 class="sub-titulo-negro">Mapa del Sitio</h2>
				<hr>
				<ul class="parrafo-texto-negro">
					<li><a class="link-texto-negro" href="<?php echo SERVIDOR; ?>">Inicio</a></li>
					<li><a class="link-texto-negro" href="<?php echo RUTA_SERVICIOS; ?>">Servicios</a></li>
					<li><a class="link-texto-negro" href="<?php echo RUTA_QUIENES_SOMOS; ?>">Quiénes Somos</a></li>
					<li><a class="link-texto-negro" href="<?php echo RUTA_CONTACTO; ?>">Contacto</a></li>
				</ul>
			</div>
			<div class="col">
				<!--
				<h2 class="sub-titulo-negro">Ma Programación</h2>
				<hr>
				<p class="parrafo-texto-negro">
					Diseño de Sitios Web en Puerto Madryn.
				</p>
				<img src="<?php echo RUTA_IMG; ?>logo.png" class="img-fluid" alt="Responsive image">
			-->
				<div class="fb-page" data-href="https://www.facebook.com/maprogramacion.pm/" data-tabs="timeline" data-width="250" data-height="370" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/maprogramacion.pm/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/maprogramacion.pm/">MA Programación</a></blockquote></div>
			</div>
		</div>
	</div>
	<div class="container-fluid fondo-translucido-negro">
		<div class="row">
			<div class="col text-center">
				&copy; 2018. Sitio desarrollado por MA Programación íntegramente en <strong>HTML, CSS, PHP</strong> y <strong>JavaScript</strong>, prescindiendo totalmente de cualquier CMS.<br><small>Algunas imágenes fueron descargadas de <a href="https://www.freepik.es/" target="_blank">freepik</a>.</small>
			</div>
		</div>
	</div>
</footer>
		<script src="<?php echo RUTA_JS; ?>jquery.min.js"></script>
		<script src="<?php echo RUTA_JS; ?>popper.min.js"></script>
		<script src="<?php echo RUTA_JS; ?>bootstrap.min.js"></script>
		<script src="<?php echo RUTA_JS; ?>fontawesome-all.min.js"></script>
		<script>
			$(document).ready(function(){  
		        $(window).scroll(function(){
		            if ($(this).scrollTop() > 100) {
		            	$('.navbar').addClass('navbar-fondo');
		                $('.ir-arriba').fadeIn();
		            } else {
		            	$('.navbar').removeClass('navbar-fondo');
		                $('.ir-arriba').fadeOut();
		            }
		        });  
		        $('.ir-arriba').click(function(){
		            $("html, body").animate({ scrollTop: 0 }, 600);
		            return false;
		        });  
		    });
		</script>
	</body>
</html>