<?php

include 'overovani.php';
if(overovani(9)==0){
	return;
}

include("FCKeditor/fckeditor.php") ;
include 'rw2-select_zarazeni.php';

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">

<title>Vkl�d�n� �l�nku</title>
<script type="text/javascript">
<!-- Definice pol�
<?php

temata();
include 'fn_select.js';

?>

function vloz_obr(){

	var x=0;
	var cislo;
	with(document.form1){
	x=pocitadlo.value;
alert("X:"+pocitadlo.value+"\n"+text_obr.value);
	if (x<10){
		cislo='0'+x;
	}else{
		cislo=x;
	}
	alert("text:"+text.value);

	text.value=text.value+"<obr"+cislo+text_obr.value+">";
	text_obr.value="";
	pocitadlo.value=parseInt(pocitadlo.value)+1;
	}
	return;
}
// -->
</script>
</head>
<body>
<a href='index.php'>Zp�t na hlavn� str�nku</a>
<h1 align="center">Vkl�d�n� �l�nku</h1>
<table border=0 align="center">

<form name= "form1"action="clanek_ins-rw2.php" method="POST" onSubmit="return kontrola()">
<input type='hidden'name='pocitadlo'value='1'>
<?php
//session_start(); 

$q=mysql_query("select id_rubrika,rubrika from rw_rubriky");
$_autor=mysql_query("select id_autor,prijmeni,jmeno from rw_autori ORDER BY prijmeni,jmeno ASC");

echo "<tr>";
echo "<td align='right'>";
echo "&nbsp;";
echo "</td><td align='right'>";
echo "Rubrika <select name='oblast'onChange='nastav_tema(form1.oblast.options[form1.oblast.selectedIndex].value);'>";
	echo "\n<option value='0'>------------------------------</option>";
while($x= mysql_fetch_object($q)){
	echo "\n<option value='"._2ascii(strtr($x->rubrika," ","_"))."'>".$x->rubrika."</option>";
}//while
echo"\n</select>\n";

echo "<br>";
echo "T�ma ";
echo "<select name='tema'>";
echo "<option value=''>-------------------</option>";
echo "</select>";

echo "</td></tr>";

echo "<tr>";
echo "<td align='right'>";
echo "Autor";
echo "</td>";
echo "<td>";
echo "<select name='autor'>";
echo "<option value='0'>-----------------------------------</option>";
while($autor= mysql_fetch_object($_autor)){
	echo "\n<option value='".$autor->id_autor."'>".$autor->prijmeni.", ".$autor->jmeno."</option>";
}//while
echo "</select>";
echo "<input type='button'value='Nov�'onClick='window.open(\"autor_form-rw2.htm\",\"\",\"toolbar=0,location=0,menubar=0,width=450,height=300,resizable=1\");'>";
echo "</td></tr>";

echo"<tr>";
echo"<td align='right'>";
echo"Titulek ";
echo"</td><td>";
echo"<input type='text' name='titul'size='70'>";
echo"</td></tr>";
echo"";
echo"<tr>";
echo"<td align='left'colspan='2'>";
echo"�vod k �l�nku<br>";
echo "<input type='checkbox' name='titlobr'value='1'> Titulkov� obr�zek";
echo"</td></tr>";
echo"";
echo"<tr>";
echo"<td align='left'colspan='2'>";
echo"<textarea rows='5' cols='50' name='uvod'>";
echo"</textarea>";
echo"</td>";
echo"</tr>";
echo"";
echo"<tr>";
echo"<td align='left'colspan='2'>";
echo"Text �l�nku<br>";
echo"</td></tr>";
echo"";
echo"<tr>";
echo"<td align='left'colspan='2'>";
//echo"<input type='button'value='Vlo� obr�zek' onClick='vloz_obr();''>";
//echo"<input type='text'name='text_obr'><br>";
echo"<strong>Vlo�en� obr�zku:</strong> Na m�sto, kde m� b�t obr�zek se vlo�� n�sleduj�c� znaky:<strong> &lt;obrxy<i>Popis obr�zku</i> &gt;</strong>,<br>kde <i>xy</i> je ��slo v rozmez� 01-99 (mus� b�t dvojm�stn�, tedy 01, NE 1)."; 

$oFCKeditor = new FCKeditor('text') ;
$oFCKeditor->BasePath = 'FCKeditor/';
//$oFCKeditor->Value = $x->clanek;
$oFCKeditor->Width  = '600' ;
$oFCKeditor->Height = '400' ;
$oFCKeditor->Config['DefaultLanguage'] = 'cs'; 
$oFCKeditor->Config['AutoDetectLanguage'] = false; 
$oFCKeditor->Config['IncludeLatinEntities'] = false;

//$oFCKeditor->Config['CustomConfigurationsPath'] = '../fck_config.js';

$oFCKeditor->Create() ;

echo"<!--textarea rows='15' cols='70' name='text'-->";
echo"<!--/textarea-->";
echo"</td>";
echo"</tr>";
echo"<tr>";
echo"<td align='left'colspan='2'>";
//echo"<!-- input type='button'value='Ulo�it'onClick='uloz();' -->";
echo"<input type='submit' value='Vlo�it �l�nek'>";
echo"</td>";
echo"</tr>";
echo"";
echo"</form>";
echo"</table>";
echo"</body>";
echo"</html>";


//}// konec ELSE
?>
