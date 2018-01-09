<link rel="stylesheet"  href="../VIEW/Css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
	.containe{
		width: 40%;
		position: absolute;
		top: 0px;
		left: 30%;
	}
	
</style>

<?php 
include("Connexion.php");


$Mail= $_POST['Mail'];
$Pass = $_POST['Pass'];


$result = "Select * From has_user where Email='$Mail' AND Password='$Pass'";

$req = mysql_query($result);
$ligne= mysql_fetch_array($req);

	
	if(($ligne['Email']== $Mail && $ligne['Password']== $Pass)){
		session_start();
		$_SESSION['ID']= $ligne['User_ID'];
		$_SESSION['Email']= $ligne['Email'];
		$_SESSION['Password']= $ligne['Password'];
		$_SESSION['FirstName']= $ligne['FirstName'];
		$_SESSION['LastName']= $ligne['LastName'];
		
		header('Location:../Model/UserPage.php');
}

	elseif(($ligne['Email']!= $Mail || $ligne['Password']!= $Pass)){		
        include_once("../Model/Login.php");
        ?>

        <center> <div class="containe">
  <div class="alert alert-danger alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <center> <strong>Login is Wrong!</strong> </center>
  </div>
</div>
</center>

<?php 
}
?>
