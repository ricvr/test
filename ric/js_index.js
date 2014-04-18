<script language="javascript" type="text/javascript">

function dejPoziciPrvku(id){
  obj = document.getElementById(id);
  objLeft = obj.offsetLeft+obj.offsetWidth;
  objTop = obj.offsetTop;
}

function pop_menu(menu,on) {
	//window.alert("Pop_menu funkce "+menu+" ON:"+on);
   if (on) {
    dej_polohu(menu);
      document.getElementById(menu).style.visibility = "visible";
   } else {
      document.getElementById(menu).style.visibility = "hidden";
   }
} 

function dej_polohu(id) {
   dejPoziciPrvku(id+"_nadraz");

   document.getElementById(id).style.top = objTop;
   document.getElementById(id).style.left = objLeft;
}
 /**********************************/
  function  zvetsi_obr(obr){
	/*********************************
	 * umožnuje zvìtšit obrázek z èlánku na plnou velikost
	 */
zobraz=window.open(obr,'zobraz','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=700,height=500');
	} // konec funkce
 /**********************************/
 function smaz_clanek(
 /**********************************/
 					idcl // ID clanku, ktery se bude mazat
					, nadpis // Nadpis clanku, ktery se bude mazat
					) {
 /*
 POPIS: Provadi kontrolni dotaz a nasledne zavola funkci pro smazani clanku
 VSTUP:
 VYSTUP:
 */
 if (window.confirm("Smazat èlánek\n"+nadpis+" ?")){
 	window.open("smazat_clanek.php?idcl="+idcl,'','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=400,height=200')
 }else{
 	return;
 }

 } // konec funkce
 //-------------------------------------------------
  

</script>

