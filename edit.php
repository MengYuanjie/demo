<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 00:13
 */
session_start();
include "func.php";

if(!empty($_GET['sid'])) {
  //连接mysql数据库
  $con = connect();

  $sid = $_GET['sid'];
  $sql = "SELECT * FROM userinfo WHERE sid='{$sid}'";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    $result_arr = $result->fetch_assoc();
    $_SESSION['sid']=$sid;
  }
  else {
    echo " there is no message";
  }
}
echo "oage one";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改用户数据</title>
</head>
<body>

<form action="edit_server.php" method="post">
<label>用户名：</label><input type="text" name="user" value="<?php echo $result_arr['user']?>">
<label>用户年龄：</label><input type="text" name="psw" value="<?php echo $result_arr['psw']?>">
<input type="submit" value="提交修改">
</form>
</body>
</html>