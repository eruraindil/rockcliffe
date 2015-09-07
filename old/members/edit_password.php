<?php
include_once("mysql_connect.php");

//check cookies to ensure login
if(isset($_COOKIE['ID_rockcliffe'])) {
	$username = $_COOKIE['ID_rockcliffe'];
	$pass = $_COOKIE['Key_rockcliffe'];
	$check = mysql_query("SELECT * FROM owners WHERE Email1 = " . check_input($username)) or die(mysql_error());
	while($info = mysql_fetch_array($check)){
		//if cookie has wrong password, sent to login page
		if($pass != $info['password']){
			header("Location: ../members.php");
		} else {
			$id = $info['ID'];
			$hour = time() + 3600;
			setcookie('ID_rockcliffe', $username, $hour,"../");
			setcookie('Key_rockcliffe', $pass, $hour,"../");
			
			$error = "no";
			if(isset($_POST['submit'])) {
				$oldpass = $_POST['oldpass'];
				$newpass1 = $_POST['newpass1'];
				$newpass2 = $_POST['newpass2'];
				
				if(md5($oldpass) == $info['password']) {
					if($newpass1 == $newpass2) {
						$newpass = check_input(md5($newpass1));
						mysql_query("UPDATE owners SET password = $newpass WHERE ID = $id") or die('Error: ' . mysql_error() . '<br /><a href="edit_info.php">Please try again</a> or contact <a href="mailto:matt@stikmen.ca">matt@stikmen.ca</a> for assistance.');
						
						header("Location: ../logout.php");
					} else {
						$error = "nomatch";
					}
				} else {
					$error = "oldpass";
				}
			}
			
			if($error != "no") {
				$_POST['error'] = $error;
				header("Location: edit_password.php?error=$error");
			} else {
			?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>Owners' Area - Rockcliffe By-the-Sea - Ocean front properties for sale on Nova Scotia's Fundy Shore</title>
	<!-- CSS Links -->
	<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
	<style type="text/css">
		#main #content {
			width:800px!important;
			margin:0 25px 25px 25px;
		}
		select {
			border:1px solid #CCC;
		}
		td {
			vertical-align:top;
		}
		th {
			background:#063;
			color:#FFF;
			padding:0 5px;
		}
		form {
			margin-left: 161px;
		}
		fieldset {
			border:1px solid #063;
			padding:5px;
			margin:5px;
			width:300px;
		}
	</style>
	<script type="text/javascript" language="javascript" src="../script.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17598303-1']);
  _gaq.push(['_trackPageview']);

  (function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div id="wrapper">
	<div id="header">
		<img id="head" src="../graphics/photo_members.jpg" alt="Oceanfront View"/>
		<div id="social-sites">
			<a href="https://www.facebook.com/pages/Rockcliffe-By-the-Sea/162684043765228"><img src="../graphics/facebook.png"/></a>
			<a href="http://www.twitter.com/rockcliffebtsea"><img src="../graphics/twitter.png"/></a>
			<a href="http://rockcliffebythesea.blogspot.com/"><img src="../graphics/blogger.png"/></a>
		</div>
	</div>
	<div id="menu">
		<a href="index.php">Owners List</a>
		<a href="info.php?id=<?php echo $id; ?>">My Info</a>
		<a href="../logout.php">Logout</a>
	</div>
	<div id="main">
		<div id="content">
			<?php $sql = mysql_query("SELECT * FROM `owners` WHERE ID = " . check_input($id));
				while($view = mysql_fetch_array($sql)) {
					$sql2 = mysql_query("SELECT * FROM `lots` WHERE owner = " . $view['ID']) or die(mysql_error());
			?>
			<h1>Edit <span class="splash">my</span> password</h1>
			<?php if(isset($_GET['error'])) {
				echo "<p style='color:#C00;'>Errors detected: ";
				if($_GET['error'] == "oldpass") {
					echo "Please enter correct old password.";
				} else if($_GET['error'] == "nomatch") {
					echo "New passwords do not match.";
				}
				echo "</p>";
			} ?>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<fieldset <?php if(isset($_GET['error']) && $_GET['error'] == "oldpass") { echo "style='border:1px solid #C00;'";}?>>
					<legend>Old Password:</legend>
					<input type="password" name="oldpass" />
				</fieldset>
				<fieldset <?php if(isset($_GET['error']) && $_GET['error'] == "nomatch") { echo "style='border:1px solid #C00;'";}?>>
					<legend>New Password:</legend>
					<input type="password" name="newpass1" />
				</fieldset>
				<fieldset <?php if(isset($_GET['error']) && $_GET['error'] == "nomatch") { echo "style='border:1px solid #C00;'";}?>>
					<legend>Retype Password:</legend>
					<input type="password" name="newpass2" />
				</fieldset>
				<input type="hidden" name="id" value="<?php echo $view['ID'] ?>" />
				<input type="submit" name="submit" value="Submit" />
				<input type="button" value="Cancel" onclick="window.open('edit_info.php?id=<?php echo $view['ID'] ?>','_parent')" />
			</form>
			<?php } ?>
		</div>
		<div class="spacer"></div>
	</div>
	<div id="footer">
		<a href="../logout.php">Logout</a>
	</div>
	<div id="tail">
		<table>
			<tr>
				<td style="text-align:left;">Email: <a href="mailto:jroberts@rockcliffebythesea.com">jroberts@rockcliffebythesea.com</a></td>
				<td style="text-align:center;">118 Rockcliffe Dr. RR#2, Parrsboro<br />Nova Scotia B0M 1S0<br />Canada</td>
				<td style="text-align:right;">1-800-66-TIDES<br />Tel: (902)254-3134<br />Fax: (902)254-3818</td>
			</tr>
		</table>
		<div id="copyright">
			&copy;2011 Rockcliffe By-the-Sea&nbsp; All Rights Reserved. <a href="privacy.html">Privacy Policy</a><br />
			<a href="http://www.stikmen.ca">Maintained by Stikmen Graphic Design</a>
		</div>
	</div>
</div>
</body>
</html>
			<?php }
		}
	}
} else { //if the cookie does not exist, send to login page.
	header("Location: ../members.php");
}
