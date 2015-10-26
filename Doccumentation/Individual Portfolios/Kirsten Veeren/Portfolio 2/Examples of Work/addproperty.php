<?php include '\webpage\index.php';?>
 <?php include '\webpage\loginconnect.php';
 
 if(isset($_POST['rent']) && isset($_POST['street']) && isset($_POST['suburb'])) {
	$rent = $_POST['rent'];
 	$street = $_POST['street'];
	$suburb = $_POST['suburb'];
	
	$sql = "INSERT INTO property (rent, street, suburb) VALUES ('$rent', '$street', '$suburb')";
	
	if($query_run = mysql_query($sql)){
 		
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
		<h1>Add a Property</h1>
	</div>
	<div class="underline"></div>
<div class = "position">
	<form action="http://localhost/ifb299-project\Project%20Files\home.php"
		method='post'>
		<input class="user" type="text" id="search" name="rent"
			size="100" required placeholder=" Rent per Week"> <br> 
			
		<input class="user" type="text" id="search" name="street" size="100" placeholder=" Address" required>
		<input class="user" type="text" id="search" name="suburb" size="100" placeholder=" Suburb" required> 
		<input type="submit"class="button" value="Add"> <br> 
</form>
</div>
</body>
</html>
