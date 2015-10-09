 <?php include '\webpage\index.php';?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>

<link rel="stylesheet" type="text/css"
	href="http://localhost/ifb299-project/Project%20Files/webpage/home.css">
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Open+Sans">
</head>
<body>
	<div class="textunderline">
		<h1>Search for Properties</h1>
	</div>
	<div class="underline"></div>



	<div class="content">
		<form action="http://localhost/ifb299-project\Project Files\test.php" method='post'>
			<br> <input class="searchbar" type="text" id="search" name="textbox"
				size="100" placeholder=" Enter Suburb" required> <input type="submit"
				class="button" value="Search"> <br> <select name="property">
				<option value='' disabled selected style='display: none;'>Property
					Type</option>
				<option value="Apartments">Apartments and Units</option>
				<option value="House">House</option>
				<option value="Town">Townhouse</option>
				<option value="Projects">Projects</option>

			</select> <select name="minbed" required>
				<option value='' disabled selected style='display: none;'>Min Bed</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4+</option>
			</select> <select name="maxbed" required>
				<option value='' disabled selected style='display: none;'>Max Bed</option>

				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4+</option>
			</select> <select name=minprice required>
				<option value='' disabled selected style='display: none;'>Min Price</option>

				<option value="100">100</option>
				<option value="200">200</option>
				<option value="300">300</option>
				<option value="400">400+</option>
			</select> <select name="maxprice" required>
				<option value='' disabled selected style='display: none;'>max price</option>

				<option value="100">100</option>
				<option value="200">200</option>
				<option value="300">300</option>
				<option value="400">400</option>
			</select>

		</form>

	</div>

</body>

</html>
