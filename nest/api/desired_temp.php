<?php
	include 'session.php';
	$query = "SELECT desiredTemp FROM schedule";
	$result = mysql_query($query);
	$temp = mysql_result($result,0);
	echo $temp;
?>
