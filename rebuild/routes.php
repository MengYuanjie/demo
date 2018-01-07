<?php
function call($controller, $action) {
	require_once(BASE_ROOT . '/controllers/' . $controller . '_controller.php');

	switch($controller) {
		case 'pages':
			$controller = new PagesController();
			break;
		case 'posts':
			require_once(BASE_ROOT . '/models/post.php');
			$controller = new PostsController();
			break;
	}

	$controller->{ $action }();
}

//页面在此处添加, 并创建相应controller, view以及model层
$controllers = array('pages' => ['home', 'error'],
										 'posts' => ['index', 'show']);

if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	} else {
		call('pages', 'error');
	}
} else {
	call('pages', 'error');
}
?>