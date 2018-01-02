<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 00:58
 */
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
  header("Location:../index.php");
}else{
  echo "Delete failed";
}