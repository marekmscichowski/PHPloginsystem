
<?php
	include_once 'header.php';
	?>
	

<!DOCTYPE html>
<html lang="en">

<body>
  <div class="form">
    <h2><i>Coolsite</i></h2>
    <div class="input">
      <form action="includes/login.inc.php" method="POST">
        <div class="inputBox">
          <input type="text" name="uid" placeholder="Username" />
        </div>
        <div class="inputBox">
          <input type="password" name="pwd" placeholder="Password" />
        </div>
        <div class="inputBox">
          <input type="submit" name="login-submit" value="Login" />
        </div>
    </div>
    </form>

    <p class="join">No account? <a href="register.php">Join Now</a></p>
    <?php

    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, 'emptyinput') == true) {
      echo "<p class='error'>You did not fill in all fields</p>";
      exit();
    } elseif (strpos($fullUrl, 'wrongpassword') == true) {
      echo "<p class='error'>You have entered wrong password</p>";
      exit();
    }
	if (isset($_GET["signup"])){
    if (htmlspecialchars($_GET["signup"]) == 'success') {
      echo "<p class='error'>You have signed up successfully. Please login to continue.</p>";
	exit();}
	}
    ?>
  </div>
	
	
	
</body>

<?php include "footer.php"; ?>
</html>