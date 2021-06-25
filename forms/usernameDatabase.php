<?php
// this would be stored in a database
$users = ["coolBro123" => "password123!", "coderKid" => "pa55w0rd*", "dogWalker" => "ais1eofdog$"];  
  
$feedback = "";
$message = "You're logged in!";
// not telling if it was the username or the password which caused failure, since if we gave 1 away, it gives a malicious user more info
$validation_error = "* Incorrect username or password.";
$username = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  // check if username is in the "database", valid if so. also see if password (key value) matches
  if (isset($users[$username]) && $users[$username] === $password) {
    $feedback = $message;
  }
  else {
    $feedback = $validation_error;
}
?>
  
<h3>Welcome back!</h3>
<form method="post" action="">
Username:<input type="text" name="username" value="<?php echo $username;?>">
<br>
<!-- notice how value is always blank. both for genuine re-login attempts and better security -->
Password:<input type="text" name="password" value="">
<br>
<input type="submit" value="Log in">
</form>
<span class="feedback"><?= $feedback;?></span>