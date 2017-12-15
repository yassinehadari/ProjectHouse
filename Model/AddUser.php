<?php
include_once("Connexion.php");


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$birth=$_POST['birth'];
$area=$_POST['area'];


$req="insert into has_user(User_id,f_name,l_name,Email,MotDePasse,dob,User_Type,Address,User_Status,Product_id,Apartment_id)
      values('2','$fname','$lname','$email','$pass','$birth','1','$area','0','0','0');";

mysql_query($req);
mysql_close();

header('Location:../VIEW/HTML/HomePage.html');

?>