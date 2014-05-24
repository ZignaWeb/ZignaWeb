<? include ("setup.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Servicios Apps - Zigna</title>
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
      	<h2>Desarrollamos y diseñamos aplicaciones móbiles</h2>
        <p>Podemos potenciar y dar vida a tus proyectos para tablest y celulares.</p>
      </div>
    </header>
    <article class="parrafos animate">
      <div class="viasItem">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/diseweb.png" alt="Presupuestos"></div>
        <h5>Multiplataforma</h5>
        <p>Diseñamos y desarrollamos para las plataformas más importantes del mercado:</p>
        <ol>
        	<li>Android</li>
          <li>iOS: iPad, iPhone</li>
          <li>Windows</li>
          <li>Black Berry</li>
        </ol>
        <!--<a class="boton center" href="<?=$base_url?><?=$lang?>/web/services/design/">Ver más</a>-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/desarrollo.png" alt="Presupuestos"></div>
        <h5>Markets</h5>
        <p>Te asesoramos y publicamos las apps en las plataformas de distribución de las didstintas marcas.</p>
        <ol>
        	<li>Google Play</li>
          <li>Market</li>
          <li>Windows</li>
          <li>App World</li>
        </ol>
        <!--<a class="boton" href="<?=$base_url?><?=$lang?>/web/services/develop/">Ver más</a>-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/presu.png" alt="Presupuestos"></div>
        <h5>Manejo de contenidos</h5>
        <p>Te damos control sobre los contenidos de tu app e independia para mantenerla actualizada:</p>
        <ol>
        	<li>Soluciones a medida de tu proyecto</li>
          <li>Actualizaciones programadas</li>
          <li>Comportamientos programados</li>
        </ol>
        <!--<a class="boton" href="<?=$base_url?><?=$lang?>/web/services/deploy/">Ver más</a>!-->
      </div>
      
      <div class="viasItem">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/seguimiento.png" alt="Presupuestos"></div>
        <h5>Interacción e informes</h5>
        <p>Podrás interactuar con los usuarios de tu aplicación y ver cómo la usan.</p>
        <ol>
        	<li>Mensajes, alertas, reservas, etc</li>
          <li>Estadísticas</li>
          <li>Informes de uso</li>
        </ol>
        <!--<a class="boton" href="<?=$base_url?><?=$lang?>/web/services/monitoring/">Ver más</a>-->
      </div>
      
    </article>      
</section>

<? include('r/pageBlocks/footer.php'); ?>
</body>
</html>
