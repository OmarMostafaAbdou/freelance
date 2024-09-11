<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- header css  -->
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- swiper  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- swiper  -->
    <!-- render all elements normally -->
    <link rel="stylesheet" href="css/all.css" />
    <!-- font awesome library -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- main css  -->
    <link rel="stylesheet" href="css/about.css" />
    <title>حول موقع مننا و علينا</title>
</head>

<body style="background-color: #f5f5f5">
    <nav class="nav  navbar-nav " id="navRok">
        <div class="container-fluid ">
            <div class="nav-container">
                <!-- sidebar -->
                <div class="logo-side">
                    <!-- <button class="btn btn-light sidebar-btn" type="button" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                      aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon sidebar-icon"></span>
                  </button> -->

                    <!-- inside the sidebar -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <div class="mx-auto" style="width: 200px;">
                                <!-- to center the logo vertically-->
                                <img style="border: none; height: 90px;"
                                    class="side-logo img-fluid img-thumbnail offcanvas-title" id="offcanvasNavbarLabel"
                                    src="../stocks/logo.png" alt="logo">
                            </div>
                            <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> -->
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body">
                            <ul class="side-bar  justify-content-end flex-grow-1 pe-3">
                                <li>
                                    <a href="../lashin/all_freelancers.php">
                                        <button id="side-buttons" class="btn btn-primary">
                                            <span><i class="fa-solid fa-person-rays"></i></span>
                                            <span>المستقليين</span>
                                        </button>
                                    </a>
                                </li>

                                <li>
                                    <a href="../lashin/services.php"><button id="side-buttons" class="btn btn-primary">
                                            <span><i class="fa-solid fa-business-time"></i></span>
                                            <span>الخدمات</button></span></a>
                                </li>
                                <li>
                                    <a href="../abdelrahman/community.php"><button id="side-buttons"
                                            class="btn btn-primary">
                                            <span><i class="fa-solid fa-users"></i></i></span>
                                            <span>المجتمع</button></span></a>
                                </li>
                                <li>
                                    <a href="../asmaa/profile-galary.php"><button id="side-buttons"
                                            class="btn btn-primary">
                                            <span><i class="fa-solid fa-network-wired"></i></span>
                                            <span>اعمالي</button></span></a>
                                </li>
                                <li>
                                    <a href="../asmaa/profile-galary.php"><button id="side-buttons"
                                            class="btn btn-primary">
                                            <span><i class="fa-solid fa-circle-question"></i></span>
                                            <span>عن الموقع</button></span></a>
                                </li>
                                <li>
                                    <a href="../asmaa/profile-galary.php"><button id="side-buttons"
                                            class="btn btn-primary">
                                            <span><i class="fa-solid fa-phone"></i></span>
                                            <span>تواصل معنا</button></span></a>
                                </li>


                            </ul>
                            <!-- <form class="d-flex mt-3" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                        </div>

                    </div>
                    <!-- logo -->
                    <a class="navbar-brand logo" href="../../index.php">
                        <img src="../stocks/freelancers-logo-white.png" alt="logo" height="50">
                    </a>
                </div>


                <div class="nav-buttons">

                    <ul class="navbar-nav mr-auto  nav-items">
                        <li>
                            <a href="../index.php"><button id="home" class="btn btn-primary home">
                                    <span><i class="fa-solid fa-house"></i></span>
                                    <span>الرئيسية</button></span></a>
                        </li>
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <?php if ($_SESSION['user_role'] == "Client"): ?>
                        <!-- <li>
                <a href="abdallah-test/users/index.php"><button id="nav-buttons" class="btn btn-primary">
                    <span><i class="fa-regular fa-plus"></i></span>
                    <span>اضف</button></span></a>
              </li> -->
                        <li>
                            <a href="../abdallah/request/request/index.php"><button id="nav-buttons"
                                    class="btn btn-primary">
                                    <span><i class="fa-regular fa-plus"></i></span>
                                    <span>اضف مشروع</button></span></a>
                        </li>
                        <?php elseif ($_SESSION['user_role'] == "Freelancer"): ?>
                        <li>
                            <a href="../omarfinal/free.php"><button id="nav-buttons" class="btn btn-primary">
                                    <span><i class="fa-regular fa-plus"></i></span>
                                    <span>اضف خدمة</button></span></a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="../lashin/all_freelancers.php"><button id="nav-buttons" class="btn btn-primary">
                                    <span><i class="fa-solid fa-person-rays"></i></span>
                                    <span>المستقليين</button></span></a>
                        </li>
                        <li>
                            <a href="../lashin/services.php"><button id="nav-buttons" class="btn btn-primary">
                                    <span><i class="fa-solid fa-business-time" style="color: #ffffff;"></i></span>
                                    <span>الخدمات</button></span></a>
                        </li>
                        <li>
                            <a href="../abdelrahman/community.php"><button id="nav-buttons" class="btn btn-primary">
                                    <span><i class="fa-solid fa-users" style="color: #ffffff;"></i></i></span>
                                    <span>المجتمع</button></span></a>
                        </li>
                        <li>
                            <a href="../asmaa/profile-galary.php"><button id="nav-buttons" class="btn btn-primary">
                                    <span><i class="fa-solid fa-network-wired"></i></span>
                                    <span>اعمالي</button></span></a>
                        </li>
                        <!-- <li>
              <a href="login/HTML/includes/logout.inc.php"><button id="nav-buttons" class="btn btn-primary">
                  <span><i class="fa-regular fa-plus"></i></span>
                  <span>تسجيل الخروج</button></span></a>
            </li> -->

                        <!-- sign buttons -->

                        <?php else: ?>

                        <li>
                            <a href="../login/html/signup.php"><button id="signup" class="btn btn-primary">
                                    <span><i class="fa-solid fa-user-plus"></i></i></span>
                                    <span>حساب جديد</button></span></a>
                        </li>
                        <li>
                            <a href="../login/html/login.php"><button style="width: auto !important;" id="nav-buttons"
                                    class="btn btn-primary">
                                    <span><i class="fa-solid fa-arrow-right-to-bracket"></i></span>
                                    <span>تسجيل الدخول</button></span></a>
                        </li>
                        <?php endif; ?>

                    </ul>
                </div>



            </div>

            <!-- search -->
            <!-- <div class="search">
                      <input type="search" class="form-control" placeholder="ابحث عن ..">
                      <button class="btn btn-light sbutton">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101" id="search"><path d="M63.3 59.9c3.8-4.6 6.2-10.5 6.2-17 0-14.6-11.9-26.5-26.5-26.5S16.5 28.3 16.5 42.9 28.4 69.4 43 69.4c6.4 0 12.4-2.3 17-6.2l20.6 20.6c.5.5 1.1.7 1.7.7.6 0 1.2-.2 1.7-.7.9-.9.9-2.5 0-3.4L63.3 59.9zm-20.4 4.7c-12 0-21.7-9.7-21.7-21.7s9.7-21.7 21.7-21.7 21.7 9.7 21.7 21.7-9.7 21.7-21.7 21.7z"></path></svg>
                      </button>
                  </div> -->


        </div>
    </nav>

    <div class="row mt-1" id="top">
        <div class="col">
            <a href="../index.php"> الرئيسية</a>
            <h4 class="dom">|</h4>
        </div>
        <div class="col">
            <br />
            <h1 class="title">حول موقع مننا و علينا</h1>
        </div>
    </div>
    <br />
    <div class="card" id="bigCard">
        <p class="center">
            <img class="center_img" src="stocks/logo.png" alt="" />
        </p>
        <br />
        <p class="p">
            مننا و علينا هو السوق العربي الأول لبيع وشراء الخدمات المصغرة، يجمع
            خمسات بين الشباب العربي المستعد لتقديم الخدمات وبين فئة المشترين
            المستعدين لشراء هذه الخدمات، وبذلك يوفر دخلاً مناسباً للشباب العربي
            وخدمات مميزة بسعر اقتصادي للأفراد والشركات الناشئة.
        </p>
        <p class="p">
            يهدف مننا و علينا لتطوير العالم العربي عن طريق توفير حلول ومنتجات تساعد
            الشباب العرب على العمل والتطور. تركز حسوب نشاطها على قطاع العمل الحر،
            ريادة الأعمال، التعليم الالكتروني، الإعلام، الترفيه والإعلان الرقمي
            وتتألف من فريق شاب وشغوف من مختلف الدول العربية يهدف تمكين الشباب العرب
            وفتح مزيد من الفرص أمامهم.
        </p>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="card mb-3" id="devCard">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="stocks/dola.jpg" class="img-fluid rounded-start" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">عبدالله صلاح</h5>
                                    <p class="card-text">مطور الواجهة الأمامية والخلفية</p>
                                    <p class="card-text">
                                        <small class="text-body-secondary"></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card mb-3" id="devCard">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="stocks/leshaa.jpg" class="img-fluid rounded-start" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">محمد لاشين</h5>
                                    <p class="card-text">مطور الواجهة الأمامية والخلفية</p>
                                    <p class="card-text">
                                        <small class="text-body-secondary"></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card mb-3" id="devCard">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="stocks/dakka.jpg" class="img-fluid rounded-start" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">عبدالرحمن دكه</h5>
                                    <p class="card-text">مطور الواجهة الأمامية والخلفية</p>
                                    <p class="card-text">
                                        <small class="text-body-secondary"></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card mb-3" id="devCard">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="stocks/omar.jpg" class="img-fluid rounded-start" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">عمر محمد</h5>
                                    <p class="card-text">مطور الواجهة الأمامية والخلفية</p>
                                    <p class="card-text">
                                        <small class="text-body-secondary"></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card mb-3" id="devCard">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="stocks/roka.jpg" class="img-fluid rounded-start" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">رقية نصر</h5>
                                    <p class="card-text">مطورة الواجهة الأمامية والخلفية</p>
                                    <p class="card-text">
                                        <small class="text-body-secondary"></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card mb-3" id="devCard">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="stocks/asmaa.jpg" class="img-fluid rounded-start" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">عصماء زكريا</h5>
                                    <p class="card-text">مطورة الواجهة الأمامية والخلفية</p>
                                    <p class="card-text">
                                        <small class="text-body-secondary"></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->
        </div>
    </div>
    <br /><br />

    <footer class="text-center text-lg-start text-dark" style="background-color: #eceff1">
        <!-- Section: Social media -->

        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-end mt-5 pt-2">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">
                            <img class="footerImg" src="../stocks/freelancers-logo-white.png" style="width: 100px"
                                alt="" />
                        </h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p class="bg-transparent border-0 mb-0">
                            اول منصة عربية للحرفيين
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">الخدمات</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p class="bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">سباكة</a>
                        </p>
                        <p class="bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">نقاشة</a>
                        </p>
                        <p class="bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">اعمال يدوية</a>
                        </p>
                        <p class="bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">مطبخ</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">المزيد</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p class="bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">حسابك الشخصي</a>
                        </p>
                        <p class="bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">انضم الينا</a>
                        </p>
                        <p class="bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">اراء العملاء</a>
                        </p>
                        <p class="bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">المساعدة</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">للتواصل</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p class="bg-transparent border-0 mb-0">
                            <i class="fas fa-home mr-3"></i>اسوان، مصر
                        </p>
                        <p class="bg-transparent border-0 mb-0">
                            <i class="fas fa-envelope mr-3"></i> info@example.com
                        </p>
                        <p class="bg-transparent border-0 mb-0">
                            <i class="fas fa-phone mr-3"></i> +20 0111291277
                        </p>
                        <p class="bg-transparent border-0 mb-0">
                            <i class="fas fa-print mr-3"></i> +20 01025202434
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            ©️ 2020 Copyright:
            <a class="text-dark text-decoration-none footera" href="https://iti.gov.eg/">Iti Aswan.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="user.js"></script>

    <script src="swiper.js"></script>
</body>

</html>