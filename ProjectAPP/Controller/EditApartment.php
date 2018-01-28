<?php

include("Connexion.php");

session_start();

$ID=$_SESSION['ID'];

$address=$_POST['address'];
$contry=$_POST['contry'];
$city=$_POST['city'];
$roomNum=$_POST['roomNum'];
$PersonNum=$_POST['PersonNum'];


$req="update has_apartment set address='$address', Contry='$contry', City='$city', total_rooms='$roomNum', NumPerson='$PersonNum'
where user_id='$ID';";
mysql_query($req);

$req2="update has_user set Address='$address'
where User_ID='$ID';";
mysql_query($req2);

header('Location:../Model/UserPage.php');


?>

