<?php
  // Change player location
function changeLocation(){	
  global $location;
  echo "Where do you want to go?\n";
  $go_to = strtolower(readline(">> "));
  
  if ($location === "kitchen" and $go_to === "bathroom") {
    $location = "bathroom";
    echo "You go to: bathroom.\n";
  }
  elseif ($location === "kitchen" and $go_to === "woods") {
    $location = "woods";
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
  }
  elseif ($location === "bathroom" and $go_to === "kitchen") {
    $location = "kitchen";
    echo "You go to: kitchen.\n";
  }
  elseif ($location === "woods" and $go_to === "kitchen") {
    $location = "kitchen";
    echo "You go to: kitchen.\n";
  }
  elseif ($go_to === "woods" or $go_to === "kitchen" or $go_to === "bathroom") {
    echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
  }
  else {
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
  }
}