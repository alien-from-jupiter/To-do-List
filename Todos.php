<?php
$host="localhost";
$user="root";
$password="";
$db="ToDoList";
//Connect to Database
$conn = mysqli_connect($host,$user,$password,$db);
session_start();
if(isset($_POST['Add'])){
	$Email = $_SESSION['Email'];
	$Task = $_POST['Task'];

	if(empty($Task)){
		echo "<br>";
		echo "Add a task";
	}
	else{
		$sql = mysqli_query($conn,"INSERT INTO Tasks(Email,Task) VALUES ('$Email','$Task')");
		
	}

}
if(isset($_POST['LogOut'])){
	session_destroy();
	header("location:HomePage.php");
}

if(isset($_POST['Tasks'])){
	header("location:Tasks.php");
}

?>

<html lang = "en">
<head>
	<title> To Dos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet"  href="todos-1.css">
	
		

</head>
<body>
	<div class = "1">
		<br>
		<br>
		<span style="font-size: 45px;color:black;text-align: center;">
						<b>Todos</b>
					</span>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="2" >
			<form method="POST">
			<input type="text" class = "3" name = "Task"placeholder="What do you want to get done today??" >
		</div>
		<br>
		<br>
		<br>
		<button  class = "button" name = "LogOut">LogOut</button>
		<button  class = "button" name = "Tasks">Tasks</button>
		<button class="button" name="Add">Add to List</button>

		
	
	</body>
	</html>