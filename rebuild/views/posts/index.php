<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
	<p>
		<?php echo $post->author; ?>
		<br>
		<a href='?controller=posts&action=show&postid=<?php echo $post->id; ?>'>See content</a>
	</p>
<?php } ?>