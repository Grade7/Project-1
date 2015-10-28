 <?php include '\webpage\index.php';?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Property Results</title>
<link rel="stylesheet" type="text/css"
	href="http://localhost/ifb299-project/Project%20Files/webpage/property.css">
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Open+Sans">
  <?php
		require '\webpage\connect.php';
		$suburb = $_POST ['textbox'];
		$minprice = $_POST ['minprice'];
		$maxprice = $_POST ['maxprice'];
		
		$query = "SELECT * FROM property WHERE suburb = 'sunnybank' and rent BETWEEN '$minprice' and '$maxprice'";
		if ($queryrun = mysql_query ( $query )) {
			while ( $query_row = mysql_fetch_assoc ( $queryrun ) ) {
				$images [] = $query_row ['image'];
				$rent [] = $query_row ['rent'];
				$street [] = $query_row ['street'];
				$link [] = $query_row ['link'];
			}
		} else {
			echo mysql_error ();
		}
		
		?>



<body>
<div class="textunderline">
		<h1>Properties Results</h1>
	</div>
	<div class="underline"></div>
<div class="images">
<br>
		

		<table class = "propertytable" style="width: 30%">
			<tr>

    <?php
			for($int = 0; sizeof ( $images ) > $int; $int ++) {
				echo '<tr><td></td><td> </td>';
				echo '</tr><tr><td><img src="' . $images[$int] . '"  height="150" width="200"></td><td> <a href = "' . $link[$int] . '" >$'. $rent [$int] .' Weekly Rent <br> '.$street [$int].'</a></td>';
				echo '<tr><td></td>';
				echo ' </tr><tr><td></td><td></td><td></td><br>';
			}
			?>
    </tr>
		</table>
</div>
</body>
</head>
</html>




