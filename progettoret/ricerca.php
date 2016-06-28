<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ricerca Ricette</title>
</head>
<body>
<style>
   body{
width:   100%;
height:  100%;
margin:  00px 00px 00px 00px;
background: url(images/dolci2.png) no-repeat fixed;
background-size:100% 100%;
background-color:#666666; /*Questa regola è opzionale, puoi anche ometterla*/
}
</style>
<form class="form-horizontal" action="select.php" method="get">
<fieldset>


<legend span style= "color:#FFA500">Ricette</legend>
<ul>

<div class="form-group">
  <label class="col-md-4 control-label" for="NomeTorta" span style= "color:#FFA500">Nome Torta</label>  
  <div class="col-md-4">
  <input id="NomeTorta" name="NomeTorta" type="text" placeholder="Cerca per Nome" class="form-control input-md">
  <span class="help-block" span style= "color:#FFA500">es. Millefoglie</span>  
  </div>
</div>
</ul>
<ul>

<div class="form-group">
  <label class="col-md-4 control-label" for="Creatore" span style= "color:#FFA500">Creatore</label>  
  <div class="col-md-4">
  <input id="Creatore" name="Creatore" type="text" placeholder="Cerca per Creatore" class="form-control input-md">
  <span class="help-block" span style= "color:#FFA500">Non inserire il simbolo @</span>  
  </div>
</div>
</ul>
<ul>

<div class="form-group">
  <label class="col-md-4 control-label" for="Ingredienti" span style= "color:#FFA500">Ingredienti</label>  
  <div class="col-md-4">
  <input id="Ingredienti" name="Ingredienti" type="text" placeholder="Cerca per Ingrediente preferito" class="form-control input-md">
  <span class="help-block" span style= "color:#FFA500">Inserisci un ingrediente che vorresti contenesse la torta</span>  
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
	</FORM>
</ul>
</fieldset>
</form>
</body>
</html>
