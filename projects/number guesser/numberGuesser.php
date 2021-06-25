<?php

// how many rounds were played
$play_count = 0;
// how many times the user guesses correctly
$correct_guesses = 0;
// how many guesses higher than the number
$guess_high = 0;
// how many guesses lower than the number
$guess_low = 0;

$low = 0;
$high = 10;

echo "I'm going to think of numbers between " . strval($low) . " and " . strval($high) . " (inclusive). Do you think you can guess correctly?\n";

function guessNumber() {
  global $play_count;
  global $correct_guesses;
  global $guess_high;
  global $guess_low;

  echo "\nMake your guess...\n";
  $guess = intval(readline(">> "));
  if ($guess < $low || $guess > $high) {
    echo "\nMake sure the number is within range!!\n";
    return;
  }

  $play_count++;
  $this_num = rand(1, 10);

  echo "\nRound " . strval($play_count) . "! Random number = " . strval($this_num) . "! You guessed " . strval($guess) . "!\n";

  if ($guess === $this_num) {
    $correct_guesses++;
  }
  elseif ($guess > $this_num) {
    $guess_high++;
  }
  else {
    $guess_low++;
  }
}

$rounds = intval(readline("How many times do you want to guess? "));

for ($i = 0; $i < $rounds; $i++) {
  guessNumber();
}

$percent_correct = $correct_guesses / $play_count * 100;

echo "\nYou got " . strval($percent_correct) . " guesses correct!\n";
if ($guess_high > $guess_low) {
  echo "When you guessed wrong, you tended to guess high.\n";
}
else if ($guess_high < $guess_low) {
  echo "When you guessed wrong, you tended to guess low.\n";
}