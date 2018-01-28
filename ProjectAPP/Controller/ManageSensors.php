<?php

include("Connexion.php");

session_start();

$ID=$_SESSION['ID'];


if (isset($_POST['LRD'])) $LRD=1;
else $LRD=0;

if (isset($_POST['BRD'])) $BRD=1;
else $BRD=0;

if (isset($_POST['KD'])) $KD=1;
else $KD=0;

if (isset($_POST['ORD'])) $ORD=1;
else $ORD=0;



if (isset($_POST['LRW'])) $LRW=1;
else $LRW=0;

if (isset($_POST['BRW'])) $BRW=1;
else $BRW=0;

if (isset($_POST['KW'])) $KW=1;
else $KW=0;

if (isset($_POST['ORW'])) $ORW=1;
else $ORW=0;



if (isset($_POST['LRH'])) $LRH=1;
else $LRH=0;

if (isset($_POST['BRH'])) $BRH=1;
else $BRH=0;

if (isset($_POST['KH'])) $KH=1;
else $KH=0;

if (isset($_POST['ORH'])) $ORH=1;
else $ORH=0;



if (isset($_POST['LRL'])) $LRL=1;
else $LRL=0;

if (isset($_POST['BRL'])) $BRL=1;
else $BRL=0;

if (isset($_POST['KL'])) $KL=1;
else $KL=0;

if (isset($_POST['ORL'])) $ORL=1;
else $ORL=0;



if (isset($_POST['LRS'])) $LRS=1;
else $LRS=0;

if (isset($_POST['BRS'])) $BRS=1;
else $BRS=0;

if (isset($_POST['KS'])) $KS=1;
else $KS=0;

if (isset($_POST['ORS'])) $ORS=1;
else $ORS=0;


$reqSensors="update onoffsensors set LivingRoomDoor='$LRD', LivingRoomWindow='$LRW', LivingRoomHeating='$LRH', LivingRoomLight='$LRL' , LivingRoomSmook='$LRS', BedRoomDoor='$BRD', BedRoomWindow='$BRW', BedRoomHeating='$BRH', BedRoomLight='$BRL', BedRoomSmook='$BRS', KitchenDoor='$KD', KitchenWindow='$KW', KitchenHeating='$KH', KitchenLight='$KL', KitchenSmook='$KS', OtherRoomsDoor='$ORD', OtherRoomsWindow='$ORW', OtherRoomsHeating='$ORH', OtherRoomsLight='$ORL', OtherRoomsSmook='$ORS'
where userId='$ID';";
mysql_query($reqSensors);

header('Location:../Model/UserPage.php');
?>
