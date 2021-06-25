<?php

// declaring an array (ordered (indexed) list)
// short array syntax
$number_array = [0, 1, 2];  // for empty: []
$number_array_func = array(0, 1, 2);  // for empty: array()

echo $number_array; // Prints: Array
print_r($number_array);  // prints array in nice format
echo count($number_array_func);  // prints 3

// implode(): convert array to a string (akin to join in python)
echo implode(", ", $number_array);

// indexing
$num_var = 2;
$important_info = ["talking chicken", 181, "magnets?!", 99];
echo $important_info[$num_var]; // Prints: magnets?!

// adding elements
$important_info[] = "fifth element";

// reassigning elements
$important_info[4] = "new fifth element";

// array_pop(): remove and return the last element
$my_array = ["tic", "tac", "toe"];
array_pop($my_array); 
// $my_array is now ["tic", "tac"]
$popped = array_pop($my_array); 
// $popped is "tac"
// $my_array is now ["tic"]

// array_shift(): remove and return the first element
$adjectives = ["bad", "good", "great", "fantastic"];
$removed = array_shift($adjectives); 
echo $removed; //Prints: bad
echo implode(", ", $adjectives); // Prints: good, great, fantastic 

// array_push(): add elements to end of array and return the new number of elements in array
$new_array = ["eeny"];
$num_added = array_push($new_array, "meeny", "miny", "moe"); 
// array now: eeny, meeny, miny, moe 
echo $num_added; // Prints: 4

// array_unshift(): add elements to front of array and return new number of elements
$foods = ["pizza", "crackers", "apples", "carrots"];
$arr_len = array_unshift($foods, "pasta", "meatballs", "lettuce"); 
echo $arr_len; //Prints: 7
echo implode(", ", $foods); 
// Prints: pasta, meatballs, lettuce, pizza, crackers, apples, carrots

// nested arrays
$nested_arr = [[2, 4], [3, 9], [4, 16]];
$first_el = $nested_arr[0][0];
echo $first_el; // Prints: 2

// in_array(): see if element is in array
$haystack = ["whole milk", "sugar", "bananas", "chicken", "salmon", "garlic"];
$needle = "sugar";
if (in_array($needle, $haystack)) {
    echo "In!\n";
}