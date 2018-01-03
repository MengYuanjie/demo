<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 01/01/2018
 * Time: 22:05
 */

include_once 'config.php';

$message="this is home page";
session_start();
?>
<html>
<body>
<h1><?php print $message?></h1>
<h4><a href='./user/userlist.php'>user admin list</a></h4><br>


<h4>
  <?php
  if(isset($_SESSION['info'])) {
    $arr=$_SESSION['info'];
    if (!empty($arr['user'])) {
      print "hello " . $arr['user'];
      echo "<h4><a href='post/addpost.php'>add new post</a></h4><br>";
      echo "<h4><a href='user/logout.php'>Log out</a></h4><br>";
    }
  }else{
    echo "<h4><a href='./user/register.html'>register</a></h4><br>";
    echo "<h4><a href='./user/login.html'>log in</a></h4><br>";
  }
  ?>
</h4>
<div>

<?php include './post/postlist.php'?>
</div>
</body>
</html>
