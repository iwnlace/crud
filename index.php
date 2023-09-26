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
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

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
		background-color: purple;
		border: none;
	}

	#box{

		background-color: white;
		margin-left: 725px;
		margin-top: 325px;
		width: 300px;
		height: 300px;
		padding: 20px;
		border-radius: 25px;
	}

	body{
    	background-image: linear-gradient(rgba(0,0,50,0.8),rgba(0,0,50,0.8)), url(kc.png);
		background-size: cover;
	}

	a:hover {
            text-decoration: underline; /* Add an underline when hovering */
            color: #FF4500; /* Change the link text color on hover */
	}
	a {
		color: purple;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 24px;color: purple; font-weight: bold;">Signup</div>
			<h3 style="color: purple; font-size: 16px; ">Live Fast, Die Last.</h3>

			<input id="text" type="text" name="user_name" placeholder="Name"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<p><a href="login.php">Click to Login</a></p>
		</form>
	</div>
</body>
</html>









