<?php

class StringUtilities {
  public static function secondCase($string) {
    // edge cases: 1 letter, or empty string
    if (strlen($string) === 1) {
      return strtolower($string);
    }
    if (strlen($string) === 0) {
      return $string;
    }
    $string = strtolower($string);
    $string[1] = strtoupper($string[1]);
    return $string;
  }
}

class Pajamas {
  private $owner, $fit, $color;

  function __construct($owner, $fit, $color) {
    $this->owner = StringUtilities::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }

  function describe() {
    echo "These Pajamas are owned by " . $this->owner . ", they have a " . $this->color . " color, and their fit is " . $this->fit . ".";
  }

  function setFit($new_fit) {
    $this->fit = $new_fit;
  }
}

class ButtonablePajamas extends Pajamas {
  private $button_state = "unbuttoned";

  function describe() {
    parent::describe();
    echo " The buttons are " . $this->button_state . ".\n";
  }

  function toggleButtons() {
    if ($this->button_state === "unbuttoned") {
      $this->button_state = "buttoned";
    }
    else {
      $this->button_state = "unbuttoned";
    }
  }
}

echo StringUtilities::secondCase("BOBBY") . "\n";
echo StringUtilities::secondCase("T") . "\n";
echo StringUtilities::secondCase("") . "\n";

$chicken_PJs = new Pajamas("bobby", 32, "blue");
$chicken_PJs->describe();
echo "\n";
$chicken_PJs->setFit(31);
$chicken_PJs->describe();
echo "\n";
$moose_PJs = new ButtonablePajamas("manny the moose", 40, "green");
$moose_PJs->describe();
$moose_PJs->toggleButtons();
$moose_PJs->describe();