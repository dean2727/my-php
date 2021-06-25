<html>
<body>

<!-- $_GET superglobal for GET request -->
<form method="get">
Country:
<!-- name attribute are needed. its for the associative array keys for the PHP request superglobals -->
<input type="text" name="country">
<br>
Language:
<input type="text" name="language">
<br>
<input type="submit" value="Submit">
</form>
<br>

<p>Your language is: <?= $_GET['language'] ?> </p>
<p>Your country is: <?= $_GET['country'] ?></p>

<a href="index.php">Reset</a>

<!-- $_POST superglobal for POST request -->
<form method="post">
Favorite Color:
<input type="text" name="color">
<br>
Favorite Food:
<input type="text" name="food">
<br>
<input type="submit" value="Submit">
</form>
<br>
<p>Best food is: <?= $_POST['food'] ?> </p>
<p>Best color is: <?= $_POST['color'] ?></p>

<!-- using action attribute. if this form is submitted, it takes the user to thankUser.php -->
<form method="get" action="thankUser.php">
First Name:
<input type="text" name="first">
<br>
Last Name:
<input type="text" name="last">
<br>
<input type="submit" value="Submit">
</form>

<!-- other superglobals: 
$GLOBALS
$_SERVER
$_FILES
$_COOKIE
$_SESSION
$_ENV
$_REQUEST (has both $_GET and $_POST stuff)
-->

</body>
</html>