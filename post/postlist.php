<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 05:57
 */
include 'pagesplit.php';

if(empty($array)){
  echo "<div class='post-preview'>";
  echo "<p class='post-meta'>There is no post yet.</p></div><hr>";
}

foreach($array as $key=>$values){

//  echo "title : {$values->title}";
//  echo "content : {$values->content}";
//  echo "Date : {$values->date}";
//  echo "User : {$values->user}";
//  echo "<a href='/demo2/post/editphp.php?postid={$values->postid}'>修改</a> ";
//  echo "<a href='/demo2/post/action.php?action=delete&postid={$values->postid}'>删除</a></td></tr><br>";

  echo "<div class='post-preview'>";
  echo "<a href='post.html'>";
  echo "<h2 class='post-title'> {$values->title}</h2>>";
  echo "<h3 class='post-subtitle'>{$values->content}</h3></a>";
  echo "<p class='post-meta'>Posted by <a href='#'>{$values->user}</a> on {$values->date}</p></div><hr>";

}


for($i=1; $i<=$endPage; $i++)
{
  echo "<a href='?pageNum=".$i."'>".$i."</a> ";
}




