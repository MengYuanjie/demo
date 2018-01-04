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
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="../index.php">Blog Manager</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">


        <?php
        require_once '../func.php';
        $user = getSessionData('info','user');
        if($user) { ?>
          <li class='nav-item'><a class='nav-link' >Hello, <?php echo $user ?></a></li>
          <li class='nav-item'><a class='nav-link' href='../index.php'>Home</a></li>
          <li class='nav-item'><a class='nav-link' href='../post/addpost.php'>Add New Post</a></li>
          <li class='nav-item'><a class='nav-link' href='../user/logout.php'>Log out</a></li>
          <li class='nav-item'><a class='nav-link' href='../user/userlist.php'>User Admin</a></li>
        <?php } else { ?>

          <li class='nav-item'><a class='nav-link' href='../index.php'>Home</a></li>
          <li class='nav-item'><a class='nav-link' href='../user/testre.php'>Sign In/Sign Up</a></li>
        <?php } ?>

      </ul>
    </div>
  </div>
</nav>


<!-- Bootstrap core JavaScript -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="../js/clean-blog.min.js"></script>

</body>

</html>
