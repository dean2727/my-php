<?php

// different ways of doing echo
echo("This works!\n");
echo "This also works!\n";
//echo("This would NOT work", "\n");
echo "Buuuut!", " ", "This", " ", "does!", "\n";


// gettype(): returns a string representing the data type of the argument
$name = "Aisle Nevertell";
$age = 1000000;
echo gettype($name); // Prints: string
echo "\n";
echo gettype($age); // Prints: integer
echo "\n";

// var_dump(): more detailed info about the argument it receives (notice: doesnt need echo)
var_dump($name); // Prints: string(15) "Aisle Nevertell"
var_dump($age); // Prints: int(1000000)


// STRING FUNCTIONS
// strrev(): reverse a string
echo strrev("Hello, World!"); // Prints: !dlroW ,olleH
echo "\n";

// strtolower(): transform string to all lowercase letters
echo strtolower("HeLLo"); // Prints: hello
echo "\n";
// strtoupper(): to all caps
echo strtoupper("HeLLo"); // Prints: HELLO
echo "\n";

// str_repeat(): repeat a string 2nd arg number of times
echo str_repeat("hi", 10); // Prints: hihihihihihihihihihi 
echo "\n";

// substr_count(): given 1st arg as haystack, and 2nd arg as needle, 
// how many times does the needle (substring) occur in the haystack (string)
// note: isnt concerned with characters before or after (e.g. if needle = "obvious", and find "obviously", it counts it)
// note: it IS case-sensitive
$story = "I was like, \"Dude, like just tell me what you like think because like everyone else is like being totally honest, and like I just want to know what you like think.\" So like I don't know...";
echo substr_count($story, "like"); // Prints: 8
echo "\n";

// str_pad(): pad a string. if 2nd arg is <= str length, nothing happens. by default, pad right (4th optional arg)
// pad string is " " by default (3rd optional arg)
$a = 29;
$b = "You did it!";
$c = STR_PAD_BOTH;
$d = "*~*";
echo str_pad($b, $a, $d, $c);
echo "\n";

// str_replace(): return a string with all occurences of 1st arg in 3rd arg replaced with 2nd arg
$fruit = "apples & bananas";
$fruit = str_replace("a", "oo", $fruit);  // now it is "oopples & boobooboos"

// strlen(): gets length of string
echo strlen("some string");
echo "\n";

 
// NUMBER FUNCTIONS
// absolute value
echo abs(-10.99); // Prints: 10.99
echo "\n";
// distance between 2 numbers
function calculateDistance($n1, $n2) {
    return abs($n1 - $n2);
}
  
// round to nearest integer
echo round(1.2); // Prints 1 
echo "\n";
echo round(1.5); // Prints 2
echo "\n";

// random number generation
$max = getrandmax();  // max number the environment allows
echo rand(); // random number between 0 and $max (inclusive)
echo "\n";
echo rand(5, 10); // Prints a number between 5 and 10 (inclusive!)
echo rand(-4, -1);  // also works for negative numbers

// pi()
function calculateCircleArea($diameter) {
    return pi() * (($diameter / 2) ** 2);
}
echo calculateCircleArea(25);
echo "\n";

// seed the random number generator
srand();

// also got floor() and ceil()

// integer division
echo intdiv(8, 3);  # 8 // 3
echo "\n";

$initial = '555';

// convert from octal to decimal
$a = octdec($initial);
echo $a;
echo "\n";

// convert to integer
// rounds for decimals. converts to 0 for non-numbers (no need to worry about error handling)
$x = readline("Enter string to be converted to integer: ");
echo intval($x);

// convert degrees to radians
$b = deg2rad($a);
echo $b;
echo "\n";

// cos(b)
$c = cos($b);
echo $c;
echo "\n";

// round to 3 decimal places
$d = round($c, 3);
echo $d;
echo "\n";

// natural log (log function with default params)
$e = log($d);
echo $e;
echo "\n";

$f = abs($e);
echo $f;
echo "\n";

// arccos(f)
$g = acos($f);
echo $g;
echo "\n";

// radians to degrees
$h = rad2deg($g);
echo $h;
echo "\n";