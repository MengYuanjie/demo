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
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js">
  </script>
  <title>Add a new post</title>
  <script type="text/javascript">
    function addpost() {
      var fname=$(".subject").val();
      var fcontent=$(".content-detail").val();
      $.ajax({
        type:"POST",
        url:"action.php?action=add",
        data: {
          "fname":fname,
          "fcontent":fcontent
        },
        success: function(result){
//          result = JSON.parse(result);
          console.log("success");
//          console.log(result);
//          console.log(result['fname']);
//          var str = "Title : " + result["fname"]+"    User : " +result["user"]+ "<br>";
//          str+= "Content : " +result["content"]+"<br>";
//          str+= "Date : " +result["date"]+ "<br>";
//          str+= "<a href='editphp.php?postid="+result["postid"]+"'>修改</a> ";
//          str+= "<a href='action.php?action=delete&postid="+result["postid"]+"'>删除</a></td></tr><br>";
//          str+= "---------------<br>";

//          $("#show").prepend(str);
          window.location.replace('../index.php');


        },
        error: function(){
          console.log("error");
        }

      });
    }
  </script>
</head>
<body>
<h3>Add a post</h3>
<form action="" method="post">
  Title: <br>
  <input type="text" name="fname" placeholder="Subject" class="subject"><br>
  Message: <br>
  <textarea type="text" name="fcontent" placeholder="say sth about your day" class="content-detail"></textarea><br>
  <input type="button" onclick="addpost()" value="leave your message">
</form>
<!--<div id="show">-->
<?php //include 'postlist.php'?>
<!--</div>-->
</body>


</html>