<?php
session_start();
if(isset($_SESSION['status'])){
	header("Location: inserisci.php");
	exit();
}

header("Location: login.php");
?>