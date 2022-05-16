
<?php
	include_once 'header.php';
	?>
	<!DOCTYPE html>
<html lang="en">
<body>
  <div class="form">
    <h2><i>Sign up for your preferred historical image gallery below!</i></h2>
 <div class="input">
      <form action="includes/signup.inc.php" method="POST">
        <div class="inputBox">
          <input type="text" name="first" placeholder="First name" />
          <input type="text" name="last" placeholder="Last name" />
          <input type="text" name="email" placeholder="Email address" />
          <input type="text" name="uid" placeholder="Username" />

          <input type="password" name="pwd" placeholder="Password" />
 
          <input type="password" name="pwd2" placeholder="Type Password Again" />
    
        </div>
		
		<h3><label for="type">Choose a member type:</label></h3>

		<select name="type" id="type">
		<option value="napoleonic">napoleonic war buff</option>
		<option value="medieval">prefer medieval history</option>
		</select>
		
		<div class="inputBox">
          <input type="submit" name="submit" value="Sign Up" /> </div> 
		</div> 
    </form> 
    <?php

    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl, 'emptyinput') == true) {
      echo "<p class='error'>You did not fill in all fields</p>";
      exit();
    } elseif (strpos($fullUrl, 'invalidemail') == true) {
      echo "<p class='error'>Your email is not valid</p>";
      exit();
    } elseif (strpos($fullUrl, 'pwd_mismatch') == true) {
      echo "<p class='error'>Your passwords did not match.</p>";
      exit();
    } elseif (strpos($fullUrl, 'already_exists') == true) {
      echo "<p class='error'>Username or email already exists in the system.</p>";
      exit();
    }
    ?>

  </div>

</body>
	
	
	
<?php include "footer.php"; ?>
</html>