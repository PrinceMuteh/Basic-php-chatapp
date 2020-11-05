<?php
$title = "Register | Community Blog";
include_once "./inc/header.php";
?>
<link href="./fontawesome/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<body style="background-image:url(img/login.jpg); 	background-size:cover;
	background-repeat:no-repeat;">
    <!--Login Section-->
    <div class="clearfix">
        <section class=" login-section  ">
            <div class="auto-container">
                <div class="content pull-right">

                    <img src="img/logo-2.png" class="logo" alt="" /><br>
                    <!-- <h2>Create a new account</h2> -->
                    <!-- <h2 class="fa fa-user">We can't wait to have you join our Community</h2> <br> -->
                    <span class=" h4"><i class="fas fa-user"></i> Register to our <a href="index.php" class="navbar-brand h5">Community Hub</a> </span> <br>



                    <div class="styled-form login-form">
                        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        </div>
                        <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        </div>
                        <form method="post" id="login_form" name="form1">
                            <!--Login Form-->
                            <span id="loginResult2" class="h4" style="color: red;"></span>

                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <input type="password" name="psword1" id="psword1" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="psword2" id="psword2" placeholder="Re-Password" required>
                            </div>


                            <div class="form-group">
                                <i class="fa fa-spinner fa-spin fa-3x fa-fw" id="loginLoading"></i>
                                <input type="button" name="signup" id="signup" value="Create Account" class="theme-btn btn-style-one">
                                <!-- <span class="sr-only">Loading...</span> -->
                            </div>

                            <span class="account h4">Already Registered.? <a href="login.php" class="btn btn-info btn-sm h4">Login</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <?php
    include_once "./inc/footer.php";
    ?>