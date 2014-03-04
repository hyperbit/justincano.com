<?php
	/*
	 * Using Abraham Williams' PHP Library to support OAuth for Twitter's REST API,
	 * (http://www.github.com/abraham/twitteroauth)
	 * this script fetches a Twitter user's ($twitteruser must be previously defined)
	 * original size profile picture and stores its url into $pic.
	*/
	$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
	$user = $connection->get("https://api.twitter.com/1.1/users/show.json?screen_name=".$twitteruser); 

	$pic = str_replace("_normal.jpeg",".jpeg",$user->profile_image_url);
?>

