<?php
error_reporting(0); //Default 0. Enable reporting with 1

	$script_dir = '/'; // Where the app is located in the server. Default / as root.
	$upload_dir = '/files/'; // Where the multimedia content will be uploeaded from the manager. Set full path to current folder relative to root, Permissions should be set to 777.
	$notify_email = 'your@email.com' ; // Your email for notifications.
	$db_host = 'localhost'; //hostname. Localhost by default
    $db_user = 'your_username'; // username
    $db_password = 'your_password'; // password
    $db_name = 'your_db_name'; //database name
		
	$link = mysql_connect($db_host, $db_user, $db_password) or die();
	@mysql_select_db($db_name);
	 mysql_query("SET NAMES utf8") or die("err: " . mysql_error());

