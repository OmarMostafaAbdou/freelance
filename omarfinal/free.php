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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
   

    
   
        
<nav class="navbar bg-body-tertiary fixed-top"  >
            <div class="container-fluid" >

                                <!-- logo -->
                <a class="navbar-brand" href="index.html">
                    <img src="stocks/logo.png" alt="logo"  height="50">
                  </a>
                                <!-- search -->
                    <div class="search">
                        <input type="search" class="form-control" placeholder="ابحث عن ..">
                        <button class="btn btn-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                        </button>
                    </div>

                        <!-- sign buttons -->
                    <div class="">
                        <button type="button" id="signin" class="btn btn-primary" onclick="location.href='#'">تسجيل الدخول</button>
                        <button type="button" id="signup" class="btn btn-light" onclick="location.href='#'">حساب جديد</button>
                    </div>

              <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <!-- inside the sidebar -->
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <div class="mx-auto" style="width: 200px;">   <!-- to center the logo vertically-->
                         <img style="border: none; height: 90px;" class="img-fluid img-thumbnail offcanvas-title" id="offcanvasNavbarLabel" src="stocks/logoo-blue-red.png" alt="logo"  >
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
                    <li class="nav-item dropdown ">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        الخدمات
                      </a>
                      <ul class="dropdown-menu text-end">
                        <li><a class="dropdown-item" href="#">نجارة</a></li>
                        <li><a class="dropdown-item" href="#">سباكة</a></li>
                        <li><a class="dropdown-item" href="#">اشغال يدوية</a></li>
                        <li><a class="dropdown-item" href="#">مطبخ</a></li>
                        <li><a class="dropdown-item" href="#">نقاشة</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">انواع الخدمات</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">المجتمع</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">تواصل معنا</a>
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
                            اتمام
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
                                <button class="submit">اتمام</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

    

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./free.js"></script>
    <script src="./script.js"></script>
</body>

</html>