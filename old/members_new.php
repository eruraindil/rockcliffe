<?php
// Connects to your Database 
include_once("members/mysql_connect.php");

//Check for Login Cookie
if(isset($_COOKIE['ID_rockcliffe'])){
	//And if so, login to clients page
	$username = $_COOKIE['ID_rockcliffe'];
	$pass = $_COOKIE['Key_rockcliffe'];
	
	$check = mysql_query("SELECT * FROM owners WHERE Email1 = " . check_input($username)) or die(mysql_error());
	while($info = mysql_fetch_array($check)){
		if($pass == $info['password']){
			//the cookie matches the password in database
			$hour = time() + 3600;
			setcookie('ID_rockcliffe', $username, $hour,"./");
			setcookie('Key_rockcliffe', $pass, $hour,"./");
			header("Location: members/");
		} else {
			include("login.php");
		}
	}
}

//to submit the login form
if(isset($_POST['submit'])){
	if(!$_POST['username'] | !$_POST['pass']){
		$_POST['error'] = "fill";
	}
	//check against database
	$username = check_input($_POST['username']);
	
	$check = mysql_query("SELECT * FROM owners WHERE Email1 = $username") or die(mysql_error());
	$check2 = mysql_num_rows($check);
	if($check2 == 0){
		$_POST['error'] = "user";
	}
	while($info = mysql_fetch_array($check)){
		echo $info['password'];
		//provided password:
		$_POST['pass'] = stripslashes($_POST['pass']);
		
		//registered password
		$info['password'] = stripslashes($info['password']);
		
		//hash the provided password, this not very secure. need to add some salt
		$_POST['pass'] = md5($_POST['pass']);
		
		//do they match?
		if($_POST['pass'] != $info['password']){
			$_POST['error'] = "pass";
		} else{ //if login is okay, add cookie!
			$_POST['username'] = stripslashes($_POST['username']);
			$hour = time() + 3600;
			setcookie('ID_rockcliffe', $_POST['username'],$hour,"./");
			setcookie('Key_rockcliffe', $_POST['pass'], $hour,"./");
			
			//redirect to clients page
			header("Location: members/");
			//echo check_input($_COOKIE['ID_rockcliffe']);
			//echo $_COOKIE['ID_rockcliffe'];
		}
	}
	
}
include("login.php");
?>
