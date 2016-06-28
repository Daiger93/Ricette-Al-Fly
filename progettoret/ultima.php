<?php
$query = "SELECT MAX(Id) FROM Ricette";
$username = "root";

$password = "";

$database = "my_progettoret";

mysql_connect("localhost", $username, $password);
mysql_select_db($database) or die("Impossibile selezionare il database");

$risultati = mysql_query($query);

$id=mysql_result($risultati, 0);

mysql_close();

header('Location: ricetta.php?id='.$id);
?>