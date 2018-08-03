

<?php
$to = "hweatherbee@gmail.com";
$subject = "php email";
$txt = "Hello world!";
$headers = "From: moonbees@gmail.com" . "\r\n";

if(mail($to,$subject,$txt,$headers)){
	echo 'ok';
}
else {
	$errorMessage = error_get_last()['message'];
	echo $errorMessage;
}
?>
