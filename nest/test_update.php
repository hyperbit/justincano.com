<?php

	$request = "desiredTemp=80&currentTemp=77";
	$ch = curl_init("http://justincano.com/nest/api/update_temp.php");
	curl_setopt($ch,CURLOPT_HEADER,0);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$request);
	$response = curl_exec($ch);
	echo $response;
	curl_close($ch);

?>
