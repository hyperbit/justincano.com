<?php
	$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
	$user = $connection->get("https://api.twitter.com/1.1/users/show.json?screen_name=".$twitteruser); 

	$pic = str_replace("_normal.jpeg",".jpeg",$user->profile_image_url);
?>

