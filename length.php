<!DOCTYPE html>
<?php
require_once("php/my-functions.php");

$from_value = '';
$from_unit = '';
$to_value = '';
$to_unit = '';

if($_POST['submit']) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_length($from_value, $from_unit, $to_unit);
}
?>

<html>
  <head>
    <?= head_info() ?>
    <title>Convert Length</title>
  </head>
  
  <body>
    <header>
      <h1>Convert Length</h1>
    </header>

    <main>
      <form action="" method="post">
        <div class="entry">
          <label for="from">From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" id="from">&nbsp;
          <select name="from_unit">
            <option value="inches"<?php if($from_unit == 'inches') {echo ' selected';} ?>>inches</option>
            <option value="feet"<?php if($from_unit == 'feet') {echo ' selected';} ?>>feet</option>
            <option value="yards"<?php if($from_unit == 'yards') {echo ' selected';} ?>>yards</option>
            <option value="miles"<?php if($from_unit == 'miles') {echo ' selected';} ?>>miles</option>
            <option value="millimeters"<?php if($from_unit == 'millimeters') {echo ' selected';} ?>>millimeters</option>
            <option value="centimeters"<?php if($from_unit == 'centimeters') {echo ' selected';} ?>>centimeters</option>
            <option value="meters"<?php if($from_unit == 'meters') {echo ' selected';} ?>>meters</option>
            <option value="kilometers"<?php if($from_unit == 'kilometers') {echo ' selected';} ?>>kilometers</option>
          </select>
        </div>
        
        <div class="entry">
          <label for="to">To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value; ?>" id="to">&nbsp;
          <select name="to_unit">
            <option value="inches"<?php if($to_unit == 'inches') {echo ' selected';} ?>>inches</option>
            <option value="feet"<?php if($to_unit == 'feet') {echo ' selected';} ?>>feet</option>
            <option value="yards"<?php if($to_unit == 'yards') {echo ' selected';} ?>>yards</option>
            <option value="miles"<?php if($to_unit == 'miles') {echo ' selected';} ?>>miles</option>
            <option value="millimeters"<?php if($to_unit == 'millimeters') {echo ' selected';} ?>>millimeters</option>
            <option value="centimeters"<?php if($to_unit == 'centimeters') {echo ' selected';} ?>>centimeters</option>
            <option value="meters"<?php if($to_unit == 'meters') {echo ' selected';} ?>>meters</option>
            <option value="kilometers"<?php if($to_unit == 'kilometers') {echo ' selected';} ?>>kilometers</option>
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
