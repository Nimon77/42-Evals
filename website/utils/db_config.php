<?php
if (!defined($_SERVER['REMOTE_SECURE_KEY']))
	exit('No direct access allowed');
define('DB_SERVER', $_SERVER['REDIRECT_DB_SERVER']);
define('DB_USERNAME', $_SERVER['REDIRECT_DB_LOGIN_USERNAME']);
define('DB_PASSWORD', $_SERVER['REDIRECT_DB_LOGIN_PASSWORD']);
define('DB_NAME', $_SERVER['REDIRECT_DB_LOGIN_NAME']);
?>
