<form name="redirect">
Verrai reindirizzato tra <input type="text" size="2" name="counter"> secondi
</form>

<script language="Javascript">
<!--
// Imposto il sito di destinazione


xhttp = new XMLHttpRequest();
xhttp.open("GET", "broadcast.php", true);
xhttp.send();
            
var destinazione = "/progettoret/index.php";

// Imposto il numero di secondi per il conto alla rovescia
var secondi = 5;

// Creo la variabile conteggio e contestualmente
// imposto il valore di partenza al numero di secondi + 1
var conteggio = document.redirect.counter.value = secondi + 1;

// Creo la funzione che gestisce il conto alla rovescia
function contoallarovescia()
{
  // Se la variabile conteggio è maggiore di 1...
  if (conteggio > 1)
  {
    // decremento il valore della variabile conteggio
    conteggio = conteggio - 1;
    // e contestualmente aggiorno il numero mostrato a video
    document.redirect.counter.value = conteggio;
  // ...se conteggio è uguale o minore di 1 eseguo il redirect
  }else{
    window.location = destinazione;
    return
  }
  // La funzione ri-esegue se stessa ogni secondo fino alla
  // esecuzione del redirect
  setTimeout("contoallarovescia()", 1000);
}

// Lancio per la prima volta la funzione (che poi, come sappiamo
// provvederà autonomamente ad auto eseguirsi ogni secondo)
contoallarovescia()
//-->
</script>

<?php

session_start();

$username = "root";

$password = "";

$database = "my_progettoret";

mysql_connect("localhost", $username, $password);
mysql_select_db($database) or die("Impossibile selezionare il database");

$insert="INSERT INTO Ricette (Creatore, NomeTorta, Ingredienti, Tempo, Procedimento) VALUES('".$_SESSION['request_vars']['screen_name']."', '".mysql_real_escape_string($_POST['NomeTorta'])."', '".mysql_real_escape_string($_POST['Ingredienti'])."', '".mysql_real_escape_string($_POST['Tempo'])."', '".mysql_real_escape_string($_POST['Procedimento'])."')";

if(mysql_query($insert)){
	echo('Successo');
}
else{
	die("Errore nella query. Query non eseguita");
}
?>