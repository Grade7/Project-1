<?php
$servername = "localhost";
$username = "user";
$password = "islam4life";

$database = "username";
if(!@mysql_connect($servername,$username,$password) || !@mysql_select_db($database)){
	die("couldn't connect");
}
?>