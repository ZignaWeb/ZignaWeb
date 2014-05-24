<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css.css" rel="stylesheet" type="text/css" />
<title>FormIndex</title>
<style>
  body{ margin:0}
  form { width: 80%; background-color: rgb(35, 31, 32); height:auto; overflow: hidden; display: block;color:#f5f1e4;text-align:center; padding:40px 10% 0 10%}
  form label {  position:relative; margin-top:10px; background:#000; text-align:left}
  form input { border:none ;width:100%;background-color: rgb(35, 31, 32); border-bottom:1px solid #f5f1e4; display:block; color:#FFF}
  form label span { 
    
	height:33px; line-height:33px;
	display:block;
	font-weight:normal; 
	}
	form input[type=submit]{ width:50%; margin:10px 25%; color: #f5f1e4 ; border:#f5f1e4 1px solid}
	p { text-align:center; color:#f5f1e4; padding:30px;}

</style>
</head>

<body>
<div id="popup">
		<?
		if (!$_POST){
		?>
    	<form id="sendMail" action="home_form_silenzio.php" method="post">
        <img src="http://www.silenzio.com.ar/r/i/logo.png" width="244" height="102" alt="Silenzio" />
        <label><span>Nombre</span> <input class="validar" type="text" name="name"></label>
        <label><span>Apellido</span> <input class="validar" type="text" name="lastname"></label>
        <label><span>E-mail</span> <input class="validar" type="email" name="email"></label>
        <label><span>Repetir e-mail</span> <input class="validar" type="email" rel="email" name="reemail"></label>
        <label><span>Ciudad</span> <input class="validar" type="text" name="city"></label>
        <input type="submit" value="Registrate">
        
        </form>
		<?
	}else{
		$e=NULL;
		$e["missing"]=NULL;
		foreach($_POST as $key => $val){
			if ($val!="") {$data[$key]=strip_tags($val);}else{$e["missing"]++;}
		}
		
		
		if ($e["missing"]==NULL){
		
			$para="silenziocba@gmail.com";
	
			$sendTo = $para;
			
			$prepend	= "Remitente: ".$data["name"]." ".$data["lastname"]." 
Email: ".$data["email"]."
Ciudad: ".$data["city"].")";
			$append	 = "\r\n\r\n................................\r\n\r\n Enviado a $para";
			
			$mensaje	= $prepend.$append;
				
			require_once('../PHPMailer/class.phpmailer.php');
			
			$email = new PHPMailer();
			
			$email->From      = $data["email"];
			$email->FromName  = $data["name"]." ".$data["lastname"];
			$email->Subject   = 'Contacto Web: '.$data["name"];
			$email->Body      = $mensaje;
			$email->AddAddress( $sendTo );
			
			if ($email->Send()){
				echo "<p>Muchas gracias.</p>";
			}
			
		}else{
			
			echo "<p>Todos los campos son obligatorios</p>";
			
			echo "<a href='javascript:history.go(-1)'>Volver</a>";
			
		}
	}
	?>
    </div>
     
</body>
</html>