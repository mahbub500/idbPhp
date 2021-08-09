<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load composer's autoloader
require 'vendor/autoload.php';
	$mail = new PHPMailer(true);

	$mail->isSMTP();
	$mail->Host = "localhost";
	$mail->setFrom('mahub@gmail.com', 'Web Site');
	$mail->addAddress('mahbubmr500@gmail.com');
	$mail->Subject = 'Thank you for the order';
	$mail->Body = "Your package will ship out asap!";
	$mail->send();

?>