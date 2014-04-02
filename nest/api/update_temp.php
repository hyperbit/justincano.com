<?php
	include 'session.php';
	if( !empty($_POST['desiredTemp']) )
	{
		$desiredTemp = $_POST['desiredTemp'];
		$query = "UPDATE schedule SET desiredTemp='$desiredTemp'";
		mysql_query($query);
	}
	if( !empty($_POST['currentTemp']) )
	{
		$currentTemp = $_POST['currentTemp'];
		$query = "UPDATE schedule SET currentTemp='$currentTemp'";
		mysql_query($query);
	}
	if( !empty($_POST['hasChanged']) )
	{
		$changed = $_POST['hasChanged'];
		$query = "UPDATE schedule SET hasChanged='$changed'";
		mysql_query($query);
	}
	mysql_close();
	header( 'Location: ../index.php' );
?>
