 <?php
    $title = "Login | Community HUB";
    include_once "./inc/header.php";
    ?>

 <body style="background-image:url(img/login.jpg); 	background-size:cover;
	background-repeat:no-repeat; ">

     <div class="clearfix">
         <section class=" login-section  ">
             <div class="auto-container">
                 <div class="content pull-right">

                     <span class=" h4"><i class="fas fa-user"></i> Welcome to our <a href="index.php" class="navbar-brand h5">Community Hub</a> </span> <br>
                     <span id="loginResult" style="color: red;"></span>

                     <div class="styled-form login-form">
                         <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                         </div>
                         <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                         </div>

                         <!--Login Form-->
                         <form method="post" id="login_form" name="form1">
                             <div class="form-group">
                                 <!-- <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span> -->
                                 <input type="email" id="email" name="email" placeholder="Email" required>
                             </div>


                             <div class="form-group">
                                 <input type="password" name="password" id="password" placeholder="Password" required>
                             </div>

                             <div class="pull-left">
                                 <input type="checkbox">&nbsp; Remember Me
                             </div>
                             <div class="pull-right">
                                 <a href="forgot.php">Forget Password ?</a>
                             </div>

                             <div class="form-group  align-content-center justify-content-center ">
                                 <!-- <input value="Login" class="theme-btn btn-style-one"> -->
                                 <!-- <span class="input-group-addon"><img src="loading.gif" height="30px" alt="Ajax Indicator" /></span> -->
                                 <i class="fa fa-spinner fa-spin fa-3x fa-fw" id="loginLoading"></i>

                                 <input type="button" name="login2" id="login2" class="theme-btn btn-style-one " value="Login" />
                             </div>
                             <!-- <span class="account h4">Don't have an account? <a href="signup.php">Get Started</a></span> -->
                             <span class=" h5"> Don't have an account? <a href="signup.php" class="h6">Get started</a> </span> <br>

                             <div class="text-center p-t-46 p-b-20">
                                 <span class="sr-only">Loading...</span>
                                 <span class="txt2">
                                     or sign up using
                                 </span>
                             </div>

                             <div class="login100-form-social flex-c-m">
                                 <div class="mb-1">
                                     <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                                         <i class="fab fa-facebook" aria-hidden="true"></i> FACEBOOK
                                     </a>
                                 </div>


                                 <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                                     <i class="fab fa-google" aria-hidden="true"></i>Google
                                 </a>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </section>
     </div>


     <?php
        include_once "./inc/footer.php";
        ?>