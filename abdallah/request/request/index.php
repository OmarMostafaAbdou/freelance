<?php
include_once("request.php");
if (!empty($_POST)) {

    inserPost($_POST);

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
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--main css style -->
    <link rel="stylesheet" href="../css/index.css" />
    <!-- nav css  -->
    <link rel="stylesheet" href="../css/nav.css" />
    <title>طلب مشروع</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <!-- logo -->
            <a class="navbar-brand" href="index.html">
                <img src="../images/logo.png" alt="logo" height="50" />
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
                            id="offcanvasNavbarLabel" src="../images/logoo-blue-red.png" alt="logo" />
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

    <div class="container rounded mt-4" id="cont">
        <div class="row" id="row">
            <div class="col d-flex flex-column">
                <div class="userInfo">
                    <h1>طلب مشروع</h1>
                    <form action="" enctype="multipart/form-data" method="POST">
                        <div class="form mb-2">
                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text">السعر</span>
                                <span class="input-group-text">جم</span>
                                <input type="text" class="form-control" name="price"
                                    aria-label="Dollar amount (with dot and two decimal places)" />
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">الوصف</span>
                                <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                            </div>
                            <li class="nav-item dropdown mt-3">
                                <h5 class="dropdown-toggle" role="button" data-bs-toggle="dropdown">
                                    أختر التصنيف
                                </h5>

                                <ul class="dropdown-menu">
                                    <select class="form-select form-select-sm" name="service_id"
                                        aria-label="form-select-sm example">
                                        <?php
                                        foreach ($services as $service) {
                                            echo "<option class='dropdown-item' value='$service[id]'>$service[name]</option>";
                                        }

                                        ?>
                                    </select>
                                </ul>
                            </li>
                        </div>
                        <button class="btn btnPost">نشر</button>
                    </form>
                </div>
            </div>
            <div class="col-2" id="col">
                <div class="user">
                    <?php
                    foreach ($result as $item) {
                        echo "<img src='../images/$item[img]' class='tm-list-item-img mb-1 userImg' >";
                        echo "<p class='userName'>$item[name]</p>";
                        echo "<p class='userTitle'>$item[role]</p>";
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="row lastRow" id="row">
            <div class="col">
                <div class="userInfo">
                    <h1 class="special">السجل</h1>
                    <div class="row" id="cardRow">

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
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>

</html>