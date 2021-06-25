<html>
<body>

<!-- form for addition -->
<form method="get" action="addition.php">
<h2>Add 2 numbers:</h2>
First number:
<input type="number" name="add-first">
<br>
Second number:
<input type="number" name="add-second">
<br>
<!-- formaction attribute could be used if we want this button to lead to a page different than the one for the action attribute of the form -->
<button type="submit">Add</button>
</form>
<br>
<br>

<!-- form for division -->
<form method="get" action="division.php">
<h2>Divide 2 numbers:</h2>
Numerator:
<input type="number" name="div-first">
<br>
Denominator:
<input type="number" name="div-second">
<br>
<button type="submit">Divide</button>
</form>
<br>

<a href="index.php">Reset</a>
</body>
</html>