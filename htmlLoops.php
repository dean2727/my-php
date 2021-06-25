<h1>Only Shoes Shoe Shop</h1>
<?php
// for loop: can use {, } or :, endfor;
for ($i = 0; $i < 5; $i++):
?>
<p>We sell shoes</p>
<?php
endfor;
?>

<h1>Only Shoes Shoe Shop</h1>
<?php
$i = 0;
$repeats = [0, 1];
// while loop: :, endwhile;
while ($i < 5):
?>
<p>We sell shoes</p>
  <?php
  // foreach loop: :, endforeach;
  foreach ($repeats as $value):
  ?>
  <p>(only shoes)</p>
  <!-- make sure to use PHP variables inside <?php ?> / <?= ?> (for echo shorthand)! -->
  <p><?=$value?></p> 
  <?php
  endforeach;
  ?>
<?php
  $i++;
endwhile;
?>

<!-- this -->
<ul>
<?php
for ($i = 0; $i < 101; $i++) {
  echo "<li>Dalmation</li>\n";
}
?>
</ul>
<!-- is equal to this -->
<u1>
<?php for ($i = 0; $i < 101; $i++): ?>
<li>Dalmation</li>
<?php endfor; ?>
</ul>