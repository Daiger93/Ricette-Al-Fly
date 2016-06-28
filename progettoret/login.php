<?php
//start session
session_start();

// Include config file and twitter PHP Library by Abraham Williams (abraham@abrah.am)
include_once("config.php");
include_once("inc/twitteroauth.php");
?>
<!DOCTYPE html>
<html lang="en">
<p style="text-align:center;">
<span style="font-family:Cursive;font-size:18px;font-style:verdana;font-weight:bold;text-decoration:none;text-transform:none;color:#FF0000;">
RICETTE AL FLY </span>
<br>
<br>
<span style="font-family:Cursive;font-size:18px;font-style:verdana;font-weight:bold;text-decoration:none;text-transform:none;color:#FFA500;">
Per accedere alle nostre ricette effettua il login con Twitter
</span>
</p>
<br>
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login con Twitter</title>
    <style type="text/css">
	.wrapper{width:600px; margin-left:auto;margin-right:auto;}
	.welcome_txt{
		margin: 20px;
		background-color: #EBEBEB;
		padding: 10px;
		border: #D6D6D6 solid 1px;
		-moz-border-radius:5px;
		-webkit-border-radius:5px;
		border-radius:5px;
	}
	</style>
    
</head>
<body>
<style>
  
   body{
width:   100%;
height:  100%;
margin:  00px 00px 00px 00px;
background: url(images/dolci1.png) no-repeat fixed;
background-size:100% 100%;
background-color:#666666; /*Questa regola è opzionale, puoi anche ometterla*/
}
 
</style>
<div align="center">
<img align="center" src="http://progettoret.altervista.org/images/images.jpeg" />
<br>
<br>
<?php
	if(isset($_SESSION['status']) && $_SESSION['status'] == 'verified') 
	{
		//Retrive variables
		$screen_name 		= $_SESSION ['request_vars']['screen_name'];
		$twitter_id			= $_SESSION['request_vars']['user_id'];
		$oauth_token 		= $_SESSION['request_vars']['oauth_token'];
		$oauth_token_secret = $_SESSION['request_vars']['oauth_token_secret'];
		echo '<span style= "color:#FFA500">Hai già effettuato il login con questo nome: </span>' .$screen_name.'';
        echo '<br><br><a href="index.php">
        <input type="submit" style="width: 10em;
					  padding: .5em;
					  color: #ffffff;
					  text-shadow: 1px 1px 1px #000;
					  border: solid thin #882d13;
   					  -webkit-border-radius: .7em;
					  -moz-border-radius: .7em;
					  border-radius: .7em;
					  -webkit-box-shadow: 2px 2px 3px #999;
					  box-shadow: 2px 2px 2px #bbb;
					  background-color: #575757;
					  background-image: -webkit-gradient(linear, left top, left bottom,
 					  from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));"  value="Vai alla Home!" id="btnSend" />
        
        </a>';
	}else{
		//Display login button
		echo '<a  align="center" href="process.php"><img  align="center" src="images/sign-in-with-twitter.png" width="151" height="24" border="0"  /></a>';
	}
?>  
</div>
</body>
</html>