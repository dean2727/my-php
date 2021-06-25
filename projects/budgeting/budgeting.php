<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
$netIncome = 9700 * .88 + 29775 * .78 + 8675 * .76;

$netIncome -= $socialSecurity;
$annualIncome = $netIncome;
echo "Annual income (without expenses): " . strval(round($annualIncome, 2));
echo "\n";

$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];
echo "Annual income (with expenses): " . strval(round($annualIncome, 2));
echo "\n";

$monthlyIncome = $annualIncome / 12;
echo "Monthly income (without expenses): " . strval(round($monthlyIncome, 2));
echo "\n";

$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];
echo "Monthly income (with expenses): " . strval(round($monthlyIncome, 2));
echo "\n";

$weeklyIncome = $monthlyIncome / 4.33;
echo "Weekly income (without expenses): " . strval(round($weeklyIncome, 2));
echo "\n";

$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];
echo "Weekly income (with expenses): " . strval(round($weeklyIncome, 2));
echo "\n";

$yearSavings = $weeklyIncome * 52;
echo "Bob will be able to save: $" . strval(round($yearSavings, 2)) . " for the year!\n";