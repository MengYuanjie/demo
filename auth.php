<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 01:09
 */
session_start();
include 'func.php';

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


////connect to db
$con=connect();

//
$timesmpt=time();
////insert data
$sql = $sql = "SELECT * FROM userinfo WHERE user='{$user}' AND psw='{$psw}'";

$result=$con->query($sql);
if($result->num_rows > 0){
  $_SESSION['user']=$user;
  header("Location:index.php");
}else{
  echo "Log in failed";
}
