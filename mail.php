<?php 
session_start();
if(isset($_POST['mensaje'])&&isset($_POST['email'])&&isset($_POST['nombre'])){
	
	$headers = 'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charset=UTF-8'."\r\n".'From:'.$_POST['nombre'].'<'.$_POST['email'].'>'."\r\n";
	$asunto = strip_tags("Consulta desde la web BIERCOM.COM");
	$msj= 'Mensaje enviado a través del formulario de la web BIERCOM.COM por '.$_POST['nombre'].' ('.$_POST['email'].')

	<p>'.nl2br(strip_tags($_POST['mensaje'])).'</p>';							

	if(mail('info@biercom.com',$asunto, $msj, $headers)){
		$_SESSION['error']=0;
		header('Location: contacto.php');
	} 
	else {
		$_SESSION['error']=1;
		header('Location: contacto.php');
	}	

}
else{
	header('Location: contacto.php');
}

?>



 