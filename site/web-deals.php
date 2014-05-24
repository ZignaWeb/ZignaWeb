<? include ("setup.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Paquetes Web - Zigna</title>
<meta name="description" content="">
<link href="<?=$base_url?>r/css/css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=$base_url?>favicon.ico">
<script src="<?=$base_url?>r/js/jquery.js"></script>
<script src="<?=$base_url?>r/js/jquery-ui.js"></script>
<script src="<?=$base_url?>r/js/modernizr.js"></script>
<script src="<?=$base_url?>r/js/local.js"></script>
</head>

<body id="index">
<? include('r/pageBlocks/header.php'); ?>

<section class="Gotproyect showtime noPad">
	<canvas class="canvas" data-relativeto="Gotproyect" id="myCanvas" style="position:absolute;" width="1000" height="120"></canvas>
	<header>
      <div class="centerMiddle">
      	<h2>Servicios web</h2>
        <p>Brindamos soluciones integrales para tus proyectos en la web.</p>
      </div>
    </header>
    <article class="parrafos animate">
      <div class="viasItem">
        <div class="bubble"><img src="http://www.zigna.com.ar/r/img/iconos/viasDeContacto/diseweb.png" alt="Presupuestos"></div>
        <h5>Diseño web</h5>
        <p>Diseñamos experiencias atrapantes y memorables para tus visitantes:</p>
        <ol>
        	<li>Estéticas innovadoras y funcioanles</li>
          <li>UI/UX</li>
          <li>Diseños para multiples dispositivos.</li>
        </ol>
        <!--<a class="boton center" href="http://www.zigna.com.ar/<?=$lang?>/web/services/design/">Ver más</a>-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="http://www.zigna.com.ar/r/img/iconos/viasDeContacto/desarrollo.png" alt="Presupuestos"></div>
        <h5>Desarrollo</h5>
        <p>Tenemos las herramientas técnicas para materializar tus ideas:</p>
        <ol>
        	<li>HTML5 y CSS3</li>
          <li>JavaScript / jQuery</li>
          <li>PHP / MySQL</li>
        </ol>
        <!--<a class="boton" href="http://www.zigna.com.ar/<?=$lang?>/web/services/develop/">Ver más</a>-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="http://www.zigna.com.ar/r/img/iconos/viasDeContacto/presu.png" alt="Presupuestos"></div>
        <h5>Implementación</h5>
        <p>Te damos todo lo que encesitas para tner tu web online.</p>
        <ol>
        	<li>Migración de sitios existentes</li>
          <li>Hosting y manteniemiento</li>
          <li>Setup: cuentas de email, subdominios, etc</li>
        </ol>
        <!--<a class="boton" href="http://www.zigna.com.ar/<?=$lang?>/web/services/deploy/">Ver más</a>!-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="http://www.zigna.com.ar/r/img/iconos/viasDeContacto/seguimiento.png" alt="Presupuestos"></div>
        <h5>Seguimiento</h5>
        <p>Te brindamos información sobre el desempeño de tu sitio.</p>
        <ol>
        	<li>Monitoreo</li>
          <li>Estadísticas</li>
          <li>Informes por email</li>
        </ol>
        <!--<a class="boton" href="http://www.zigna.com.ar/<?=$lang?>/web/services/monitoring/">Ver más</a>-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="http://www.zigna.com.ar/r/img/iconos/viasDeContacto/cms.png" alt="Presupuestos"></div>
        <h5>Gestión de contenidos</h5>
        <p>Te damos la posibilidad de mantener tu contenido actualizado.</p>
        <ol>
        	<li>Soluciones a medida con nuestra propia plataforma</li>
          <li>Actualizaciones programadas</li>
          <li>Wordpress/Joomla/Moodle/etc</li>
        </ol>
        <!--<a class="boton" href="http://www.zigna.com.ar/<?=$lang?>/web/services/cms/">Ver más</a>-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="http://www.zigna.com.ar/r/img/iconos/viasDeContacto/touch.png" alt="Presupuestos"></div>
        <h5>Marketing</h5>
        <p>Ponemos a tu alcance todos los medios para conectarte con tus clientes</p>
        <ol>
        	<li>Integramos tu sitio a las redes sociales</li>
          <li>Email marketing</li>
          <li>Newsletters</li>
        </ol>
        <!--<a class="boton" href="http://www.zigna.com.ar/<?=$lang?>/web/services/marketing/">Ver más</a>-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="http://www.zigna.com.ar/r/img/iconos/viasDeContacto/packages.png" alt="Presupuestos"></div>
        <h5>Paquetes</h5>
        <p>Ofrecemos planes para cada necesidad</p>
        <ol>
        	<li>Express: informativo</li>
          <li>eShop: venta online</li>
          <li>Platinum: corporativo </li>
        </ol>
        <!--<a class="boton" href="http://www.zigna.com.ar/<?=$lang?>/web/services/deals/">Ver más</a>-->
      </div>
    </article>      
</section>

<? include('r/pageBlocks/footer.php'); ?>
</body>
</html>
