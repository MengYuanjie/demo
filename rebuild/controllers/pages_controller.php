<?php
class PagesController {
	public function home() {
		$first_name = 'Jon';
		$last_name  = 'Snow';
		require_once(BASE_ROOT . '/views/pages/home.php');
	}

	public function error() {
		require_once(BASE_ROOT . '/views/pages/error.php');
	}
}
?>