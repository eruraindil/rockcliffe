<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="PICS-Label" content='(PICS-1.1 "http://www.classify.org/safesurf/" L gen true for "http://www.rockcliffebythesea.com" r (SS~~000 1))' />
	<meta name="keywords" content="properties for sale in Nova Scotia, land for sale Nova Scotia, Bay of Fundy oceanfront properties, oceanfront property Nova Scotia, real estate for sale, waterfront land for sale, retirement property nova scotia, ocean front properties for sale, Parrsboro land for sale, properties for sale Canada, land for sale on the Fundy Shore, properties for sale Glooscap Trail, oceanfront Parrsboro, lots for sale Nova Scotia, retirement property Parrsboro, vacation property Nova Scotia, oceanfront on the Fundy Shore, land development Parrsboro, ocean view properties for sale, river lots for sale, Bay of Fundy real estate, lots and acreages for sale, seaside retreats for sale, private lots for sale, ocean view lots for sale, beach front properties for sale, real estate by the sea, land near the fundy tides, land with ocean views, property on the Minas Basin, gated communities Nova Scotia, Private communities on the Fundy Shore, secure communities Nova Scotia, oceanfront property NS, retirement properties for sale" />
	<meta name="description" content="Rockcliffe By-the-Sea offer's ocean front properties for sale in Nova Scotia. Wooded 2-3 acre lots are for sale and offer both privacy and a spectacular ocean views." />
	<title>Members Login - Rockcliffe By-the-Sea - Ocean front properties for sale on Nova Scotia's Fundy Shore</title>
	<!-- CSS Links -->
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<script type="text/javascript" language="javascript" src="script.js"></script>
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
		<img id="head" src="graphics/photo_members.jpg" alt="Oceanfront View"/>
		<div id="social-sites">
			<a href="https://www.facebook.com/pages/Rockcliffe-By-the-Sea/162684043765228"><img src="graphics/facebook.png"/></a>
			<a href="http://www.twitter.com/rockcliffebtsea"><img src="graphics/twitter.png"/></a>
			<a href="http://rockcliffebythesea.blogspot.com/"><img src="graphics/blogger.png"/></a>
		</div>
	</div>
	<div id="menu">
		<a href="index.html">Home</a>
		<a href="prices.html">Property Prices</a>
		<a href="info.html">Property Info</a>
		<a href="photos.html">Photos &amp; Webcam</a>
		<a href="attractions.html">Attractions</a>
		<a href="how.html">How to get here</a>
		<a href="other.html">Other Properties</a>
		<a href="contact.html">Contact</a>
		<div id="curlink">Login</div>
	</div>
	<div id="main">
		<div id="sidebar">
			<!--<img src="graphics/comment_home.gif" />-->
		</div>
		<div id="content">
			<h1>Login to the property <span class="splash">owners'</span> area</h1>
			<?php if(isset($_POST['error'])) {
				echo("<div class='attention' style='color:#C00'><span>");
				if($_POST['error'] == "user") {
					echo("Email address does not exist in owners database,<br />if you having trouble logging in, please contact <a href='mailto:matt@stikmen.ca'>matt@stikmen.ca</a>.");
				} else if($_POST['error'] == "pass") {
					echo("Password does not match, if you having trouble logging in,<br />please contact <a href='mailto:matt@stikmen.ca'>matt@stikmen.ca</a>.");
				} else {
					echo("Please complete the both fields. If you having trouble logging in,<br /> please contact <a href='mailto:matt@stikmen.ca'>matt@stikmen.ca</a>.");
				}
				echo("</span></div>");
			}?>
			<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<table><tr>
				<td>Email: </td>
				<td><input type="text" name="username" size="30" maxlength="50" /></td>
			</tr><tr>
				<td>Password: </td>
				<td><input type="password" name="pass" size="30" maxlength="50" /></td>
			</tr><tr>
				<td>&nbsp;</td>
				<td colspan="2" style="text-align:right;padding-bottom:20px"><span id="results"></span><input type="submit" name="submit" value="Login" /></td>
			</tr></table>
			</form>
			</div>
		<div class="spacer"></div>
	</div>
	<div id="footer">
		<a href="index.html">Home</a> &nbsp;&nbsp;<a href="prices.html">Property 
        Prices</a> &nbsp;&nbsp;<a href="info.html">Property Info</a> &nbsp;&nbsp;<a href="photos.html">Photos &amp; Webcam</a> &nbsp;&nbsp;<a href="attractions.html">Attractions</a> 
        &nbsp;&nbsp;<a href="how.html">How to get here</a> &nbsp;&nbsp;<a href="other.html">Other 
        Properties</a> &nbsp;&nbsp;<a href="contact.html">Contact</a> &nbsp;&nbsp;<a href="members.php">Login</a>
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
