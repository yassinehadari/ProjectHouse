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


  <?php

session_start();

?>

	<div id="clouds">
	<div class="cloud x1"></div>
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>

 <div class="container">

      <div id="login">


		<form class="login-form" action="../Controller/CheckLog.php" method="POST">

          <fieldset class="clearfix">

          	    <?php if (isset($Mail)) {?>
          	    <p><span class="fontawesome-user"></span><input  name="Mail" type="text" value="<?=trim($Mail)?>" required></p>
    			<?php } else {?>
              	<p><span class="fontawesome-user"></span><input  name="Mail" type="text" placeholder="Email" required></p>
    			<?php }?>


            	<p><span class="fontawesome-lock"></span><input  name="Pass" type="password"  placeholder="*******" required></p> 
            	<p><input type="submit" value="Sign In" style="cursor: pointer;" ></p>

          </fieldset>

        </form>

        <p>Not a member?<a href="../Model/SignUp.php" class="blue"> Sign up now</a><span class="fontawesome-arrow-right"></span></p>

      </div>

    </div>
</body>
</html>




