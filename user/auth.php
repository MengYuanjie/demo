<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 01:09
 */
  session_start();
  require_once '../func.php';

  if(!isset($_POST['user'])){
    die('user is not defined');
  }

  if(!isset($_POST['psw'])){
    die('password is not defined');
  }

  $user=$_POST['user'];
  $psw=$_POST['psw'];

  if(empty($user)){
    die('username is empty');
  }
  if(empty($psw)){
    die('password is empty');
  }

 $con = connectDB();

  $sql = "SELECT * FROM userinfo WHERE user='{$user}' AND psw='{$psw}'";

  $result_arr = fetchOne($con, $sql);


  if(count($result_arr))
  {
    storeSession('info', 'user', $user);
    storeSession('info', 'sid', $result_arr['sid']);
    echo "success";
  }
  else
  {
    echo "Log in failed";
  }
