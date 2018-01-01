<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 01/01/2018
 * Time: 22:22
 */
include 'config.php';

//connect to database
function connect(){
  $con= new mysqli(HOST,MYSQL_USER,MYSQL_PSW,DBNAME);
  if($con ->connect_error){
    die('Connection Failed');
  }
  return $con;
}

//insert and update user info
//function dealwithdata(){
//
//
//}