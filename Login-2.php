<?php
$host="localhost";
$user="root";
$password="";
$db="ToDoList";
//Connect to Database
$conn = new mysqli ($host,$user,$password,$db);
global $conn;
if (isset($_POST['Login-Button'])){
	session_start();
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$Password = md5($Password);
	echo ($password);

	$result = mysql_query("SELECT * FROM User WHERE Email='$Email' AND Password = '$Password'") or die("Failed to Query Database".mysql_error());
	$row = mysql_fetch_array($result);
	if($row['Email'] == $Email && $row['Password'] == $Password){
		header("location:Homepage.html");
	}
	else{
		echo "You Have Entered Incorrect Password Or Username";
		exit();
	}
}


?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet"  href="Login.css">
	
		

</head>



<body>
	<div class = "1" >
		<div class = "2" >
			<br>
			<br>
			<br>
			<div class = "3" style="border: solid;margin-right: 650px;margin-left: 650px">
				<br>
				<br>

				<form class = "4" method="post" action="Login-2.php">
					<span style="font-size: 28px;color:black;text-align: center;">
						<b>Login</b>
					</span>
					<br>
					<br>
					<div class = "5">
						<br>
						<span class = "6"> Email</span>
						<br>
						<br>
						<input type="text" name="Email" class = "7" placeholder="Type Your Email" required>
						<span class="8" data-symbol="&#xf206;"></span>
					</div>
					<div class = "5">
						<br>
						<span class = "6"> Password </span>
						<br>
						<br>
						<input type="password" name="Password" class = "7" placeholder="Type Your Password" required>
						<span class="8" data-symbol="&#xf206;"></span>
					</div>

					<div class="9">
						<div class="10">
							<div class="11" style="color:#193b3b; "></div>
							<br>
							<button class="button"  name ="Login-Button">
								Login 
							</button>
							<br>
							<br>
							<br>
						</div>
					</div>
				</form>
		 </div>
	</div>
</body>
</html>