<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Portfolio Web - Zigna</title>
<meta name="description" content="">
<link href="http://www.zigna.com.ar/r/css/css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="http://www.zigna.com.ar/favicon.ico">
<script src="http://www.zigna.com.ar/r/js/jquery.js"></script>
<script src="http://www.zigna.com.ar/r/js/jquery-ui.js"></script>
<script src="http://www.zigna.com.ar/r/js/modernizr.js"></script>
<script src="http://www.zigna.com.ar/r/js/local.js"></script>
</head>

<body id="index">
<? include('r/pageBlocks/header.php'); ?>

<section class="Gotproyect showtime noPad">
	<canvas class="canvas" data-relativeto="Gotproyect" id="myCanvas" style="position:absolute;" width="1000" height="120"></canvas>
	<header>
      <div class="centerMiddle">
      	<h2>Paginas web desarroladas por nosotros</h2>
        <p>Estos son algunos de los sitios que desarrollamos en Zigna.</p>
      </div>
    </header>
    <article class="parrafos">
      <ol class="galleryBubbles portfolio bajada animate">
      	<li>
        	<a href="http://www.zigna.com.ar/<?=$lang?>/web/portfolio/fabrizzi/">
          	<img src="http://www.zigna.com.ar/r/temporales/web-portfolio/silenzio.jpg">
          </a>
          <div class="desc">
            <h3>Silenzio</h3>
            <p><span>HTML</span> <span>CSS</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span></p>
            <a href="http://www.zigna.com.ar/<?=$lang?>/web/portfolio/fabrizzi/">Ver</a>
          </div>
        </li>
        <li>
        	<a href="http://www.zigna.com.ar/<?=$lang?>/web/portfolio/gn5/">
          	<img src="http://www.zigna.com.ar/r/temporales/web-portfolio/gn5.jpg">
          </a>
          <div class="desc">
            <h3>Gallerynine 5</h3>
            <p><span>HTML5</span> <span>CSS3</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span></p>
            <a href="http://www.zigna.com.ar/<?=$lang?>/web/portfolio/gn5/">Ver</a>
          </div>
        </li>
        <li>
        	<a href="http://www.zigna.com.ar/<?=$lang?>/web/portfolio/mercadito/">
          	<img src="http://www.zigna.com.ar/r/temporales/web-portfolio/mercadito.jpg">
          </a>
          <div class="desc">
            <h3>Mercadito del Cerro</h3>
            <p><span>HTML5</span> <span>CSS3</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span> <span>Chat</span> <span>Hosting</span></p>
            <a href="http://www.zigna.com.ar/<?=$lang?>/web/portfolio/mercadito/">Ver</a>
          </div>
        </li>
      </ol>
    </article>
      
</section>

<? include('r/pageBlocks/footer.php'); ?>
</body>
</html>
