<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/base.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<!-- InstanceEndEditable -->
<?php include('php/scripts.php'); ?>
<!-- InstanceBeginEditable name="head" -->
<title>Untitled Document</title>
<meta http-equiv="Refresh" content="<?=$secs;?>;URL=<?=$redirect;?>" />
<!-- InstanceEndEditable -->
</head>
<body bgcolor="#1B1E24">
<?php include('php/encabezado.php'); ?>
<!-- InstanceBeginEditable name="top" --><!-- InstanceEndEditable -->
<div class="page">
<div class="content_wrap">    
<!-- InstanceBeginEditable name="contenido" -->
  <div align="center">
  <?php
	@import_request_variables("gpc");
	$secs = "5";
	$redirect = "index.php";
	$asunto = "Asignaturas empresariales";
	$to = "empresariales@fca.unam.mx";
	$spam = "karina.maldonado@fca.unam.mx";
  
if(eregi("MIME-Version:",$postVars)) {
mail("$spam", "A spam relay was attempted from the Web site ASIGNATURAS and was blocked.", "From:SpamMonitor");
die();
}  
	$secret = 'ssshhitsasecret';
	$token = md5(rand(1, 1000).$secret);
	$_SESSION['token'] = $token;



	$nombre = stripslashes($nombre);
	$nombre = utf8_decode($nombre);
	$mensaje = stripslashes($mensaje);
	$mensaje = utf8_decode($mensaje);

	$encabezado .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
	$encabezado .= "From: " . $email . "\r\n\r\n";
    mail("$to", "$asunto","
    Name: $nombre
    Email: $email
    Subject: $asunto
    Message: $mensaje 
	",$encabezado);
	
   $_POST['email'] = preg_replace("\r", "", $_POST['email']);
   $_POST['email'] = preg_replace("\n", "", $_POST['email']);
   
   $_SESSION['token'] = $token; 
   $token = md5(rand(1, 1000).$secret);
   $secret = 'ssshhitsasecret';
   $field = preg_replace( "/[\n\r]+/", " ", $field );
   $find = array("/bcc\:/i","/Content\-Type\:/i","/cc\:/i","/to\:/i");
   
   $_POST['email'] = preg_replace($find, "", $_POST['email']);
   $email=str_replace("\r","\n",$email);
   $nombre=str_replace("\r","\n",$nombre);
   $mensaje=str_replace("\r","\n",$mensaje);
   $asunto=str_replace("\r","\n",$asunto);
   
   if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
		ob_clean();
		mail("$youremail", "Message Killed", "$message", "De: $name <$email>");
		exit("Mensaje no enviado intentelo de nuevo.");
   }
   
   if (eregi('^(bcc$|content-type|mime-version|--)',$key))
   		print_error("Field names indicate exploit.");
?>
    
    
    
    
  <br />
  <br />
  <img src="img/gracias.png" />
  <br />
    Tus comentarios han sido enviados<br />
    
  <br />
  <span class="style3">Espera un momento mientras te redireccionamos...</span><br />
  <br />
  <br />
    
  </div>
<!-- InstanceEndEditable -->
<div class="clear"></div>
</div></div>
<div class="clear"></div>
<?php include('php/pie.php'); ?>
</body>
<!-- InstanceEnd --></html>
