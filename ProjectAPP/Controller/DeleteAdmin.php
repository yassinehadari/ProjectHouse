<?php
include("../Controller/Connexion.php");

$id=$_GET['id'];

$req="delete from has_user where User_ID='$id';";
mysql_query($req);

$req2="delete from has_apartment where user_id='$id';";
mysql_query($req2);

$req3="delete from onoffsensors where UserId='$id';";
mysql_query($req3);

$req4="delete from roomsnum where UserId='$id';";
mysql_query($req4);

$req5="delete from roomssensors where UserId='$id';";
mysql_query($req5);

mysql_close();

header('Location:../Model/Admin.php');

?>
