<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>Edit Owner Info - Rockcliffe By-the-Sea - Ocean front properties for sale on Nova Scotia's Fundy Shore</title>
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
			text-align:center;
		}
		th {
			background:#063;
			color:#FFF;
			padding:0 5px;
		}
		fieldset {
			border:1px solid #063;
			padding:5px;
			margin:5px;
			text-align:left;
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
		<a href='info.php?id=<?php echo $id ?>'>My Info</a>
		<a href="../logout.php">Logout</a>
	</div>
	<div id="main">
		<div id="content">
			<?php $sql = mysql_query("SELECT * FROM `owners` WHERE ID = " . check_input($id));
				while($view = mysql_fetch_array($sql)) {
					$sql2 = mysql_query("SELECT * FROM `lots` WHERE owner = " . $view['ID']) or die(mysql_error());
			?>
			<form action="submit_info.php" method="post">
				<h1>Edit <span class="splash">my</span> information</h1>
				<?php if(isset($_GET['error'])) {echo "<p style='color:#C00;'>Please note required fields in red</p>";} ?>
			<table style="width:100%;"><tr>
				<td>
					<?php ?>
					<fieldset <?php if(isset($_GET['error'])) { echo "style='border:1px solid #C00;'";} ?>>
						<legend>First Names:*</legend>
						<input type="text" name="fname" value="<?php echo readable($view['FirstName']); ?>" />
					</fieldset>
					<fieldset <?php if(isset($_GET['error'])) { echo "style='border:1px solid #C00;'";} ?>>
						<legend>Last Name:*</legend>
						<input type="text" name="lname" value="<?php echo readable($view['LastName']); ?>" />
					</fieldset>
				</td>
				<td>
					<fieldset <?php if(isset($_GET['error'])) { echo "style='border:1px solid #C00;'";} ?>>
						<legend>Email1:*</legend>
						<input type="text" name="email1" value="<?php echo readable($view['Email1']); ?>" /> (login)
					</fieldset>
					<fieldset>
						<legend>Email2:</legend>
						<input type="text" name="email2" value="<?php echo readable($view['Email2']); ?>" />
					</fieldset>
				</td>
				<td>
					<fieldset>
						<legend>Telephone:</legend>
						(<input type="text" name="tel1" value="<?php echo readable($view['Tel1']); ?>" size="4" />)
						<input type="text" name="tel2" value="<?php echo readable($view['Tel2']); ?>" size="3" />
						- <input type="text" name="tel3" value="<?php echo readable($view['Tel3']); ?>" size="4" />
					</fieldset>
					<fieldset>
						<legend>Fax:</legend>
						(<input type="text" name="fax1" value="<?php echo readable($view['Fax1']); ?>" size="4" />)
						<input type="text" name="fax2" value="<?php echo readable($view['Fax2']); ?>" size="3" />
						- <input type="text" name="fax3" value="<?php echo readable($view['Fax3']); ?>" size="4" />
					</fieldset>
				</td>
			</tr><tr>
				<td>
					<fieldset>
						<legend>Address:</legend>
						<input type="text" name="address" value="<?php echo readable($view['Address']); ?>" />
					</fieldset>
					<fieldset>
						<legend>Province:</legend>
						<input type="text" name="province" value="<?php echo readable($view['Province']); ?>" />
					</fieldset>
				</td>
				<td>
					<fieldset>
						<legend>City:</legend>
						<input type="text" name="city" value="<?php echo readable($view['City']); ?>" />
					</fieldset>
					<fieldset>
						<legend>Country:</legend>
						<input type="text" name="country" value="<?php echo readable($view['Country']); ?>" />
					</fieldset>
				</td>
				<td>
					<fieldset>
						<legend>Postal/Zip Code:</legend>
						<input type="text" name="post" value="<?php echo readable($view['PostCode']); ?>" />
					</fieldset>
					<input type='button' value='Change Password' onclick="window.open('edit_password.php','_self')" style="margin-top:25px;" />
				</td>
			</tr><tr>
				<td colspan="3">
					<br />
					<fieldset>
						<legend>Message:</legend>
						<textarea name="message" style="width:90%;" rows="4"><?php echo readable($view['status']); ?></textarea>
					</fieldset>
				</td>
			</tr><tr>
				<td colspan="3" style="text-align:right;">
					<input type="hidden" name="id" value="<?php echo $view['ID'] ?>" />
					<input type="submit" value="Submit" />
					<input type="button" value="Cancel" onclick="window.open('info.php?id=<?php echo $view['ID'] ?>','_parent')" />
				</td>
			</tr></table>
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
			&copy;2010 Rockcliffe By-the-Sea&nbsp; All Rights Reserved. <a href="privacy.html">Privacy Policy</a><br />
			<a href="http://www.stikmen.ca">Maintained by Stikmen Graphic Design</a>
		</div>
	</div>
</div>
</body>
</html>
