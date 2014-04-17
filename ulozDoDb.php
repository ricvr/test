<?php
/* tohle je bezpeèné naèítání dat z formuláøe...*/
$nazev="";
if (isset($_REQUEST['nazev'])){
	$nazev=$_REQUEST['nazev'];
}
/*...a tohle je rychlé a jednoduché :-) */
$autor=$_REQUEST['autor'];
echo "<h2>Do databáze se uloží následující knihy:</h2>";
echo "<br>Název knihy: <b>".$nazev."</b>";
echo "<br>Autor knihy: <i>".$autor."</i>";
echo "<p><a href='index.php'>Zpìt na index</a>";
?>
