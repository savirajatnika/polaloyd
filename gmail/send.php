<?php
require('/home/u2731539/public_html/gmail/PHPMailer/PHPMailerAutoload.php');


define('GUSER', 'migetrich87@gmail.com'); // GMail username
define('GPWD', 'miguel123'); // GMail password


function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

function smtpmailer($to, $from, $from_name, $subject, $body) { 
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'tls://smtp.gmail.com';
	$mail->Port = 587; 
	$mail->Username = GUSER;  
	$mail->Password = GPWD;           
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}

if (smtpmailer('miguel@hostinger.com', 'migetrich87@gmail.com', 'migetrich87', 'test mail message', 'Hello World!')) {
	phpAlert($error);
}
else
{
	phpAlert($error);
}

?>

