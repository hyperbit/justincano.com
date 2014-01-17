<?php
	session_start();
	require_once("twitteroauth/twitteroauth/twitteroauth.php"); //Path

	$twitteruser = "canokiid";
	$notweets = 30;
	$consumerkey = "rF6Aiv2kDR0neZf8KYNHeQ";
	$consumersecret = "aJU1UAEzJBzKEkRYWuoy2GxErlk2kwRUeWjUMkgo9s";
	$accesstoken = "37273034-IK1ObQstQbq8zLskbJGNouBWo4xSnIFhzbeY8rLT6";
	$accesstokensecret = "0uXr11EEwcZgeP6wBjIYaU6V2TrpbyTSf47DX8qXoUCHf";

	function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
 		$connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
		return $connection;
	}

	$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
	$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);

	$user = $connection->get("https://api.twitter.com/1.1/users/show.json?screen_name=".$twitteruser); 

	$pic = str_replace("_normal.jpeg",".jpeg",$user->profile_image_url);
	echo $pic;
?>
 

