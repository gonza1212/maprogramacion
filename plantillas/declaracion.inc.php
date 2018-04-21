<?php
include_once 'app/config.inc.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<?php
    if(!isset($titulo) || empty($titulo)) {
        $titulo = 'MA Programación Diseño y Programación de Sitios Web';
    }
    ?>
	<title><?php echo $titulo; ?></title>
	<link rel="icon" type="image/png" href="<?php echo RUTA_IMG; ?>logo.png" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="google-site-verification" content="5kb05QDqhvLiIA8Mu8PkMuDBSbJ86R7DjSJKgKWHb50" />	
	<meta name="description" content="Diseño de Sitios Web, Sistemas Web y de Escritorio, Hosting, Dominio, Software a medida, Servicios Web en Chubut, Diseño Web en Puerto Madryn">
	<meta name="keywords" content="websites, software a medida, diseño web, puerto madryn">
	<meta name="ROBOTS" content="INDEX, FOLLOW">
	<meta name="geo.region" content="AR-U" />
	<meta name="geo.placename" content="Puerto Madryn" />
	<meta name="geo.position" content="-42.769887;-65.048656" />
	<meta name="ICBM" content="-42.769887, -65.048656" />
	<meta http-equiv="content-language" content="es-ES" />
	<meta name="author" content="Millapinda Gonzalo" />
	<meta http-equiv="Window-target" content="_top">
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>fa-svg-with-js.css">
	<link rel="stylesheet" href="<?php echo RUTA_CSS; ?>estilos.css">
</head>
<body>
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '333965297125110',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.12'
    });
  };
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.12&appId=333965297125110&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>