<!DOCTYPE html>
<?php
require_once("php/my-functions.php");

$fromValue = '';
$fromUnit = '';
$toValue = '';
$toUnit = '';

if($_POST['submit']) {
  $fromValue = (float)$_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];
  
  $toValue = convert_length($fromValue, $fromUnit, $toUnit);
}
?>

<html>
  <head>
    <?= head_info() ?>
    <title>Convert Length</title>
  </head>
  
  <body>
    <div id="wrapper">
      <header>
        <h1>Convert Length</h1>
      </header>

      <main>
        <form action="" method="post">
          <div class="entry">
            <label for="from">From:</label>&nbsp;
            <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" id="from">&nbsp;
            <select name="fromUnit">
              <option value="inches"<?php if($fromUnit == 'inches') {echo ' selected';} ?>>inches</option>
              <option value="feet"<?php if($fromUnit == 'feet') {echo ' selected';} ?>>feet</option>
              <option value="yards"<?php if($fromUnit == 'yards') {echo ' selected';} ?>>yards</option>
              <option value="miles"<?php if($fromUnit == 'miles') {echo ' selected';} ?>>miles</option>
              <option value="millimeters"<?php if($fromUnit == 'millimeters') {echo ' selected';} ?>>millimeters</option>
              <option value="centimeters"<?php if($fromUnit == 'centimeters') {echo ' selected';} ?>>centimeters</option>
              <option value="meters"<?php if($fromUnit == 'meters') {echo ' selected';} ?>>meters</option>
              <option value="kilometers"<?php if($fromUnit == 'kilometers') {echo ' selected';} ?>>kilometers</option>
            </select>
          </div>

          <div class="entry">
            <label for="to">To:</label>&nbsp;
            <input type="text" name="to_value" value="<?php echo $toValue; ?>" id="to">&nbsp;
            <select name="toUnit">
              <option value="inches"<?php if($toUnit == 'inches') {echo ' selected';} ?>>inches</option>
              <option value="feet"<?php if($toUnit == 'feet') {echo ' selected';} ?>>feet</option>
              <option value="yards"<?php if($toUnit == 'yards') {echo ' selected';} ?>>yards</option>
              <option value="miles"<?php if($toUnit == 'miles') {echo ' selected';} ?>>miles</option>
              <option value="millimeters"<?php if($toUnit == 'millimeters') {echo ' selected';} ?>>millimeters</option>
              <option value="centimeters"<?php if($toUnit == 'centimeters') {echo ' selected';} ?>>centimeters</option>
              <option value="meters"<?php if($toUnit == 'meters') {echo ' selected';} ?>>meters</option>
              <option value="kilometers"<?php if($toUnit == 'kilometers') {echo ' selected';} ?>>kilometers</option>
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
