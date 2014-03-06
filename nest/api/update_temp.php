<?php
	if( !empty($_POST['desiredTemp']) )
	{
		include 'session.php';
		$desiredTemp = $_POST['desiredTemp'];
		$query = "UPDATE schedule SET desiredTemp='$desiredTemp'";
		mysql_query($query);
		mysql_close();
	}
	header( 'Location: ../index.php' );
?>
