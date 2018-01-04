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
  <meta charset="UTF-8">
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js">
  </script>
  <title>Add a new post</title>
  <link href="../css/style-post.css" rel='stylesheet' type='text/css' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="text/javascript">

    function addpost() {
      var fname = $(".subject").val();
      var fcontent = $(".content-detail").val();
      $.ajax({
        type : "POST",
        url : "action.php?action=add",
        data : {
          "fname" : fname,
          "fcontent" : fcontent
        },
        success : function(){
          console.log("success");

          window.location.replace('../index.php');

        },
        error : function(){
          console.log("error");
        }

      });
    }

    function jump(){

      window.location.replace('../index.php');

    }

  </script>

  </head>
<body>
<h1>Write A New Blog</h1>
<div class="login-01">
  <form action="" method="post">
    <ul>
      <li class="first">
        <a href="#" class=" icon msg"></a><input type="text" name="fname" placeholder="Subject" class="subject" ><br>

        <div class="clear"></div>
      </li>

      <li class="second">
        <a href="#" class=" icon msg"></a><textarea type="text" name="fcontent" placeholder="say sth about your day" class="content-detail"></textarea>
        <div class="clear"></div>
      </li>
    </ul>
    <input type="button" value="DONE" onclick="addpost()">
    <input type="button"  value="BACK"  onclick="jump()" id="test">
    <div class="clear"></div>


  </form>


</div>

</div>
</body>
</html>

