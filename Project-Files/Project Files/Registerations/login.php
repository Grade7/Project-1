<!-- Webpage verifies the login of the users and admin -->

<!-- Include require connect webpages -->
 <?php include '\webpage\index.php';?>
 <?php include '\webpage\loginconnect.php';
 
 if(isset($_POST['username']) && isset($_POST['password'])) {
 	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$query = "SELECT username, password FROM users WHERE username = '$username' and password = '$password'";
 	if($query_run = mysql_query($query)){
 		$query_num_rows = mysql_num_rows($query_run);
 		if($query_num_rows == 1){
 			$_SESSION ['username'] = $username;
			header("location: home.php");
 		}
 		
 	}
 	else{
 		echo mysql_error ();
 	}
 	
 }
 
 
 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>

<link rel="stylesheet" type="text/css"
	href="http://localhost/ifb299-project/Project%20Files/webpage/login.css">
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Open+Sans">
</head>

<body>
	<div class="textunderline">
		<h1>Login</h1>
	</div>
	<div class="underline"></div>
<div class = "position">
	<form action="http://localhost/ifb299-project\Project%20Files\login.php"
		method='post'>
		<input class="user" type="text" id="search" name="username"
			size="100" required placeholder=" Enter Your User Name"> <br> 
		<input class="user" type="password" id="search" name="password" size="100" placeholder=" Password" required>
		<input type="submit"class="button" value="Login"> <br> 
</form>
</div>
</body>
</html>
