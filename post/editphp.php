<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 06:04
 */

  session_start();
  include_once '../func.php';

  /**
   * connect to db and get data using postid
   */
  if(!empty($_GET['postid']))
  {
    $con = connectDB();

    $postid = $_GET['postid'];
    $sql = "SELECT * FROM postset WHERE postid='{$postid}'";

    $result_arr = fetchOne($con, $sql);

    if (count($result_arr))
    {
      storeSession('info', 'postid', $postid);
    }
    else
    {
      echo " there is no message";
    }
  }
?>

<html>
<head>
  <title>Modify</title>
  <link href = "../css/style-post.css" rel = 'stylesheet' type = 'text/css' />
  <meta name = "viewport" content = "width=device-width, initial-scale=1">
  <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />

  <script type = "application/x-javascript">
    addEventListener("load", function()
    {
      setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1);
    }
  </script>

</head>
<body>
<h1>Modify the blog</h1>
<div class = "login-01">
  <form action = "action.php?action=update" method = "post">
    <ul>
      <li class = "first">
        <a href = "#" class = " icon msg"></a>
          <input type = "text" name = "fname" placeholder = "Subject" class = "subject" value = "<?php echo $result_arr['title']?>">
        <br>
        <div class = "clear"></div>
      </li>

      <li class = "second">
        <a href = "#" class =" icon msg"></a><textarea value = "Content" name = "fcontent" ><?php echo $result_arr['content']?></textarea>
        <div class = "clear"></div>
      </li>
    </ul>

    <input type="submit"  value="Modify" >
    <div class="clear"></div>
  </form>

</div>

</div>
</body>
</html>

