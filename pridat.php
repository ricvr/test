<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Datab�ze knih</title>
  </head>
  <body>
    <h1>P�id�n� nov� knihy</h1>
    <form action=ulozDoDb.php method=get>
      Autor: <input type="text" name="autor" size="50"><br>
      N�zev: <input type="text" name="nazev" size="100"><br>
      Rok vyd�n�: <input type="number" name="rokvydani" min="1850" max="2013" size="6"><br>
      <input type="submit" value="OK" onClick= "return kontrola();"">
      <form action="index.php" method=post>
      <input type="button" value="Storno" onClick=window.location="index.php">
     </form>
     <h2>Seznam knih</h2>
     <br>
     <a href="smazKnihu?id=11">Smazat</a> Bo�ena N�mcov�: Babi�ka
     <br>
     <a href="smazKnihu?id=22">Smazat</a> Karel �apek: Matka
  </body>
</html>