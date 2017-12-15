<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div align="center" class="container">
	<h1 align="center">SIGN IN HERE</h1>
	<form action="../Model/AddUser.php" method="POST">
		 <div class="form-group">
			
			<table>
				<tr>
					<td>FIRSTNAME:</td>
					<td><input type="text" class="form-control" name="fname"></td>
				</tr>
				<tr>
					<td>LASTNAME:</td>
					<td><input type="text" class="form-control" name="lname"></td>
				</tr>
				<tr>
					<td>EMAIL:</td>
					<td><input type="text" class="form-control" name="email"></td>
				</tr>
				<tr>
					<td>PASSWORD:</td>
					<td><input type="text" class="form-control" name="pass"></td>
				</tr>
				<tr>
					<td>DATE OF BIRTH</td>
					<td><input type="date" class="form-control" name="birth"></td>
				</tr>
				<tr>
					<td>ADDRESS</td>
					<td><input type="text" class="form-control" name="area"></td>
				</tr>
				<tr >
					
					<td><input type="submit" id="btn" class="btn btn-success" ></td>
				</tr>
			</table>
			 <div class="form-group">
		</div>
	</form>
</body>
</html>
