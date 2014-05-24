<? include ("setup.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web - Zigna</title>
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
      	<h2>Soluciones para que Internet trabaje para vos</h2>
        <p>Ofrecemos planes de desarrollo estratégicos para tus proyectos y potenciamos su presencia en Internet.</p>
      </div>
    </header>
    <article class="parrafos">
    	<h3>Hay muchas formas en que una presencia sólida en Internet puede hacer la diferencia para tu proyecto.</h3>
      <div>
      	<p>Hoy en día más y más consumidores usan Internet para buscar productos y services. Internet permite manter contacto permanente con tus usuarios o clientes y es una vía excelente para mantenerlos involucrados e informados. Un sitio diseñado y desarrollado por profesionales te permite ser encontrado fácilmente a toda hora y desde cualquier lugar, aumentando y mejorando la competividad e imagen de tu emprendimiento.</p>
      </div>
      <div>
      	<p>Usamos las últimas herramientas y tecnologías para poder brindarte todos los beneficios que la Web tiene para ofrecer. Creamos sitios adaptativos a todos los dispositivos (pcs/tablets/celulares) y diseñamos experiencias web a medida de tus necesidades y de tu público. Te brindamos control total de tus contenidos, seguimiento y estadísticas de desempeño, integración con las redes sociales, etc.</p>
      </div>
      <div>
      	<p>Nuestra misión es poner a tu alcanze soluciones integrales a tus proyectos. Ponete en contacto con nosotros y disfruta de tu web, nosotros nos ocupamos del resto.</p>
      </div>
      
      <div class="textCenter">
	      <a class="boton" href="<?=$base_url?><?=$lang?>/web/services/">Ver servicios web</a>
      </div>
      <div class="textCenter">
	      <a class="boton" href="<?=$base_url?><?=$lang?>/web/paquetes/">Ver nuestras promociones</a>
      </div>
      <div class="textCenter">
	      <a class="boton" href="<?=$base_url?><?=$lang?>/web/consultas/">Consultas y presupuestos</a>
      </div>
      
    </article>
    <article class="parrafos animate">
    	<h3>Algunos de nuestros sitios</h3>
      <ol class="galleryBubbles portfolio bajada animate">
      	<li>
        	<a href="<?=$base_url?><?=$lang?>/web/portfolio/fabrizzi/">
          	<img src="<?=$base_url?>r/temporales/web-portfolio/silenzio.jpg">
          </a>
          <div class="desc">
            <h3>Silenzio</h3>
            <p><span>HTML</span> <span>CSS</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span></p>
            <a href="<?=$base_url?><?=$lang?>/web/portfolio/fabrizzi/">Ver proyecto</a>
          </div>
        </li>
        <li>
        	<a href="<?=$base_url?><?=$lang?>/web/portfolio/gn5/">
          	<img src="<?=$base_url?>r/temporales/web-portfolio/gn5.jpg">
          </a>
          <div class="desc">
            <h3>Gallerynine 5</h3>
            <p><span>HTML5</span> <span>CSS3</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span></p>
            <a href="<?=$base_url?><?=$lang?>/web/portfolio/gn5/">Ver proyecto</a>
          </div>
        </li>
        <li>
        	<a href="<?=$base_url?><?=$lang?>/web/portfolio/mercadito/">
          	<img src="<?=$base_url?>r/temporales/web-portfolio/mercadito.jpg">
          </a>
          <div class="desc">
            <h3>Mercadito del Cerro</h3>
            <p><span>HTML5</span> <span>CSS3</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span> <span>Chat</span> <span>Hosting</span></p>
            <a href="<?=$base_url?><?=$lang?>/web/portfolio/mercadito/">Ver proyecto</a>
          </div>
        </li>
      </ol>
      <div class="mergeColumns textCenter">
      	<a class="boton center" href="<?=$base_url?><?=$lang?>/web/portfolio/">Ver nuestro portfilio web</a>
    </article>
    
</section>

<? include('r/pageBlocks/footer.php'); ?>
</body>
</html>
