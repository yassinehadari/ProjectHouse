
<?php
include("../Controller/Connexion.php");

$result = "SELECT  * FROM has_user";
$query = mysql_query($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
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

<style>
    
    table{
    font-family:'Calibri';
    font-size:15px;
    background-color:#fff;
    color:#333;
    text-align: center;
    margin-top:10%;
}

tr,td,th{
    text-align: center;
}

a{
    color: #111;
}

a:hover{
    color: red;
    font-size: 18px;
}

.modal-header{
    background-color:#333;
    color:#fff;
}
</style>



<body>

<div class="container">
    <div class="row">
        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Adress</th>
                    <th>Product ID</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
            while($ligne=mysql_fetch_array($query)) {   
                ?>
                <tr id="d1">
                    <td><?=$ligne['User_ID'] ?></td>
                    <td id="f1"><?=$ligne['FirstName'] ?></td>
                    <td id="l1"><?=$ligne['LastName'] ?></td>
                    <td id="m1"><?=$ligne['Email'] ?></td>
                    <td><?=$ligne['Address'] ?></td>
                    <td><?=$ligne['ProductID'] ?></td>
                    <td><a href="../Controller/DeleteAdmin.php?id=<?=$ligne['User_ID']?>"> <span class="fa fa-trash" aria-hidden="true"></span> </a></td>
                </tr>
                <?php 

    }

?>
            </tbody>

        </table>

        <center> <a href="../View/Html/home.html" class="btn btn-info" role="button">Log Out</a> </center>
    </div>
</div>




</body>


</html>