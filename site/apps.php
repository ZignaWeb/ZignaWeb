<? include ("setup.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aplicaciones - Zigna</title>
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
      	<h2>Apps</h2>
        <p>Convertimos tus ideas y proyectos en aplicaciones móbiles para teléfonos y tablets.</p>
      </div>
    </header>
    <article class="parrafos">
    	<h3>Las teconologías móbiles tienen cada vez mayor importancia en nuestras vidas.</h3>
      <div>
      	<p>Las aplicaciones para teléfonos y tablets están tomando un rol cada vez mas importante en nuestras vidas. Cada vez más gente tiene acesos a estas tecnologías que les permite tener acceso a entretenimiento e información desde sus dispositivos móbiles, dondequiera que estén.</p>
      </div>
      <div>
      	<p>Podemos materializar tus proyectos y darles vida en las principales plataformas móbiles: Android, iOS, Windows, BlackBery. Asegurándo que esté disponible siempre y para todos. Nuestro equipo de diseño y desarrollo de aplicaciones</p>
      </div>
      <div>
      	<p>Si estás pensando en crear tu propia aplicación móbil, contanos acerca de tu proyecto. Queremos en darle vida a tus ideas.</p>
      </div>
      
      <div class="textCenter">
	      <a class="boton" href="<?=$base_url?><?=$lang?>/apps/services/">Servicios específicos de apps mobiles</a>
      </div>
      <div class="textCenter">
	      <!--<a class="boton" href="<?=$base_url?><?=$lang?>/design/paquetes/">Ver nuestras promociones</a>!-->
      </div>
      <div class="textCenter">
	      <a class="boton" href="<?=$base_url?><?=$lang?>/apps/consultas/">Consultas y presupuestos de apps</a>
      </div>
      
    </article>
    <article class="parrafos animate">
    	<h3>showroom de apliaciones</h3>
      <ol class="galleryBubbles portfolio bajada animate">
      	<li>
        	<a href="<?=$base_url?><?=$lang?>/apps/portfolio/fabrizzi/">
          	<img src="<?=$base_url?>r/temporales/web-portfolio/silenzio.jpg">
          </a>
          <div class="desc">
            <h3>Cleinte A</h3>
            <p><span>Papelería</span> <span>Señalética</span></p>
            <a href="<?=$base_url?><?=$lang?>/design/portfolio/clientea/">Ver proyecto</a>
          </div>
        </li>
        <li>
        	<a href="<?=$base_url?><?=$lang?>/apps/portfolio/gn5/">
          	<img src="<?=$base_url?>r/temporales/web-portfolio/gn5.jpg">
          </a>
          <div class="desc">
            <h3>Gallerynine 5</h3>
            <p><span>HTML5</span> <span>CSS3</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span></p>
            <a href="<?=$base_url?><?=$lang?>/design/portfolio/gn5/">Ver proyecto</a>
          </div>
        </li>
        <li>
        	<a href="<?=$base_url?><?=$lang?>/apps/portfolio/mercadito/">
          	<img src="<?=$base_url?>r/temporales/web-portfolio/mercadito.jpg">
          </a>
          <div class="desc">
            <h3>Mercadito del Cerro</h3>
            <p><span>HTML5</span> <span>CSS3</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span> <span>Chat</span> <span>Hosting</span></p>
            <a href="<?=$base_url?><?=$lang?>/apps/portfolio/mercadito/">Ver proyecto</a>
          </div>
        </li>
      </ol>
      <div class="mergeColumns textCenter">
      	<a class="boton center" href="<?=$base_url?><?=$lang?>/apps/portfolio/">Ver nuestro portfilio de aplicaiones</a>
    </article>
    
</section>

<? include('r/pageBlocks/footer.php'); ?>
</body>

</html>