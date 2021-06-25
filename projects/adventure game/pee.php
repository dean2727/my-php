<?php
  
function pee(){
  global $location, $needs_to_pee;
  if ($location === "bathroom" or $location === "woods") {
    $needs_to_pee = FALSE;
    echo "You relieve yourself.\n";
  }
  else {
    echo "Are you crazy? You can't pee here!\n";
  }
}