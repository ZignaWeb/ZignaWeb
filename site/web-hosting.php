<? include ("setup.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web Hosting - Zigna</title>
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
      	<h2>Hosting de sitios</h2>
        <p>Te damos el hosting para tu web y nos aseguramos que funcione siempre.</p>
      </div>
    </header>
    
    <article class="parrafos animate">
    	<div>
	    	<p>Cuando contratás hosting con nosotros te damos soluciones para que puedas tener la web que querés. Nosotros nos preocupamos de los aspectos técnicos para asegurarnos de que tengas el espacio, ancho de banda y hardware necesario para tu proyecto.</p>
      </div>
      <div>
	    	<p>Nuestro servicio incluye todos las características que esperarías de las grandes companías de hosting internacionales. Garantizamos nuestro servicio y te aseguramos compatibilidad con las más portentes herramientas de desarrollo en la actualidad.</p>
      </div>
      <div>
	    	<p>x.</p>
      </div>
      <div class="viasItem">
        <div class="bubble"><img src="<?=$base_url?>r/img/iconos/viasDeContacto/diseweb.png" alt="Presupuestos"></div>
        <h5>Planes dinámicos</h5>
        <p>Nuestro sistema nos permite darte el espacio que necesitas para que tner la web wue querés. Esto quiere decir que si necesitas más espacio o ancho de banda dentro de tu categroría adaptamos tu plan automáticamente.</p>
        <ol>
        	<li>Espacio dinámico</li>
          <li>Ancho de banda dinámico</li>
          <li>Cuentas de email ilimitadas</li>
          <li>Subdominios ilimitados</li>
          <li>Cuentas de email ilimitadas</li>
        </ol>
        <!--<a class="boton center" href="<?=$base_url?><?=$lang?>/web/services/design/">Ver más</a>-->
      </div>
    </article> 
    
    <article class="parrafos animate gris">
    	<div>
        <h4>Calidad de servicio</h4>
        <p>Nos encargamos de verificar constantemente el correcto funcionamiento de nuestros servidores lo que nos permite corregir cualquier problema sin pérdidas de tiempo automáticamente. Nuestro equipo técnico está altamente calificado y consta de años de experiencia en el rubro, así que no hay problema que no podamos solucionar. Nosotros no sobrevendemos nuestro servicio, porque es la única forma de asegurar su calidad.</p>
      </div>
      <div>
        <h4>Tecnología</h4>
        <p>Nuestros datacenters están equipados con servidores de última generación (Dual 5530 Gainstown, con 8 núcleos; discos configurados en RAID-10, y 8 GB de RAM como mínimo). Tus datos están seguros con nosotros y disponibles al mundo 24/7/365. Brindamos soporte para los lenguajes de programación más potentes (PHP 5.2, 5.3 & 5.4, MySQL 5, Ruby on Rails (Ruby 1.8.7 & Rails 2.3.3), Python 2.3, 2.4, 2.6 & 3.0 and Perl 5.8) y proveemos todo lo que esperarías de los mejores proveedores de hosting.</p>
      </div>        
      <div>
        <h4>Garantía</h4>
        <p>Si no estás conforme con nuestro servicio en 30 días te reintegramos tu dinero, sin preguntas ni problemas.</p>
      </div>
    </article>      
</section>

<? include('r/pageBlocks/footer.php'); ?>
</body>
</html>
