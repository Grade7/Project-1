<?php
$servername = "localhost";
$username = "user";
$password = "group";

$database = "house";
if(!@mysql_connect($servername,$username,$password) || !@mysql_select_db($database)){
	die("couldn't connect");
}

?>