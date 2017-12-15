<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="../VIEW/Css/Login.css">
	<link rel="stylesheet" href="../VIEW/font-awesome/css/font-awesome.min.css">
	<link rel="icon" href="../VIEW/Pictures/logo.ico" />
</head>
<body>
	<img src="../VIEW/Pictures/Logo.jpg" alt="logo" class="logo">
	<div class="userBox">
		<img class="userLogo" src="../VIEW/Pictures/user.png" alt="user">
		<h2> User Login</h2>
		<form action="../Model/CheckLog.php" method="POST">
			<p><i class="fa fa-envelope" aria-hidden="true"></i> Email</p>
			<input type="text" name="Mail" placeholder="Your Email">
			<p><i class="fa fa-key" aria-hidden="true"></i> Password</p>
			<input type="password" name="Pass" placeholder="*********">
			<input type="submit" name="" value="Sign In">
			<a href="#" hreflang="en"><i class="fa fa-user" aria-hidden="true"></i> New User?</a>
			<a href="#" hreflang="fr"><i class="fa fa-question" aria-hidden="true"></i> Forget Password</a>
		</form>


	</div>
</body>
</html>