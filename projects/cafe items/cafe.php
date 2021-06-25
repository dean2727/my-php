<?php
// simple page that loops through arrays and displays elements on page
$drinks = ["lemonade" => 2.42, "water" => 6.45];
$pastries = ["fresh bread", "baguette"];
?>

<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
<?php foreach ($drinks as $drink => $price):
  echo "<li>" . $drink . "...$" . strval($price) . "</li>";
endforeach; ?>
</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
<?php for ($i = 0; $i < count($pastries); $i++):
  echo "<li>" . $pastries[$i] . "</li>";
endfor; ?>
</ul>