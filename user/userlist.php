<?php
  require_once 'navuser.php';
?>
<header class="masthead" style="background-image: url('../img/about-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h3>User Admin</h3>
          <h4><a href='../index.php'>back to main page</a></h4>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">

      <?php
      /**
       * Created by PhpStorm.
       * User: Daisy
       * Date: 01/01/2018
       * Time: 22:56
       */

        require_once '../func.php';

        $con = connectDB();
        $sql = "SELECT * FROM userinfo";
        $arr = implementSQL($con, $sql);
        //print_r($arr);

        /*
         * print out user list
         */
        foreach($arr as $key => $value)
        {
          echo "<div class='col-lg-8 col-md-10 mx-auto' style='margin:0 auto'>";
          echo "user : " . $value["user"]."<br>";
          echo "psw : " . $value["psw"]. "<br>";
          echo "<a class='caption text-muted' href='edit.php?sid=".$value["sid"]."'>修改</a> ";
          echo "<a class='caption text-muted' href='delete.php?sid=".$value["sid"]."'>删除</a></td></tr><br>";
          echo "</div>";
          echo "<hr>";
        }
      ?>

    </div>
  </div>
</div>

<?php
  require_once '../footer.php'
?>

