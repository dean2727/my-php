<?php
// 10 digit phone number pattern (allows for optional spaces, parenthese, and periods)
$pattern = '/^[(]*([0-9]{3})[- .)]*[0-9]{3}[- .]*[0-9]{4}$/';
// preg_match: regex expression matching (return 1 if success, 0 if fail, FALSE if error)
preg_match($pattern, "(999)-555-2222"); // Returns: 1
preg_match($pattern, "555-2222"); // Returns: 0

// regex takes computing power. make sure input isnt too long before using regex, using strlen()
$name = "Aisle Nevertell";
$length = strlen($name);
if ($length > 2 && $length < 100){
  echo "That seems like a reasonable name to me...";
} 
?>