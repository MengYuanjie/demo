<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 01:41
 */
//session -user
session_start();


//add update and delete
include '../func.php';

//connect to db
$con = connect();
$message="";
$url="addpost";

//using switch to tell diff actions
switch($_GET["action"])
{
  case "add":
    $user = $_SESSION['user'];
    $title=$_POST["fname"];
    $content=$_POST["fcontent"];
    date_default_timezone_set('Asia/Taipei');
    $date=date("Y-m-d H:i:s");
    $postid=md5(time());
    $sql = "INSERT INTO postset (user, date, title, content,postid)
VALUES('{$user}','{$date}','{$title}','{$content}', '{$postid}' )";
    if(!empty($title) && !empty($content)) {
      $result=$con->query($sql);
      if($result){
        $message="Insert Success";
        $url="index.php";
      }else{
        $message="Insert Failed, please try again";
      }
    }else{
      $message="Title or Content can not be empty";
    }

    break;
  case "update":
    $title=$_POST["fname"];
    $content=$_POST["fcontent"];
    $postid =  $_SESSION['postid'];
    $sql = "UPDATE postset SET title='{$title}',content='{$content}' WHERE postid='{$postid}'";

    $result=$con->query($sql);
    if($result){
      $message="Update Success";
      $url="index.php";
    }else{
      $message="Update Failed";
    }
    break;
  case "delete":
    $postid=$_GET['postid'];
    $sql = "delete from postset where postid='{$postid}'";
    $result=$con->query($sql);
    if($result){
      $message="Delete Success";
      $url="index.php";
    }else{
      $message="Delete Success";
    }
    break;
}

//print out message
echo "<script language='JavaScript'>";
echo "alert('{$message}');";
echo "window.location.replace('{$url}');";
echo "</script>";

$con->close();