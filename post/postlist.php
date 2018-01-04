<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 02/01/2018
 * Time: 05:57
 */
require_once 'pagesplit.php';

if(empty($array)){
  echo "<div class='post-preview'>";
  echo "<p class='post-meta'>There is no post yet.</p></div><hr>";
}

foreach($array as $key => $values){
  echo "<div class='post-preview'>";
  echo "<a href='post/showpost.php?postid=".$values['postid']."'>";
  echo "<h2 class='post-title'>".$values['title']."</h2>>";
  echo "<h3 class='post-subtitle'>".$values['content']."</h3></a>";
  echo "<p class='post-meta'>Posted by <a href='#'>".$values['user']."</a> on ".$values['date']."</p></div><hr>";
}





//print $endPage;
if($endPage != 0)
{
  for ($i = 1; $i <= $endPage; $i++)
  {
    echo "<a href='?pageNum=" . $i . "'>" . $i . "</a> ";
  }
}




