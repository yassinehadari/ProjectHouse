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


$resultAdmin = "Select * From admin where email='$Mail' AND password='$Pass'";
$reqAdmin = mysql_query($resultAdmin);
$ligneAdmin= mysql_fetch_array($reqAdmin);

$result = "Select * From has_user where Email='$Mail'";
$req = mysql_query($result);
$ligne= mysql_fetch_array($req);


	
	if(($ligneAdmin['email']== $Mail && $ligneAdmin['password']== $Pass)  ){
		
		header('Location:../Model/Admin.php');
}



	if(($ligne['Email']== $Mail && password_verify($Pass,$ligne['Password']))  ){
		session_start();
		$_SESSION['ID']= $ligne['User_ID'];
		$_SESSION['Email']= $ligne['Email'];
		$_SESSION['Password']= $ligne['Password'];
		$_SESSION['FirstName']= $ligne['FirstName'];
		$_SESSION['LastName']= $ligne['LastName'];
		$_SESSION['Address']= $ligne['Address'];

		
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
