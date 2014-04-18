/*
 * JavaScriptové funkce, které se používají pøi vkládání èlánkù
 * do databáze.
 * Vkládá se v modulu FORM_VLOZCL.PHP.
 */

	 

//***********************************************************
function nastav_tema(xy){
//***********************************************************
				x=eval(xy);
				var pocet_temat=x.length/2;
				while (pocet_temat<document.form1.tema.options.length) {  
					document.form1.tema.options[(document.form1.tema.options.length-1)]=null;
				}
			pocet=x.length/2;
			for(i=0;i<pocet;i++)	{	
				eval("document.form1.tema.options[i]=new Option"+x[i*2]);
				eval("document.form1.tema.options[i].value="+x[(i*2)+1]);
			}
			if(document.form1.oblast.options[0].value=="")document.form1.oblast.options[0]=null;
			if(document.form1.tema.options[0].value=="")document.form1.tema.options[0]=null;
// Vymazání seznamu dílù
			for (z=0; z<document.form1.dil.options.length;z++) {  
					document.form1.dil.options[(document.form1.dil.options.length-1)]=null;
				}
}// konec funkce NASTAV_TEMA

function kontrola(){
/* kontroluje vstupní data
	vrací 0 když je vše v poøádku
	vraci 1 když je chyba
 */
//var vysledek =true;
with (document.form1){
/*	if(tema.value==0){
		window.alert("Èlánek není zaøazen!");
		return false;
	}*/
	if(autor.value==0){
		window.alert("Èlánek nemá zadaného autora!")
		return false;
	}
	if((titul.value==" ")||(titul.value=="")){
		window.alert("Èlánek nemá titulek!")
		return false;
	}
return true;	
} //with
}
function odstavce(txt){
//	var pat=/\n/<p>/;
//	txt Global = yes;


/*  var re = new RegExp(document.demoMatch.regex.value, "g");
  document.demoMatch.result.value = 
    document.demoMatch.subject.value.replace(re, 
      document.demoMatch.replacement.value);
*/
  var re = new RegExp("\n", "g");
  return (txt.replace(re,"<p>"));

	//return (txt.replace('\n',"<p>"));
}

function xuloz(){
if (kontrola()!=0){
	return;
}else{
	with (document.form1){
	
	parametr="dil="+dil.value;
	parametr+="&autor="+autor.value;
	parametr+="&titul="+titul.value;
	parametr+="&uvod="+uvod.value;
	parametr+="&text="+odstavce(text.value);
	window.location.replace("ins_clanek.php?"+parametr);
	}
}//IF....
}
