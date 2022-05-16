<?php
	include_once 'header.php';
	?>
	
	<body>
    <div class="form">
        <?php

        if (isset($_SESSION['userID'])) {
			echo $_SESSION['name'].', you are now logged in!';
			echo "<p></p>";
			echo 'Your username is '.$_SESSION['userUID'];
			echo "<p></p>";
			echo 'Your unique user number is '.$_SESSION['userID'];
			echo "<p></p>";
			echo 'Your preferred historical focus is: '.$_SESSION['usertype'];
        }
        ?>
    </div>



</body>
	
<?php include "footer.php"; ?>