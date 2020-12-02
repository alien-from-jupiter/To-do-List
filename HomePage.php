<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Home Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet"  href="HomePage.css">
</head>
<body>

	<br>
	<br>

	<p> Organize with To Do List </p>
	<button onclick="Login()" class = "button" >Login</button>
	<button onclick="SignUp()" class = "button" >SignUp</button>

	<br>
	<br>
	
	<script>
		function Login(){
			window.location.href = "http://localhost/Trial-4/Login.php";

		}
		function SignUp() {
			window.location.href = "http://localhost/Trial-4/SignUp.php"
		}
	</script>
	
	
	</body>

</html>