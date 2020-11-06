<!DOCTYPE html>
<?php
  include("php/my-functions.php");
?>

<html>
  <head>
    <?= head_info() ?>
    <title>Measurement Conversion</title>
  </head>
  <body>
    <header>
      <h1>Measurement Conversion</h1>    
    </header>

    <main>  
      <ul id="measurement-types">
        <li><a href="liquids.php">Arcane Liquids</a></li>
        <li><a href="length.php">Length and Distance</a></li>
        <li><a href="area.php">Area</a></li>
      </ul>
    </main>
    
    <footer>
      <a href="../index.php">Return to WEB182</a>
    </footer>
  </body>
</html>
