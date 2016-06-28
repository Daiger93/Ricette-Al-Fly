<?php
session_start();
include_once("config.php");
include_once("inc/twitteroauth.php");

if(isset($_REQUEST['oauth_token']) && $_SESSION['token'] == $_REQUEST['oauth_token']) {

	//Successful response returns oauth_token, oauth_token_secret, user_id, and screen_name
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['token'] , $_SESSION['token_secret']);
	$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
	if($connection->http_code == '200')
	{
		//Redirect user to twitter
		$_SESSION['status'] = 'verified';
		$_SESSION['request_vars'] = $access_token;
        $_SESSION['connection'] = $connection;
		
		//Unset no longer needed request tokens
		unset($_SESSION['token']);
		unset($_SESSION['token_secret']);
		header('Location: index.php');
		exit();
	}else{
		die("error, try again later!");
	}
		
}else{

	if(isset($_GET["denied"]))
	{
		header('Location: index.html');
		die();
	}

	//Fresh authentication
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
	$request_token = $connection->getRequestToken(OAUTH_CALLBACK);
	
	//Received token info from twitter
	$_SESSION['token'] 			= $request_token['oauth_token'];
	$_SESSION['token_secret'] 	= $request_token['oauth_token_secret'];
	
	//Any value other than 200 is failure, so continue only if http code is 200
	if($connection->http_code == '200')
	{
		//redirect user to twitter
		$twitter_url = $connection->getAuthorizeURL($request_token['oauth_token']);
		header('Location: ' . $twitter_url); 
	}else{
		die("error connecting to twitter! try again later!");
	}
}
?>

