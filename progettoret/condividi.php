<?php
session_start();
if(!isset($_SESSION['request_vars'])){
	header('Location: index.php');
    }
    
require_once('inc/twitteroauth.php');
require_once('config.php');

$access_token = $_SESSION['request_vars'];

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

$status='Ho letto questa bellissima ricetta! http://localhost/progettoret/ricetta.php?id='.$_GET['id'].'';

$connection->post('statuses/update', array('status' => $status));
echo 'Tweet inviato con successo!<br><a href="main.html"><button>Torna alla home</button></a>';
?>