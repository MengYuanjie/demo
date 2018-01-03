<?php
include 'navuser.php';
?>
<header class="masthead" style="background-image: url('../img/about-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h3>User Admin</h3>
          <h4><a href='../home.php'>back to main page</a></h4>
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

include '../func.php';

echo "";
$sql = "SELECT * FROM userinfo ";
$con = connect();
$result = $con->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    echo "<div class='col-lg-8 col-md-10 mx-auto' style='margin:0 auto'>";
    echo "user : " . $row["user"]."<br>";
    echo "psw : " . $row["psw"]. "<br>";
    echo "<a href='edit.php?sid=".$row["sid"]."'>修改</a> ";
    echo "<a href='delete.php?sid=".$row["sid"]."'>删除</a></td></tr><br>";
    echo "</div>";
    echo "<hr>";
  }
}else{
  echo " there is no message";
}

$con->close();
?>

