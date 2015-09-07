<?php
//http://w3schools.com/php/php_mysql_insert.asp
$con = mysql_connect("localhost","root","");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("rockcliffe_owners", $con);

function readable($value) {
	// Stripslashes
	if (get_magic_quotes_gpc()) {
		$value = stripslashes($value);
	}
	return $value;
}

function check_input($value) {
	// Stripslashes
	if (get_magic_quotes_gpc()) {
		$value = stripslashes($value);
	}
	// Quote if not a number
	if (!is_numeric($value)) {
		$value = "'" . mysql_real_escape_string($value) . "'";
	}
	return $value;
}


function is_an_integer($value) {
	if($value % 2 == 0 || ($value + 1) % 2 == 0) {
		return true;
	} else {
		return false;
	}
}
?>
