<?php
$to = "ajaykawan148@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: ajaykawan@gmail" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>