<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 06:04
 */

session_start();
include_once '../func.php';

if(!empty($_GET['postid'])) {
  //连接mysql数据库
  $con = connect();

  $postid = $_GET['postid'];
  $sql = "SELECT * FROM postset WHERE postid='{$postid}'";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    $result_arr = $result->fetch_assoc();
    $_SESSION['postid']=$postid;
  }
  else {
    echo " there is no message";
  }
}
?>

<html>
<head>
  <title>Post</title>
  <link href="../css/style-post.css" rel='stylesheet' type='text/css' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>
<body>
<h1>Post Form</h1>
<div class="login-01">
  <form action="action.php?action=update" method="post">
    <ul>
      <li class="first">
        <a href="#" class=" icon msg"></a><input type="text" name="fname" placeholder="Subject" class="subject" value="<?php echo $result_arr['title']?>"><br>

        <div class="clear"></div>
      </li>

      <li class="second">
        <a href="#" class=" icon msg"></a><textarea value="Content" name="fcontent" ><?php echo $result_arr['content']?></textarea>
        <div class="clear"></div>
      </li>
    </ul>
    <input type="submit"  value="Modify" >
    <div class="clear"></div>
  </>
</div>

</div>
</body>
</html>


<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--  <link rel="stylesheet" href="format.css">-->
<!--  <meta charset="UTF-8">-->
<!--  <title>修改用户数据</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<form action="action.php?action=update" method="post">-->
<!--  Title: <br>-->
<!--  <input type="text" name="fname" placeholder="Subject" class="subject" value="--><?php //echo $result_arr['title']?><!--"><br>-->
<!--  Message: <br>-->
<!--  <textarea type="text" name="fcontent" placeholder="say sth about your day" class="content-detail" >--><?php //echo $result_arr['content']?><!--</textarea><br>-->
<!--  <input type="submit" value="change the content">-->
<!--</form>-->
<!--</body>-->
<!--</html>-->
