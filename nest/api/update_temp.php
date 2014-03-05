<?php
	include 'session.php';

	$desiredTemp = $_POST['desiredTemp'];
	$query = "UPDATE schedule SET desiredTemp='$desiredTemp'";
	mysql_query($query);
	header( 'Location: ../index.php' );
?>
