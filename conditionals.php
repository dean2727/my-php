<?php
namespace Codecademy;

// switch statement example
function returnSeason($x) {
  $s = "";
  switch ($x) {
    case "December":
    case "January":
    case "February":
      $s = "winter";
      break;  // fallthrough occurs if no breaks (all code below is executed)
    case "March";
    case "April":
    case "May":
      $s = "spring";
      break;
    case "June":
    case "July":
    case "August":
      $s = "summer";
      break;
    case "September":
    case "October":
    case "November":
      $s = "fall";
      break;
  }
  return $s;
}

// ternary operator example
function ternaryCheckout($numItems) {
  return ($numItems <= 12) ? "express lane" : "regular lane";
}

// falsy values
if ("") {
  echo "this will not print";
} elseif (null) {
  echo "this will not print";
} elseif ([]) {
  echo "this will not print";
} elseif (0) {
  echo "this will not print";
} elseif ("0") {
  echo "this will not print";
} else {
  echo "Finally!";
}
// undefined/undeclared variables are also falsy