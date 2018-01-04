<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 04/01/2018
 * Time: 11:30
 */
  require_once 'func.php';


  $con = connectDB();

  $sql = "SELECT * FROM postset";

  $arr = implementSQL($con, $sql);

  //$arr1 = fetchAll($con, $sql);

  print_r($arr);

