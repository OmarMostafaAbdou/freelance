<?php
include_once("users.php");
if (!empty($_POST)) {
    if (!empty($_FILES)) {
        editUserInfo($_POST, $_FILES);
    } else {
        inserPost($_POST);

    }

} else if (!empty($_GET)) {

    $id = $_GET['id'];
    $update = getUserById($id);
    print_r($update);
    // $result = getUser();

} else {
    $result = getUser();

    $posts = getPost();
    $services = getService();

}
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- render all elements normally -->
    <link rel="stylesheet" href="../css/all.css" />
    <!-- font awesome library -->
    <link rel="stylesheet" href="../css/all.min.css" />
    <!--main css style -->
    <link rel="stylesheet" href="../css/styling.css" />
    <!-- nav css  -->
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>الملف الشخصي</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <!-- logo -->
            <a class="navbar-brand" href="index.html">
                <img src="../stocks/logo.png" alt="logo" height="50" />
            </a>
            <!-- search -->
            <div class="search">
                <input type="search" class="form-control" placeholder="ابحث عن .." />
                <button class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>

            <!-- sign buttons -->
            <div class="b">
                <button type="button" id="signin" class="btn btn-primary" onclick="location.href='#'">
                    تسجيل الدخول
                </button>
                <button type="button" id="signup" class="btn btn-light" onclick="location.href='#'">
                    حساب جديد
                </button>
            </div>
            <button class="btn stnBtn" onclick="stng()">معلومات شخصية</button>

            <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- inside the sidebar -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <div class="mx-auto" style="width: 200px">
                        <!-- to center the logo vertically-->
                        <img style="border: none; height: 90px" class="img-fluid img-thumbnail offcanvas-title"
                            id="offcanvasNavbarLabel" src="../stocks/logoo-blue-red.png" alt="logo" />
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
                                    <hr class="dropdown-divider" />
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

    <div class="container" id="cont">
        <div class="row" id="row">
            <!-- testttt -->
            <div class="col rounded " id="fixed">
                <div class="settings tabshow">
                    <h1>المعلومات الشخصية</h1>
                    <!-- <form action="">
                        <input type="text" name="bob" id="search" class="form-control mt-2" placeholder="ادخل الوظيفة">
                        <button style="display: none ;" class="btn btn-primary form-control">search</button>
                    </form> -->
                    <?php
                    foreach ($result as $item) {

                        echo "<img src='../images/$item[img]' class='tm-list-item-img' style='width: 40%; align-self: center;'>";
                        echo "<h2>الاسم</h2> ";
                        echo "<p style='width: 100%;'>$item[name]</p>";
                        echo "<h2>البريد الإلكتروني</h2>";
                        echo "<p style='width: 100%;'>$item[email]</p>";
                        echo "<h2>تاريخ الميلاد</h2>";
                        echo "<p style='width: 100%;'>$item[birthday]</p>";
                        echo "<h2>الوظيفة</h2>";
                        echo "<p style='width: 100%;'>$item[role]</p>";
                        echo "<button href='#?id=$item[id]' style='margin-bottom: 15px; margin-top: 0px; align-self: self-start;' class='btn stnBtn' onclick='back()'>الإعدادات</button>";

                    }
                    ?>


                </div>
            </div>
            <!-- testttt -->
            <!-- <div class="page_content"> -->
            <div class="col rounded ">
                <!-- <div class="main_content"> -->
                <div class="post">
                    <form action="" enctype="multipart/form-data" method="POST">
                        <h1 class="h1_main_content">البحث عن خدمة</h1>
                        <div class="input-group mb-3">
                            <span class="input-group-text">السعر</span>
                            <span class="input-group-text">جم</span>
                            <input type="text" class="form-control" name="price"
                                aria-label="Dollar amount (with dot and two decimal places)" />
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">الوصف</span>
                            <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                        </div>
                        <!-- <div class="col-md-3 mt-2">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected="">أختر التصنيف</option>
                            <option value="1">نجارة</option>
                            <option value="2">سباكة</option>
                            <option value="3">أشغال يدوية</option>
                            <option value="3">مطبخ</option>
                            <option value="3">نقاشة</option>
                        </select>
                    </div> -->
                        <li class="nav-item dropdown mt-3">
                            <h5 class="dropdown-toggle" role="button" data-bs-toggle="dropdown"> أختر التصنيف</h5>

                            <ul class="dropdown-menu">
                                <select class="form-select form-select-sm " name="service_id"
                                    aria-label="form-select-sm example">
                                    <?php
                                    foreach ($services as $service) {
                                        echo "<option class='dropdown-item' value='$service[id]'>$service[name]</option>";
                                    }

                                    ?>
                                </select>


                            </ul>
                        </li>
                        <button class="btn btnPost">نشر</button>
                    </form>
                </div>
                <div class="history" style="overflow:auto;height:50vh">
                    <h1 class="h1_main_content">السجل :</h1>

                    <div class='row mb-5'>
                        <?php
                        foreach ($posts as $post) {
                            echo "<div class='col card mb-2'>";
                            echo "<h5 class='card-header'>$post[service_id]</h5>";
                            echo " <div class='card-body'>";
                            echo " <h5 class='card-title'>$post[price]</h5>";
                            echo "<p class='card-text'>$post[description]</p>";
                            echo "<button class='btn btnPost'>تفاصيل</button>";
                            echo "</div>";
                            echo " </div>";

                        }
                        ?>
                    </div>


                </div>
            </div>
            <!-- </div> -->

            <div class="col rounded " id="col" style="display:none;">
                <!-- <div class="card"> -->
                <div class="leftbox">
                    <nav>
                        <a onclick="tabs(0)" class="tab active">
                            <i class="fa fa-user"></i></a>
                        <a onclick="tabs(1)" class="tab">
                            <i class="fa fa-credit-card"></i></a>
                        <!-- <a onclick="tabs(2)" class="tab"> <i class="fa fa-tv"></i></a> -->
                        <!-- <a onclick="tabs(2)" class="tab"> <i class="fa fa-tasks"></i></a> -->
                        <!-- <a onclick="tabs(3)" class="tab"> <i class="fa fa-cog"></i></a> -->
                    </nav>
                </div>
                <div class="rightbox">
                    <!-- Start profile -->
                    <div class="profile tabshow" id="show">
                        <form action="" enctype="multipart/form-data" method="POST">
                            <input type="text" class="form-control" value="<?php echo $item['id'] ?>" name="id"
                                id="exampleInputId" required hidden readonly>
                            <input type="text" class="form-control" value="<?php echo $item['img'] ?>" name="image"
                                id="exampleInput" required hidden readonly>
                            <h1>إعدادات المعلومات الشخصية</h1>
                            <h2>الاسم بالكامل</h2>
                            <input type="text" class="input" name="name" value="<?php echo $item['name'] ?>"
                                placeholder="<?php echo $item['name'] ?>" />
                            <h2>تاريخ الميلاد</h2>
                            <input type="text" class="input" name="birthday" value="<?php echo $item['birthday'] ?>"
                                placeholder="<?php echo $item['birthday'] ?>" />

                            <h2>البريد الإلكتروني</h2>
                            <input type="text" class="input" name="email" value="<?php echo $item['email'] ?>"
                                placeholder="<?php echo $item['email'] ?>" />
                            <h2>الصورة الشخصية</h2>
                            <div class="mb-3">
                                <input type="file" class="form-control" name="image" id="exampleInputimage">
                                <img width="20%" src="../images/<?php echo $item['img'] ?>" class="mt-1">
                            </div>
                            <h2>كلمة السر</h2>
                            <input type="password" class="input" name="password" placeholder="كلمة السر" />
                            <button class="btn">تحديث</button>
                    </div>
                    </form>

                    <!-- End Profile -->
                    <!-- Start Payment  -->
                    <div class="payment tabshow" id="show">
                        <h1>معلومات الدفع</h1>
                        <h2>طريقة الدفع</h2>
                        <input type="text" class="input" placeholder="el mafrod tb2a select" />
                        <h2>عنوان وصول الفواتير</h2>
                        <input type="text" class="input" placeholder="ادخل العنوان" />
                        <h2>رقم المنطقة</h2>
                        <input type="text" class="input" placeholder="ex:097-247" />
                        <h2>تاريخ الفاتورة</h2>
                        <input type="text" class="input" placeholder="ex:April 30,1997" />
                        <h2>بطاقة الدفع</h2>
                        <input type="password" class="input" placeholder="msh 3arf a el mafrod ytktb" />
                        <button class="btn">تحديث</button>
                    </div>
                    <!-- End Payment  -->
                    <!-- Start Subscription  -->
                    <!-- <div class="subscription tabshow">
              <h1>Subscription Info</h1>
              <h2>Payment Date</h2>
              <p>ay klam ay 7aga</p>
              <h2>Next Charges</h2>
              <p>5454$ <span>incloud taxes</span></p>
              <h2>Plan</h2>
              <p>ay klam brdo :D</p>
              <h2>Monthely</h2>
              <p>245665.5$/month</p>
              <button class="btn">Update</button>
            </div> -->
                    <!-- End Subscription  -->
                    <!-- Strat Privacy Settings  -->
                    <!-- <div class="privacy tabshow" id="show">
                        <h1>إعدادات الخصوصية</h1>
                        <h2>إدارة إشعارات البريد الإلكتروني</h2>
                        <p></p>
                        <h2>Manage Privacy Settings</h2>
                        <p></p>
                        <h2>View Terms Of User</h2>
                        <p></p>
                        <h2>Personalized Ad Experience</h2>
                        <p></p>
                        <h2>Protect Account</h2>
                        <p></p>
                        <button class="btn">تحديث</button>
                    </div> -->
                    <!-- End Privacy Settings  -->
                    <!-- Start Settings  -->
                    <!-- <div class="settings tabshow" id="show">
                        <h1>Account Settings</h1>
                        <h2>Synce Followings</h2>
                        <p></p>
                        <h2>Hold Subscription</h2>
                        <p></p>
                        <h2>Cancel Subscription</h2>
                        <p></p>
                        <h2>Your Devices</h2>
                        <p></p>
                        <h2>Beb beeb beb</h2>
                        <p></p>
                        <button class="btn">تحديث</button>
                    </div> -->
                    <!-- End Settings  -->
                </div>
                <!-- </div> -->
            </div>

        </div>
    </div>

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
                            <img src="../stocks/logo.png" style="width: 100px" alt="" />
                        </h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p class=" bg-transparent border-0 mb-0">اول منصة عربية للحرفيين</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=" col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">الخدمات</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p class=" bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none ">سباكة</a>
                        </p>
                        <p class=" bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">نقاشة</a>
                        </p>
                        <p class=" bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">اعمال يدوية</a>
                        </p>
                        <p class=" bg-transparent border-0 mb-0">
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
                        <p class=" bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">حسابك الشخصي</a>
                        </p>
                        <p class=" bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">انضم الينا</a>
                        </p>
                        <p class=" bg-transparent border-0 mb-0">
                            <a href=" #!" class="text-dark text-decoration-none">اراء العملاء</a>
                        </p>
                        <p class=" bg-transparent border-0 mb-0">
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
                        <p class=" bg-transparent border-0 mb-0"><i class=" fas fa-home mr-3"></i>اسوان، مصر</p>
                        <p class=" bg-transparent border-0 mb-0"><i class=" fas fa-envelope mr-3"></i> info@example.com
                        </p>
                        <p class=" bg-transparent border-0 mb-0"><i class=" fas fa-phone mr-3"></i> +20 0111291277</p>
                        <p class=" bg-transparent border-0 mb-0"><i class=" fas fa-print mr-3"></i> +20 01025202434</p>
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
    <script src="../index.js"></script>
</body>

</html>