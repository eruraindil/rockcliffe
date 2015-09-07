// JavaScript Document
function newWin(url, name, w, h) {
	l = (screen.availWidth-10 - w) / 2;
	t = (screen.availHeight-20 - h) / 2;
	features = "width="+w+",height="+h+",left="+l+",top="+t;
	features += ",screenX="+l+",screenY="+t;
	features += ",scrollbars=0,resizable=1,location=0";
	features += ",menubar=0,toolbar=0,status=0";
	
	window.open(url, name, features);
}