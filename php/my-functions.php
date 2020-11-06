<?php

// HTML Page Elements

function back_to_index() {
  echo ('<a href="index.php">Back to asgn09</a>');
}

function head_info() {
  echo ('<meta charset="utf-8">');
  echo ('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
  echo ('<link rel="stylesheet" href="../css/styles.css">');
}

// Mathematical Functions

define('LENGTH_TO_METER', array(
  'inches' => 0.0254,
  'feet' => 0.3048,
  'yards' => 0.9144,
  'miles' => 1609.344,
  'millimeters' => 0.001,
  'centimeter' => 0.01,
  'meters' => 1,
  'kilometer' => 1000,
  'acres' => 63.614907234075,
  'hectares' => 100
));

// Length Functions

function convert_to_meters($value, $from_unit) {
  if(array_key_exists($from_unit, LENGTH_TO_METER)){
    return $value * LENGTH_TO_METER[$from_unit];
  } else {
    return "Unsupported Unit";
  }
}
  
function convert_from_meters($value, $to_unit) {
  if(array_key_exists($to_unit, LENGTH_TO_METER)){
    return $value / LENGTH_TO_METER[$to_unit];
  } else {
    return "Unsupported Unit";
  }
}

function convert_length($value, $from_unit, $to_unit) {
  $meter_value = convert_to_meters ($value, $from_unit);
  $new_value = convert_from_meters ($meter_value, $to_unit);
  return $new_value;
}

// Area Functions

function convert_to_square_meters($value, $from_unit) {
  $from_unit = str_replace('square_', '', $from_unit);
  if(array_key_exists($from_unit, LENGTH_TO_METER)){
    return $value * pow(LENGTH_TO_METER[$from_unit], 2);
  } else {
    return "Unsupported Unit";
  }
}
  
function convert_from_square_meters($value, $to_unit) {
  $to_unit = str_replace('square_', '', $to_unit);
  if(array_key_exists($to_unit, LENGTH_TO_METER)){
    return $value / pow(LENGTH_TO_METER[$to_unit], 2);
  } else {
    return "Unsupported Unit";
  }
}

function convert_area($value, $from_unit, $to_unit) {
  $meter_value = convert_to_square_meters ($value, $from_unit);
  $new_value = convert_from_square_meters ($meter_value, $to_unit);
  return $new_value;
}

// EOF
