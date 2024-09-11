<?php
include_once("functions.php");
$result = getPost($_GET['id']);
$comments=getComment($_GET['id']);
// ----comments------//
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $comment_content = $_POST['comment_content'];
  $comment_id = $_POST['comment_post_id'];
  addComment($comment_content, $comment_id);
}
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
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <!-- font Awesome Link -->
  <link rel="stylesheet" href="CSS/all.min.css">
  <!-- CSS Link -->
  <link rel="stylesheet" href="CSS/communitty.css">
  <link rel="stylesheet" href="CSS/details.css">
</head>

<body>
  <!-- Nav-Bar -->
  <nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">

      <!-- logo -->
      <a class="navbar-brand" href="index.html">
        <img src="stocks/logo.png" alt="logo" height="50">
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
        <button type="button" id="signin" class="btn btn-primary" href="login.html">تسجيل الدخول</button>
        <button type="button" id="signup" class="btn btn-light" href="signup.html">حساب جديد</button>
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
  <!--Page-Header  -->
  <div class="page-header">
    <div class="row">
      <nav>
        <a href="/HTML/index.html">الرئيسية</a><a href="#">/ المجتمع</a>
        <a href="#">/ نماذج أعمال قمت بتنفيذها</a>
      </nav>
      <div id="header-group" class="row">
        <?php

        echo "   <div class='heading col-lg-9 col-8 full_width'>
          <div class='row mt-3'>
            <h4> $result[post_title]</h4>
          </div>
        </div>";
        ?>
        <div class="col-lg-3 col-4 full_width">
          <button type="submit" class="add-btn"><i class="fa-solid fa-plus"></i> أضف تعليق
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--Content  -->
  <div class="grid-container">
    <?php
    echo "
    <div class='grid-item item1'>
      <p>$result[post_content] </p> 

    </div>";
    ?>
    <div class="grid-item item2">
      <p>عن الموضوع</p>
      <p>تاريخ النشر <span> منذ يوم و 3 ساعات</span></p>
      <div>
        <p>ناشر الموضوع</p>
        <img src="imgs/person.png">
        <a href="#">.Abd-Elraman A</a>
      </div>
    </div>
    <div class='grid-item item3' style="margin: 20px; padding: 20px;">
    <p> التعليقات</p>
    <?php
    foreach ($comments as $comment) {
      echo "
      <div>
      <img src='imgs/person.png'style='margin: 20px;'>
        <p>$comment[comment_content]</p>
  
      <a href='delete.php?c_id={$comment['id']}&p_id=$result[id]' class='add-btn' 'style='margin: 20px;'>حذف</a>
 </div>
 
    ";
    }
    ?>
    </div>
    <div class="grid-item item4"style="height:100vh">

      <p> آخر المساهمات</p>
      <div>
        <img src="imgs/person.png">
        <a href="#">.Abd-Elraman A</a>
      </div>
      <div>
        <img src="imgs/person.png">
        <a href="#">.Abd-Elraman A</a>
      </div>
      <div>
        <img src="imgs/person.png">
        <a href="#">.Abd-Elraman A</a>
      </div>
      <div>
        <img src="imgs/person.png">
        <a href="#">.Abd-Elraman A</a>
      </div>
      <div>
        <img src="imgs/person.png">
        <a href="#">.Abd-Elraman A</a>
      </div>
    </div>
    <div class='grid-item item5'>
    <h5>أضف تعليق</h5>
    <form method="POST" action=""> 
        <div>
            <textarea name='comment_content' id="textarea" cols='80' rows='5'></textarea>
        </div>
        <div>
        <label for="confirm">
          <input type="checkbox" name="confirm" id="confirm" value="0">
          <span>التعليق لا يحتوي على معلومات اتصال خارجية ولا يخالف</span>
          <a href="#"> شروط موقع فريلانسر مننا و علينا</a>
        </label>
      </div>
        <div>    
        <input type="hidden" name="comment_post_id" value="<?php echo $_GET['id'] ?>">
        <button type="submit" class="add-btn">أرسل</button>
      </div>
    </form>
</div>
    </div>
  </div>






  <!-- bootstrab JS -->
  <script src="/JS/bootstrap.bundle.js"></script>
  <!-- Font Awesome JS -->
  <script src="/JS/all.min.js"></script>

</body>

</html>