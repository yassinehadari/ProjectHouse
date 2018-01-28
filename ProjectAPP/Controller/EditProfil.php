<?php 

include("Connexion.php");

session_start();

$ID=$_SESSION['ID'];
$FirstName=$_POST['FName'];
$LastName=$_POST['LName'];
$Email=$_POST['Email'];
$picture=$_POST['picture'];



$req="update has_user set FirstName='$FirstName', LastName='$LastName', Email='$Email', Photo='$picture'
where User_ID='$ID';";
mysql_query($req);


header('Location:../Model/UserPage.php');



 ?>