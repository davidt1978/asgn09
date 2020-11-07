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

if(!isset($_POST['submit'])) {
 $_POST['submit'] = '';
}

function convert_to_imperialGallons($value, $fromUnit) {
  switch($fromUnit) {
    case 'imperialGallons':
      return $value;
      break;
    case 'buckets':
      return $value * 4;
      break;
    case 'butts':
      return $value * 108;
      break;
    case 'firkins':
      return $value * 9;
      break;
    case 'hogsheads':
      return $value * 54;
      break;
    case 'pints':
      return $value * 0.125;
      break;
    default:
      return "Unsupported Unit";
  }
}
  
function convert_from_imperialGallons($value, $toUnit) {
  switch($toUnit) {
    case 'imperialGallons':
      return $value;
      break;
    case 'buckets':
      return $value / 4;
      break;
    case 'butts':
      return $value / 108;
      break;
    case 'firkins':
      return $value / 9;
      break;
    case 'hogsheads':
      return $value / 54;
      break;
    case 'pints':
      return $value / 0.125;
      break;
    default:
      return "Unsupported Unit";
  }
}

function convert_liquids($value, $fromUnit, $toUnit) {
  $gallonValue = convert_to_imperialGallons ($value, $fromUnit);
  $newValue = convert_from_imperialGallons ($gallonValue, $toUnit);
  return $newValue;
}

// Mathematical Functions from Chapter 1 & 2

// Length Functions

function convert_to_meters($value, $fromUnit) {
  switch($fromUnit) {
    case 'inches':
      return $value * 0.0254;
      break;
    case 'feet':
      return $value * 0.3048;
      break;
    case 'yards':
      return $value * 0.9144;
      break;
    case 'miles':
      return $value * 1609.344;
      break;
    case 'millimeters':
      return $value * 0.001;
      break;
    case 'centimeters':
      return $value * 0.01;
      break;
    case 'meters':
      return $value;
      break;
    case 'kilometers':
      return $value * 1000;
      break;
    default:
      return "Unsupported Unit";
  }
}
  
function convert_from_meters($value, $toUnit) {
switch($toUnit) {
    case 'inches':
      return $value / 0.0254;
      break;
    case 'feet':
      return $value / 0.3048;
      break;
    case 'yards':
      return $value / 0.9144;
      break;
    case 'miles':
      return $value / 1609.344;
      break;
    case 'millimeters':
      return $value / 0.001;
      break;
    case 'centimeters':
      return $value / 0.01;
      break;
    case 'meters':
      return $value;
      break;
    case 'kilometers':
      return $value / 1000;
      break;
    default:
      return "Unsupported Unit";
  }
}

function convert_length($value, $fromUnit, $toUnit) {
  $meterValue = convert_to_meters ($value, $fromUnit);
  $newValue = convert_from_meters ($meterValue, $toUnit);
  return $newValue;
}

// Area Functions

function convert_to_squareMeters($value, $fromUnit) {
  switch($fromUnit) {
    case 'squareInches':
      return $value * pow(0.0254, 2);
      break;
    case 'squareFeet':
      return $value * pow(0.3048, 2);
      break;
    case 'squareYards':
      return $value * pow(0.144, 2);
      break;
    case 'squareMiles':
      return $value * pow(1609.344, 2);
      break;
    case 'squareMillimeters':
      return $value * pow(0.001, 2);
      break;
    case 'squareCentimeters':
      return $value * pow(0.01, 2);
      break;
    case 'squareMeters':
      return $value;
      break;
    case 'squareKilometers':
      return $value * pow(1000, 2);
      break;
    case 'acres':
      return $value * 4046.8564224;
      break;
    case 'hectares':
      return $value * 10000;
      break;
    default:
      return "Unsupported Unit";
  }
}
  
function convert_from_squareMeters($value, $toUnit) {
  switch($toUnit) {
    case 'squareInches':
      return $value / pow(0.0254, 2);
      break;
    case 'squareFeet':
      return $value / pow(0.3048, 2);
      break;
    case 'squareYards':
      return $value / pow(0.9144, 2);
      break;
    case 'squareMiles':
      return $value / pow(1609.344, 2);
      break;
    case 'squareMillimeters':
      return $value / pow(0.001, 2);
      break;
    case 'squareCentimeters':
      return $value / pow(0.01, 2);
      break;
    case 'squareMeters':
      return $value;
      break;
    case 'squareKilometers':
      return $value / pow(1000, 2);
      break;
    case 'acres':
      return $value / 4046.8564224;
      break;
    case 'hectares':
      return $value / 10000;
      break;
    default:
      return "Unsupported Unit";
  }
}

function convert_area($value, $fromUnit, $toUnit) {
  $meterValue = convert_to_squareMeters ($value, $fromUnit);
  $newValue = convert_from_squareMeters ($meterValue, $toUnit);
  return $newValue;
}

// EOF
