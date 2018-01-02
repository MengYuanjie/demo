<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 01/01/2018
 * Time: 22:56
 */

include '../func.php';

echo "<h4><a href='../index.php'>back to main page</a></h4><br>";
$sql = "SELECT * FROM userinfo ";
$con = connect();
$result = $con->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    echo "user : " . $row["user"]."<br>";
    echo "psw : " . $row["psw"]. "<br>";
    echo "<a href='edit.php?sid=".$row["sid"]."'>修改</a> ";
    echo "<a href='delete.php?sid=".$row["sid"]."'>删除</a></td></tr><br>";
    echo "---------------"."<br>";
  }
}else{
  echo " there is no message";
}

$con->close();

