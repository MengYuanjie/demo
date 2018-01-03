<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 00:13
 */
session_start();
include "../func.php";

if(!empty($_GET['sid'])) {
  //连接mysql数据库
  $con = connect();

  $sid = $_GET['sid'];
  $sql = "SELECT * FROM userinfo WHERE sid='{$sid}'";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    $result_arr = $result->fetch_assoc();
    //$_SESSION['sid']=$sid;
    $arr = array();
    $arr= $_SESSION['info'];
    $arr['sid']=$sid;
  }
  else {
    echo " there is no message";
  }
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600'>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<div class="cont_principal">

  <div class="cont_centrar">

    <div class="cont_login">

      <form action="edit_server.php" method="post">
        <div class="cont_tabs_login">
          <ul class='ul_tabs'>
            <h2 class="active" style="padding: 10px; color:#652e25">Change user info</h2>
              <span class="linea_bajo_nom"></span>

          </ul>
        </div>


        <div class="cont_text_inputs">

          <input type="text" class="input_form_sign d_block active_inp name" id="name" placeholder="USERNAME" name="user" value="<?php echo $result_arr['user']?>">

          <input type="password" class="input_form_sign d_block  active_inp psw" id="psw" placeholder="PASSWORD" name="psw" value="<?php echo $result_arr['psw']?>">

        </div>
        <div class="cont_btn">
          <button class="btn_sign" >Modify</button>

        </div>

      </form>
    </div>

  </div>


</div>

<script  src="../js/index.js"></script>

</body>

</html>


<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>修改用户数据</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<form action="edit_server.php" method="post">-->
<!--<label>用户名：</label><input type="text" name="user" value="--><?php //echo $result_arr['user']?><!--">-->
<!--<label>密码：</label><input type="text" name="psw" value="--><?php //echo $result_arr['psw']?><!--">-->
<!--<input type="submit" value="提交修改">-->
<!--</form>-->
<!--</body>-->
<!--</html>-->