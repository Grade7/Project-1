 <?php include '\webpage\index.php';?>
 <?php include '\webpage\loginconnect.php';
 
 if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['phone'])) {
	$username = $_POST['username'];
 	$password = $_POST['password'];
	$firstname = $_POST['firstname'];
 	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	
	$idQuery = "SELECT MAX(id) FROM users";
	$lastId = mysql_query($idQuery) or die(mysql_error());
	
	$numRowsQuery = mysql_query("SELECT * FROM users");
	$numRows = mysql_num_rows($numRowsQuery);
	
	$newId = $numRows + 1;
	
	$sql = "INSERT INTO users (id, username, password, firstname, lastname, phone) VALUES ('$newId', '$username', '$password', '$firstname', '$lastname', '$phone')";
	
	
	
	if($query_run = mysql_query($sql)){
 		
 	}
 	else{
 		echo mysql_error ();
 	}
	
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
		<h1>Register</h1>
	</div>
	<div class="underline"></div>
<div class = "position">
	<form action="http://localhost/ifb299-project\Project%20Files\register.php"
		method='post'>
		<input class="user" type="text" id="search" name="username"
			size="100" required placeholder=" Enter Your User Name"> <br> 
		<input class="user" type="password" id="search" name="password" size="100" placeholder=" Password" required>
		<input class="user" type="text" id="search" name="firstname" size="100" placeholder=" First Name" required>
		<input class="user" type="text" id="search" name="lastname" size="100" placeholder=" Last Name" required>
		<input class="user" type="text" id="search" name="phone" size="100" placeholder=" Mobile Number" required>
		<input type="submit"class="button" value="Register"> <br> 
</form>
</div>
</body>
</html>
