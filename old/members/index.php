<?php
include_once("mysql_connect.php");

if(!isset($_GET['sort'])) {
	$sort = "name";
} else {
	$sort = $_GET['sort'];
}

//check cookies to ensure login
if(isset($_COOKIE['ID_rockcliffe'])) {
	$username = $_COOKIE['ID_rockcliffe'];
	$pass = $_COOKIE['Key_rockcliffe'];
	
	$check = mysql_query("SELECT * FROM owners WHERE Email1 = " . check_input($username)) or die("Error with cookie: " . mysql_error());
	
	while($info = mysql_fetch_array($check)){
		//if cookie has wrong password, sent to login page
		if($pass != $info['password']){
			header("Location: ../members.php");
		} else{
			$id = $info['ID'];
			$hour = time() + 3600;
			setcookie('ID_rockcliffe', stripslashes($username),$hour,"../");
			setcookie('Key_rockcliffe', $pass, $hour,"../");
			include("home.php");
		}
	}
	
} else { //if the cookie does not exist, send to login page.
	header("Location: ../members.php");
}
?>