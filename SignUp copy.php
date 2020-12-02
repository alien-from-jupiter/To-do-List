<?php
$host="localhost";
$user="root";
$password="";
$db="ToDoList";
//Connect to Database
$conn = mysqli_connect($host,$user,$password,$db);


if (isset($_POST['SignUp-Button'])){
	session_start();
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$Password_Repeat=$_POST['Password_Repeat'];

	
	$sql_2 = mysqli_query($conn,"SELECT * FROM User WHERE Email = '".$_POST['Email']"'");
	
	
	if(mysqli_num_rows(sql_2) > 0){
	echo "Email already Exists";
	exit();}

	else{
	

	if($Password == $Password_Repeat){
		//Create the User
		$Password = md5($Password); //Hash the Password.
		$sql = "INSERT INTO User(Email,Password) VALUES ('$Email','$Password')";
		mysqli_query($conn,$sql);
		echo "SignUp Success";
		$_SESSION['message'] = "Yayy !! You are SignedUp";
		$_SESSION['Email'] = $Email;
		header("location:Homepage.html");
	}
	else{
		//Failed
		echo "<br>";
		echo "Repeat the Same Password";
	}
}
}

?>




<!DOCTYPE html>
<html lang = "en">
<head>
	<title> SignUp </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet"  href="SignUp.css">

</head>
<body>
	<div class = "1" >
		<div class = "2" >
			<br>
			<br>
			<br>
			<div class = "3" style="border: solid;margin-right: 600px;margin-left: 600px">
				<br>
				<br>

				<form class = "4" method="post" action="SignUp.php">
					<span style="font-size: 28px;color:black;text-align: center;">
						<b>SignUp</b>
					</span>
					<br>
					<br>
					<div class = "5">
						<br>
						<span class = "6"> Email</span>
						
						<br>
						<input type="text" name="Email" class = "7" placeholder="Enter Email" required>
						<span class="8" data-symbol="&#xf206;"></span>
					</div>
					<div class = "5">
						<br>
						<span class = "6"> Password </span>
						
						<br>
						<input type="password" name="Password" class = "7" placeholder="Enter Password" required>
						<span class="8" data-symbol="&#xf206;"></span>
					</div>
					<div class = "5">
						<br>
						<span class = "6">Confirm Password </span>
						<br>
						
						<input type="password" name="Password_Repeat" class = "7" placeholder="Repeat Password" required>
						<span class="8" data-symbol="&#xf206;"></span>
					</div>

					<div class="9">
						<div class="10">
							<div class="11" style="color:#193b3b; "></div>
							<br>
							<br>
							<button class="button"  name="SignUp-Button">
								SignUp
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