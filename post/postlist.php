<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 05:57
 */
include 'pagesplit.php';

foreach($array as $key=>$values){
  echo "<br><tr>";
  echo "<td>title : {$values->title}</td><br>";
  echo "<td>content : {$values->content}</td><br>";
  echo "Date : {$values->date}<br>";
  echo "User : {$values->user}<br>";
  echo "<a href='/demo2/post/editphp.php?postid={$values->postid}'>修改</a> ";
  echo "<a href='/demo2/post/action.php?action=delete&postid={$values->postid}'>删除</a></td></tr><br>";
  echo "---------------"."<br>";
  echo "</tr>";
}


for($i=1; $i<=$endPage; $i++)
{
  echo "<a href='?pageNum=".$i."'>".$i."</a> ";
}




