<?php
define('IN_BLOG', true);
define('PATH', '');
include('includes/miniblog.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>miniblog</title>
<style type="text/css">
<!--
*, html {
	margin:0;
	padding:0;
}
body {
	font-family:'Lucida Sans Unicode','Lucida Grande',verdana,sans-serif;
	font-size:0.9em;
	color:#333333;
	margin:0 auto;
	padding:0;
	background-color:#dddddd;
}
a {
	color:#006699;
}
h2 {
	font-weight:normal;
	color:#666666;
	font-size:1.4em;
}
p {
	margin-bottom:10px;
	line-height:1.6em;
}
div.wrapper {
	width:80%;
	padding:5px;
	margin:50px auto 10px auto;
}
div.post {
	background-color:#ffffff;
	border:1px solid #cccccc;
	padding:7px;
	margin:10px 0;
}
span.date {
	color:#666666;
	font-size:0.7em;
	text-transform:uppercase;
}

div.navigation p a {
	font-size:1.2em;
}
div.navigation p.previous-link {
	width:48%;
	float:left;
	text-align:left;
}
div.navigation p.next-link {
	width:48%;
	float:right;
	text-align:right;
}
div.post-content {
	padding-top:4px;
}
div.clear { 
	clear:both;
}
div.footer p {
	padding-top:10px;
	color:#999999;
	font-size:0.9em;
	text-align:center;
}
div.footer p a {
	color:#999999;
}
-->
</style>
</head>

<div class="wrapper">
	
	<h1>miniblog</h1>
	<h2>latest product updates</h2>
	
	<?=$miniblog_posts?>
	
	<div class="navigation">
		<? if(!$single) { ?>
			<? if($miniblog_previous) {	?> <p class="previous-link"><?=$miniblog_previous?></p>	<? } ?>
			<? if($miniblog_next) {	?>	<p class="next-link"><?=$miniblog_next?></p> <? } ?>
		<? } ?>
		<? if($single) { ?>
			<p class="previous-link"><a href="<?=$config['miniblog-filename']?>">&laquo; return to posts</a></p>
		<? } ?>
		<div class="clear"></div>
	</div>
	<div class="footer">
		<!-- a link back is REQUIRED under the terms of the license. To remove the link back see http://www.spyka.net/licensing -->
		<p>Powered by <a href="http://www.spyka.net/scripts/php/miniblog">miniblog</a> created by <a href="http://www.spyka.net">spyka Webmaster</a></p>
	</div>
<body>
</body>
</html>