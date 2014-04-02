<?php
	include 'session.php';
	$query = "SELECT hasChanged FROM schedule";
	$result = mysql_query($query);
	$changed = mysql_result($result,0);
	echo $changed;
?>
