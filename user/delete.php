<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 00:58
 */
session_start();

include '../func.php';

if(empty($_GET['sid'])){
  die('id is empty');
}

//connect to db
$con = connect();

$sid = $_GET['sid'];


//delete data using sid
$sql="DELETE FROM userinfo WHERE sid='{$sid}'";
//return to home page
$result=$con->query($sql);
if($result){
  if(isset($_SESSION['info'])) {
    $arr=$_SESSION['info'];

    if (!empty($arr['sid'])&&$arr['sid']==$sid) {
      session_destroy();
    }
    }
   header("Location:../user/userlist.php");
  }else{
  echo "Delete failed";
}