<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 01/01/2018
 * Time: 22:33
 */

include '../func.php';

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
$sql = "INSERT INTO userinfo (user, psw, sid)
VALUES('{$user}','{$psw}', md5('{$timesmpt}'))";

$result=$con->query($sql);
if($result){
  header("Location:../index.php");
}else{
  echo "insert failed";
}


