<?php 
//this makes the time in the past to destroy the cookie
setcookie("ID_rockcliffe", "", time()-3600, "./");
setcookie("Key_rockcliffe", "", time()-3600, "./");
	header("Location: members.php");

?>
