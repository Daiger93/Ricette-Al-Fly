<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ricette Facili</title>
   
   <link rel="stylesheet" type="text/css" href="styles.css" />  
   
  <link rel="manifest" href="manifest.json">
   
</head>
<body>
	<script src="js/main.js"></script>
<style>
  
   body{
width:   100%;
height:  100%;
margin:  00px 00px 00px 00px;
background: url(images/dolci.png) no-repeat fixed;
background-size:100% 100%;
background-color:#666666; /*Questa regola è opzionale, puoi anche ometterla*/
}
 
</style>
<p style="text-align:center;">
<span style="font-family:Cursive;font-size:18px;font-style:italic;font-weight:bold;text-decoration:none;text-transform:none;color:#F9D834;">
Ricette al Fly!<br> Benvenuto!</span>
</p>
<br>
  <ul>

  <FORM align="center" action="/progettoret/controlla.php" method="post" >
		<input type="submit" style="width: 20em;
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
 					  from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));"  value="Inserisci Ricetta" id="btnSend" />
	</FORM>
    </ul>
    <ul>
    <FORM align="center" action="/progettoret/select.php" method="get" >
    	<input type="hidden" name="NomeTorta"/>
    	<input type="hidden" name="Creatore"/>
    	<input type="hidden" name="Ingredienti"/>
		<input type="submit" style="width: 20em;
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
 					  from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));"  value="Visualizza tutte le Ricette" id="btnSend" />
	</FORM>
</ul>
<ul>
  <FORM align="center" action="/progettoret/ricerca.php" method="post" >
		<input type="submit" style="width: 20em;
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
 					  from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));"  value="Cerca Ricetta" id="btnSend" />
	</FORM>
    </ul>


<ul>
  <FORM align="center" action="/progettoret/login.php" method="post" >
		<input type="submit" style="width: 20em;
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
 					  from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));"  value="Login" id="btnSend" />
	</FORM>
    </ul>
    
</body>
</html>