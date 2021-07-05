<?php

$fromEmail = "sales@safeoneearthing.com";

$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1"."\r\n";
$headers .= "From: Bird Edge <".$fromEmail.">"."\r\n";

$returnpath = "-f" . $fromEmail;

//@mail($mailto,$subject,$body,$headers, $returnpath);

$ans = @mail("mukesh@notiontechnologies.com", "Test Subject", "Test Message", $headers, $returnpath);
if ($ans) 
	echo "Sent";
else
	echo "Error";
?>