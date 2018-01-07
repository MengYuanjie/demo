<?php
class Post {
	public $id;
	public $author;
	public $content;

	public function __construct($id, $author, $content) {
		$this->id      = $id;
		$this->author  = $author;
		$this->content = $content;
	}

	public static function all() {
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM postset');

		foreach($req->fetchAll() as $post) {
			$list[] = new Post($post['postid'], $post['user'], $post['content']);
		}

		return $list;
	}

	public static function find($id) {
		$db = Db::getInstance();

		$req = $db->prepare('SELECT * FROM postset WHERE postid = :id');

		$req->execute(array('id' => $id));
		$post = $req->fetch();

		return new Post($post['postid'], $post['user'], $post['content']);
	}
}
?>