<?php
/**
 * Created by PhpStorm.
 * User: Daisy
 * Date: 03/01/2018
 * Time: 09:24
 */
include 'navpost.php';
require_once '/Users/Daisy/www/demo2/config.php';
require '/Users/Daisy/www/demo2/func.php';

if(!empty($_GET['postid'])) {
  $con = connect();
  $postid=$_GET['postid'];
  $sql = "SELECT * FROM postset WHERE postid='{$postid}'";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    $result_arr = $result->fetch_assoc();
    $arr = array();
    $arr= $_SESSION['info'];
    $arr['postid']=$postid;
  }
  else {
    echo " there is no message";
  }
}


?>


<header class="masthead" style="background-image: url('../img/about-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php echo $result_arr['title']?></h1>
              <h2 class="subheading"></h2>
              <span class="meta">Posted by
<a href="#"><?php echo $result_arr['user']?></a>
on <?php echo $result_arr['date']?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p><?php echo $result_arr['content']?></p>

          </div>
          <span ><a class="caption text-muted" href='/demo2/post/editphp.php?postid=<?php echo $result_arr['postid']?>'>修改</a></span>
          <span ><a class="caption text-muted" href='/demo2/post/action.php?action=delete&postid=<?php echo $result_arr['postid']?>'>删除</a></span>

        </div>
      </div>
    </article>

    <hr>

<?php require '../footer.php'?>
