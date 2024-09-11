<?php include_once("../function.php");
$histories=getAll();



  ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <link rel="stylesheet" href="style.css">
        <title>سجل الخمات</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
    <nav class="nav  navbar-nav fixed-top">
        <div class="container-fluid ">
            <div class="nav-container">
                <!-- sidebar -->
                <div class="logo-side">
                    <button class="btn btn-light sidebar-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon sidebar-icon"></span>
              </button>

                    <!-- inside the sidebar -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <div class="mx-auto" style="width: 200px;">
                                <!-- to center the logo vertically-->
                                <img style="border: none; width: 100%;" class="side-logo img-fluid img-thumbnail offcanvas-title" id="offcanvasNavbarLabel" src="stocks/logo.png" alt="logo">
                            </div>
                            <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> -->
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                    <a href="../../lashin/services.php"><button id="side-buttons" class="btn btn-primary">
                          <span><i class="fa-solid fa-business-time"></i></span>
                          <span>الخدمات</button></span></a>
                                </li>
                                <li>
                                    <a href="../../abdelrahman/community.php"><button id="side-buttons" class="btn btn-primary">
                          <span><i class="fa-solid fa-users"></i></i></span>
                          <span>المجتمع</button></span></a>
                                </li>
                                <li>
                                    <a href="../../asmaa/profile-galary.php"><button id="side-buttons" class="btn btn-primary">
                          <span><i class="fa-solid fa-network-wired"></i></span>
                          <span>اعمالي</button></span></a>
                                </li>
                                <li>
                                <a href="../../about us/index.php"><button id="side-buttons"
                                            class="btn btn-primary">
                                            <span><i class="fa-solid fa-circle-question"></i></span>
                                            <span>عن الموقع</button></span></a>
                                </li>
                                <li>
                                <a href="#footer"><button id="side-buttons" class="btn btn-primary">
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
                    <a class="navbar-brand logo" href="../index.php">
                        <img src="../stocks/freelancers-logo-white.png" alt="logo" height="50">
                    </a>
                </div>


                <div class="nav-buttons">

                    <ul class="navbar-nav mr-auto  nav-items">
                        <li>
                            <a href="../../index.php"><button id="home" class="btn btn-primary home">
                        <span><i class="fa-solid fa-house"></i></span>
                        <span>الرئيسية</button></span></a>
                        </li>
                        <?php if (isset($_SESSION['user_id'])) : ?>
                        <?php if ($_SESSION['user_role'] == "Client") : ?>
                        <!-- <li>
                      <a href="abdallah-test/users/index.php"><button id="nav-buttons" class="btn btn-primary">
                          <span><i class="fa-regular fa-plus"></i></span>
                          <span>اضف</button></span></a>
                    </li> -->
                        <li>
                            <a href="../../abdallah/request/request/index.php"><button id="nav-buttons" class="btn btn-primary">
                          <span><i class="fa-regular fa-plus"></i></span>
                          <span>اضف مشروع</button></span></a>
                        </li>
                        <?php elseif ($_SESSION['user_role'] == "Freelancer") : ?>
                        <li>
                            <a href="../free.php"><button id="nav-buttons" class="btn btn-primary">
                          <span><i class="fa-regular fa-plus"></i></span>
                          <span>اضف خدمة</button></span></a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="../../lashin/all_freelancers.php"><button id="nav-buttons" class="btn btn-primary">
                        <span><i class="fa-solid fa-person-rays"></i></span>
                        <span>المستقليين</button></span></a>
                        </li>
                        <li>
                            <a href="../../lashin/services.php"><button id="nav-buttons" class="btn btn-primary">
                        <span><i class="fa-solid fa-business-time" style="color: #ffffff;"></i></span>
                        <span>الخدمات</button></span></a>
                        </li>
                        <li>
                            <a href="../../abdelrahman/community.php"><button id="nav-buttons" class="btn btn-primary">
                        <span><i class="fa-solid fa-users" style="color: #ffffff;"></i></i></span>
                        <span>المجتمع</button></span></a>
                        </li>
                        <li>
                            <a href="../../asmaa/profile-galary.php"><button id="nav-buttons" class="btn btn-primary">
                        <span><i class="fa-solid fa-network-wired"></i></span>
                        <span>اعمالي</button></span></a>
                        </li>
                        <!-- <li>
                    <a href="login/HTML/includes/logout.inc.php"><button id="nav-buttons" class="btn btn-primary">
                        <span><i class="fa-regular fa-plus"></i></span>
                        <span>تسجيل الخروج</button></span></a>
                  </li> -->

                        <!-- sign buttons -->

                        <?php else : ?>

                        <li>
                            <a href="../../login/html/signup.php"><button id="signup" class="btn btn-primary">
                        <span><i class="fa-solid fa-user-plus"></i></i></span>
                        <span>حساب جديد</button></span></a>
                        </li>
                        <li>
                            <a href="../../login/html/login.php"><button style="width: auto !important;" id="nav-buttons" class="btn btn-primary">
                        <span><i class="fa-solid fa-arrow-right-to-bracket"></i></span>
                        <span>تسجيل الدخول</button></span></a>
                        </li>
                        <?php endif; ?>

                    </ul>
                </div>

                <?php if (isset($_SESSION['user_id'])) : ?>
                <div class="user-profile">
                    <img src="stocks/afro-cool-man-smiling-looking-friendly-showing-number-one-bike-repairman-concept.jpg" class="user-pic-r" onclick="toggleMenu()" />

                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src="stocks/afro-cool-man-smiling-looking-friendly-showing-number-one-bike-repairman-concept.jpg" />
                                <?php echo '<h3>' . $_SESSION["user_name"] . '</h3>'; ?>
                            </div>
                            <hr />

                            <a href="../../abdallah/users/index.php" class="sub-menu-link">
                                <i class="fa-solid fa-edit"></i>
                                <p>الصفحة الشخصية</p>
                                <span>></span>
                            </a>
                            <a href="../../abdallah/users/index.php" class="sub-menu-link">
                                <i class="fa-solid fa-file-edit"></i>
                                <p>اعدادات الحساب</p>
                                <span>></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <i class="fa-solid fa-hands-asl-interpreting"></i>
                                <p>المساعدة </p>
                                <span>></span>
                            </a>
                            <a href="../../login/HTML/includes/logout.inc.php" class="sub-menu-link">
                                <i class="fa-solid fa-long-arrow-alt-left"></i>
                                <p>تسجيل الخروج</p>
                                <span>></span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>

            <!-- search -->
            <!-- <div class="search">
                            <input type="search" class="form-control" placeholder="ابحث عن ..">
                            <button class="btn btn-light sbutton">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101" id="search"><path d="M63.3 59.9c3.8-4.6 6.2-10.5 6.2-17 0-14.6-11.9-26.5-26.5-26.5S16.5 28.3 16.5 42.9 28.4 69.4 43 69.4c6.4 0 12.4-2.3 17-6.2l20.6 20.6c.5.5 1.1.7 1.7.7.6 0 1.2-.2 1.7-.7.9-.9.9-2.5 0-3.4L63.3 59.9zm-20.4 4.7c-12 0-21.7-9.7-21.7-21.7s9.7-21.7 21.7-21.7 21.7 9.7 21.7 21.7-9.7 21.7-21.7 21.7z"></path></svg>
                            </button>
                        </div> -->


        </div>
    </nav><br><br>
      
        <!-- Header-->
        <header >
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center ">
                    <h1 class="display-4 fw-bolder " >سجل الخدمات</h1>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="d-flex justify-content-center">
                <div class="row row-cols-3 g-3 justify-content-center align-items-center">
                    
                
            
                        <?php foreach ($histories as $history) {
                            $images=getAllimg($history["id"]);

                            echo '
                        <div>
                        <div class="card" >
                            <!-- Product image-->
                             <img class="card-img-top" src="../pics/'.$images[0]['imgs'].'" style="width: 100% ; height:300px" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- service name-->
                                    <h5 class="fw-bolder">'.$history['services'].'</h5>
                                    <!-- service price-->
                                    <h4> '.$history['price'].' جنيه</h4>
                                    <h5>'.$history['date'].'</h5>
                                   
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark " href="details.php?id='.$history['id'].'">تفاصيل الخدمة</a></div>
                             
                             
                            </div>
                        </div>
                      </div>  
                    ';
                        }

                    ?>
                    </div>
                    </div>
            
        </section>
        <!-- Footer-->
        
   <footer class="footer text-center text-lg-start text-dark footer-bg">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4 text-white">
      <!-- Left -->
      <div class="me-5">
        <p class="footerheadline">تابعنا علي منصات التواصل الاجتماعي:</p>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="#" class="text-white me-4" style="text-decoration: none;">
          <i class="fab fa-facebook-f"></i>
        <a href="" class="text-white me-4" style="text-decoration: none;">
          <!-- <img src="stocks/icons/009-twitter-1.svg" class="socialmedia"> -->
          <i class="fab fa- twitter"></i>
        </a>
        <a href="#" class="text-white me-4" style="text-decoration: none;">
          <i class="fab fa-google"></i>
        </a>
        <a href="#" class="text-white me-4" style="text-decoration: none;">
          <!-- <img src="stocks/icons/010-instagram.svg" class="socialmedia"> -->
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="text-white me-4" style="text-decoration: none;">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="#" class="text-white me-4" style="text-decoration: none;">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="foot">
      <div class="container text-center text-md-end mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">
              <img src="stocks/freelancers-logo-white.png" style="width: 100px;" alt="">
            </h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 100%; background-color: #ffff; height: 2px" />
            <p style="color: #ffff;">
              اول منصة عربية للحرفيين
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold txtfooter" style="color: #ffff;">الخدمات</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 100%; background-color: #ffff; height: 2px" />
            <p>
              <a href="#!" class="text-white txtfooter"  style="text-decoration: none;">سباكة</a>
            </p>
            <p>
              <a href="#!" class="text-white txtfooter" style="text-decoration: none;">نقاشة</a>
            </p>
            <p>
              <a href="#!" class="text-white txtfooter" style="text-decoration: none;">اعمال يدوية</a>
            </p>
            <p>
              <a href="#!" class="text-white txtfooter" style="text-decoration: none;">مطبخ</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold txtfooter" style="color: #ffff;">المزيد</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 100%; background-color: #ffff; height: 2px" />
            <p >
              <a href="#!" class="text-white txtfooter" style="text-decoration: none;">حسابك الشخصي</a>
            </p>
            <p>
              <a href="#!" class="text-white txtfooter" style="text-decoration: none;">انضم الينا</a>
            </p>
            <p>
              <a href="#!" class="text-white txtfooter" style="text-decoration: none;">اراء العملاء</a>
            </p>
            <p>
              <a href="#!" class="text-white txtfooter" style="text-decoration: none;">المساعدة</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold txtfooter" style="color: #ffff;">للتواصل</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 100%; background-color: #ffff; height: 2px" />
            <p style="color: #ffff;"><i class="fas fa-home mr-3" style="color: #ffff;"></i style="color: #ffff;">اسوان، مصر</p>
            <p style="color: #ffff;"><i class="fas fa-envelope mr-3" style="color: #ffff;"></i> info@example.com</p>
            <p style="color: #ffff;"><i class="fas fa-phone mr-3" style="color: #ffff;"></i> +20 0111291277</p>
            <p style="color: #ffff;"><i class="fas fa-print mr-3" style="color: #ffff;"></i> +20 01025202434</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)" style="color: #ffff;">
      <a  class="text-white" href="https://iti.gov.eg/" >Iti Aswan.com</a>
    </div>
    <!-- Copyright -->
  </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
