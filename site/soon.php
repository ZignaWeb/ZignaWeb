<? 
include ("setup.php");

$host = "http://".$_SERVER["HTTP_HOST"];
$page = $_SERVER["REQUEST_URI"];
$curUrl = "$host$page";
if (!isset($lang)) {$lang="es";}

function changeLang ($cual) {
	global $host;
	global $curUrl;
	$patron[0]="#(zigna.com.ar\/[a-z]{2}\/)#";
	$replace[0]="zigna.com.ar/$cual/";
	return preg_replace($patron,$replace,$curUrl);
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zigna web <?=$_GET["lang"]?></title>
<meta name="description" content="">
<link href="<?=$base_url?>r/css/css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=$base_url?>favicon.ico">
<script src="<?=$base_url?>r/js/jquery.js"></script>
<script src="<?=$base_url?>r/js/jquery-ui.js"></script>
<script src="<?=$base_url?>r/js/modernizr.js"></script>
<script src="<?=$base_url?>r/js/local.js"></script>
<style>
.viasItem.Soon {
	margin-left:35%
}
@media only screen and (max-width: 700px) {
	.viasItem.Soon {
	margin-left: 0;
}
}
</style>
</head>

<body id="soon">
<section class="Gotproyect showtime noPad">


    	<article class="parrafos animate">
      <h1 style="text-align:center"><img src="r/img/logo.png" alt="zigna diseño, web, software"></h1>
      <h2 style="text-align:center">Zigna</h2>
    	<h3>Estamos terminando de construir el sitio</h3>
      <p>Brindamos soluciones integrales y a medida para el desarrollo de sitios y portales web, aplicaciones para celulares y diseño gráfico.</p>
      <div class="viasItem Soon">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/touch.png" alt=""></div>
        <h5>Proyectos o consultas</h5>
        <p>Escribinos y te respondemos lo antes posible.</p>
        <ol>
          <li><a href="mailto:info@zigna.com.ar">info@zigna.com.ar</a></li>
        </ol>
      </div>
    </article>
    <article class="parrafos gris">
        <div>
        	<h4>Diseño web</h4>
          <p>Trabajamos siguiendo los últimos estándares y tecnologías, garantizando calidad, desempeño y versatilidad. Buscamos brindarte soluciones integrales encargándonos incorporar, mantener y aumentar tu presencia en la web brindando alojamiento para tus sitios, optimizándolos para que se los encuentre fácilmente y monitoreando su desempeño para fortalecer estrategias de marketing. Así garantizamos que tu web se destacará estéticamente, será capáz de alcanzar tu audiencia sin importar el medio por que la visiten y hará tus contenidos accesibles mediante una interfaz intuitiva.</p>
        </div>
        <div>
        	<h4>Diseño de aplicaciones para celulares</h4>
          <p>Las aplicaciones para celulares provaron ser un medio excelente para comuicar y brindar servicios enfocados en el usuario. Nuestro equipo está para ayudarte a acceder a estas tecnologías y aproverchar todo el potencial que las plataformas de Android y iOS (iPhone/iPad) pueden brindar a tus emprendimientos.</p>
        </div>        
        <div>
          <h4>Diseño gráfico</h4>
          <p>Es vital para toda empresa, podemos brinderte soluciones de diseño de identidad, editorial, papelería, cartelería y señalética. Podemos diferenciarte de tu competencia y fortalecer tu identidad con propuestas innovadoras y estratégicas.</p>
        </div>
    </article>
</section>
</body>
</html>