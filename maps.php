<?php

// keys are strings or integers, values are any type
// short array syntax
$my_array = ["panda" => "very cute", "lizard" => "cute", "cockroach" => "not very cute"];
// using array()
$about_me = array(
    "fullname" => "Aisle Nevertell",
    "social" => 123456789
);

// implode() will only show the values. thus, to see keys and values, use print_r()
print_r($about_me);

// accessing values
$my_array = ["panda"=>"very cute", "lizard"=>"cute", "cockroach"=>"not very cute"];
echo $my_array["panda"]; // Prints: very cute

// adding new key value pair
$my_array["capybara"] = "cutest";
echo $my_array["capybara"]; // Prints: cutest

// can use variables, functions, and operators in the square brackets
$favorites = ["favorite_food"=>"pizza", "favorite_place"=>"my dreams", "FAVORITE_CASE"=>"CAPS","favorite_person"=>"myself"];
echo  $favorites["favorite" . "_" . "food"]; 
// Prints: pizza
$key =  "favorite_place";
echo  $favorites[$key];  
// Prints: my dreams
echo $favorites[strtoupper("favorite_case")];
// Prints: CAPS

// change value for a key
$favorites["favorite_food"] = "pasta";

// unset(): remove key value pair (nothing happens if key doesnt exist)
unset($favorites["favorite_food"]);

// can mix maps (associative arrays) with normal arrays
$ordered = [99, 1, 7, 8];
$ordered["special"] = "Cool!";
echo $ordered[3]; // Prints: 8
echo $ordered["special"]; // Prints: Cool!

// when we add an element to a map without specifying a key, the key is auto-assigned 1 more than the highest so far
$num_array = [1000 => "one thousand", 100 => "one hundred", 600 => "six hundred"];
$num_array[] = "New Element in \$num_array";
echo $num_array[1001]; // Prints: New Element in $num_array
// if no integer index exists, computer auto-assigns 0
$animals_array = ["panda"=>"very cute", "lizard"=>"cute", "cockroach"=>"not very cute"];
array_push($animals_array, "New Element in \$animals_array");
echo $animals_array[0]; // Prints: New Element in $animals_array

// union + operator to combine 2 arrays. keeps left operand's elements and only takes unique elements from right
$my_array = ["panda" => "very cute", "lizard" => "cute", "cockroach" => "not very cute"];
$more_rankings = ["capybara" => "cutest", "lizard" => "not cute", "dog" => "max cuteness"];
$animal_rankings = $my_array + $more_rankings;  // lizard from more_rankings is left out
// in this e.g., only 8, 3, and 7 are in union_array, since both arrays share indices 0, 1, and 2
$number_array = [8, 3, 7];
$string_array = ["first element", "second element", "third element"];
$union_array = $number_array + $string_array;

// pass by reference
function reallyChangeColor (&$arr) 
{
  $arr["color"] = "red";    
}
$object = ["shape"=>"square", "size"=>"small", "color"=>"green"];
reallyChangeColor ($object);
echo $object["color"]; // Prints: red
