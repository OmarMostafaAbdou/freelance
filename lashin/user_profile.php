<?php
include_once('dashboard/functions.php');

$id= $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="index.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/R_style.css">
    <link rel="stylesheet" href="assets/css/m_style.css">
</head>

<body>
  <nav>
    <nav class="navbar bg-body-tertiary fixed-top">
      <div class="container-fluid">

        <!-- logo -->
        <a class="navbar-brand" href="index.html">
          <img src="/stocks/logo.png" alt="logo" height="50">
        </a>
        <!-- search -->
        <div class="search">
          <input type="search" class="form-control" placeholder="ابحث عن ..">
          <button class="btn btn-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
              viewBox="0 0 16 16">
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </button>
        </div>

        <!-- sign buttons -->
        <div class="">
          <button type="button" id="signin" class="btn btn-primary" onclick="location.href='#'">تسجيل الدخول</button>
          <button type="button" id="signup" class="btn btn-light" onclick="location.href='#'">حساب جديد</button>
        </div>

        <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- inside the sidebar -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <div class="mx-auto" style="width: 200px;"> <!-- to center the logo vertically-->
              <img style="border: none; height: 90px;" class="img-fluid img-thumbnail offcanvas-title"
                id="offcanvasNavbarLabel" src="/stocks/logoo-blue-red.png" alt="logo">
            </div>
            <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">عن الموقع</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">المستقليين</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">الاعمال</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  الخدمات
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">نجارة</a></li>
                  <li><a class="dropdown-item" href="#">سباكة</a></li>
                  <li><a class="dropdown-item" href="#">اشغال يدوية</a></li>
                  <li><a class="dropdown-item" href="#">مطبخ</a></li>
                  <li><a class="dropdown-item" href="#">نقاشة</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="services.html">انواع الخدمات</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">المجتمع</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">المزيد معنا</a>
              </li>
            </ul>
            <!-- <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form> -->
          </div>
        </div>
      </div>
    </nav>
   
    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-between p-4 text-white" style="background-color: #196fb5">
        <!-- Left -->
        <div class="me-5">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-end mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">
                <img src="/stocks/logo.png" style="width: 100px;" alt="">
              </h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p>
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
              <p>
                <a href="#!" class="text-dark">سباكة</a>
              </p>
              <p>
                <a href="#!" class="text-dark">نقاشة</a>
              </p>
              <p>
                <a href="#!" class="text-dark">اعمال يدوية</a>
              </p>
              <p>
                <a href="#!" class="text-dark">مطبخ</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">المزيد</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p>
                <a href="#!" class="text-dark">حسابك الشخصي</a>
              </p>
              <p>
                <a href="#!" class="text-dark">انضم الينا</a>
              </p>
              <p>
                <a href="#!" class="text-dark">اراء العملاء</a>
              </p>
              <p>
                <a href="#!" class="text-dark">المساعدة</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">للالمزيد</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p><i class="fas fa-home mr-3"></i>اسوان، مصر</p>
              <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
              <p><i class="fas fa-phone mr-3"></i> +20 0111291277</p>
              <p><i class="fas fa-print mr-3"></i> +20 01025202434</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-dark" href="https://iti.gov.eg/">Iti Aswan.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>
<script src="script.js"></script>

</html>