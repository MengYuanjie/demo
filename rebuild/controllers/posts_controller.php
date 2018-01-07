<?php
class PostsController {
	public function index() {
		$posts = Post::all();
		require_once(BASE_ROOT . '/views/posts/index.php');
	}

	public function show() {
		// ?controller=posts&action=show&id=x
		if (!isset($_GET['postid']))
			return call(BASE_ROOT . '/pages', 'error');

		// we use the given id to get the right post
		$post = Post::find($_GET['postid']);
		require_once(BASE_ROOT . '/views/posts/show.php');
	}
}
?>