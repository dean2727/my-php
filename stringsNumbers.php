
<?php
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;
echo $riel;
echo "\n";
echo $kyat;
echo "\n";
echo $krones;
echo "\n";
echo $lek;
echo "\n";

// exchange rates
$riel_er = .00025;
$kyat_er = .00061;
$krones_er = .12;
$lek_er = .0099;

// how much US dollars?
$riel_in_us = $riel * $riel_er;
$kyat_in_us = $kyat * $kyat_er;
$krones_in_us = $krones * $krones_er;
$lek_in_us = $lek * $lek_er;
echo $riel_in_us;
echo "\n";
echo $kyat_in_us;
echo "\n";
echo $krones_in_us;
echo "\n";
echo $lek_in_us;
echo "\n\n";

// 4 conversions -> 4 dollars
$total = $riel_in_us + $kyat_in_us + $krones_in_us + $lek_in_us - 4;

// in PHP, when an operand for modulus is a float, the float is treated as an int (rounds down), in contrast to Python treating it as a float
$dollars_only = $total % 1000000000;
echo "dollars only: " . strval($dollars_only) . "\n";

$change = $total - $dollars_only;
$rounded_change = $change * 100;
echo "rounded change: " . strval($rounded_change) . "\n";
echo "rounded change: " . strval($change) . "\n";
$rounded_change %= 100;
$rounded_change /= 100;
$final_amount = $dollars_only + $rounded_change;
echo "final amount, rounded to 2 decimal places, is " . strval($final_amount);
