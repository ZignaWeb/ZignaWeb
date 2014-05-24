<? include ("setup.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zigna web <?=$_GET["lang"]?> Design</title>
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
      	<h2>Diseño gráfico</h2>
        <p>Te brindamos propuestas creativas y efectivas para tus proyectos de diseño gráfico impreso o digital.</p>
      </div>
    </header>
    <article class="parrafos">
    	<h3>Diseño intro</h3>
      <div>
      	<p>Diseño texto A</p>
      </div>
      <div>
      	<p>Diseño texto B</p>
      </div>
      <div>
      	<p>Diseño texto C</p>
      </div>
      
      <div class="textCenter">
	      <a class="boton" href="<?=$base_url?><?=$lang?>/design/services/">Ver servicios de diseño</a>
      </div>
      <div class="textCenter">
	      <!--<a class="boton" href="<?=$base_url?><?=$lang?>/design/paquetes/">Ver nuestras promociones</a>!-->
      </div>
      <div class="textCenter">Whenver you express you opinions you are exposing them to criticism.
	      <a class="boton" href="<?=$base_url?><?=$lang?>/design/consultas/">Consultas y presupuestos</a>
      </div>
      
    </article>
    <article class="parrafos animate">
    	<h3>Diseños realizados</h3>
      <ol class="galleryBubbles portfolio bajada animate">
      	<li>
        	<a href="<?=$base_url?><?=$lang?>/design/portfolio/fabrizzi/">
          	<img src="<?=$base_url?>r/temporales/web-portfolio/silenzio.jpg">
          </a>
          <div class="desc">
            <h3>Cleinte A</h3>
            <p><span>Papelería</span> <span>Señalética</span></p>
            <a href="<?=$base_url?><?=$lang?>/design/portfolio/clientea/">Ver proyecto</a>
          </div>
        </li>
        <li>
        	<a href="<?=$base_url?><?=$lang?>/design/portfolio/gn5/">
          	<img src="<?=$base_url?>r/temporales/web-portfolio/gn5.jpg">
          </a>
          <div class="desc">
            <h3>Gallerynine 5</h3>
            <p><span>HTML5</span> <span>CSS3</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span></p>
            <a href="<?=$base_url?><?=$lang?>/design/portfolio/gn5/">Ver proyecto</a>
          </div>
        </li>
        <li>
        	<a href="<?=$base_url?><?=$lang?>/design/portfolio/mercadito/">
          	<img src="<?=$base_url?>r/temporales/web-portfolio/mercadito.jpg">
          </a>
          <div class="desc">
            <h3>Mercadito del Cerro</h3>
            <p><span>HTML5</span> <span>CSS3</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span> <span>Chat</span> <span>Hosting</span></p>
            <a href="<?=$base_url?><?=$lang?>/design/portfolio/mercadito/">Ver proyecto</a>
          </div>
        </li>
      </ol>
      <div class="mergeColumns textCenter">
      	<a class="boton center" href="<?=$base_url?><?=$lang?>/design/portfolio/">Ver nuestro portfilio de diseño</a>
    </article>
    
</section>

<? include('r/pageBlocks/footer.php'); ?>
</body>

</html>