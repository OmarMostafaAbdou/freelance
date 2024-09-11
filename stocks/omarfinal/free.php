<?php
include_once("function.php");
if(!empty($_POST)){
    add($_POST,$_FILES);
}else{
    $services=getAllservices();
}

?>



<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="free.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

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
                                <img style="border: none; height: 90px;" class="side-logo img-fluid img-thumbnail offcanvas-title" id="offcanvasNavbarLabel" src="stocks/logo.png" alt="logo">
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
                                    <a href="../lashin/services.php"><button id="side-buttons" class="btn btn-primary">
                          <span><i class="fa-solid fa-business-time"></i></span>
                          <span>الخدمات</button></span></a>
                                </li>
                                <li>
                                    <a href="../abdelrahman/community.php"><button id="side-buttons" class="btn btn-primary">
                          <span><i class="fa-solid fa-users"></i></i></span>
                          <span>المجتمع</button></span></a>
                                </li>
                                <li>
                                    <a href="../asmaa/profile-galary.php"><button id="side-buttons" class="btn btn-primary">
                          <span><i class="fa-solid fa-network-wired"></i></span>
                          <span>اعمالي</button></span></a>
                                </li>
                                <li>
                                    <a href="../asmaa/profile-galary.php"><button id="side-buttons" class="btn btn-primary">
                          <span><i class="fa-solid fa-circle-question"></i></span>
                          <span>عن الموقع</button></span></a>
                                </li>
                                <li>
                                    <a href="../asmaa/profile-galary.php"><button id="side-buttons" class="btn btn-primary">
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
                        <img src="stocks/freelancers-logo-white.png" alt="logo" height="50">
                    </a>
                </div>


                <div class="nav-buttons">

                    <ul class="navbar-nav mr-auto  nav-items">
                        <li>
                            <a href="../index.php"><button id="home" class="btn btn-primary home">
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
                            <a href="../abdallah/request/request/index.php"><button id="nav-buttons" class="btn btn-primary">
                          <span><i class="fa-regular fa-plus"></i></span>
                          <span>اضف مشروع</button></span></a>
                        </li>
                        <?php elseif ($_SESSION['user_role'] == "Freelancer") : ?>
                        <li>
                            <a href="free.php"><button id="nav-buttons" class="btn btn-primary">
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

                        <?php else : ?>

                        <li>
                            <a href="../login/html/signup.php"><button id="signup" class="btn btn-primary">
                        <span><i class="fa-solid fa-user-plus"></i></i></span>
                        <span>حساب جديد</button></span></a>
                        </li>
                        <li>
                            <a href="../login/html/login.php"><button style="width: auto !important;" id="nav-buttons" class="btn btn-primary">
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

                            <a href="abdallah-test/users/index.php" class="sub-menu-link">
                                <i class="fa-solid fa-edit"></i>
                                <p>الصفحة الشخصية</p>
                                <span>></span>
                            </a>
                            <a href="abdallah-test/users/index.php" class="sub-menu-link">
                                <i class="fa-solid fa-file-edit"></i>
                                <p>اعدادات الحساب</p>
                                <span>></span>
                            </a>
                            <a href="#" class="sub-menu-link">
                                <i class="fa-solid fa-hands-asl-interpreting"></i>
                                <p>المساعدة </p>
                                <span>></span>
                            </a>
                            <a href="login/HTML/includes/logout.inc.php" class="sub-menu-link">
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
        
        <div>
        
            <div class="model">
               <div class="up">
               <a href="history/history.php" class="his_but">سجل الخدمات</a>
                <a href="#" class="help_but">للمساعدة</a>
               </div>
                <div class="video-application">
                    <span class="close">&#10006;</span>
                    <video src="./20231005170420.mp4" controls></video>
                </div>
            </div>
        </div>
        <div class="all">
            <div class="application">
                
               
                <header>انشاء خدمة</header>
                <div class="step-bar">
                    <div class="step">
                        <p>
                            اسم العمل
                        </p>
                        <div class="bullet">
                            <span>1</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            تفاصيل
                        </p>
                        <div class="bullet">
                            <span>2</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            مرفقات
                        </p>
                        <div class="bullet">
                            <span>3</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            تأكيد
                        </p>
                        <div class="bullet">
                            <span>4</span>
                        </div>
                        <div class="check fas fa-check" id="b4"></div>
                    </div>
                </div>
                <div class="form-outer">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="page slide-page">
                            <div class="title">
                                حدد طبيعة الخدمة </div>
                            <div class="field">
                                <div class="label">
                                    ماذا سوف تقدم في هذه الخدمة
                                </div>
                                <input type="text" name="jobname">
                            </div>
                            <div class="field">
                                <div class="label">
                                    قسم الخدمة
                                </div>
                                <select class="form-control" id="job_services" name="services" required>
                                  <?php
                                     foreach($services as $service){
                                   echo "<option value='$service[id]'>$service[name]</option>";
                                       }
             
             
                                   ?>
                <!-- Add more categories as needed -->
            </select>
                            </div>


                            <div class="field">
                                <button class="firstNext next">التالي</button>
                            </div>
                        </div>
                        <div class="page">
                            <div class="title">
                                شرح تفاصيل الخدمة
                            </div>
                            <div class="field">
                                <div class="label">
                                    وصف الخدمة
                                </div>
                                <textarea name="description" id="" cols="45" rows="5" placeholder="وصف العمل"></textarea>
                            </div>
                            <div class="field">
                                <div class="label">
                                    سعر الخدمة
                                </div>
                                <input type="text" name="price">

                            </div>

                            <div class="field btns">
                                <button class="prev-1 prev">السابق</button>
                                <button class="next-1 next">التالي</button>
                            </div>
                        </div>
                        <div class="page">
                            <!-- <div class="title">
                                معرض الخدمة
                            </div> -->
                            <div class="field">
                              
                            
                                <div id="drop-area">
                                    <h1>اسحب وارفق هنا</h1>
                                    
                                    <input type="file" id="fileInput" name="img[]" multiple style="display: none">
                                    <label for="fileInput" id="fileInputLabel" class="file-input-label">اختر الصورة</label>
                                    <ul id="file-list"></ul>
                                  </div>
                                </div>
                        
                            <br>
                            <br>
                          
                            <div class="field btns">
                                <button class="prev-2 prev">السابق</button>
                                <button class="next-2 next">التالي</button>
                            </div>
                           
                        </div>
                        <div class="page">
                            <div class="title">
                               معلومات اضافية
                            </div>
                            <div class="field">
                                <div class="label">
                                    تعليمات العميل
                                </div>
                              <textarea name="" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="field">
                                <div class="label">
                                    مهنة اخرى
                                </div>
                                <input type="text">
                            </div>
                            <div class="field btns">
                                <button class="prev-3 prev">السابق</button>
                                <button class="submit">تأكيد</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
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
          <i class="fab fa-twitter"></i>
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
    <section class="">
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
  <!-- Footer -->


    

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./free.js"></script>
    <script src="./script.js"></script>
</body>

</html>