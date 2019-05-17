<?php
        include "db.php";
        include "functions.php";
?>
<?php
        if(isset($_POST['submit'])){
        	$username = $_POST['username'];
        	$password = $_POST['password'];

        	if($username === "bugs" && $password ==="secret"){
        		header("location: read.php");
        	} else {
        	 		echo "wrong username or password";
        	}
        }

     
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container border border-primary">
		<h1>Headers</h1>
		<div class="col-lg-6 ">
			<form method="POST" action="headers.php">
				
				<div class="form-group ">
					<label>Username:</label>
				<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<input type="submit" name="submit" value="log-in" class="btn btn-primary">
			</form>
		</div>
	</div>

</body>
</html>