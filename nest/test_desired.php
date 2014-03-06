<?php

	$ch = curl_init("http://justincano.com/nest/api/desired_temp.php");
	curl_setopt($ch,CURLOPT_HEADER,0);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	$response = curl_exec($ch);
	echo $response;
	curl_close($ch);

?>
