<?php
	include_once 'header.php';
	?>
	
	<body>
    <div class="form">
        <?php
        if (isset($_SESSION['userID'])) {
			echo $_SESSION['name'].', you are now logged in!';
			echo "<p></p>";
			echo 'Your preferred historical focus is: '.$_SESSION['usertype'];
			if($_SESSION['usertype'] == 'napoleonic') {
			echo "<p></p>";
			echo "<div class='center-cropped'><img class='center-cropped' src='img/napoleon/grenadier.png' width='350' height ='500'></div>";
			}
			if($_SESSION['usertype'] == 'medieval') {
			echo "<p></p>";
			echo "<div class='center-cropped'><img class='center-cropped' src='img/medieval/sheep.png' width='350' height ='220'></div>";
			}
        }
		else {
		echo '<h3>Sign up to see some of our cool images!</h3>';}
        ?>
 
    </div>



</body>
	
<?php include "footer.php"; ?>