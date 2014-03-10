<?php
	if( !empty($_POST['desiredTemp']) )
	{
		include 'session.php';
		$desiredTemp = $_POST['desiredTemp'];
		$query = "UPDATE schedule SET desiredTemp='$desiredTemp'";
		mysql_query($query);
		mysql_close();
	}
	if( !empty($_POST['currentTemp']) )
	{
		include 'session.php';
		$currentTemp = $_POST['currentTemp'];
		$query = "UPDATE schedule SET currentTemp='$currentTemp'";
		mysql_query($query);
		mysql_close();
	}
	header( 'Location: ../index.php' );
?>
