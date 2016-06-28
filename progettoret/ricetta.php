<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ricetta</title>
 </head>
<body id="map" onload="initCoords();">
<body>

<?php
$query = "SELECT * FROM Ricette WHERE ID='".$_GET['id']."'";
$username = "root";

$password = "";

$database = "my_progettoret";

mysql_connect("localhost", $username, $password);
mysql_select_db($database) or die("Impossibile selezionare il database");

$risultati = mysql_query($query);

$num = mysql_numrows($risultati);

mysql_close();

$num!=0 or die('Attenzione, ricetta non trovata. Controllare che il link sia corretto');

$Creatore = mysql_result($risultati, 0, "Creatore");

$NomeTorta = mysql_result($risultati, 0, "NomeTorta");

$Ingredienti = mysql_result($risultati, 0, "Ingredienti");

$Tempo = mysql_result($risultati, 0, "Tempo");

$Procedimento = mysql_result($risultati, 0, "Procedimento");

echo '<div align="center">'.$NomeTorta.', di '.$Creatore.'</div>';

echo '<br>Ingredienti: '.$Ingredienti.'';

echo '<br>Tempo di Preparazione: '.$Tempo.'';

echo '<br>Preparazione:<br><div 
<p style="text-align:justify;">'.$Procedimento.'</div>';

?>
<br>
<form align="center">
<td><font face="Arial, Helvetica, sans-serif" align="center">
<?php echo '<form action="condividi.php" type="GET">
		<input type="hidden" name="id" value="'.$_GET['id'].'">
		<input type="submit" style="width: 15em;
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
 					  from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));"  value="Condividi su Twitter" id="btnSend" /></form>'?></font></td>
</form>
<br>
<form align="center">
 <a href="index.php"><input type="button" method="post" style="width: 15em;
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
 					  from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));"  value="Torna alla Home" id="btnSend" /></a>

</form>	
</body>
</html>
