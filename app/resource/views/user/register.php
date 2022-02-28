<?php
session_start();
include '../controllers/user/HandleRegistration.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

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
                    if (isset($_SESSION["error"])) { ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION["error"];
                            ?>
                        </div>
                    <?php } ?>
                    <form method="POST" action="/?view=signup" class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name" required value="<?php if (isset($_SESSION["oldData"]["name"])) {
                                echo $_SESSION["oldData"]["name"];
                                                                                                             } ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="birthday"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="date" name="birthday" id="birthday" />
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="email" id="email" placeholder="Your Email" required value="<?php if (isset($_SESSION["oldData"]["email"])) {
                                echo $_SESSION["oldData"]["email"];
                                                                                                                } ?>"/>
                        </div>
                        <div class="form-group">
                            <div class="alert alert-danger" id="err_email" style="display: none; margin-top: 0; margin-bottom: 0;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password" required/>
                        </div>
                        <div class="form-group">
                            <label for="rePass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="rePass" id="rePass" placeholder="Repeat your password" required/>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register" required/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="../template/register/images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="/?view=signin" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- JS -->
<script src="../template/register/vendor/jquery/jquery.min.js"></script>
<script src="../template/register/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!---->
<!--<script>-->
<!--    $(document).ready(function (e){-->
<!--        $('#email').change(function (){-->
<!--            $.ajax({-->
<!--                url: '../php/CheckExistedEmail.php',-->
<!--                type: 'post',-->
<!--                data: {-->
<!--                    email: $(this).val(),-->
<!--                },-->
<!--                dataType: 'text',-->
<!--                success : function (result){-->
<!--                    if(result=='1'){-->
<!--                        $('#err_email').html("Email already exists");-->
<!--                        $('#err_email').attr("style", "display:block")-->
<!--                        $('#signup').attr('disabled','disabled');-->
<!--                        console.log('Email already exists');-->
<!--                    }else {-->
<!--                        $('#signup').removeAttr('disabled');-->
<!--                    }-->
<!--                }-->
<!--            });-->
<!--        });-->
<!--    });-->
<!--</script>-->
