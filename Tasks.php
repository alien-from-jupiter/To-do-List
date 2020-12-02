<?php
$host="localhost";
$user="root";
$password="";
$db="ToDoList";
//Connect to Database
$conn = mysqli_connect($host,$user,$password,$db);
session_start();
$Email = $_SESSION['Email'];
$sql = "SELECT * FROM Tasks WHERE Email = '".$Email."'" ;
$result = mysqli_query($conn,$sql);
//$checkedText = array_key_exists('myCheckbox', $_POST) ? ' checked="checked"' : '';



if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
	
		echo '<div class="1">';
		//echo '<input type = "checkbox" name = "check" value="1" >';
		//echo (isset($_POST['check']) == '1'?'checked="checked"':'');
		echo "  ".$row["Task"]."<br>";
		echo '</div>';
	}
}
else{
	echo "Zero Results";
}

if(isset($_POST['LogOut'])){
	session_destroy();
	header("location:HomePage.php");
}

?>
<html lang = "en">
<head>
	<title> Tasks</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet"  href="Tasks.css">
	
		

</head>
<body>
	<form method="POST">
	<br>
	<br>
	<button  class = "button"  name="LogOut">LogOut</button>


	
</body>
</html>

