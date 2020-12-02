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





?>

<html lang = "en">
<head>
	<title> To Dos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet"  href="Tasks.css">
	
		

</head>
<body>
	<form method="POST">
		<div class=1>
			<?php
			if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo  "<span>"."Task : " .$row["Task"]."<br>"."</span>";
	}
}
else{
	echo "Zero Results";
}
?>
</div>

</body>
</html>