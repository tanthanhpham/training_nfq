<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../template/register/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../template/register/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="main" style="padding-top: 70px; padding-bottom: 0">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <?php
                    if(isset($_SESSION["error"])){ ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION["error"];
                            unset($_SESSION["error"]);
                            ?>
                        </div>
                    <?php } ?>
                    <form method="POST" action="HandleLogin.php" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email" required/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password" required/>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="../template/register/images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="/?view=signup" class="signup-image-link">You don't have account!</a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
unset($_SESSION["oldData"]);
?>
<!-- JS -->
<script src="../template/register/vendor/jquery/jquery.min.js"></script>
<script src="../template/register/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>