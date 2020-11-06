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

// Liquid Functions for asgn09

define('LIQUID_TO_GALLON', array(
  'imperialGallons' => 1,
  'buckets' => 4,
  'butts' => 108,
  'firkins' => 9,
  'hogsheads' => 54,
  'pints' => 0.125
));

if(!isset($_POST['submit'])) {
 $_POST['submit'] = '';
}

function convert_to_imperialGallons($value, $fromUnit) {
  if(array_key_exists($fromUnit, LIQUID_TO_GALLON)){
    return $value * LIQUID_TO_GALLON[$fromUnit];
  } else {
    return "Unsupported Unit";
  }
}
  
function convert_from_imperialGallons($value, $toUnit) {
  if(array_key_exists($toUnit, LIQUID_TO_GALLON)){
    return $value / LIQUID_TO_GALLON[$toUnit];
  } else {
    return "Unsupported Unit";
  }
}

function convert_liquids($value, $fromUnit, $toUnit) {
  $gallonValue = convert_to_imperialGallons ($value, $fromUnit);
  $newValue = convert_from_imperialGallons ($gallonValue, $toUnit);
  return $newValue;
}



// Mathematical Functions from Chapter 1 & 2

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

function convert_to_meters($value, $fromUnit) {
  if(array_key_exists($fromUnit, LENGTH_TO_METER)){
    return $value * LENGTH_TO_METER[$fromUnit];
  } else {
    return "Unsupported Unit";
  }
}
  
function convert_from_meters($value, $toUnit) {
  if(array_key_exists($toUnit, LENGTH_TO_METER)){
    return $value / LENGTH_TO_METER[$toUnit];
  } else {
    return "Unsupported Unit";
  }
}

function convert_length($value, $fromUnit, $toUnit) {
  $meterValue = convert_to_meters ($value, $fromUnit);
  $newValue = convert_from_meters ($meterValue, $toUnit);
  return $newValue;
}

// Area Functions

function convert_to_square_meters($value, $fromUnit) {
  $fromUnit = str_replace('square_', '', $fromUnit);
  if(array_key_exists($fromUnit, LENGTH_TO_METER)){
    return $value * pow(LENGTH_TO_METER[$fromUnit], 2);
  } else {
    return "Unsupported Unit";
  }
}
  
function convert_from_square_meters($value, $toUnit) {
  $toUnit = str_replace('square_', '', $toUnit);
  if(array_key_exists($toUnit, LENGTH_TO_METER)){
    return $value / pow(LENGTH_TO_METER[$toUnit], 2);
  } else {
    return "Unsupported Unit";
  }
}

function convert_area($value, $fromUnit, $toUnit) {
  $meterValue = convert_to_square_meters ($value, $fromUnit);
  $newValue = convert_from_square_meters ($meterValue, $toUnit);
  return $newValue;
}

// EOF
