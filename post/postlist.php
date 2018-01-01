<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 05:57
 */

include '../func.php';

echo "<h4><a href='index.php'>back to main page</a></h4><br>";
$sql = "SELECT * FROM postset ";
$con = connect();
$result = $con->query($sql);
if($result->num_rows>0){

  while($row = $result->fetch_assoc()){

    echo "Title : " . $row["title"]."    User : " . $row["user"]. "<br>";
    echo "Content : " . $row["content"]. "<br>";
    echo "Date : " . $row["date"]. "<br>";
    echo "<a href='editphp.php?postid=".$row["postid"]."'>修改</a> ";
    echo "<a href='action.php?action=delete&postid=".$row["postid"]."'>删除</a></td></tr><br>";
    echo "---------------"."<br>";

  }
}else{
  echo " there is no message";
}

$con->close();