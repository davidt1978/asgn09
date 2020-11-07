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
              <option value="square_inches"<?php if($fromUnit == 'square_inches') {echo ' selected';} ?>>square inches</option>
              <option value="square_feet"<?php if($fromUnit == 'square_feet') {echo ' selected';} ?>>square feet</option>
              <option value="square_yards"<?php if($fromUnit == 'square_yards') {echo ' selected';} ?>>square yards</option>
              <option value="square_miles"<?php if($fromUnit == 'square_miles') {echo ' selected';} ?>>square miles</option>
              <option value="square_millimeters"<?php if($fromUnit == 'square_millimeters') {echo ' selected';} ?>>square millimeters</option>
              <option value="square_centimeters"<?php if($fromUnit == 'square_centimeters') {echo ' selected';} ?>>square centimeters</option>
              <option value="square_meters"<?php if($fromUnit == 'square_meters') {echo ' selected';} ?>>square meters</option>
              <option value="square_kilometers"<?php if($fromUnit == 'square_kilometers') {echo ' selected';} ?>>square kilometers</option>
              <option value="acres"<?php if($fromUnit == 'acres') {echo ' selected';} ?>>acres</option>
              <option value="hectares"<?php if($fromUnit == 'hectares') {echo ' selected';} ?>>hectares</option>
            </select>
          </div>

          <div class="entry">
            <label for="to">To:</label>&nbsp;
            <input type="text" name="to_value" value="<?php echo $toValue; ?>" id="to">&nbsp;
            <select name="toUnit">
              <option value="square_inches"<?php if($toUnit == 'square_inches') {echo ' selected';} ?>>square inches</option>
              <option value="square_feet"<?php if($toUnit == 'square_feet') {echo ' selected';} ?>>square feet</option>
              <option value="square_yards"<?php if($toUnit == 'square_yards') {echo ' selected';} ?>>square yards</option>
              <option value="square_miles"<?php if($toUnit == 'square_miles') {echo ' selected';} ?>>square miles</option>
              <option value="square_millimeters"<?php if($toUnit == 'square_millimeters') {echo ' selected';} ?>>square millimeters</option>
              <option value="square_centimeters"<?php if($toUnit == 'square_centimeters') {echo ' selected';} ?>>square centimeters</option>
              <option value="square_meters"<?php if($toUnit == 'square_meters') {echo ' selected';} ?>>square meters</option>
              <option value="square_kilometers"<?php if($toUnit == 'square_kilometers') {echo ' selected';} ?>>square kilometers</option>
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
