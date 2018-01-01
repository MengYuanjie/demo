<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 01:35
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="format.css">
  <meta charset="UTF-8">
  <title>Add a new post</title>
</head>
<body>
<h3>Add a post</h3>
<form action="action.php?action=add" method="post">
  Title: <br>
  <input type="text" name="fname" placeholder="Subject" class="subject"><br>
  Message: <br>
  <input type="text" name="fcontent" placeholder="say sth about your day" class="content-detail"><br>
  <input type="submit" value="leave your message">
</form>

</body>
</html>