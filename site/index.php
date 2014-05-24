<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zigna web <?=$_GET["lang"]?></title>
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
    <header class="Gotproyect">
        <div class="centerMiddle">
            <h2>¿Tenés un proyecto? <br> ¡Estamos listos para desarrolarlo!</h2>
            <p>Brindamos soluciones integrales y a medida para el desarrollo de sitios y portales web, aplicaciones para celulares y diseño gráfico impreso.</p>
            <nav class="bullets animate">
                <ol>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/print/"><img src="http://www.zigna.com.ar/r/img/iconos/servicios/design.png" alt="diseño"><span>Diseño Impreso</span></a></li>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/apps/"><img src="http://www.zigna.com.ar/r/img/iconos/servicios/apps.png" alt="diseño"><span>Aplicaciones</span></a></li>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/web/"><img src="http://www.zigna.com.ar/r/img/iconos/servicios/web.png" alt="diseño"><span>Web</span></a></li>
                </ol>
            </nav>
        </div>
    </header>
    <article class="parrafos">
        <div>
        	<h4>Diseño</h4>
          <p>Creamos experiencias atractivas y funcionales para tus proyectos. No importa cuán complejo sea el desafío, nuestras soluciones lo harán destacar entre sus competidores.</p>
        </div>
        <div>
        	<h4>Desarrollo</h4>
          <p>Trabajamos siguiendo los últimos estándares tecnológicos y manteniendo rigurosos controles de calidad, garantizando que tus proyectos tendrán el alcance y potencial que necesitas.</p>
        </div>        
        <div>
          <h4>Seguimiento</h4>
          <p>Hacemos estudios de desempeño de nuestros productos para determinar ajustes de estrategia y diseño en timepo real y así maximizar el potencial de tus proyectos.</p>
        </div>
    </article>
    <article class="parrafos animate">
    	<h3>Decinos cómo podemos ayudarte</h3>
      <p>Si tenés una consulta no dudes en comunicarte con nosotros</p>
      <div class="viasItem">
        <div class="bubble"><img src="http://www.zigna.com.ar/r/img/iconos/viasDeContacto/presu.png" alt="Presupuestos"></div>
        <h5>¿Necesitas un presupuesto?</h5>
        <p>Decinos que necesitás o que proyecto tenés en mente y nos pondremos en contacto para definir un presupuesto.</p>
        <a class="boton" href="http://www.zigna.com.ar/<?=$lang?>/quote/">Comenzar un presupuesto</a>
      </div>
      <div class="viasItem">
        <div class="bubble"><img src="http://www.zigna.com.ar/r/img/iconos/viasDeContacto/touch.png" alt=""></div>
        <h5>Mantenete en contacto</h5>
        <p>Formas para cominicarte con nosotros.</p>
        <ol>
          <li><a href="tel:+543513202754">+54 351 6770122</a></li>
          <li><a href="mailto:info@zigna.com.ar">info@zigna.com.ar</a></li>
          <li><a href="https://www.facebook.com/ZignaDesign">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
        </ol>
      </div>
      <div class="viasItem">
        <div class="bubble">$</div>
        <h5>¿Necesitas un presupuesto?</h5>
        <p>Usa este formulario para decirnos que necesitas.</p>
        <a href="#">Comenzar ahora</a>
      </div>
    </article>
    <article class="parrafos gris">
        <h3>Te ofrecemos</h3>
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

<? include('r/pageBlocks/footer.php'); ?>
</body>
</html>
