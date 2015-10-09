<!DOCTYPE HTML>
<?php 
session_start ();
$username = isset ( $_SESSION ['username'] ) ? $_SESSION ['username'] : null;
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>NavBar</title>

<link rel="stylesheet" type="text/css"
	href="http://localhost/ifb299-project/Project%20Files/webpage/mainstyle.css">
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Open+Sans">
</head>
<body>
	<nav class="nav-main">
		<div class="logo">
			<a href="http://localhost/ifb299-project/Project%20Files/home.php">Home</a>
		</div>
		<ul>
			<li><input type="radio" name="nav-group" id="amazing"
				class="nav-option"> <label for="amazing" class="nav-item">FAQ</label>
				<label for="nav-close" class="nav-close"> </label>

				<div class="nav-content">
					<div class="nav-sub">
						<ul>
							<li><a href="#">RENT</a></li>
						</ul>
					</div>
				</div></li>


			<li><input type="radio" name="nav-group" id="cool" class="nav-option">
				<label for="cool" class="nav-item">ABOUT US</label> <label
				for="nav-close" class="nav-close"> </label>


				<div class="nav-content">
					<div class="nav-sub">
						<a href="#">MISSION STATEMENT</a>
					</div>
				</div></li>

			<li class="login"><a href="http://localhost/ifb299-project/Project%20Files/login.php"><?php echo isset($username) ? $username : "Login";?></a></li>
			<li class="signup"><a href="http://localhost/ifb299-project/Project%20Files/webpage/logout.php"><?php echo isset($username) ? "LOGOUT" : "";?></a></li>
			
		</ul>


	</nav>
	<input type="radio" name="nav-group" id="nav-close"
		class="nav-close-option">

	<div class="bottom">
		<ul>
			<li><a href="#"> &#9400; 2015 Nor</a></li>
			<li>
		
		</ul>
	</div>
	<div class="browntop"></div>


	<div class="brownbottom"></div>
</body>
</html>