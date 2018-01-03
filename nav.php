<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>A simple Blog management system</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="home.php">Blog Manager</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        <?php
        if(isset($_SESSION['info'])) {
          $arr=$_SESSION['info'];
          if (!empty($arr['user'])) {
            echo "<li class='nav-item'><a class='nav-link' >Hello, ".$arr['user']."</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='home.php'>Home</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='post/addpost.php'>Add New Post</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='user/logout.php'>Log out</a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='user/userlist.php'>User Admin</a></li>";
          }
        }else{
          echo "<li class='nav-item'><a class='nav-link' href='home.php'>Home</a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='./user/testre.php'>Sign In/Sign Up</a></li>";
        }
        ?>

      </ul>
    </div>
  </div>
</nav>






<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>

</body>

</html>
