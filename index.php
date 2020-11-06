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
        <li><a href="length.php">Length and distance</a></li>
        <li><a href="area.php">Area</a></li>
        <li><a href="volume.php">Volume and capacity</a></li>
        <li><a href="mass.php">Mass and weight</a></li>
        <li><a href="speed.php">Speed</a></li>
        <li><a href="temperature.php">Temperature</a></li>
      </ul>
    </main>
    
    <footer>
      <?= back_to_index(); ?>
    </footer>
  </body>
</html>
