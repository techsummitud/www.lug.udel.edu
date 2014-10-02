<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>miniblog admin</title>
<link rel="stylesheet" href="images/styles.css" type="text/css" />
<script type="text/javascript" src="images/dialog.js"></script>
</head>
<body>
<div class="navigation">
	<ul>
		<li><a href="admin.php?mode=list">Posts</a></li>
		<li><a href="admin.php?mode=add">New post</a></li>
		<li><a href="admin.php?mode=options">Options</a></li>
		<li><a href="admin.php?mode=password">Change password</a></li>
		<li><a href="admin.php?mode=logout" onclick="return confirm_dialog('admin.php?mode=logout', 'Are you sure you want to logout?');">Logout</a></li>
	</ul>
	<br class="clear" />
</div>