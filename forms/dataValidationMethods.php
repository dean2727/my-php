<?php
// filter_var(): returns the variable (arg 1) if it is deemed valid, and FALSE otherwise
// arg 2 is the filter (see https://www.php.net/manual/en/filter.filters.validate.php)
$bad_email = 'fake - at - prank dot com';
if (filter_var($bad_email, FILTER_VALIDATE_EMAIL)){
  echo "Valid email!";
} else {
  echo "Invalid email!";
} 
// Prints: Invalid email!

// filter_var() takes an optional 3rd arg, $options, which is a nested associative array
// depicting criteria for arg 2. e.g. min and max age for age validation:
function validateAdult ($age){
  $options = ["options" => ["min_range" => 18, "max_range" => 124]];  
  if (filter_var($age, FILTER_VALIDATE_INT, $options)) {
    echo("You are ${age} years old.");
  } else {
    echo("That is not a valid age.");
  }
}
validateAdult(18); // Prints: You are 18 years old.
validateAdult(124); // Prints: You are 124 years old.
validateAdult(8); // Prints: That is not a valid age.
validateAdult(200); // Prints: That is not a valid age. 
?>