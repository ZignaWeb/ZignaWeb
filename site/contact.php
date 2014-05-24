<? 
include ("setup.php"); 

$gets=getGET();
$getn=count($gets);
if($getn>0){
	if(isset($gets["a"])){
		if($gets["a"]["www"]=="p"){
			$cCheck="";
			$pCheck="checked";
			if(isset($gets["q"])){
				if ($gets["q"]["www"]=="web") {
					$webCheck="checked";	$appCheck="";	$disCheck="";
					$title="Presupuesto para desarrollo web";
					$bajad="¿Cómo querrías que tu web sea? Danos todos los detalles y te la presupuestamos.";
				}elseif ($gets["q"]["www"]=="apps") {
					$webCheck="";	$appCheck="checked";	$disCheck="";
					$title="Presupuesto de apliaciones móbiles";
					$bajad="¿Querés una aplicación? Decinos que tipo de app querés así te hacemos un presupuesto.";
				}elseif ($gets["q"]["www"]=="design") {
					$webCheck="";	$appCheck="";	$disCheck="checked";
					$title="Presupuesto de diseño";
					$bajad="Contanos que tipo de trabajo de diseño estás necesitando para presupuestarlo.";
				}
			}else{
				$webCheck="";	$appCheck="";	$disCheck="";
				$title="Presupuestos";
				$bajad="Usa este formulario apra contarnos los detalles de tu proyecto así podemos presupuestarlo.";
			}
		}
	}else{
		$cCheck="checked";	$pCheck=""; $webCheck="";	$appCheck="";	$disCheck="";
		$title="¿En qué podemos ayudarte hoy?";
		$bajad="Mandanos tus consultas y nos pondremos en contacto con tigo a la brevedad.";
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contacto - Zigna</title>
<meta name="description" content="">
<link href="<?=$base_url?>r/css/css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="http://www.zigna.com.ar/favicon.ico">
<script src="<?=$base_url?>r/js/jquery.js"></script>
<script src="<?=$base_url?>r/js/jquery-ui.js"></script>
<script src="<?=$base_url?>r/js/modernizr.js"></script>
<script src="<?=$base_url?>r/js/local.js"></script>
</head>

<body id="cotacto">
<? include('r/pageBlocks/header.php'); ?>

<section class="Gotproyect showtime noPad">
    <canvas class="canvas" data-relativeto="Gotproyect" id="myCanvas" style="position:absolute;" width="1000" height="120"></canvas>
    <header>
      <div class="centerMiddle">
      	<h2><?=$title?></h2>
        <p><?=$bajad?></p>
      </div>
    </header>
    <article class="parrafos">
    	<form id="contact" class="animate" action="#" method="post">
      		
          <input form="contact" id="contacto" name="tipo" type="radio" value="contacto" <?=$cCheck?>>
          	<label for="contacto" class="label">Consulta</label>
          <input id="presupuesto" form="contact" name="tipo" type="radio" value="presupuesto" <?=$pCheck?>>
          	<label for="presupuesto" class="label">Presupuesto</label>
          <div></div>
        	<input class="col3" name="nombre" placeholder="Nombre" type="text">
          <input class="col3" name="email" placeholder="Email" type="email">
          <input class="col3" name="telefono" placeholder="Telefono" type="tel">
          <h3 class="presu">Tipo de proyecto</h3>
          <input id="web" type="checkbox" value="web" <?=$webCheck?>><label class="presu col3" for="web">Web</label>
          <input id="design" type="checkbox" value="design" <?=$disCheck?>><label class="presu col3" for="design">Diseño</label>
          <input id="app" type="checkbox" value="app" <?=$appCheck?>><label class="presu col3" for="app">App</label>
          <h3 class="presu">¿Cuando querés empezar?</h3>
          <select name="diaInicio" class="col4 presu">
          	<option>Día</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
          <select name="mesInicio" class="col4 presu">
          	<option>Mes</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
          <select name="anioInicio" class="col4 presu">
          	<option>Año</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
          <input type="checkbox" name="inicio" value="sininicio" id="inicio"><label for="inicio" class="col4 presu">No tengo apuro</label>
          <h3 class="presu">¿Cuando esperés terminar?</h3>
          <select name="diafin" class="col4 presu fechafin">
          	<option>Día</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
          <select name="mesfin" class="col4 presu fechafin">
          	<option>Mes</option>
            <option>Enero</option>
            <option>Febrero</option>
            <option>Marzo</option>
            <option>Abril</option>
          </select>
          <select name="aniofin" class="col4 presu fechafin">
          	<option>Año</option>
            <option>1999</option>
            <option>2000</option>
            <option>2001</option>
            <option>2002</option>
          </select>
          <input type="checkbox" name="fin" value="sinfin" id="fin"><label for="fin" class="col4 presu">No tengo apuro</label>
          <h3 class="presu">Descripción del proyecto</h3>
          <textarea name="consulta" rows="10" placeholder="Decinos en que podemos asistirte"></textarea>
          <input type="submit" value="Haz clic aqui para mandarnos tu consulta">
          <p>Te responderemos tan pronto como podamos</p>
        </form>
      <div>
      	<h2></h2>
      	<p>Hoy en día más y más consumidores usan Internet para buscar productos y services. Internet permite manter contacto permanente con tus usuarios o clientes y es una vía excelente para mantenerlos involucrados e informados. Un sitio diseñado y desarrollado por profesionales te permite ser encontrado fácilmente a toda hora y desde cualquier lugar, aumentando y mejorando la competividad e imagen de tu emprendimiento.</p>
      </div>
      <div>
      	<p>Usamos las últimas herramientas y tecnologías para poder brindarte todos los beneficios que la Web tiene para ofrecer. Creamos sitios adaptativos a todos los dispositivos (pcs/tablets/celulares) y diseñamos experiencias web a medida de tus necesidades y de tu público. Te brindamos control total de tus contenidos, seguimiento y estadísticas de desempeño, integración con las redes sociales, etc.</p>
      </div>
      <div>
      	<p>Nuestra misión es poner a tu alcanze soluciones integrales a tus proyectos. Ponete en contacto con nosotros y disfruta de tu web, nosotros nos ocupamos del resto.</p>
      </div>
    </article>
    
</section>

<? include('r/pageBlocks/footer.php'); ?>
<script type="text/javascript">
$(document).ready(function(e) {
  $("input,select,textarea").change(function(){
		var value = $(this).val();
		if(value!=""){
		}
	});
	$("input#fin").click(function(){
		var value = $(this).val();
		if(value!="sinfin"){
			$("select[name=diafin],select[name=mesfin],select[name=aniofin]").val("");
		}
	});
});
</script>
</body>
</html>
