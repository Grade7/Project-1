
<?php require 'phphead.php'; ?>

<?php 

/**
 * 
 * @param String $id ID for fields created here, such as txt$id and div$id
 * @param String $label Label of the field - what the user will see it as.
 * @param String $name Name - mostly important for accessing form elements.
 * @param String $type Type of input to be created.
 * @param String $showlabel Whether to show the label above the control or not.
 * @param String $othermessage Another message to display beneath the controls - may be extra info of what it is.
 */
function create_field($id, $label, $name, $type, $showlabel, $othermessage){
	echo "<li>";
	echo $showlabel == true ? "<div><label>$label</label></div>" : "";
	echo "<div><input type='$type' id='txt$id' placeholder='$label' name='$name' onkeypress=".'"'."setVisibleClass('div$id', 0);".'"'." /></div>";
	echo $othermessage == null ? "" : "<div class='inlabel1'><label>$othermessage</label></div>";
	echo "<div id='div$id' class='inv'></div>";
	echo "</li>";
}

/**
 * Display the drop-down list of all of the states in Australia
 * @param String $id ID of the elements - sl$id & div$id
 * @param String $sel Default selected value in the dropdown.
 */
function display_states($id, $sel){
	$label = "State";
	$showlabel = false;
	$options = array(
			array('', '(Select State)')
			,array('ACT', 'Australian Capital Territory')
			,array('NSW', 'New South Wales')
			,array('NT', 'Northern Territory')
			,array('QLD', 'Queensland')
			,array('SA', 'South Australia')
			,array('TAS', 'Tasmania')
			,array('VIC', 'Victoria')
			,array('WA', 'Western Australia')
			);
	echo "<li>";
	echo $showlabel == true ? "<div class='inlabel1'><label>$label</label></div>" : "";
	echo "<div><select name='state' id='sl$id' onchange=".'"'."setVisibleClass('div$id', 0);".'"'." />";
	foreach ($options as $opt){
		$showsel = $opt[0] == $sel ? " selected" : "";
		echo "<option value='$opt[0]'$showsel>$opt[1]</option>";
	}
	echo "</select></div><div id='div$id' class='inv'></div>";
	echo "</li>";
}

/**
 * Create two radio buttons.
 * @param String $id ID for the div beneath it
 * @param String $name Name of the radiobuttons - important for form control
 * @param String $val1 Value (and part of the ID) for the first element
 * @param String $descr1 Description of the first radiobutton to show the user
 * @param String $val2 Value (and part of the ID) for the second element
 * @param String $descr2 Description of the second radiobutton to show the user
 */
function create_radios($id, $name, $val1, $descr1, $val2, $descr2){
	echo "<li>";
	echo "<input id='r-$val1' class='bulletinput' type='radio' name='$name' value='$val1' onchange=".'"'."setVisibleClass('div$id', 0);".'"'." /><label for='r-$val1'>$descr1</label>";
	echo "<input id='r-$val2' class='bulletinput' type='radio' name='$name' value='$val2' onchange=".'"'."setVisibleClass('div$id', 0);".'"'." /><label for='r-$val2'>$descr2</label>";
	echo "<div id='div$id' class='inv'></div>";
	echo "</li>";
}

/**
 * Create a "Submit" button
 * @param String $name Name of the input
 * @param String $value Value to display in Submit button
 * @param String $errID ID, mainly for the error div
 */
function createSubmit($name, $value, $errID){
	echo "<li>";
	echo "<div><input type='submit' name='$name' value='$value'></div>";
	echo "<div id='div$errID' class='inv'></div>";
	echo "</li>";
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title> - Account</title>
		<?php include_once 'incfiles/asgnHead.inc'; ?>
		<?php include_once 'scripts/ServerValidate.inc'; ?>
		<script type="text/javascript" src="scripts/ClientValidate.js"></script>
	</head>
	<body>
		<div id = "wrapper">
			<?php include_once 'incfiles/asgnMenu.inc'; ?>
			<div id = "content">
				<!-- Area for displaying server areas. -->
				<?php 
				if (isset($errs)){
					echo "<div class='valErrors'>";
					foreach ((array)$errs as $er){
						echo "<p>$er</p>";
					}
					echo "</div>";
				}
				
				?>
				<!-- Account forms  -->
			
				<?php 
				if (isset($username)){
					?>
					<!-- Logout -->
					<form name = "logout" method="POST" action="Account.php">
						<ul class="textcontrols">
							<?php 
								createSubmit("logout", "Log Out", "SOut");
							?>
						</ul>
					</form>
				<?php
				}
				else {
				
				?>
				<!-- Log In -->
				<fieldset>
					<legend>Log In</legend>
					<form name="login" onsubmit="return clientvalidate(this);" method="POST" action="Account.php" >
						<ul class="textcontrols">

							<?php 
								//Conveniently create the fields using our functions.
								create_field("SUser", "Username", "username", "text", false, null);
								create_field("SPass", "Password", "password", "password", false, null);
								createSubmit("login", "Sign In!", "SErr");
							?>
						</ul>
					</form>
				</fieldset>
				
				<!-- Register -->
				<fieldset>
					<legend>Register</legend>
					<form name="register" onsubmit="return clientvalidate(this);" method="POST" action="Account.php" >						
						<ul class="textcontrols">
							<?php 
								create_field("RUser", "Username", "username", "text", false, "Must start with a letter, and only contain letters and numbers.");
								create_field("RAddr", "Address", "address", "text", false, "ie. 5 Streetname, Suburb 4504");
								display_states("RState", "QLD");
								create_field("REmail", "Email Address", "email", "email", false, null);
								create_radios("RGend", "gender", "M", "Male", "F", "Female");
								create_field("RPass", "Password", "password", "password", false, null);
								create_field("RConf", "Confirm Password", "confpassword", "password", false, null);
								createSubmit("register", "Register Account!", "RErr");
							?>
						</ul>
					</form>
				</fieldset>
								
				<?php 
				}
				?>
			</div>
			<?php include_once 'incfiles/asgnFooter.inc'; ?>
		</div>
	</body>
</html>