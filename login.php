<?php

include_once('config.php');
include_once('database.php');

$db = new Database();


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
	if ($email == 'mess@geetauniversity.edu.in' || $password == 'mess@123') {
        session_start();
        $_SESSION['email'] = $email;
        header('location:mess.php');
    } else {
        echo "<script>alert('Email or password is incorrect.')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Login Page</title>
</head>

<body>
	<form action="" method="post">
		<div class="login-box">
			<h1>Mess Master Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="email"
						name="email" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Sign In">
		</div>
	</form>
</body>

</html>
