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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: dashboard.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<div style="font-size: 24px; margin-bottom: 10px; color: purple; font-weight: bold;">Login</div>
			<h3 style="color: purple; font-size: 16px; ">Enter Your Information</h3>
			<input id="text" type="text" name="user_name" placeholder="Name"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>
			<p><a href="index.php">Click to Signup</a><br><br><p>
		</form>
	</div>
</body>
</html>