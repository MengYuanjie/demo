<?php
  require_once '/Users/Daisy/www/demo2/config.php';

  require_once '/Users/Daisy/www/demo2/func.php';

  $pageSize = 3;





  $sid = getSessionData('info', 'sid');
  $con = connectDB();
  $sql = "select count(*) num from postset WHERE sid='{$sid}'";
  $arr = fetchOne($con, $sql);
  $allNum = $arr['num'];
  $pageNum = empty($_GET["pageNum"])? 1 : $_GET["pageNum"];
  $endPage = ceil($allNum / $pageSize);
  $array = pageToSplit($pageNum, $pageSize, $sid);


