<?php
	session_start();
    $username = $_POST["username"];

	include("connection.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			$error = "Both fields are required.";
		}else
		{
			// Define $username and $password
			$username=$_POST['username'];


			// To protect from MySQL injection

			$username = mysqli_real_escape_string($db, $username);
			$password = mysqli_real_escape_string($db, $password);
			$password=$_POST['password'];
			$password = md5($password);
			$_SESSION['username'] = $username; // Initializing Session
			
			//Check username and password from database
			$sql="SELECT * FROM users WHERE username ='$username' and password='$password'";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_array($result) ;
			
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			
			if(mysqli_num_rows($result) == 1) {
				header("location: home.php"); // Redirecting To Other Page


			}
			else {
				$error = "Incorrect username or password.";
				echo $error;
			}

		}
	}

?>