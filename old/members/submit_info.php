<?php
include_once("mysql_connect.php");

//check for cookie before inserting, just percaution
if(isset($_COOKIE['ID_rockcliffe'])) {
	$username = $_COOKIE['ID_rockcliffe'];
	$pass = $_COOKIE['Key_rockcliffe'];
	$check = mysql_query("SELECT * FROM owners WHERE Email1 = " . check_input($username)) or die(mysql_error());
	while($info = mysql_fetch_array($check)){
		//if cookie has wrong password, sent to login page
		if($pass != $info['password']){
			header("Location: ../members.php");
		} else{
			$id = $info['ID'];
			$hour = time() + 3600;
			setcookie('ID_rockcliffe', stripslashes($username),$hour,"../");
			setcookie('Key_rockcliffe', $pass, $hour,"../");
			
			$error = "no";
			if($_POST['fname'] == "") {$error = "fname";}
			if($_POST['lname'] == "") {$error = "lname";}
			if($_POST['email1'] == "") {$error = "email";}

			if($error != "no") {
				$_POST['error'] = $error;
				header("Location: edit_info.php?error=$error");
			}

			if($error == "no") {
				$fname = check_input($_POST['fname']);
				$lname = check_input($_POST['lname']);
				$address = check_input($_POST['address']);
				$city = check_input($_POST['city']);
				$province = check_input($_POST['province']);
				$country = check_input($_POST['country']);
				$post = check_input($_POST['post']);
				$email1 = check_input($_POST['email1']);
				$email2 = check_input($_POST['email2']);
				$tel1 = check_input($_POST['tel1']);
				$tel2 = check_input($_POST['tel2']);
				$tel3 = check_input($_POST['tel3']);
				$fax1 = check_input($_POST['fax1']);
				$fax2 = check_input($_POST['fax2']);
				$fax3 = check_input($_POST['fax3']);
				$message = check_input($_POST['message']);
				
				$sql="UPDATE owners SET 
					FirstName = $fname,
					LastName = $lname,
					Address = $address,
					City = $city,
					Province = $province,
					Country = $country,
					PostCode = $post,
					Email1 = $email1,
					Email2 = $email2,
					Tel1 = $tel1,
					Tel2 = $tel2,
					Tel3 = $tel3,
					Fax1 = $fax1,
					Fax2 = $fax2,
					Fax3 = $fax3,
					status = $message
					WHERE ID = $_POST[id];";
				
				/*echo $sql;*/
				if (!mysql_query($sql,$con))
				  {
				  die('Error: ' . mysql_error() . '<br /><a href="edit_info.php">Please try again</a> or contact <a href="mailto:matt@stikmen.ca">matt@stikmen.ca</a> for assistance.');
				  }
				header("Location: info.php?id=" . $_POST['id']);

				mysql_close($con);
			}
		}
	}
} else { //if the cookie does not exist, send to login page.
	header("Location: ../members.php");
}?>
