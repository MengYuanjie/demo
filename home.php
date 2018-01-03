<?php

include "nav.php";
?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/about-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Using Blog</h1>
          <span class="subheading">To keep a daily log of your life</span>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <?php require './post/postlist.php'?>

<!-- Pager -->
<!--      <div class="clearfix">-->
<!--        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>-->
<!--      </div>-->
</div>
</div>
</div>