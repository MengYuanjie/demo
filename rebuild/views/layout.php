<DOCTYPE html>
	<html>
		<head>
			<?php require_once('header.php'); ?>
		</head>
		<body>
			<div class="nav-bar">
				<a href='index.php'>Home</a>
				<a href='?controller=posts&action=index'>Posts</a>
			</div>

				<!-- Main Content -->
				<?php require_once('routes.php'); ?>

				<!-- Footer -->
				<?php require_once('footer.php'); ?>
		<body>
	<html>