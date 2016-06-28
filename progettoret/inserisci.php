<?php
session_start();
if(!isset($_SESSION['request_vars'])){
	header('Location: index.php');
    }
?>  

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inserisci Ricetta</title>
</head>
<body>
<style>
   body{
width:   100%;
height:  100%;
margin:  00px 00px 00px 00px;
background: url(images/dolci4.png) no-repeat fixed;
background-size:100% 100%;
background-color:#666666; /*Questa regola è opzionale, puoi anche ometterla*/
}
</style>
<form class="form-horizontal" action="/progettoret/insert.php" method="post">
<fieldset>


<legend span style= "color:#FFA500">Ricette</legend>
<ul>

<div class="form-group">
  <label class="col-md-4 control-label" span style= "color:#FFA500" for="NomeTorta">Nome Torta</label>  
  <div class="col-md-4">
  <input id="NomeTorta" name="NomeTorta" type="text" placeholder="Inserisci Nome Torta" class="form-control input-md" required="">
  <span span style= "color:#FFA500" class="help-block">es. Millefoglie</span>  
  </div>
</div>
</ul>
<ul>

<div class="form-group">
  <label class="col-md-4 control-label" span style= "color:#FFA500" for="Ingredienti">Ingredienti</label>  
  <div class="col-md-4">
  <input id="Ingredienti" name="Ingredienti" type="text" placeholder="Inserisci gli Ingredienti" class="form-control input-md" required="">
  <span span style= "color:#FFA500" class="help-block">es. Crema, Panna, ecc...</span>  
  </div>
</div>
</ul>
<ul>

<div class="form-group">
  <label class="col-md-4 control-label" span style= "color:#FFA500" for="Tempo">Tempo</label>  
  <div class="col-md-4">
  <input id="Tempo" name="Tempo" type="text" placeholder="Inserisci il Tempo(minuti)" class="form-control input-md" required="">
  <span span style= "color:#FFA500" class="help-block">es. 5 o 5 minuti o 5-10</span>  
  </div>
</div>
</ul>
<ul>

<div class="form-group">
  <label class="col-md-4 control-label" span style= "color:#FFA500" for="Procedimento">Procedimento</label>  
  <div class="col-md-4">
  <textarea id="Procedimento" name="Procedimento" placeholder="Scrivi qui il procedimento" required=""></textarea>
  <span span style= "color:#FFA500" class="help-block">Scrivere qui il procedimento per preparare la torta</span>  
  </div>
</div>
</ul>
<br>
<ul>
<FORM>
    <!--Bottone Invio-->
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
            from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));"  value="Invio" id="btnSend" />
        <!--Bottone Indietro-->
        <input type="button" onClick="javascript:history.back()" method="post" style="width: 15em;
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
            from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));"  value="Indietro" id="btnSend" />
  </FORM>
</ul>
</fieldset>
</form>
</body>
</html>
