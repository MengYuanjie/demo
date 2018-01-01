<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 01/01/2018
 * Time: 22:05
 */
$message="this is home page";
?>
<html>
<body>
<h1><?php print $message?></h1>
<h4><a href='userlist.php'>user admin list</a></h4><br>
<h4><a href='register.html'>register</a></h4><br>
<h4><a href='login.html'>log in</a></h4><br>
<h4><?php session_start();
  if(!empty($_SESSION['user'])) {
    print "hello ".$_SESSION['user'];
    echo "<h4><a href='post/addpost.php'>add new post</a></h4><br>";
    echo "<h4><a href='logout.php'>Log out</a></h4><br>";
  }
  ?></h4>

</body>
</html>
