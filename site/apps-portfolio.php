<? include ("setup.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Portfolio Aplicaiones - Zigna</title>
<meta name="description" content="">
<link href="<?=$base_url?>r/css/css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?=$base_url?>favicon.ico">
<script src="<?=$base_url?>r/js/jquery.js"></script>
<script src="<?=$base_url?>r/js/jquery-ui.js"></script>
<script src="<?=$base_url?>r/js/modernizr.js"></script>
<script src="<?=$base_url?>r/js/local.js"></script>
</head>

<body id="index">
<? 
include('r/pageBlocks/header.php');

if (!isset($_GET["name"])) {
?>

<section class="Gotproyect showtime noPad">
	<canvas class="canvas" data-relativeto="Gotproyect" id="myCanvas" style="position:absolute;" width="1000" height="120"></canvas>
	<header>
      <div class="centerMiddle">
      	<h2>Aplicaiones para dispositivos móbiles</h2>
        <p>Estas son una selección de la aplicaciones que realizamos en Zigna.</p>
      </div>
    </header>
    <article class="parrafos">
      <ol class="galleryBubbles portfolio bajada animate">
      	<li>
        	<a href="<?=$base_url?><?=$lang?>/apps/portfolio/silenzio/">
          	<img src="<?=$base_url?>r/temporales/web-portfolio/silenzio.jpg">
          </a>
          <div class="desc">
            <h3><span>Silenzio</span></h3>
            <p><span>HTML</span> <span>CSS</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span> <span>Diseño:Madrid</span></p>
            <a href="<?=$base_url?><?=$lang?>/apps/portfolio/silenzio/">Ver proyecto</a>
          </div>
        </li>
        <li>
        	<a href="<?=$base_url?><?=$lang?>/apps/portfolio/gn5/">
          	<img src="<?=$base_url?>r/temporales/web-portfolio/gn5.jpg">
          </a>
          <div class="desc">
            <h3><span>Gallerynine 5</span></h3>
            <p><span>HTML5</span> <span>CSS3</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span></p>
            <a href="<?=$base_url?><?=$lang?>/apps/portfolio/gn5/">Ver proyecto</a>
          </div>
        </li>
        <li>
        	<a href="<?=$base_url?><?=$lang?>/apps/portfolio/mercadito/">
          	<img src="<?=$base_url?>r/temporales/web-portfolio/mercadito.jpg">
          </a>
          <div class="desc">
            <h3><span>Mercadito del Cerro</span></h3>
            <p><span>HTML5</span> <span>CSS3</span> <span>jQuery</span> <span>CMS</span> <span>Responsive</span> <span>Chat</span> <span>Hosting</span></p>
            <a href="<?=$base_url?><?=$lang?>/apps/portfolio/mercadito/">Ver proyecto</a>
          </div>
        </li>
      </ol>
    </article>
      
</section>

<? 
}else{
$name=strip_tags($_GET["name"]);
?>

<section class="Gotproyect showtime noPad">
	<canvas class="canvas" data-relativeto="Gotproyect" id="myCanvas" style="position:absolute;" width="1000" height="120"></canvas>
	<header>
      <div id="portfolioHeader" class="centerMiddle" style="background-image:url(<?=$base_url?>r/temporales/web-portfolio/gn5mouckup.png);">
      </div>
    </header>
    <div class="centerMiddle">
      <h3><?=$name?></h3>
      <p>Estos son algunos de los diseños que desarrollamos en Zigna.</p>
    </div>
    <article class="parrafos">
    </article>
      
</section>

<?

}

include('r/pageBlocks/footer.php'); ?>
</body>
</html>
