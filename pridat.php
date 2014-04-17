<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Databáze knih</title>
  </head>
  <body>
    <h1>Pøidání nové knihy</h1>
    <form action=ulozDoDb.php method=get>
      Autor: <input type="text" name="autor" size="50"><br>
      Název: <input type="text" name="nazev" size="100"><br>
      Rok vydání: <input type="number" name="rokvydani" min="1850" max="2013" size="6"><br>
      <input type="submit" value="OK" onClick= "return kontrola();"">
      <form action="index.php" method=post>
      <input type="button" value="Storno" onClick=window.location="index.php">
     </form>
     <h2>Seznam knih</h2>
     <br>
     <a href="smazKnihu?id=11">Smazat</a> Božena Nìmcová: Babièka
     <br>
     <a href="smazKnihu?id=22">Smazat</a> Karel Èapek: Matka
  </body>
</html>