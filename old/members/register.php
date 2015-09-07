<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
// Connects to your Database 
include_once("mysql_connect.php");

//This code runs if the form has been submitted
if (isset($_POST['submit'])) {
	//This makes sure they did not leave any fields blank
	if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
		die('You did not complete all of the required fields');
	}
	// checks if the username is in use
	$username = check_input($_POST['username']);
	
	$check = mysql_query("SELECT Email1 FROM owners WHERE Email1 = $username") or die(mysql_error());
	$check2 = mysql_num_rows($check);

	//if the name does not exist it gives an error
	if ($check2 == 0) {
		die('Sorry, the email '.$_POST['username'].' is not registered as an owner.');
	}
	
	// this makes sure both passwords entered match
	if ($_POST['pass'] != $_POST['pass2']) {
		die('Your passwords did not match. ');
	}
	
	// here we encrypt the password and add slashes if needed
	$_POST['pass'] = md5($_POST['pass']);
	//$_POST['pass'] = md5($_POST['pass'] . "salt");
	$password = check_input($_POST['pass']);
	

	// now we insert it into the database
	$insert = "UPDATE owners SET password = $password WHERE owners.Email1 = $username";
	$add_member = mysql_query($insert);
	echo "

<h1>Registered</h1>
<p>Thank you, you have registered - you may now <a href='../members.php'>login</a>.</p>
";
} else {
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table border="0">
<tr><td>Email:</td><td>
<input type="text" name="username" maxlength="50">
</td></tr>
<tr><td>Password:</td><td>
<input type="password" name="pass" maxlength="50">
</td></tr>
<tr><td>Confirm Password:</td><td>
<input type="password" name="pass2" maxlength="50">
</td></tr>
<tr><th colspan=2><input type="submit" name="submit" value="Register"></th></tr> </table>
</form>

<?php
}
?>
</body>
</html>
