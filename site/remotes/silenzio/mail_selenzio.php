
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="../../r/js/jquery.js"></script>
<style>
/* CONTACTO */
.form {background-color:#FFF; padding:3%; width:94%; overflow:auto; font-family:Arial, Helvetica, sans-serif}
form > label {position:relative; display:block; clear:both; overflow:auto; }
form > label.input, form > label input { height:25px;}
form > label span { display:block; line-height:23px; position:absolute; top:1px; left:1px; height:24px; background-color:#FFF;}
form > label input,
form > label textarea { display:block; line-height:25px; border:none; padding:0px; margin:0px; width:100%; background:url(i/formRenglon.gif)}
form > label #nom {text-indent:70px;}
form > label #ema {text-indent:52px;}
form > label #tel {text-indent:78px;}
form > label #men {text-indent:105px;}
fieldset { border:none; padding:0; margin:0;}
.submitb { background:none; padding:0px; border:none; margin-top:25px;}
</style>
</head>

<body id="contactoFormHolder">
	<div id="sendMail" class="form">
    <?
	if (!$_POST){
    ?>
        <form id="sendMail" action="mail_selenzio.php" method="post">
            <label class="input"><span>Nombre</span><input id="nom" name="nom" /></label>
            <label class="input"><span>Email</span><input id="ema" name="ema" /></label>
            <label class="input"><span>Teléfono</span><input id="tel" name="tel"/></label>
            <label><span>Comentario</span><textarea id="men" name="men" rows="5"></textarea></label>
            <fieldset>
                <label><input type="radio" value="consultas" name="cat" checked="checked" /><span>Consultas</span></label>
                <label><input type="radio" value="mayoristas" name="cat" /><span>Mayoristas</span></label>
                <label><input type="radio" value="rrhh" name="cat" /><span>RRHH</span></label>
            </fieldset>
           <input type="submit" class="submitb" value="ENVIAR" />
        </form>
    <?
	}else{
		$e=NULL;
		$e["missing"]=NULL;
		foreach($_POST as $key => $val){
			if ($val!="") {$data[$key]=strip_tags($val);}else{$e["missing"]++;}
		}
		
		
		if ($e["missing"]==NULL){
		
			if ($data["cat"]=="consultas"){
				$para="info@silenzio.com.ar ";
			}elseif($data["cat"]=="mayoristas"){
				$para="info@silenzio.com.ar";
			}elseif($data["cat"]=="rrhh"){
				$para="basededatos.hr@gmail.com";
			}
	
			
			$sendTo = $para;
			
			$prepend	= "Remitente: ".$data["nom"]." (".$data["ema"]." - ".$data["tel"]."\r\n\r\n................................\r\n\r\n";
			$append	 = "\r\n\r\n................................\r\n\r\n Enviado a $para";
			
			$mensaje	= $prepend.$data["men"].$append;
				
			require_once('../PHPMailer/class.phpmailer.php');
			
			$email = new PHPMailer();
			
			$email->From      = $data["ema"];
			$email->FromName  = $data["nom"];
			$email->Subject   = 'Contacto Web: '.$data["nom"];
			$email->Body      = $mensaje;
			$email->AddAddress( $sendTo );
			
			if ($_FILES) {
				$file_name = $_FILES[$name_media_field]['tmp_name'].uniqid();
				$email->AddAttachment( $_FILES[$name_media_field]['tmp_name'], $_FILES[$name_media_field]['name'] );
			}
			
			if ($email->Send()){
				echo "Gracias por contactarnos. Nos comunicaremos con usted a la brevedad.";
			}
			
		}else{
			
			echo "<p>Todos los campos son obligatorios</p>";
			
			echo "<a href='javascript:history.go(-1)'>Volver</a>";
			
		}
	}
	?>
    </div>
    <script type="text/javascript">
		$("input[name=cat]").change(function(){
			var val = $(this).val();
			if (val=="rrhh"){
				$("#rrhh").css({"display":"block"});
			}
		});
	</script>
</body>
</html>