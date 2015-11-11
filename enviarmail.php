<?php 
require_once('swift/swift_required.php');
if (isset($_POST)&&!empty($_POST)) {
	$correo = $_POST["correo"];
	$srcMarco =$_POST["imgmarco"];
	$srcFoto=$_POST["imgfoto"];


	$date = date('Ymdhis');


	//Merge Imagenes
	//66$dest = imagecreatefrompng($date);
	//$dest = imagecreatefromjpeg($srcMarco);
	//$src = imagecreatefromjpeg($srcFoto);
	$dest = imagecreatefromjpeg(trim($srcFoto));
	$src = imagecreatefrompng(trim($srcMarco));

	imagealphablending($src, true);
	imagesavealpha($src, true);
	imagecopy($dest, $src, 0, 0, 0, 0, imagesx($dest), imagesy($dest));//porque es png ahora es esta funcion
	//imagecopymerge($dest, $src, 0, 0, 0, 0, imagesx($dest), imagesy($dest), 100); //have to play with these numbers for it to work for you, etc.
	//45,45 es el origen a pegar y 0,0 es el crop de la imagen src

	imagejpeg($dest,"resultados/".$date.".jpg");

	//imagepng($dest,"resultados/".$date.".png");

	imagedestroy($dest);
	imagedestroy($src);


	$myArray = explode(',', $correo);

		// Create the SMTP configuration
	//$transport = Swift_MailTransport::newInstance();
	//$transport = Swift_SmtpTransport::newInstance('mail.misp.cl', 587)
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')->setUsername('noreplay.tour2015@gmail.com')->setPassword('Tour2015bn');


		// Create the message
	$message = Swift_Message::newInstance();
	$message = Swift_Message::newInstance($transport);
	$message->setTo($myArray);
	// $message->setBcc("catalina@cajanegra.com.ec");

	$cuerpo	="";
	// $cuerpo = "¡Hola!<br><br>";
	// $cuerpo .= "Gracias por participar <br><br>";
	// $cuerpo .= "<strong>TU FOTO CON LA COPA PILSENER 2015</strong><br>";
	// $cuerpo .= "¡Nos vemos pronto!<br><br>";



	$message->setSubject("Tour Copa Pilsener");
	$message->setBody($cuerpo, 'text/html');
	$message->setFrom(array('noreplay.tour2015@gmail.com' => "Tour Copa Pilsener"));

	$message->attach(Swift_Attachment::fromPath("resultados/".$date.".jpg", 'image/png')->setFilename($date.'.png'));
	$message->attach(Swift_Attachment::fromPath("mail/firma.jpg", 'image/png')->setFilename('firma.png'));
	
		// Send the email
	$mailer = Swift_Mailer::newInstance($transport);
	//$mailer = Swift_Mailer::newInstance($transport);


	if ($mailer->send($message, $failedRecipients)) {
		$resultado = array(
			'codigo' => 1,
			'mensaje' => "Mensaje enviado"
			);
		echo json_encode("1");
	}else{
		$resultado = array(
			'codigo' => 0,
			'mensaje' => "Mensaje No enviado"
			);
		echo json_encode("0");
	}

	//echo json_encode("11");

}

?>