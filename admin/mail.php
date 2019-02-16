<?php
$to = "kaguris96@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com";

mail($to,$subject,$txt,$headers);
?>