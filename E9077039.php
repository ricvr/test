<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Databáze knih</title>
  </head>
  <body>
    <h1>Databáze knih</h1>
      <form action="pridat.php" method="post">
      Název knihy<input type=text size=20 name=nazev-knihy>
      <br>
      Autor knihy <input type=text size=20 name=autor>
      <p>
      <input type=button value="Storno" onClick="window.location="pridat.php">
        <input type="submit" value="Pøidat" onSubmit="kontrola();">
       </form>
        
      <form action="odebrat.php" method="post">
        <input type="submit" value="Odebrat">
      </form>
  </body>
</html>
