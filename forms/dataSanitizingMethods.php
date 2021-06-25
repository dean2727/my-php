<?php
// removing whitespace from input
$email = "     aisle.nevertell@yahoo.com   ";
echo trim($email); // Prints: aisle.nevertell@yahoo.com

// htmlspecialchars(): transforms HTML into HTML entities, so the PHP interpreter doesnt recognize them as HTML
$data = "<a href=\"https://www.evil-spam.biz/html/\">Your account has been compromised! Click here to get technical support!!</a>";
echo htmlspecialchars($data);
// Prints: &lt;a href=&quot;https://www.evil-spam.biz/html/&quot;&gt;Your account has been compromised!
// Click here to get technical support!&lt;/a&gt;

// filter_var(): most powerful sanitizing function. it operates on a variable (arg 1) and filters it based
// off the filter type (arg 2, see https://www.php.net/manual/en/filter.filters.sanitize)
// returns sanitized version of input, or FALSE if unable to sanitize
// heres an example for filtering emails, which removes whitespace and problematic characters
$bad_email = '<a href="www.evil-spam.biz">@gmail.com';
echo filter_var($bad_email, FILTER_SANITIZE_EMAIL);
// Prints: ahref=www.evil-spam.biz@gmail.com 

// sanitization method depends on the output you want to show users


// sanitizing for databases:
// storing unsanitized data allows a bad actor to corrupt/gain access to sensitive info
// also, sanitize for format. we want all data in the database to look the same

// preg_replace(): given a regex, replacement text, and subject string, search the subject string
// for instances of the regex, and replace each one with replacement text. output this new string
$one = "codeacademy";
$two = "CodeAcademy";
$three = "code academy";
$four = "Code Academy";
$pattern = "/[cC]ode\s*[aA]cademy/";  // most of the ways people mispell "Codecademy"
$codecademy = "Codecademy";
echo preg_replace($pattern, $codecademy, $one);
// Prints: Codecademy
echo preg_replace($pattern, $codecademy, $two);
// Prints: Codecademy
echo preg_replace($pattern, $codecademy, $three);
// Prints: Codecademy
echo preg_replace($pattern, $codecademy, $four);
// Prints: Codecademy

echo preg_replace("/[^0-9]/", "", "123 - 989 - 1234");
// Prints: 1239891234
echo preg_replace("/[^0-9]/", "", "123.989.1234");
// Prints: 1239891234
echo preg_replace("/[^0-9]/", "", "(123) 989 - 1234");
// Prints: 1239891234
?>