<?php
/* tohle je bezpe�n� na��t�n� dat z formul��e...*/
$nazev="";
if (isset($_REQUEST['nazev'])){
	$nazev=$_REQUEST['nazev'];
}
/*...a tohle je rychl� a jednoduch� :-) */
$autor=$_REQUEST['autor'];
echo "<h2>Do datab�ze se ulo�� n�sleduj�c� knihy:</h2>";
echo "<br>N�zev knihy: <b>".$nazev."</b>";
echo "<br>Autor knihy: <i>".$autor."</i>";
echo "<p><a href='index.php'>Zp�t na index</a>";
?>
