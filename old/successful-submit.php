<?php
if (${'_'.$_SERVER['REQUEST_METHOD']}) {
    $kv = array();
    foreach (${'_'.$_SERVER['REQUEST_METHOD']} as $key => $value) {
        $kv[] = "$key= $value";
    }
}

$message = "";
foreach($kv as $temp) {
	$message .= $temp . "
";
}

$to = "jroberts@rockcliffebythesea.com";
$subject = "Rockcliffe By-the-Sea  |  Web Site Information Request";
$from = "blue@stikmen.ca";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="PICS-Label" content='(PICS-1.1 &quot;http://www.classify.org/safesurf/&quot; L gen true for &quot;http://www.rockcliffebythesea.com&quot; r (SS~~000 1))' />
	<meta name="Keywords" content="properties for sale in Nova Scotia, land for sale Nova Scotia, Bay of Fundy oceanfront properties, oceanfront property Nova Scotia, real estate for sale, waterfront land for sale, retirement property nova scotia, ocean front properties for sale, Parrsboro land for sale, properties for sale Canada, land for sale on the Fundy Shore, properties for sale Glooscap Trail, oceanfront Parrsboro, lots for sale Nova Scotia, retirement property Parrsboro, vacation property Nova Scotia, oceanfront on the Fundy Shore, land development Parrsboro, ocean view properties for sale, river lots for sale, Bay of Fundy real estate, lots and acreages for sale, seaside retreats for sale, private lots for sale, ocean view lots for sale, beach front properties for sale, real estate by the sea, land near the fundy tides, land with ocean views, property on the Minas Basin, gated communities Nova Scotia, Private communities on the Fundy Shore, secure communities Nova Scotia, oceanfront property NS, retirement properties for sale" />
	<meta name="Description" content="Rockcliffe By-the-Sea offer's ocean front properties for sale in Nova Scotia. Wooded 2-3 acre lots are for sale and offer both privacy and a spectacular ocean views." />
	<title>Contact - Rockcliffe By-the-Sea - Ocean front properties for sale on Nova Scotia's Fundy Shore</title>
	<!-- CSS Links -->
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="print.css" type="text/css" media="print" />
	<style type="text/css">
	#contact-info td {
		padding:5px 10px 5px 0;
	}
	input, textarea {
		border:1px solid #CCC;
		padding:2px;
	}
	table#form td {
		padding:2px;
	}
	table#form {
		width:500px;
		padding:2px;
		font-size:0.8em;
	}
	</style>
	<script type="text/javascript" src="script.js"></script>
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
		<img id="head" src="graphics/photo_contact.jpg" alt="Oceanfront View"/>
		<div id="social-sites">
			<a href="https://www.facebook.com/pages/Rockcliffe-By-the-Sea/162684043765228"><img src="graphics/facebook.png" style="width:50px;height:50px;" alt="Facebook" /></a>
			<a href="http://www.twitter.com/rockcliffebtsea"><img src="graphics/twitter.png" style="width:50px;height:50px;" alt="Twitter" /></a>
			<a href="http://rockcliffebythesea.blogspot.com/"><img src="graphics/blogger.png" style="width:50px;height:50px;" alt="Blogger" /></a>
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
		<div id="curlink">Contact</div>
		<a href="members.php">Login</a>
	</div>
	<div id="main">
		<div id="sidebar">
			<div id="dl">
				<a href="http://pdf-ace.com/pdfme/" target="_blank"><img src="graphics/pdficon_small.gif" style="width:17px;height:17px;" alt="Download as PDF" /> Download as PDF</a>
			</div>
			<img src="graphics/comment_contact.gif" />
		</div>
		<div id="content">
			<h1>Get <span class="splash">more</span> property information
			<div id="social">
				<div id="fb-root"></div>
				<div id="social1">
					<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.rockcliffebythesea.com/contact.html" data-text="Check out Rockcliffe By-the-Sea" data-count="none" data-via="rockcliffebtsea" data-related="bayoffundy:More information on the beautiful Bay of Fundy, location of Rockcliffe">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> &nbsp;
					<g:plusone size="medium" count="false"></g:plusone> &nbsp;
					<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script><script type="IN/Share"></script> &nbsp;
				</div>
				<div id="social2">
					<script src="http://connect.facebook.net/en_US/all.js#appId=203019119743452&amp;xfbml=1"></script><fb:like href="" send="false" layout="button_count" width="90" show_faces="false" font="arial"></fb:like>
				</div>
			</div>
			</h1>
			<p style="font-size:1.2em; color:#006633; text-align:center; font-weight:bold;">Your Contact Information has been<br />successfully submitted.<br />
				<br />Your request will be handled promptly!<br />
				<br />Thank you for your interest in Rockcliffe By-the-Sea.</p>
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
			&copy;2011 Rockcliffe By-the-Sea&nbsp; All Rights Reserved. <a href="privacy.html">Privacy Policy</a><br />
			<a href="http://www.stikmen.ca">Maintained by Stikmen Graphic Design</a>
		</div>
	</div>
</div>
<!-- Place this tag just before your close body tag -->
<script>
(function(d, t) {
var g = d.createElement(t),
s = d.getElementsByTagName(t)[0];
g.async = true;
g.src = 'https://apis.google.com/js/plusone.js';
s.parentNode.insertBefore(g, s);
})(document, 'script');
</script>
</body>
</html>
