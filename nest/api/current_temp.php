<?php
	include 'session.php';

	$query = "SELECT currentTemp from schedule";
	$result = mysql_query($query);

	echo $result;

?>