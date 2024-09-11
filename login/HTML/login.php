<?php
require_once('includes/login-mvc/login_view.inc.php');
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
    <!-- <link rel="stylesheet" href="/CSS/index.css"> -->
</head>

<body class="bg-light">

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center pt-5 pb-5">مرحبا بك مجددا</h2>

                <?php output_name(); ?>

                <!-- Form Start -->
                <form method="post" action="includes/login.inc.php">

                    <div class="input-group mb-3">
                        <input name="email" type="text" class="form-control" placeholder=" البريد الإلكترونى ">
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="كلمة المرور">
                    </div>
                    <div class="form-check pb-3">
                        <input class="form-check-input" type="checkbox" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">تذكرنى </label>
                        <span><a href="#">هل نسيت كلمة السر ؟</a></span>
                    </div>
                    <div class="d-grid ">
                        <button type="submit" class="btn btn-success">دخول </button>
                        <p class="text-center text-muted mt-3">بالتسجيل فى موقعنا, أنت توافق على <a href="#">الخصوصية</a>و<a href="#">الشروط و الأحكام</a></p>
                        <p class="text-center">
                            ليس لديك حساب؟ <a href="signup.php">سجل الآن</a>
                        </p>
                    </div>

                    <?php
                    check_login_errors();
                    ?>

                </form>

                <?php
                if (isset($_SESSION["user_id"])) {
                    echo ' <form method="post" action="includes/logout.inc.php">
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Logout</button>
                                    </div>
                                </form>';}
                ?>

            </div>
        </div>
        <div>
            <img src="../imgs/login.jpg" alt="">
        </div>
    </div>

    <!-- bootstrab JS -->
    <script src="../JS/bootstrap.bundle.js"></script>
    <!-- Font Awesome JS -->
    <script src="../JS/all.min.js"></script>
</body>

</html>