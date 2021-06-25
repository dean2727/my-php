<?php
  
function pickMushrooms(){
  global $location, $has_mushrooms;
  if ($location !== "woods") {
    echo "There aren't any mushrooms to pick!\n";
  }
  else {
    $has_mushrooms = TRUE;
    echo "You've picked some mushrooms.\n";
  }
}  