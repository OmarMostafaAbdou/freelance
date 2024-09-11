<?php
require_once('includes/signup-mvc//signup_view.inc.php');
require_once('includes/config_session.inc.php');
?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!--BootStrap Links  -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <!-- font Awesome Link -->
    <link rel="stylesheet" href="../CSS/all.min.css">
    <!-- CSS Link -->
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center pt-5 pb-5">أنشئ حساب جديد</h2>
                <!-- Form Start -->
                <form method="post" action="includes/signup.inc.php">

                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" id="name" placeholder="الأسم">
                    </div>

                    <!-- <div class="input-group mb-3">
                        <input name="username" type="text" class="form-control" id="username" placeholder=" اسم المستحدم">
                    </div> -->

                    <div class="input-group mb-3">
                        <input name="email" type="text" class="form-control" id="email" placeholder=" البريد الإلكترونى ">
                    </div>

                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" id="password" placeholder="كلمة المرور">
                    </div>
                    <div class="input-group mb-3">
                        <input name="confirm_password" type="password" class="form-control" id="conf-pass" placeholder=" تأكيد كلمة المرور">
                    </div>


                    <div class="form-group mb-3">
                                <label for="role">role</label> <br>
                                <input type="radio" name="role" value="Client" /> مشتري
                                <br><input type="radio" name="role" value="freelancer" /> مقدم خدمة
                            </div>


                    <?php
                    check_signup_error();
                    /**we're going to the view to view the errors check we made to be
                     * appers on index page
                     */
                    ?>


                    <div class="d-grid ">
                        <button type="submit" class="btn btn-success">سجل الآن</button>
                        <p class="text-center text-muted mt-3">بالتسجيل فى موقعنا, أنت توافق على <a href="#">الخصوصية</a>و<a href="#">الشروط و الأحكام</a></p>
                        <p class="text-center">
                            هل بالفعل لديك حساب؟ <a href="login.php">دخول</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <img src="../imgs/register.png" alt="">
        </div>
    </div>

    <!-- bootstrab JS -->
    <script src="../JS/bootstrap.bundle.js"></script>
    <!-- Font Awesome JS -->
    <script src="../JS/all.min.js"></script>
    <!-- JavaScript file -->
    <script src="../JS/main.js"></script>
</body>

</html>