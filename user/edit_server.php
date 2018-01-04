<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 00:13
 */
  session_start();
  require_once '../func.php';

  if(empty($_POST['user']))
  {
    die('username is empty');
  }

  if(empty($_POST['psw']))
  {
    die('password is empty');
  }

  $sid = getSessionData('info', 'sid');
  $user = $_POST['user'];
  $psw = $_POST['psw'];


  ////connect to db
  $con = connectDB();

  $timesmpt = time();
  ////insert data
  $sql = "UPDATE userinfo SET user = '{$user}', psw = '{$psw}' WHERE sid = '{$sid}'";

  $result = $con -> query($sql);
  if($result)
  {
    header("Location: userlist.php");
  }
  else
  {
    echo "update failed";
  }
