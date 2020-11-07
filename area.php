<!DOCTYPE html>
<?php
include("php/my-functions.php");

$fromValue = '';
$fromUnit = '';
$toValue = '';
$toUnit = '';

if($_POST['submit']) {
  $fromValue = (float)$_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];
  
  $toValue = convert_area($fromValue, $fromUnit, $toUnit);
}
?>

<html>
  <head>
    <?= head_info() ?>
    <title>Convert Area</title>
  </head>
  
  <body>
    <div id="wrapper">
      <header>
        <h1>Convert Area</h1>
      </header>

      <main>
        <form action="" method="post">
          <div class="entry">
            <label for="from">From:</label>&nbsp;
            <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" id="from">&nbsp;
            <select name="fromUnit">
              <option value="squareInches"<?php if($fromUnit == 'squareInches') {echo ' selected';} ?>>square inches</option>
              <option value="squareFeet"<?php if($fromUnit == 'squareFeet') {echo ' selected';} ?>>square feet</option>
              <option value="squareYards"<?php if($fromUnit == 'squareYards') {echo ' selected';} ?>>square yards</option>
              <option value="squareMiles"<?php if($fromUnit == 'squareMiles') {echo ' selected';} ?>>square miles</option>
              <option value="squareMillimeters"<?php if($fromUnit == 'squareMillimeters') {echo ' selected';} ?>>square millimeters</option>
              <option value="squareCentimeters"<?php if($fromUnit == 'squareCentimeters') {echo ' selected';} ?>>square centimeters</option>
              <option value="squareMeters"<?php if($fromUnit == 'squareMeters') {echo ' selected';} ?>>square meters</option>
              <option value="squareKilometers"<?php if($fromUnit == 'squareKilometers') {echo ' selected';} ?>>square kilometers</option>
              <option value="acres"<?php if($fromUnit == 'acres') {echo ' selected';} ?>>acres</option>
              <option value="hectares"<?php if($fromUnit == 'hectares') {echo ' selected';} ?>>hectares</option>
            </select>
          </div>

          <div class="entry">
            <label for="to">To:</label>&nbsp;
            <input type="text" name="to_value" value="<?php echo $toValue; ?>" id="to">&nbsp;
            <select name="toUnit">
              <option value="squareInches"<?php if($toUnit == 'squareInches') {echo ' selected';} ?>>square inches</option>
              <option value="squareFeet"<?php if($toUnit == 'squareFeet') {echo ' selected';} ?>>square feet</option>
              <option value="squareYards"<?php if($toUnit == 'squareYards') {echo ' selected';} ?>>square yards</option>
              <option value="squareMiles"<?php if($toUnit == 'squareMiles') {echo ' selected';} ?>>square miles</option>
              <option value="squareMillimeters"<?php if($toUnit == 'squareMillimeters') {echo ' selected';} ?>>square millimeters</option>
              <option value="squareCentimeters"<?php if($toUnit == 'squareCentimeters') {echo ' selected';} ?>>square centimeters</option>
              <option value="squareMeters"<?php if($toUnit == 'squareMeters') {echo ' selected';} ?>>square meters</option>
              <option value="squareKilometers"<?php if($toUnit == 'squareKilometers') {echo ' selected';} ?>>square kilometers</option>
              <option value="acres"<?php if($toUnit == 'acres') {echo ' selected';} ?>>acres</option>
              <option value="hectares"<?php if($toUnit == 'hectares') {echo ' selected';} ?>>hectares</option>
            </select>
          </div>

          <input type="submit" name="submit" value="Submit">
        </form>      
      </main>

      <footer>
        <?= back_to_index(); ?>
      </footer>
    </div>
  </body>
</html>
