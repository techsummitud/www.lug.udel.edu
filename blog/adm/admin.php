<?php
/*
	SimplePoll version 1.0.0
	(c) 2009 spyka Web Group
*/
ob_start();
session_start();

define('VERSION', '1.0.0');

define('PATH', '../');
define('IN_BLOG', true);
define('IN_ADMIN', true);

include(PATH . 'includes/config.php');
include(PATH . 'includes/functions.php');

$link = mb_connect($sqlconfig);
unset($sqlconfig);

if(!$link)
{
	die("Could not connect to MySQL database, check the settings in config.php");
}

$config = mb_config();

define('PASSWORD', $config['password']);

$mode = mysql_real_escape_string($_GET['mode']);

if(isset($_SESSION['miniblog_Admin']))
{
	if($_SESSION['miniblog_AdminPass'] == PASSWORD)
	{
		define('miniblog_ID', md5(time()));
	}
}
if(!defined('miniblog_ID') && $mode != 'login')
{
	header('Location: admin.php?mode=login');
}

$header = ($mode == 'login') ? 'simple-header.php' : 'header.php';
include($header);
include('index.php');	
include('footer.php');
ob_end_flush();
?>