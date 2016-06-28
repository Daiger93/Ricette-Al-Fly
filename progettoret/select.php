<?php
session_start();

$query = "SELECT * FROM Ricette WHERE";

$flag=0;

if($_GET['NomeTorta']!=''){
	$query=$query." NomeTorta LIKE '%".$_GET['NomeTorta']."%'";
    $flag=1;
    }
if($_GET['Creatore']!=''){
	if($flag==1){
    	$query=$query." AND ";
    }
	$query=$query." Creatore LIKE '%".$_GET['Creatore']."%'";
    $flag=1;
    }
if($_GET['Ingredienti']!=''){
	if($flag==1){
    	$query=$query." AND ";
    }
	$query=$query." Ingredienti LIKE '%".$_GET['Ingredienti']."%'";
    $flag=1;
    }
    
if($flag==0){
	$query = "SELECT * FROM Ricette";
    }

$username = "root";

$password = "";

$database = "my_progettoret";

mysql_connect("localhost", $username, $password);
mysql_select_db($database) or die("Impossibile selezionare il database");

$risultati = mysql_query($query);

$num = mysql_numrows($risultati);

mysql_close();
?>
<html>
<head><title>Risultati della Ricerca</title>
</head>
<body>
<style>
  

</style>
<FORM align="center" method="post" >
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


<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aaa;margin:0px auto;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:8px 19px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:8px 19px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aaa;color:#fff;background-color:#f38630;}
.tg .tg-j2zy{background-color:#FCFBE3;vertical-align:top}
.tg .tg-yw4l{vertical-align:top}
th.tg-sort-header::-moz-selection { background:transparent; }th.tg-sort-header::selection      { background:transparent; }th.tg-sort-header { cursor:pointer; }table th.tg-sort-header:after {  content:'';  float:right;  margin-top:7px;  border-width:0 4px 4px;  border-style:solid;  border-color:#404040 transparent;  visibility:hidden;  }table th.tg-sort-header:hover:after {  visibility:visible;  }table th.tg-sort-desc:after,table th.tg-sort-asc:after,table th.tg-sort-asc:hover:after {  visibility:visible;  opacity:0.4;  }table th.tg-sort-desc:after {  border-bottom:none;  border-width:4px 4px 0;  }@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>

<div class="tg-wrap"><table id="tg-s1aOE" class="tg">
  <tr>
  	<th class="tg-yw4l">Creatore della Ricetta</th>
    <th class="tg-yw4l">Nome Torta</th>
    <th class="tg-yw4l">Ingredienti</th>
    <th class="tg-yw4l">Tempo (in minuti)</th>
  </tr>
  

<script type="text/javascript" charset="utf-8">var TgTableSort=window.TgTableSort||function(n,t){"use strict";function r(n,t){for(var e=[],o=n.childNodes,i=0;i<o.length;++i){var u=o[i];if("."==t.substring(0,1)){var a=t.substring(1);f(u,a)&&e.push(u)}else u.nodeName.toLowerCase()==t&&e.push(u);var c=r(u,t);e=e.concat(c)}return e}function e(n,t){var e=[],o=r(n,"tr");return o.forEach(function(n){var o=r(n,"td");t>=0&&t<o.length&&e.push(o[t])}),e}function o(n){return n.textContent||n.innerText||""}function i(n){return n.innerHTML||""}function u(n,t){var r=e(n,t);return r.map(o)}function a(n,t){var r=e(n,t);return r.map(i)}function c(n){var t=n.className||"";return t.match(/\S+/g)||[]}function f(n,t){return-1!=c(n).indexOf(t)}function s(n,t){f(n,t)||(n.className+=" "+t)}function d(n,t){if(f(n,t)){var r=c(n),e=r.indexOf(t);r.splice(e,1),n.className=r.join(" ")}}function v(n){d(n,L),d(n,E)}function l(n,t,e){r(n,"."+E).map(v),r(n,"."+L).map(v),e==T?s(t,E):s(t,L)}function g(n){return function(t,r){var e=n*t.str.localeCompare(r.str);return 0==e&&(e=t.index-r.index),e}}function h(n){return function(t,r){var e=+t.str,o=+r.str;return e==o?t.index-r.index:n*(e-o)}}function m(n,t,r){var e=u(n,t),o=e.map(function(n,t){return{str:n,index:t}}),i=e&&-1==e.map(isNaN).indexOf(!0),a=i?h(r):g(r);return o.sort(a),o.map(function(n){return n.index})}function p(n,t,r,o){for(var i=f(o,E)?N:T,u=m(n,r,i),c=0;t>c;++c){var s=e(n,c),d=a(n,c);s.forEach(function(n,t){n.innerHTML=d[u[t]]})}l(n,o,i)}function x(n,t){var r=t.length;t.forEach(function(t,e){t.addEventListener("click",function(){p(n,r,e,t)}),s(t,"tg-sort-header")})}var T=1,N=-1,E="tg-sort-asc",L="tg-sort-desc";return function(t){var e=n.getElementById(t),o=r(e,"tr"),i=o.length>0?r(o[0],"td"):[];0==i.length&&(i=r(o[0],"th"));for(var u=1;u<o.length;++u){var a=r(o[u],"td");if(a.length!=i.length)return}x(e,i)}}(document);document.addEventListener("DOMContentLoaded",function(n){TgTableSort("tg-s1aOE")});</script>
<?php

$i = 0;

while ($i < $num) {

$ID = mysql_result($risultati, $i, "ID");

$Creatore = mysql_result($risultati, $i, "Creatore");

$NomeTorta = mysql_result($risultati, $i, "NomeTorta");

$Ingredienti = mysql_result($risultati, $i, "Ingredienti");

$Tempo = mysql_result($risultati, $i, "Tempo");

?>

<tr>

<td><font face="Arial, Helvetica, sans-serif"><?php echo $Creatore;?></font></td>

<td><font face="Arial, Helvetica, sans-serif"><?php echo $NomeTorta;?></font></td>

<td><font face="Arial, Helvetica, sans-serif"><?php echo $Ingredienti;?></font></td>

<td><font face="Arial, Helvetica, sans-serif"><?php echo $Tempo;?></font></td>

<td><font face="Arial, Helvetica, sans-serif" align="center">
<?php echo '<a href="https://twitter.com/'.$Creatore.'">
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
 					  from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));"  value="Profilo Creatore" id="btnSend" /></a>'?></font></td>


<td><font face="Arial, Helvetica, sans-serif" align="center">
<?php echo '<form action="condividi.php" type="GET">
		<input type="hidden" name="id" value="'.$ID.'">
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
 					  from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));"  value="Condividi su Twitter" id="btnSend" /></form>'?></font></td>


<td><font face="Arial, Helvetica, sans-serif" align="center"><?php echo 
'<form action="ricetta.php" type="GET">
		<input type="hidden" name="id" value="'.$ID.'">
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
 					  from(#e9ede8), to(#ce401c),color-stop(0.4, #8c1b0b));"  value="Mostra Ricetta" id="btnSend" /></form>'?></font></td>

</tr>


<?php

$i++;

}

?>

</table></div>

</body>

</html>