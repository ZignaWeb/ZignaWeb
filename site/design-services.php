<? include ("setup.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Servicios Diseño - Zigna</title>
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
      	<h2>Nuestra oferta en diseño</h2>
        <p>Podemos hacernos cargo de cualquier projecto de diseño gráfico, ya sea impreso o digital.</p>
      </div>
    </header>
    <article class="parrafos animate">
      <div class="viasItem">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/diseweb.png" alt="Presupuestos"></div>
        <h5>Identidad</h5>
        <p>Texto a:</p>
        <ol>
        	<li>Bullet a</li>
          <li>Bullet b</li>
          <li>Bullet c</li>
        </ol>
        <!--<a class="boton center" href="<?=$base_url?><?=$lang?>/web/services/design/">Ver más</a>-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/desarrollo.png" alt="Presupuestos"></div>
        <h5>Editorial</h5>
        <p>texto b:</p>
        <ol>
        	<li>Diseño de libros, diarios y revistas</li>
          <li>Seguimiento de impresión</li>
          <li>Bullet c</li>
        </ol>
        <!--<a class="boton" href="<?=$base_url?><?=$lang?>/web/services/develop/">Ver más</a>-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/presu.png" alt="Presupuestos"></div>
        <h5>Implementación</h5>
        <p>Te damos todo lo que encesitas para tner tu web online.</p>
        <ol>
        	<li>Migración de sitios existentes</li>
          <li>Hosting y manteniemiento</li>
          <li>Setup: cuentas de email, subdominios, etc</li>
        </ol>
        <!--<a class="boton" href="<?=$base_url?><?=$lang?>/web/services/deploy/">Ver más</a>!-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/seguimiento.png" alt="Presupuestos"></div>
        <h5>Seguimiento</h5>
        <p>Te brindamos información sobre el desempeño de tu sitio.</p>
        <ol>
        	<li>Monitoreo</li>
          <li>Estadísticas</li>
          <li>Informes por email</li>
        </ol>
        <!--<a class="boton" href="<?=$base_url?><?=$lang?>/web/services/monitoring/">Ver más</a>-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/cms.png" alt="Presupuestos"></div>
        <h5>Gestión de contenidos</h5>
        <p>Te damos la posibilidad de mantener tu contenido actualizado.</p>
        <ol>
        	<li>Soluciones a medida con nuestra propia plataforma</li>
          <li>Actualizaciones programadas</li>
          <li>Wordpress/Joomla/Moodle/etc</li>
        </ol>
        <!--<a class="boton" href="<?=$base_url?><?=$lang?>/web/services/cms/">Ver más</a>-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/touch.png" alt="Presupuestos"></div>
        <h5>Marketing</h5>
        <p>Ponemos a tu alcance todos los medios para conectarte con tus clientes</p>
        <ol>
        	<li>Integramos tu sitio a las redes sociales</li>
          <li>Email marketing</li>
          <li>Newsletters</li>
        </ol>
        <!--<a class="boton" href="<?=$base_url?><?=$lang?>/web/services/marketing/">Ver más</a>-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/packages.png" alt="Presupuestos"></div>
        <h5>Paquetes</h5>
        <p>Ofrecemos planes para cada necesidad</p>
        <ol>
        	<li>Express: informativo</li>
          <li>eShop: venta online</li>
          <li>Platinum: corporativo </li>
        </ol>
        <!--<a class="boton" href="<?=$base_url?><?=$lang?>/web/services/deals/">Ver más</a>-->
      </div>
    </article>      
</section>

<? include('r/pageBlocks/footer.php'); ?>
</body>
</html>
