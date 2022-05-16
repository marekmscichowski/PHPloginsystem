<?php
session_start();
?>

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>History Swapper</title>
  <link rel="stylesheet" href="styles/login_style.css">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" />
<title>Coolsite</title>

<div class= "wrapper">
<ul>
<li><a href="index.php"><img src='img/logo.png', height='50', width='50'></a></li>
<li><a href="index.php">Home</a></li>
        <?php

        if (isset($_SESSION['userID'])) {
	echo "<li><a href='profile.php'>My Profile</a></li>";
	echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
        } else {
		
	echo "<li><a href='login.php'>Login</a></li>";
	echo "<li><a href='register.php'>Sign Up</a></li>";
		}
		
        ?>
</ul>
</div>


</head>
