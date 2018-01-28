<?php include("../Controller/Connexion.php");


session_start();

$IdUser=$_SESSION['ID'];


$resultEditAddress = "Select * From has_apartment where user_id='$IdUser'";
$reqEditAddress = mysql_query($resultEditAddress);
$ligneEditAddress= mysql_fetch_array($reqEditAddress);

$resultEditProfil = "Select * From has_user where user_id='$IdUser'";
$reqEditProfil = mysql_query($resultEditProfil);
$ligneEditProfil= mysql_fetch_array($reqEditProfil);

$resultNumRooms = "Select * From roomsnum where userId='$IdUser'";
$reqNumRooms = mysql_query($resultNumRooms);
$ligneNumRooms= mysql_fetch_array($reqNumRooms);

$resultNumRooms = "Select * From roomsnum where userId='$IdUser'";
$reqNumRooms = mysql_query($resultNumRooms);
$ligneNumRooms= mysql_fetch_array($reqNumRooms);

$resultRoomsSensors = "Select * From roomssensors where userId='$IdUser'";
$reqRoomsSensors = mysql_query($resultRoomsSensors);
$ligneRoomsSensors= mysql_fetch_array($reqRoomsSensors);

$resultOnOffSensors = "Select * From onoffsensors where userId='$IdUser'";
$reqOnOffSensors = mysql_query($resultOnOffSensors);
$ligneOnOffSensors= mysql_fetch_array($reqOnOffSensors);


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
    <script src="https://docraptor.com/docraptor-1.0.0.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../View/Css/UserPage.css">
</head>
<body>





    <!--header-->
    <header id="header" class="header-1">
        <div class="topMenu">
            <ul class="bars">

            <li><i id="Show" class="fa fa-bars"></i></li>
            
            </ul>
            
            <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"> 
                    <img class="Logo" src="../View/Pictures/Logo.jpg" width="90">
                </div>
                <div class="col-xs-12 col-sm-9 col-md-4 col-lg-4"> 
                    <form><fieldset
                    ><input type="search" placeholder="Quick search?" /><button type="submit"><i class="fa fa-search"></i></button>
                    </fieldset></form>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="UserIcons">
                        <ul class="IconsList">
                            <li> <i id="Home" class="fa fa-home"></i> </li>
                            <li><i class="fa fa-envelope"></i></li>
                            <li><i class="fa fa-globe"></i></li>
                            <li><i class="fa fa-question-circle"></i></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    </header>
    <!--/header-->






<!--article-->
    <article >

        <div id="div1">

             <h1>Set Up Your Apartment</h1>

            <form action="../Controller/SetUpApartment.php" method="POST">
            
                <table class="table table-hover">

                <thead>

                <tr>
                <th></th>
                <th>Living Room</th>
                <th>Bed Room</th>
                <th>Kitchen</th>
                <th>Other Rooms</th>
                </tr>

                </thead>

                <tbody>
                
                <tr>
                <th>room's Number</th>
                <td><input style="text-align: center;" type="number" min="0" name="NumLivingR" value=<?=$ligneNumRooms['LivingRoom']?>></td>
                <td><input style="text-align: center;" type="number" min="0" name="NumBedR"    value=<?=$ligneNumRooms['BedRoom']?>> </td>
                <td><input style="text-align: center;" type="number" min="0" name="NumKitchen" value=<?=$ligneNumRooms['Kitchen']?>> </td>
                <td><input style="text-align: center;" type="number" min="0" name="NumOtherR"  value=<?=$ligneNumRooms['OtherRooms']?>> </td>
                </tr>
            
                <tr>
                <th>Door Sensor</th>

                <?php if ($ligneRoomsSensors['LivingRoomDoor']==0){ ?>
                <td><input type="checkbox" name="LRD" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="LRD"  checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['BedRoomDoor']==0){ ?>
                <td><input type="checkbox" name="BRD" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="BRD"checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['KitchenDoor']==0){ ?>
                <td><input type="checkbox" name="KD" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="KD" checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['OtherRoomsDoor']==0){ ?>
                <td><input type="checkbox" name="ORD" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="ORD"  checked></td>
                <?php } ?>

                </tr>

                <tr>
                <th>Window Sensor</th>

                <?php if ($ligneRoomsSensors['LivingRoomWindow']==0){ ?>
                <td><input type="checkbox" name="LRW" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="LRW" checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['BedRoomWindow']==0){ ?>
                <td><input type="checkbox" name="BRW"  ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="BRW"  checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['KitchenWindow']==0){ ?>
                <td><input type="checkbox" name="KW"  ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="KW"   checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['OtherRoomsWindow']==0){ ?>
                <td><input type="checkbox" name="ORW" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="ORW" checked></td>
                <?php } ?>

                </tr>

                <tr>
                <th>Heating Sensor</th>

                <?php if ($ligneRoomsSensors['LivingRoomHeating']==0){ ?>
                <td><input type="checkbox" name="LRH" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="LRH"   checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['BedRoomHeating']==0){ ?>
                <td><input type="checkbox" name="BRH" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="BRH"   checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['KitchenHeating']==0){ ?>
                <td><input type="checkbox" name="KH" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="KH"   checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['OtherRoomsHeating']==0){ ?>
                <td><input type="checkbox" name="ORH" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="ORH"   checked></td>
                <?php } ?>

                </tr>

                <tr>
                <th>Light Sensor</th>

                <?php if ($ligneRoomsSensors['LivingRoomLight']==0){ ?>
                <td><input type="checkbox" name="LRL" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="LRL"   checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['BedRoomLight']==0){ ?>
                <td><input type="checkbox" name="BRL" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="BRL"   checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['KitchenLight']==0){ ?>
                <td><input type="checkbox" name="KL" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="KL"   checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['OtherRoomsLight']==0){ ?>
                <td><input type="checkbox" name="ORL" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="ORL"   checked></td>
                <?php } ?>

                </tr>

                <tr>
                <th>Smook Sensor</th>

                <?php if ($ligneRoomsSensors['LivingRoomSmook']==0){ ?>
                <td><input type="checkbox" name="LRS" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="LRS"  checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['BedRoomSmook']==0){ ?>
                <td><input type="checkbox" name="BRS" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="BRS"   checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['KitchenSmook']==0){ ?>
                <td><input type="checkbox" name="KS" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="KS"   checked></td>
                <?php } ?>

                <?php if ($ligneRoomsSensors['OtherRoomsSmook']==0){ ?>
                <td><input type="checkbox" name="ORS" ></td>
                <?php }else { ?>
                <td><input type="checkbox" name="ORS"   checked></td>
                <?php } ?>

                </tr>

                </tbody>

                </table>

                <input class="btn-success" type="submit" name="" value="Save">
            </form>

        </div>



        
        <form method="POST" action="../Controller/ManageSensors.php">
        
        <div id="div2">
     
                 <div class="div2-1">
             
                

               <center> <p> Kitchen </p>
               <table border="1" width="100%">
                <tr>
                    <th>Door Sensor</th>
                    <th>Window Sensor</th>
                    <th>Heating Sensor</th>
                    <th>Light Sensor</th>
                    <th>Smooke Sensor</th>
                </tr>
                <tr>
                    <?php if ($ligneRoomsSensors['KitchenDoor']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['KitchenDoor']==0){ ?>
                    <td><input type="checkbox" name="KD" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="KD" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['KitchenWindow']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['KitchenWindow']==0){ ?>
                    <td><input type="checkbox" name="KW" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="KW" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['KitchenHeating']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['KitchenHeating']==0){ ?>
                    <td><input type="checkbox" name="KH" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="KH" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['KitchenLight']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['KitchenLight']==0){ ?>
                    <td><input type="checkbox" name="KL" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="KL" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['KitchenSmook']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['KitchenSmook']==0){ ?>
                    <td><input type="checkbox" name="KS" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="KS" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                </tr>
               </table>
               </center>
           </div>

           <div class="div2-2">
               <center> <p> Living Room </p>
               <table border="1" width="100%">
                <tr>
                    <th>Door Sensor</th>
                    <th>Window Sensor</th>
                    <th>Heating Sensor</th>
                    <th>Light Sensor</th>
                    <th>Smooke Sensor</th>
                </tr>
                <tr>

                    <?php if ($ligneRoomsSensors['LivingRoomDoor']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['LivingRoomDoor']==0){ ?>
                    <td><input type="checkbox" name="LRD" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="LRD" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['LivingRoomWindow']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['LivingRoomWindow']==0){ ?>
                    <td><input type="checkbox" name="LRW" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="LRW" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['LivingRoomHeating']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['LivingRoomHeating']==0){ ?>
                    <td><input type="checkbox" name="LRH" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="LRH" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['LivingRoomLight']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['LivingRoomLight']==0){ ?>
                    <td><input type="checkbox" name="LRL" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="LRL" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['LivingRoomSmook']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['LivingRoomSmook']==0){ ?>
                    <td><input type="checkbox" name="LRS" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="LRS" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                </tr>
               </table></center>

           </div>



           <div class="div2-3">
              <center> <p> Bed Room </p>
              <table border="1" width="100%">
                <tr>
                    <th>Door Sensor</th>
                    <th>Window Sensor</th>
                    <th>Heating Sensor</th>
                    <th>Light Sensor</th>
                    <th>Smooke Sensor</th>
                </tr>
                <tr>

                    <?php if ($ligneRoomsSensors['BedRoomDoor']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['BedRoomDoor']==0){ ?>
                    <td><input type="checkbox" name="BRD" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="BRD" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['BedRoomWindow']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['BedRoomWindow']==0){ ?>
                    <td><input type="checkbox" name="BRW" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="BRW" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['BedRoomHeating']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['BedRoomHeating']==0){ ?>
                    <td><input type="checkbox" name="BRH" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="BRH" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['BedRoomLight']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['BedRoomLight']==0){ ?>
                    <td><input type="checkbox" name="BRL" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="BRL" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['BedRoomSmook']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['BedRoomSmook']==0){ ?>
                    <td><input type="checkbox" name="BRS" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="BRS" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                </tr>
               </table></center>
           </div>

           <div class="div2-4">
               <center> <p> Other Rooms </p>  
               <table border="1" width="100%">
                <tr>
                    <th>Door Sensor</th>
                    <th>Window Sensor</th>
                    <th>Heating Sensor</th>
                    <th>Light Sensor</th>
                    <th>Smooke Sensor</th>
                </tr>
                <tr>
                    <?php if ($ligneRoomsSensors['OtherRoomsDoor']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['OtherRoomsDoor']==0){ ?>
                    <td><input type="checkbox" name="ORD" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="ORD" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['OtherRoomsWindow']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['OtherRoomsWindow']==0){ ?>
                    <td><input type="checkbox" name="ORW" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="ORW" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['OtherRoomsHeating']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['OtherRoomsHeating']==0){ ?>
                    <td><input type="checkbox" name="ORH" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="ORH" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['OtherRoomsLight']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['OtherRoomsLight']==0){ ?>
                    <td><input type="checkbox" name="ORL" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="ORL" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                    <?php if ($ligneRoomsSensors['OtherRoomsSmook']==0){ ?>
                    <td></td>
                    <?php }else {
                    if ($ligneOnOffSensors['OtherRoomsSmook']==0){ ?>
                    <td><input type="checkbox" name="ORS" data-toggle="toggle" ></td>
                    <?php }else {?>  
                    <td><input type="checkbox" name="ORS" checked data-toggle="toggle" ></td>
                    <?php } } ?>

                </tr>
               </table></center>
           </div>

            <div class="div2-Sub">
               
                <input type="submit" class="btn btn-info" value="Submit">

           </div>
        
            
        
        </div> 
</form>


        <div id="div3">
                
                <h1>Click on the icons for more Informations</h1>

           <div id="div3-1">
                <img src="../View/Pictures/Light.png">
                <p>Light Sensor</p>
           </div>

           <div id="div3-2">
              <img src="../View/Pictures/Door.png">
              <p>Door Sensor</p>
           </div>

           <div id="div3-3">
              <img src="../View/Pictures/Window.png">
              <p>Window Sensor</p>
           </div>

           <div id="div3-4">
               <img src="../View/Pictures/Smoke.png">
               <p>Smoke Sensor</p>
           </div>

            <div id="div3-5">
               <img src="../View/Pictures/Heating.png">
               <p>Heating Sensor</p>
           </div>

        </div>
    
        <div id="div3-1-1">
            <center> <h1>Light Sensor</h1> </center>
            <form class="form-horizontal" action="UserPage.php">

            <div style="position: absolute; float: left; padding:10% 0 0 0;">
                <table class="table table-striped">
                <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Kitchen</th>
                <th scope="col">Living Room</th>
                <th scope="col">Bed Room</th>
                <th scope="col">Other Rooms</th>
                </tr>
                </thead>
                <tbody>
                <tr >
                <th scope="row"><?= date('d-m-Y ') ?> </th>
                <?php if ($ligneRoomsSensors['KitchenLight']==1){ ?>
                <td>ON</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['LivingRoomLight']==1){ ?>
                <td>ON</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['BedRoomLight']==1){ ?>
                <td>ON</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['OtherRoomsLight']==1){ ?>
                <td>ON</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+1 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+2 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+3 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+4 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+5 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+6 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                </tbody>
                </table>
            </div>
            
            </form>

        </div>

        <div id="div3-1-2">
            <center> <h1>Door Sensor</h1> </center>

            <div style="position: absolute; float: left; padding:10% 0 0 0;">
                <table class="table table-striped">
                <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Kitchen</th>
                <th scope="col">Living Room</th>
                <th scope="col">Bed Room</th>
                <th scope="col">Other Rooms</th>
                </tr>
                </thead>
                <tbody>
                <tr >
                <th scope="row"><?= date('d-m-Y h:m:s') ?> </th>
                <?php if ($ligneRoomsSensors['KitchenDoor']==1){ ?>
                    <td>OPEN</td>
                <?php } else{?>
                    <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['LivingRoomDoor']==1){ ?>
                <td>OPEN</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['BedRoomDoor']==1){ ?>
                <td>OPEN</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['OtherRoomsDoor']==1){ ?>
                <td>OPEN</td>
                <?php } else{?>
                <td></td>
                <?php }?>
                </tr>

                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+1 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+2 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+3 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+4 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+5 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+6 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                </tbody>
                </table>
            </div>

        </div>

        <div id="div3-1-3">
            <center> <h1>Window Sensor</h1> </center>
            <form class="form-horizontal" action="UserPage.php">

            <div style="position: absolute; float: left; padding:10% 0 0 0;">
                <table class="table table-striped">
                <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Kitchen</th>
                <th scope="col">Living Room</th>
                <th scope="col">Bed Room</th>
                <th scope="col">Other Rooms</th>
                </tr>
                </thead>
                <tbody>
                <tr >
                <th scope="row"><?= date('d-m-Y h:m:s') ?> </th>
                <?php if ($ligneRoomsSensors['KitchenWindow']==1){ ?>
                <td>OPEN</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['LivingRoomWindow']==1){ ?>
                <td>OPEN</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['BedRoomWindow']==1){ ?>
                <td>OPEN</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['OtherRoomsWindow']==1){ ?>
                <td>OPEN</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+1 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+2 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+3 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+4 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+5 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+6 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                </tbody>
                </table>
            </div>

            </form>
        </div>

        <div id="div3-1-4">
            <center> <h1>Smoke Sensor</h1> </center>
            <form class="form-horizontal" action="UserPage.php">

            <div style="position: absolute; float: left; padding:10% 0 0 0;">
                <table class="table table-striped">
                <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Kitchen</th>
                <th scope="col">Living Room</th>
                <th scope="col">Bed Room</th>
                <th scope="col">Other Rooms</th>
                </tr>
                </thead>
                <tbody>
                <tr >
                <th scope="row"><?= date('d-m-Y') ?> </th>
                <?php if ($ligneRoomsSensors['KitchenSmook']==1){ ?>
                <td>ON</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['LivingRoomSmook']==1){ ?>
                <td>ON</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['BedRoomSmook']==1){ ?>
                <td>ON</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['OtherRoomsSmook']==1){ ?>
                <td>ON</td>
                <?php } else{?>
                <td></td>
                <?php }?>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+1 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+2 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+3 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+4 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+5 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+6 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                </tbody>
                </table>
            </div>

            </form>
        </div>

        <div id="div3-1-5">
            <center> <h1>Heating Sensor</h1> </center>
            <form class="form-horizontal" action="UserPage.php">

            <div style="position: absolute; float: left; padding:10% 0 0 0;">
                <table class="table table-striped">
                <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Kitchen</th>
                <th scope="col">Living Room</th>
                <th scope="col">Bed Room</th>
                <th scope="col">Other Rooms</th>
                </tr>
                </thead>
                <tbody>
                <tr >
                <th scope="row"><?= date('d-m-Y h:m:s') ?> </th>

                <?php if ($ligneRoomsSensors['KitchenHeating']==1){ ?>
                <td>14C</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['LivingRoomHeating']==1){ ?>
                <td>14C</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['BedRoomHeating']==1){ ?>
                <td>14C</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                <?php if ($ligneRoomsSensors['OtherRoomsHeating']==1){ ?>
                <td>14C</td>
                <?php } else{?>
                <td></td>
                <?php }?>

                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+1 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+2 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+3 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+4 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+5 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row"><?= date('d-m-Y', strtotime('+6 day')) ?> </th>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                </tr>
                </tbody>
                </table>
            </div>

            </form>
        </div>




        <div id="div4">
            <form class="form-horizontal" role="form" method="POST" action="../Controller/EditProfil.php">
            <h1>Edit Profile</h1>
            <div class="row">
            <!-- left column -->
            <div class="col-md-4">
            <div class="text-center">
            <?php if ($ligneEditProfil['Photo']=="vide"){ ?>
            <img src="../View/Pictures/userIco.png" class="avatar img-circle" alt="avatar">
            <?php }else {?>
            <img src="../View/Pictures/userIco.png" class="avatar img-circle" alt="avatar">
            <?php } ?>


            <h6>Upload a different photo...</h6>
          
            <input type="file" class="form-control" name="picture">
            </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-7 personal-info">
            <h3>Personal info</h3>
            <hr>
        
            
            <div class="form-group">
            <label class="col-lg-5 control-label">First name:</label>
            <div class="col-lg-7">
            <input class="form-control" type="text" name="FName" value= "<?= $ligneEditProfil['FirstName']  ?>" >
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-5 control-label">Last name:</label>
            <div class="col-lg-7">
            <input class="form-control" type="text" name="LName" value= "<?= $ligneEditProfil['LastName']?>" >
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-5 control-label">Email:</label>
            <div class="col-lg-7">
            <input class="form-control" type="text" name="Email" value="<?=$ligneEditProfil['Email']?>">
            </div>
            </div>
            <div class="form-group">
            <label class="col-md-5 control-label"></label>
            <div style="margin: 5%;">
            <input type="submit" class="btn btn-primary" value="Save Changes">
            </div>
            </div>
            </div>
            </div>

         </form>

        </div>




        <div id="div5">
            <div class="div5-img">
                <img src="../View/Pictures/logo.jpg" width="55%">        
            </div>

            <p>
                Lorem ipsum Ut eu molestie ligula. Nullam cursus id nunc at posuere. Mauris faucibus, arcu vitae feugiat feugiat, felis metus consequat dolor, ac eleifend urna magna sit amet nunc. Integer vulputate nunc mi. Sed congue eget enim nec dapibus. Phasellus blandit semper risus et molestie. Ut faucibus tempus erat a varius. Aenean ultrices odio quis nisi ultricies dignissim. Nunc eleifend leo et risus condimentum, quis convallis lectus feugiat. Nam ornare, dui vitae posuere porta, tortor magna accumsan enim, non tempor augue est nec ipsum. Aenean ut eleifend nisi. Donec non porta risus.
            </p> 
            <p>
                Donec sed augue egestas, euismod magna et, ullamcorper augue. Ut semper ac lorem ut consequat. Interdum et malesuada fames ac anteipsum primis in faucibus. Donec sodales felis at ante consequat, ac dapibus nulla volutpat. Etiam at ultricies magna. Suspendisse urna nisl, gravida at ipsum et, venenatis sollicitudin est. Nunc sed odio non velit lacinia molestie. Ut accumsan et metus ac finibus. Nunc accumsan at metus feugiat fermentum. Suspendisse rhoncus blandit turpis quis luctus. Vivamus dictum, ex sit amet tristique egestas, risus diam molestie quam, non sagittis lorem est malesuada dolor. Vivamus placerat posuere auctor. Proin id ligula non tellus pellentesque vulputate ac in neque.
            </p>    
        </div>





        <form class="form-horizontal" role="form" method="POST" action="../Controller/EditApartment.php">

        <div id="div6">
            
            <h3>Edit Your Apartment</h3>
   

            <div class="form-group">
            <label class="col-lg-5 control-label">Your full Address:</label>
            <div class="col-lg-7">
            <input class="form-control" type="text" name="address" value="<?=$ligneEditAddress['address']?>">
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-5 control-label">Name of your contry:</label>
            <div class="col-lg-7">
            <?php if (!isset($contry)) {?>
            <input class="form-control"  type="text" name="contry" value="<?=$ligneEditAddress['Contry']?>">
            <?php } else {?>
            <input class="form-control"  type="text" name="contry" value=""  placeholder="Your Contry">
            <?php }?>
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-5 control-label">Name of your city:</label>
            <div class="col-lg-7">
            <?php if (!isset($city)) {?>
            <input class="form-control" type="text" name="city" value="<?=$ligneEditAddress['City']?>" >
            <?php } else {?>
            <input class="form-control" type="text" name="city" value="" placeholder="Your city">
            <?php }?>
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-5 control-label">Number of rooms:</label>
            <div class="col-lg-7">
            <?php if (!isset($roomNum)) {?>
            <input class="form-control" type="number" min="1" name="roomNum" value="<?=$ligneEditAddress['total_rooms']?>">
            <?php } else {?>
            <input class="form-control" type="number" min="1" name="roomNum" value="1">
            <?php }?>
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-5 control-label">Number of the Persons</label>
            <div class="col-lg-7">
            <?php if (!isset($PersonNum)) {?>
            <input class="form-control" type="number" min="1" name="PersonNum" value="<?=$ligneEditAddress['NumPerson']?>">
            <?php } else {?>
            <input class="form-control" type="number" min="1" name="PersonNum" value="1">
            <?php }?>
            </div>
            </div>
            <div class="form-group">
            <label class="col-md-5 control-label"></label>
            <div style="margin: 10% 5% 0 60%;">
            <input type="submit" class="btn btn-primary" value="Save Changes">
            </div>
            </div>

            
        </div>

        </form>


    </article>
<!--/article-->





<!--aside-->
<aside>
 <i id="Hide" class="fa fa-times" ></i>
    <h3><?php echo $_SESSION['LastName']." ".$_SESSION['FirstName'] ?></h3>
   <div class="ProfilPic">
      <img src="../View/Pictures/userIco.png">
    </div>
    <ul >
        <li><a id="SetUp" href="#"><span class="fa fa-building"> </span> SetUp Your Apartment</a></li>
        <li><a id="Sensors" href="#"><span class="fa fa-dashboard"> </span> Manage The Sensors</a></li>
        <li><a id="SeeFlat" href="#"><span class="fa fa-eye"> </span> See Your Apartment</a></li>
        <li><a id="pdf-button" onclick="downloadPDF()" href="#"><span class="fa fa-book"> </span> Report</a></li>
        <li><a id="EditAp" href="#"><span class="fa fa-cogs"> </span> Edit Your Apartment</a></li>
        <li><a id="Edit" href="#"><span class="fa fa-wrench"> </span> Edit Your Profile</a></li>
        <li><a id="About" href="#"><span class="fa fa-info-circle"> </span> About Us</a></li>
        <li><a id="out" onclick="destroy()" href="../View/Html/home.html"><span class="fa fa-sign-out"> </span> Log Out</a></li>
    </ul>

  <style>
    @media print {
      #pdf-button {
        display: none;
      }
    }
  </style>


</aside>
<!--/aside-->

<script >
        $('#div1').hide();
        $('#div2').hide();
        $('#div3-1-1').hide();
        $('#div3-1-2').hide();
        $('#div3-1-3').hide();
        $('#div3-1-4').hide();
        $('#div3-1-5').hide();
        $('#div4').hide();
        $('#div5').hide();
        $('#div6').hide();


          $("#div3-1").click( function (){
            $('#div3').hide("slow");
            $('#div3-1-1').show("slow");
            });

            $("#div3-2").click( function (){
            $('#div3').hide("slow");
            $('#div3-1-2').show("slow");
            });

            $("#div3-3").click( function (){
            $('#div3').hide("slow");
            $('#div3-1-3').show("slow");
            });

            $("#div3-4").click( function (){
            $('#div3').hide("slow");
            $('#div3-1-4').show("slow");
            });

            $("#div3-5").click( function (){
            $('#div3').hide("slow");
            $('#div3-1-5').show("slow");
            });

          $("#Save").click( function (){
            $('#div3').show("slow");
            $('#div3-1-1').hide("slow");
            $('#div3-1-2').hide("slow");
            $('#div3-1-3').hide("slow");
            $('#div3-1-4').hide("slow");
            $('#div3-1-5').hide("slow");
            });

          $("#Cancel").click( function (){
            $('#div3').show("slow");
            $('#div3-1-1').hide("slow");
            $('#div3-1-2').hide("slow");
            $('#div3-1-3').hide("slow");
            $('#div3-1-4').hide("slow");
            $('#div3-1-5').hide("slow");
            });



            $("#SetUp").click( function (){
            $('#div1').show("slow");
            $('#div2').hide("slow");
            $('#div3').hide("slow");
            $('#div3-1-1').hide("slow");
            $('#div3-1-2').hide("slow");
            $('#div3-1-3').hide("slow");
            $('#div3-1-4').hide("slow");
            $('#div3-1-5').hide("slow");
            $('#div4').hide("slow");
            $('#div5').hide("slow");
            $('#div6').hide("slow");
            });

            $("#Sensors").click( function (){
            $('#div1').hide("slow");
            $('#div2').show("slow");
            $('#div3').hide("slow");
            $('#div3-1-1').hide("slow");
            $('#div3-1-2').hide("slow");
            $('#div3-1-3').hide("slow");
            $('#div3-1-4').hide("slow");
            $('#div3-1-5').hide("slow");
            $('#div4').hide("slow");
            $('#div5').hide("slow");
            $('#div6').hide("slow");
            });


            $("#SeeFlat").click( function (){
            $('#div1').hide("slow");
            $('#div2').hide("slow");
            $('#div3').show("slow");
            $('#div3-1-1').hide("slow");
            $('#div3-1-2').hide("slow");
            $('#div3-1-3').hide("slow");
            $('#div3-1-4').hide("slow");
            $('#div3-1-5').hide("slow");
            $('#div4').hide("slow");
            $('#div5').hide("slow");
            $('#div6').hide("slow");
            });


            $("#Edit").click( function (){
            $('#div1').hide("slow");
            $('#div2').hide("slow");
            $('#div3').hide("slow");
            $('#div3-1-1').hide("slow");
            $('#div3-1-2').hide("slow");
            $('#div3-1-3').hide("slow");
            $('#div3-1-4').hide("slow");
            $('#div3-1-5').hide("slow");
            $('#div4').show("slow");
            $('#div5').hide("slow");
            $('#div6').hide("slow");
            });


            $("#About").click( function (){
            $('#div1').hide("slow");
            $('#div2').hide("slow");
            $('#div3').hide("slow");
            $('#div3-1-1').hide("slow");
            $('#div3-1-2').hide("slow");
            $('#div3-1-3').hide("slow");
            $('#div3-1-4').hide("slow");
            $('#div3-1-5').hide("slow");
            $('#div4').hide("slow");
            $('#div5').show("slow");
            $('#div6').hide("slow");
            });
   
            $("#EditAp").click( function (){
            $('#div1').hide("slow");
            $('#div2').hide("slow");
            $('#div3').hide("slow");
            $('#div3-1-1').hide("slow");
            $('#div3-1-2').hide("slow");
            $('#div3-1-3').hide("slow");
            $('#div3-1-4').hide("slow");
            $('#div3-1-5').hide("slow");
            $('#div4').hide("slow");
            $('#div5').hide("slow");
            $('#div6').show("slow");
            });


        $("#Hide").click( function (){
            $("article").toggleClass("menuDisplayed");

        });

        $("#Show").click( function (){
            $("article").toggleClass("menuDisplayed2");

        });

     var downloadPDF = function() {
      DocRaptor.createAndDownloadDoc("YOUR_API_KEY_HERE", {
        test: true,
        type: "pdf",
        document_content: document.querySelector("html").innerHTML,
      })
    }


        $("#Show").click( function (){
            $('aside').show("slow");
        });

        $("#Hide").click( function (){
            $('aside').hide("slow");
        });



</script>


</body>
</html>