<?php
	include 'session.php';
	$query = "SELECT hasChanged FROM schedule";
	$result = mysql_query($query);
	$currentTemp = mysql_result($result,0);
	echo $currentTemp;
?>
