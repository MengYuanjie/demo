<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 01/01/2018
 * Time: 22:22
 */
  require_once  'config.php';

  /*
   * connect to database
   */
  function connectDB()
  {
    $con= new mysqli(HOST, MYSQL_USER, MYSQL_PSW, DBNAME);

    if($con ->connect_error)
    {
      die('Connection Failed');
    }

    return $con;
  }

  /*
   * to fetch all the data from db and implement sql
   */
  function implementSQL($con, $sql)
  {

    $result = $con -> query($sql);

    $result_arr = array();

    if(!empty($result))
    {
      while($row = $result -> fetch_assoc())
      {
        $result_arr[] = $row;
      }
    }

    $con->close();
    return $result_arr;
  }

  /*
   * another way to fetch all the data using sql
   */
  function fetchAll($con, $sql)
  {

    $result = $con -> query($sql);

    $result_arr = array();

    if($result -> num_rows > 0)
    {
      $result_arr = $result -> fetch_all();
    }

    $con->close();

    return $result_arr;
  }

  /*
   * fetch one data from database
   */
  function fetchOne($con, $sql)
  {
    $result = $con -> query($sql);

    $result_arr = $result -> fetch_assoc();

    return $result_arr;
  }

  /*
   * store data into session
   */
  function storeSession($sessionName, $params, $data)
  {
    if(!isset($_SESSION[$sessionName]))
    {
      $_SESSION[$sessionName] = array();
    }

    $_SESSION[$sessionName][$params] = $data;

  }

  /*
   * get data from session
   */
  function getSessionData($sessionName, $params)
  {
    if(isset($_SESSION[$sessionName]))
    {
      $arr=$_SESSION[$sessionName];

      if (!empty($arr[$params]))
      {
        return $arr[$params];
      }
    }
    return "";
  }

  /*
   * page split
   */
  function pageToSplit($pageNum, $pageSize, $sid){

    $sql = "SELECT * FROM postset WHERE sid='{$sid}' limit " . (($pageNum - 1) * $pageSize) . ", " . $pageSize;
    $con = connectDB();
    $arr = implementSQL($con, $sql);
    return $arr;
  }

