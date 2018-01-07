<?php
//现在没有加入登录功能, 以后需要仅此处开启session即可
//session_start();
define('BASE_ROOT', __DIR__);

require_once('connection.php');

if (isset($_GET['controller']) && isset($_GET['action'])) {
	$controller = $_GET['controller'];
	$action     = $_GET['action'];
} else {
	$controller = 'pages';
	$action     = 'home';
}

require_once('views/layout.php');
?>