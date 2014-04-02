<?php
	include 'api/session.php';
	$query = "SELECT * FROM schedule";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$desiredTemp = $row['desiredTemp'];
?>
Hello, World!
<br>
Desired temperature is: <?php echo $desiredTemp; ?>

<form name="myForm" action="api/update_temp.php" method="post" role="form">
	<div class="form-group">
		<label for="desiredTemp">Change Desired Temperature</label>
		<input type="text" class="form-control" id="desiredTemp" name="desiredTemp" placeholder="Enter new temp" maxlength="10">
		<input type="hidden" name="hasChanged" value="1">
	</div>
	<button type="submit">Submit</button>
	</div>
</form>
