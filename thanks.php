<?php

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR:You are @ the Wrong Page.');

$title = "Thanks  | Community HUB";
include_once "./inc/header.php";
?>
<header>
  <div class="container">
    <img src="img/logo-2.png" class="logo" alt=""><br>
    <!-- <h2>Communinty Hub</h2> -->


  </div>
</header>

<!--Login Section-->
<section class="login-section ">
  <div class="auto-container">
    <div class="content">
      <h2>Welcome to our Community HUB</h2>
      <p class="h3" style="color:white;">Thanks for Joining our communnity. Please confirm your email</p>
    </div>
  </div>
</section>
<!--End Login Section-->
<?php
include_once "./inc/footer.php";
?>