<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web - Zigna</title>
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
      	<h2>Pedinos un presupuesto</h2>
        <p>Estamos listos para comenzar a trabajar, decinos que necesitás y nos comunicaremos con vos lo antes posible.</p>
      </div>
    </header>
    <article class="parrafos">
    	<h3>Describí tu proyecto y condiciones aqui</h3>
      <form action="<?=$curUrl?>" method="post">
      	<h2>Datos personales</h2>
      	<input name="name" placeholder="Nombre">
        <input name="email" placeholder="Tu dirección de email">
        <input name="phone" placeholder="Teléfono">
        <h2>Tipo de proyecto</h2>
        <label><input type="checkbox" value="web">Sitio web</label>
        <label><input type="checkbox" value="app">Aplicación</label>
        <label><input type="checkbox" value="design">Gráfica</label>
        <label><input type="checkbox" value="other">Otro proyecto</label>
        <h2>Breve descripción</h2>
        <textarea name="desc" placeholder="Comentanos de que se trata tu proyecto"></textarea>
        <h2>Qué necesitas</h2>
        <label><input type="checkbox" value="web">Estrategia</label>
        <label><input type="checkbox" value="app">Diseño</label>
        <label><input type="checkbox" value="design">Desarrollo</label>
        <label><input type="checkbox" value="other">Gestión de contenidos</label>
        <label><input type="checkbox" value="other">No estoy seguro</label>
        <h2>Fecha ideal para comenzar</h2>
        <input name="from_month" placeholder="Ingresa el mes">
        <input name="from_year" placeholder="Ingresa el año">
        <label><input type="checkbox" value="web">Sin mucho apuro</label>
        <h2>Fecha ideal para terminar</h2>
        <input name="to_month" placeholder="Ingresa el mes">
        <input name="to_year" placeholder="Ingresa el año">
        <label><input type="checkbox" value="web">Cuando esté terminado</label>
        <h2>¿Estás conforme con esta consulta?</h2>
        <input type="submit" value="Si">
      </form>
    </article>    
</section>

<? include('r/pageBlocks/footer.php'); ?>
</body>
</html>
