<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>Owner Info - Rockcliffe By-the-Sea - Ocean front properties for sale on Nova Scotia's Fundy Shore</title>
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
		<?php if($id == $profile) {
			echo("<div id='curlink'>My Info</div>");
		} else {
			echo("<a href='info.php?id=" . $id . "'>My Info</a>");
		}
		?>
		<a href="../logout.php">Logout</a>
	</div>
	<div id="main">
		<div id="content">
			<?php $sql = mysql_query("SELECT * FROM `owners` WHERE ID = " . $profile);
				while($view = mysql_fetch_array($sql)) {
					$sql2 = mysql_query("SELECT * FROM `lots` WHERE owner = " . $view['ID']) or die(mysql_error());
			?>
			<table style="width:100%;"><tr>
				<td>
					<h1><?php echo readable($view['FirstName']); ?> <span class="splash"><?php echo readable($view['LastName']); ?></span></h1>
					<h2>Lot <?php while($lotList = mysql_fetch_array($sql2)) {
						if(strpos($lotList['number'],".") == false) {
							echo($lotList['number'] . " ");
						} else {
							echo($lotList['number'] - .1 . "A ");
						}}?></h2>
				</td>
				<td></td>
				<td style="text-align:right;">
					<?php if($id == $profile) {echo("
						<form action='edit_info.php' method='post'>
						<input type='submit' value='Edit my info' />
						<!--<a href='edit_info.php'>Edit my info</a>-->
						</form>
					");} ?>
				</td>
			</tr><tr>
				<td>
					<a href="mailto:<?php echo readable($view['Email1']); ?>"><?php echo readable($view['Email1']); ?></a><br />
					<a href="mailto:<?php echo readable($view['Email2']); ?>"><?php echo readable($view['Email2']); ?></a>
				</td>
				<td>
					<?php if($view['Address']!=NULL){echo(readable($view['Address']) . ", ");} echo readable($view['City']); ?><br />
					<?php if($view['Province']!=NULL){echo(readable($view['Province']) . ", ");} echo readable($view['Country']); ?><br />
					<?php echo readable($view['PostCode']); ?>
				</td>
				<td><?php 
					if($view['Tel1']!=NULL && $view['Tel2']!=NULL && $view['Tel3']!=NULL) {
						echo("Tel: (" . readable($view['Tel1']) . ") " . readable($view['Tel2']) . "-" . readable($view['Tel3']));
					}
					echo("<br />");
					if($view['Fax1']!=NULL && $view['Fax2']!=NULL && $view['Fax3']!=NULL) {
						echo("Fax: (" . readable($view['Fax1']) . ") " . readable($view['Fax2']) . "-" . readable($view['Fax3']));
					}?>
				</td>
			</tr><tr>
				<td colspan="3">
					<br /><?php echo readable($view['status']); ?>
				</td>
			</tr></table>
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
