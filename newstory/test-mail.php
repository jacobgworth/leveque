<?php
$to = "narvijay.thakur@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

if(!mail($to,$subject,$txt,$headers)){
echo 'email not working';
} else {
echo 'working';
}
?>