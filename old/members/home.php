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
		a:visited {
			color:#306;
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
		<div id="curlink">Owners List</div>
		<a href="info.php?id=<?php echo $id; ?>">My Info</a>
		<a href="../logout.php">Logout</a>
	</div>
	<div id="main">
		<div id="content">
			<h1>Your <span class="splash">dreams</span> are waiting at Rockcliffe By-the-Sea</h1>
			<?php $sql = mysql_query("SELECT * FROM owners WHERE ID = 1") or die(mysql_error());
			while($admin = mysql_fetch_array($sql)) {
				echo("<p>". $admin['status'] ."</p>");
			}?>
			<form action="" method="get">
			Sort by 
			<select name="sort">
				<?php if($sort == "lot") {
					echo("<option value='name'>Name</option>
					<option value='lot' selected='selected'>Lot</option>");
				} else {
					echo("<option value='name' selected='selected'>Name</option>
					<option value='lot'>Lot</option>");
				}
				?>
				<!--<option>Country</option>-->
			</select>
			<input type="submit" value="Go" />
			</form>
			<table>
				<tr>
					<th>Lot</th>
					<th>Name</th>
					<th>Contact</th>
					<th>Address</th>
				</tr>
			<?php 
			if($sort == "country") {
				$sql = mysql_query("SELECT * FROM owners ORDER BY Country, Province, City, LastName, FirstName ASC ") or die(mysql_error());
			} else if($sort == "lot") {
				$sql = mysql_query("SELECT * FROM owners, lots WHERE owners.ID = lots.owner ORDER BY lots.number ") or die(mysql_error());
			} else {
				$sql = mysql_query("SELECT * FROM owners ORDER BY LastName, FirstName ASC ") or die(mysql_error());
			}

			while($userList = mysql_fetch_array($sql)) {
				$sql2 = mysql_query("SELECT * FROM lots WHERE owner = " . $userList['ID']) or die(mysql_error());
				echo("<tr><td rowspan='2' style='background:#306;color:#FFF;text-align:center;'>");
				while($lotList = mysql_fetch_array($sql2)) {
					if(strpos($lotList['number'],".") == false) {
						echo($lotList['number'] . " ");
					} else {
						//$lotTemp = ($lotList['number'],".");
						//echo($lotTemp[1]);
						echo($lotList['number'] - .1 . "A ");
					}
				}
				echo("</td>
					<td>
						<a href='info.php?id=" . $userList['ID'] . "'>
							" . $userList['LastName'] . ", " . $userList['FirstName'] . "
						</a>
					</td>
					<td style='font-size:small;'>
						<a href='mailto:" . $userList['Email1'] . "'>" . $userList['Email1'] . "</a><br />
						<a href='mailto:" . $userList['Email2'] . "'>" . $userList['Email2'] . "</a>
					</td>
					<td style='font-size:small;'>");
					if($userList['Address']!=NULL) {
						echo($userList['Address'] . ", ");
					}
					echo($userList['City'] . "<br />");
					if($userList['Province']!=NULL) {
						echo($userList['Province'] . ", ");
					}
					echo($userList['Country'] . "</td>
				</tr><tr>
					<td colspan='3' style='font-size:small;font-style:italic;'>
						" . $userList['status'] . "
					</td>
				</tr><tr>
					<td colspan='4' style='border-bottom:#000 solid 1px;'></td>
				</tr>");
			}?>
			</table>
			<div class="attention"><a href="privacy.html">Owners&apos; Area Privacy Policy</a></div> 
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
