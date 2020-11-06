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
  
  $toValue = convert_liquids($fromValue, $fromUnit, $toUnit);
}
?>

<html>
  <head>
    <?= head_info() ?>
    <title>Convert Liquids</title>
  </head>
  
  <body>
    <header>
      <h1>Convert Liquids</h1>
    </header>

    <main>
      <form action="" method="post">
        <div class="entry">
          <label for="from">From:</label>&nbsp;
          <input type="text" name="fromValue" value="<?php echo $fromValue; ?>" id="from">&nbsp;
          <select name="fromUnit">
            <option value="imperialGallons"<?php if($fromUnit == 'imperialGallons') {echo ' selected';} ?>>Imperial Gallons</option>
            <option value="buckets"<?php if($fromUnit == 'buckets') {echo ' selected';} ?>>Buckets</option>
            <option value="butts"<?php if($fromUnit == 'butts') {echo ' selected';} ?>>Butts</option>
            <option value="firkins"<?php if($fromUnit == 'firkins') {echo ' selected';} ?>>Firkins</option>
            <option value="hogsheads"<?php if($fromUnit == 'hogsheads') {echo ' selected';} ?>>Hogsheads</option>
            <option value="pints"<?php if($fromUnit == 'pints') {echo ' selected';} ?>>Pints</option>
          </select>
        </div>
        
        <div class="entry">
          <label for="to">To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $toValue; ?>" id="to">&nbsp;
          <select name="toUnit">
            <option value="imperialGallons"<?php if($toUnit == 'imperialGallons') {echo ' selected';} ?>>Imperial Gallons</option>
            <option value="buckets"<?php if($toUnit == 'buckets') {echo ' selected';} ?>>Buckets</option>
            <option value="butts"<?php if($toUnit == 'butts') {echo ' selected';} ?>>Butts</option>
            <option value="firkins"<?php if($toUnit == 'firkins') {echo ' selected';} ?>>Firkins</option>
            <option value="hogsheads"<?php if($toUnit == 'hogsheads') {echo ' selected';} ?>>Hogsheads</option>
            <option value="pints"<?php if($toUnit == 'pints') {echo ' selected';} ?>>Pints</option>
          </select>
        </div>
        
        <input type="submit" name="submit" value="Submit">
      </form>      
    </main>
    
    <footer>
      <?= back_to_index(); ?>
    </footer>
  </body>
</html>
