<?php
include_once 'dtb.inc.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
$pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);
$type = mysqli_real_escape_string($conn, $_POST['type']);


if (empty($uid) || empty($pwd) || empty($email)) {
    header("Location: ../register.php?error=emptyinput");
    exit();}
	else {if ($pwd != $pwd2) {
        header("Location: ../register.php?error=pwd_mismatch");
        exit();}
		else {if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../register.php?error=invalidemail");
			exit();}
			else 	
			$sql2 = "SELECT COUNT(*) FROM users where user_email = '".$email."' or user_uid = '".$uid."';";
			print($sql2);
}			$result = mysqli_query($conn, $sql2);
			$row = mysqli_fetch_array($result);
			$j = array_values($row)[0]; ;
			{if($j > 0) {
			header("Location: ../register.php?error=already_exists");
			exit();}
				else {
				$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_type, user_pwd) 
			VALUES (?, ?, ?, ?, ?, ?);";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					echo "Error";
				} else {
					$pwd = $hash = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "ssssss", $first, $last, $email, $uid, $type, $pwd);
					mysqli_stmt_execute($stmt);
					header("Location: ../login.php?signup=success");
					exit();
				}
			}
}
}
