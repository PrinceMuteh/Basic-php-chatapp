<?php
$title = "Forgot Password | Community Blog";
include_once "./inc/header.php";
?>

<body style="background-image:url(img/login.jpg); background-size:cover;
    background-repeat:no-repeat; ">
    <div class="pull-right pl-5">
        <section class="login-section">
            <div class="styled-form login-form alert bg-primary" style="color:white;">
                <h2 class="main_title">Forgotten Your Password?</h2>
                <form action="" method="post">
                    <input id="email" type="text" placeholder="Email" name="email">
                    <div class="form-group">
                        <span id="forgotLoading" class="input-group-addon"><img src="loading.gif" height="30px" alt="Ajax Indicator" /></span>
                        <span id="loginResult2" class="h4"></span>
                        <input type="button" id="forgot" name="forgot" value="Verify Email" class="theme-btn btn-style-one">
                    </div>
                    <div class="account">Already Registered.? <a href="login.php" class="btn btn-info btn-sm">Login</a></div>

                </form>

            </div>
        </section>

    </div>


    <?php
    include_once "./inc/footer.php";
    ?>