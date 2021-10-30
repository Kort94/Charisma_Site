<?php
$to = 'info@charismalt.co.za';
$subject = $_POST["subject"];
$from = $_POST["email"];
$name = $_POST["name"];
$msg = $_POST["message"];
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h3>'.$name.' wrote:</h3>'. "\r\n";
$message .= '<p>"'.$msg.'"</p>';
$message .= '</body></html>';
 
// Sending email
mail($to, $subject, $message, $headers);

header('Location: contact.html');
?>
