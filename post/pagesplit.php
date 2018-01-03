<?php
require_once '/Users/Daisy/www/demo2/config.php';

require '/Users/Daisy/www/demo2/func.php';

//function to split
function pagetosplit($pageNum, $pageSize,$sid){
  $array = array();

  $sql = "SELECT * FROM postset  WHERE sid='{$sid}' limit " . (($pageNum - 1) * $pageSize) . ", " . $pageSize;
  $con = connect();
  $result = $con->query($sql);
//  print $sql;
  while ($obj = mysqli_fetch_object($result)) {
    $array[] = $obj;
  }
  $con->close();
  return $array;
}

//function to show total pages
function totalpage($sid){
  $con = connect();
  $sql = "select count(*) num from postset WHERE sid='{$sid}'";
  $result = $con->query($sql);
  $obj = mysqli_fetch_object($result);
  $con->close();
  return $obj->num;
}

$pageSize = 3;

$sid="";
if(isset($_SESSION['info'])){
  $sid=$arr['sid'];
}
$allNum = totalpage($sid);
$pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
$endPage = ceil($allNum/$pageSize);
$array = pagetosplit($pageNum,$pageSize,$sid);

