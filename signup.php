<?php
session_start();

		include("connection.php");
		include("functions.php");

	
		if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,name,address,phone,email,password,photo) values ('$user_id','$user_name','$name', '$address','$phone','$email','$password','$photo')";
		
			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: rgb(9, 243, 110);
		border: none;
	}

	#box{

		background-color: rgb(1, 1, 1);
		margin: auto;
		width: 1000px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 50px;margin: 10px;color: rgb(182, 66, 130);">Signup</div>

            <div style="font-size: 15px;margin: 10px;color: white;">Please enter your username:</div>
			<input id="text" type="text" name="user_name"><br><br>

			<div style="font-size: 15px;margin: 10px;color: white;">Please enter your full name</div>
			<input id="text" type="text" name="name"><br><br>

			<div style="font-size: 15px;margin: 10px;color: white;">Please enter your home address</div>
			<input id="text" type="text" name="address"><br><br>

			<div style="font-size: 15px;margin: 10px;color: white;">Please enter your phone number:</div>
			<input id="text" type="text" name="phone"><br><br>
			
			<div style="font-size: 15px;margin: 10px;color: white;">Please enter your email:</div>
			<input id="text" type="text" name="email"><br><br>

            <div style="font-size: 15px;margin: 10px;color: white;">Please enter your password:</div>
			<input id="text" type="password" name="password"><br><br>

			<div style="font-size: 15px;margin: 10px;color: white;">Please enter your photo:</div>
			<input id="text" type="text" name="photo"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>