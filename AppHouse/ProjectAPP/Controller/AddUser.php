<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php


include("Connexion.php");

$varRand= rand(100000000,999999999);

$_SESSION['key']=$_POST['key'];
$_SESSION['fname']=$_POST['fname'];
$_SESSION['lname']=$_POST['lname'];
$_SESSION['email']=$_POST['email'];
$_SESSION['pass']=$_POST['pass'];
$_SESSION['birth']=$_POST['birth'];
$_SESSION['area']=$_POST['area'];


$key=$_SESSION['key'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
$birth=$_SESSION['birth'];
$area=$_SESSION['area'];


    $check_product="select * from has_productdetail WHERE ProductID='$key'";
    $run=mysql_query($check_product);
    $ligne= mysql_fetch_array($run);


	$check_email_query="select * from has_user WHERE Email='$email'";  
    $run_query=mysql_query($check_email_query);




if (empty($key) || empty($fname) || empty($lname) || empty($email) || empty($pass) || empty($birth) || empty($area) ) {
?>
<script>alert('Please Fill The Blanks!');</script>
<?php
include_once('../Model/SignUp.php');
}



elseif ((mysql_num_rows($run_query)>0) ) {
?>
		<script>
		alert('Email is already exist in our database, Please try another one!');
		</script>
		<?php
		include_once('../Model/SignUp.php');
}


else{
		if (($ligne['ProductID']==$key) && ($ligne['Status']==0)) {

		$req="insert into has_user(firstName,LastName,Email,Password,Dob,Address,ProductID)
        values('$fname','$lname','$email','$pass','$birth','$area','$key');";
		mysql_query($req);

		$req2="update has_productdetail SET Status = 1 WHERE ProductID='$key'";
		mysql_query($req2);

		$req3="insert into has_productdetail values ('$varRand', 0)";
		mysql_query($req3);


		header('Location:../Model/Login.php');
		}

		else{
			?>
			<script>
		alert('The product Key is Wrong! Please try again.');
		</script>
		<?php
		include_once('../Model/SignUp.php');
		}
}
?>

