<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up </title>
	<link rel="stylesheet" type="text/css" href="../VIEW/Css/SignUp.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php session_start(); ?>

	<form class="main-form first" method="POST" action = "../Controller/AddUser.php">
  <div class="main-form__title">
    <h1>Sign-up</h1>
  </div>
  <div class="main-form__body">
    <?php if (isset($key)) {?>
    <input class="main-form__input" name="key" type="text" value="<?=trim($key)?>" placeholder="Product Key" />
    <?php } else {?>
    <input class="main-form__input" name="key" type="text" placeholder="Product Key" />
    <?php }?>

    <?php if (isset($fname)) {?>
    <input class="main-form__input" name="fname" type="text" value="<?=trim($fname)?>" placeholder="First Name" />
    <?php } else {?>
    <input class="main-form__input" name="fname" type="text"  placeholder="First Name" />
    <?php }?>

    <?php if (isset($lname)) {?>
    <input class="main-form__input" name="lname" type="text" value="<?=trim($lname)?>" placeholder="Last Name" />
    <?php } else {?>
    <input class="main-form__input" name="lname" type="text" placeholder="Last Name" />
    <?php }?>

    <?php if (isset($email)) {?>
    <input class="main-form__input" name="email" type="text" value="<?=trim($email)?>" placeholder="Email" />
    <?php } else {?>
    <input class="main-form__input" name="email" type="text" placeholder="Email" />
    <?php }?>

    <input class="main-form__input" name="pass" type="password" placeholder="Password" />

    <input class="main-form__input" name="birth" type="date" />


    <?php if (isset($area)) {?>
    <input class="main-form__input" name="area" type="text" value="<?=trim($area)?>" placeholder="Your Address" />
    <?php } else {?>
    <input class="main-form__input" name="area" type="text" placeholder="Your Address" />
    <?php }?>

    <button type="submit" class="btn">Register</button>
  </div>
</form>  

</body>
</html>
