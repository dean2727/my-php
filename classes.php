<?php

class Beverage {
  public $temperature, $color, $opacity;
  // use private keyword for private members, and protected for protected members (can access in child classes)

  function __construct($temperature, $color) {
    $this->temperature = $temperature;
    $this->color = $color;
  }

  function getInfo() {
    return "This beverage is $this->temperature and $this->color.";
  }
}

$black_tea = new Beverage("cold", "black");
echo $black_tea->getInfo();
$black_tea->color = "blue";
echo $black_tea->temperature;

// protected example
class Pet {
    protected $heathScore = 0; 
}
   
class Horse extends Pet {
    function brushTeeth() {
      this->heathScore++; 
    }
}
   
$my_pet = new Horse();
$my_pet->brushTeeth(); // Successfully increments healthScore
$my_pet->healthScore; // Error


// inheritence
class Potion {
    public $temperature;
    
    function getInfo() {
      return "This potion is $this->temperature.";
    }

    function type() {
        return "potion";
    }
}

class BeGone extends Potion {
    function __construct() {
        $this->temperature = "cold";
    }
    // overloading
    function type() {
        return "be gone!";
    }
    // calling the parent's method
    function classify(){
        echo "This " . parent::type() . " is of type " . $this->type();
    }
}


// class with getters and setters
class Food {
    private $name;
    function setName($name) {
    // to ensure $name is a string, would need to return boolean depending on whether gettype($name) === "string" or not
      $this->name = $name;
    }
    function getName() {
      return $this->name;
    }
}

// class with static members (group of utility functions/variables that dont change for every instance)
class StringUtils {
    public static $max_number_of_characters = 80;
    public static function uclast($string) {
      $string[strlen($string)-1] = strtoupper($string[strlen($string)-1]);
      return $string;
    }
}

// need to use scope resolution operator (::) to access static members
echo StringUtils::$max_number_of_characters; # Prints "80"
echo StringUtils::uclast("hello world"); # Prints "hello worlD"