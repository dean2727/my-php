<?php

// while loop, do while loop, and for loop all similar to C++

// looping through an array
$counting_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($counting_array as $count) {
  echo "The count is: " . $count . "\n";
}

$details_array = ["color" => "blue", "shape" => "square"];
// loop values
foreach ($details_array as $detail) {
  echo "The detail is: " . $detail . "\n";]
}
// loop keys and values
foreach ($details_array as $attribute => $detail) {
  echo "The " . $attribute . " is: " . $detail . "\n";
}
// be careful modifying the array in the loop