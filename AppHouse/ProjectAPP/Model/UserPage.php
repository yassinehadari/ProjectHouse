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

<?php include("../Controller/Connexion.php");?>

<?php session_start(); ?>

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


                <table class="table table-hover">

                <thead>

                <tr>
                <th>Sensors</th>
                <th>
                <select>
                <option value="none" selected>Choose your Room</option>
                <option value="LivingRoom">Living Room</option>
                <option value="Kitchen">Kitchen</option>
                <option value="BedRoom">Bed Room</option>
                <option value="OtherRoom" >Other Rooms</option>
                </select>
                </th>
                <th>
                <select>
                <option value="none" selected>Choose your Room</option>
                <option value="LivingRoom">Living Room</option>
                <option value="Kitchen">Kitchen</option>
                <option value="BedRoom">Bed Room</option>
                <option value="OtherRoom" >Other Rooms</option>
                </select>
                </th>
                <th>
                <select>
                <option value="none" selected>Choose your Room</option>
                <option value="LivingRoom">Living Room</option>
                <option value="Kitchen">Kitchen</option>
                <option value="BedRoom">Bed Room</option>
                <option value="OtherRoom" >Other Rooms</option>
                </select>
                </th>
                <th>
                <select>
                <option value="none" selected>Choose your Room</option>
                <option value="LivingRoom">Living Room</option>
                <option value="Kitchen">Kitchen</option>
                <option value="BedRoom">Bed Room</option>
                <option value="OtherRoom" >Other Rooms</option>
                </select>
                </th>
                </tr>

                </thead>

                <tbody>

                <tr>
                <th>Door Sensor</th>
                <td><input type="checkbox" autocomplete="off"></td>
                <td><input type="checkbox" autocomplete="off"> </td>
                <td><input type="checkbox" autocomplete="off"> </td>
                <td><input type="checkbox" autocomplete="off"> </td>
                </tr>

                <tr>
                <th>Window Sensor</th>
                <td><input type="checkbox" autocomplete="off"></td>
                <td><input type="checkbox" autocomplete="off"> </td>
                <td><input type="checkbox" autocomplete="off"> </td>
                <td><input type="checkbox" autocomplete="off"> </td>
                </tr>

                <tr>
                <th>Heating Sensor</th>
                <td><input type="checkbox" autocomplete="off"></td>
                <td><input type="checkbox" autocomplete="off"> </td>
                <td><input type="checkbox" autocomplete="off"> </td>
                <td><input type="checkbox" autocomplete="off"> </td>
                </tr>

                <tr>
                <th>Light Sensor</th>
                <td><input type="checkbox" autocomplete="off"></td>
                <td><input type="checkbox" autocomplete="off"> </td>
                <td><input type="checkbox" autocomplete="off"> </td>
                <td><input type="checkbox" autocomplete="off"> </td>
                </tr>

                <tr>
                <th>Smook Sensor</th>
                <td><input type="checkbox" autocomplete="off"></td>
                <td><input type="checkbox" autocomplete="off"> </td>
                <td><input type="checkbox" autocomplete="off"> </td>
                <td><input type="checkbox" autocomplete="off"> </td>
                </tr>



                </tbody>

                </table>

                <input class="btn-success" type="submit" name="" value="Save">

        </div>

        
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
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                     <td><input type="checkbox" checked data-toggle="toggle"></td>
                     <td><input type="checkbox" checked data-toggle="toggle"></td>
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
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                     <td><input type="checkbox" checked data-toggle="toggle"></td>
                     <td><input type="checkbox" checked data-toggle="toggle"></td>
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
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                     <td><input type="checkbox" checked data-toggle="toggle"></td>
                     <td><input type="checkbox" checked data-toggle="toggle"></td>
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
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                    <td><input type="checkbox" checked data-toggle="toggle"></td>
                     <td><input type="checkbox" checked data-toggle="toggle"></td>
                     <td><input type="checkbox" checked data-toggle="toggle"></td>
                </tr>
               </table></center>
           </div>

            <div class="div2-Sub">
               
                <input type="button" class="btn btn-info" value="Submit">

           </div>

        </div> 



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
            <div class="form-group">
            <label class="control-label">Turn all the lamps off:</label>
            <input type="checkbox" checked data-toggle="toggle">
            </div>
            <div class="form-group">
            <div>
            <input id="Save" class="btn-success" type="submit" value="Submit">
            </div>
            <div>
            <input id="Cancel" class="btn-info" type="submit" value="Cancel">
            </div>
            </div>
            </form>
        </div>

        <div id="div3-1-2">
            <center> <h1>Door Sensor</h1> </center>
            <form class="form-horizontal" action="UserPage.php">
            <div class="form-group">
            <label class="control-label">Close all the doors:</label>
            <input type="checkbox" checked data-toggle="toggle">
            </div>

            <div class="form-group">
            <div>
            <input id="Save" class="btn-success" type="submit" value="Submit">
            </div>
            <div>
            <input id="Cancel" class="btn-info" type="submit" value="Cancel">
            </div>
            </div>
            </form>
        </div>

        <div id="div3-1-3">
            <center> <h1>Window Sensor</h1> </center>
            <form class="form-horizontal" action="UserPage.php">
            <div class="form-group">
            <label class="control-label">Close all the windows:</label>
            <input type="checkbox" checked data-toggle="toggle">
            </div>
            <div class="form-group">
            <div>
            <input id="Save" class="btn-success" type="submit" value="Submit">
            </div>
            <div>
            <input id="Cancel" class="btn-info" type="submit" value="Cancel">
            </div>
            </div>
            </form>
        </div>

        <div id="div3-1-4">
            <center> <h1>Smoke Sensor</h1> </center>
            <form class="form-horizontal" action="UserPage.php">
            <div class="form-group">
            <label class="control-label">Turn all smokes alarm off:</label>
            <input type="checkbox" checked data-toggle="toggle">
            </div>

            <div class="form-group">
            <div>
            <input id="Save" class="btn-success" type="submit" value="Submit">
            </div>
            <div>
            <input id="Cancel" class="btn-info" type="submit" value="Cancel">
            </div>
            </div>
            </form>
        </div>

        <div id="div3-1-5">
            <center> <h1>Heating Sensor</h1> </center>
            <form class="form-horizontal" action="UserPage.php">
            <div class="form-group">
            <label class="control-label">Current Temperature:</label>
            <div >
            <input class="form-control" type="number" value="" placeholder="20 &deg C">
            </div>
            </div>
            <div class="form-group">
            <div>
            <input id="Save" class="btn-success" type="submit" value="Submit">
            </div>
            <div>
            <input id="Cancel" class="btn-info" type="submit" value="Cancel">
            </div>
            </div>
            </form>
        </div>




        <div id="div4">
            <h1>Edit Profile</h1>
            <div class="row">
            <!-- left column -->
            <div class="col-md-4">
            <div class="text-center">
            <img src="../View/Pictures/userIco.png" class="avatar img-circle" alt="avatar">
            <h6>Upload a different photo...</h6>
          
            <input type="file" class="form-control">
            </div>
            </div>
      
            <!-- edit form column -->
            <div class="col-md-7 personal-info">
            <h3>Personal info</h3>
            <hr>
        
            <form class="form-horizontal" role="form">
            <div class="form-group">
            <label class="col-lg-5 control-label">First name:</label>
            <div class="col-lg-7">
            <input class="form-control" type="text" value="">
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-5 control-label">Last name:</label>
            <div class="col-lg-7">
            <input class="form-control" type="text" value="">
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-5 control-label">Full Address:</label>
            <div class="col-lg-7">
            <input class="form-control" type="text" value="">
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-5 control-label">Email:</label>
            <div class="col-lg-7">
            <input class="form-control" type="text" value="">
            </div>
            </div>
            <div class="form-group">
            <label class="col-md-5 control-label">Username:</label>
            <div class="col-md-7">
            <input class="form-control" type="text" value="">
            </div>
            </div>
            <div class="form-group">
            <label class="col-md-5 control-label">Password:</label>
            <div class="col-md-7">
            <input class="form-control" type="password" value="">
            </div>
            </div>
            <div class="form-group">
            <label class="col-md-5 control-label">Confirm password:</label>
            <div class="col-md-7">
            <input class="form-control" type="password" value="">
            </div>
            </div>
            <div class="form-group">
            <label class="col-md-5 control-label"></label>
            <div style="margin: 5%;">
            <input type="button" class="btn btn-primary" value="Save Changes">
            </div>
            </div>
            </form>
            </div>
            </div>

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




        <div id="div6">
            
            <h3>Set Up Your Apartment</h3>
   
            <form class="form-horizontal" role="form">
            <div class="form-group">
            <label class="col-lg-5 control-label">Your full Address:</label>
            <div class="col-lg-7">
            <input class="form-control" type="text" value="">
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-5 control-label">Name of your contry and city:</label>
            <div class="col-lg-7">
            <input class="form-control" type="text" value="" placeholder="Contry/city">
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-5 control-label">Number of rooms:</label>
            <div class="col-lg-7">
            <input class="form-control" type="number" value="1">
            </div>
            </div>
            <div class="form-group">
            <label class="col-lg-5 control-label">Number of the Persons</label>
            <div class="col-lg-7">
            <input class="form-control" type="number" value="1">
            </div>
            </div>
            <div class="form-group">
            <label class="col-md-5 control-label"></label>
            <div style="margin: 2% 5% 0 60%;">
            <input type="button" class="btn btn-primary" value="Save Changes">
            </div>
            </div>
            </form>
            
        </div>



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
        document_content: document.querySelector('#div2').innerHTML,
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

