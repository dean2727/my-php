<?php

// alternative: see the str_replace function: https://www.php.net/manual/en/function.str-replace.php
function generateStory($singular_noun, $verb, $color, $distance_unit) {
  $story = "\nThe ${singular_noun}s are lovely, ${color}, and deep.\n" .
  "But I have promises to keep,\n" .
  "And ${distance_unit} to go before I ${verb},\n" .
  "And ${distance_unit} to go before I ${verb}.\n";
  return $story;
}

echo generateStory("lamp", "shine", "gray", 1);
echo generateStory("chair", "sit", "brown", 2);
echo generateStory("book", "close", "blue", 3);