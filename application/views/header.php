<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="http://localhost/TechBlog/assets/img/favicon.png" rel="icon">
  <link href="http://localhost/TechBlog/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://localhost/TechBlog/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/TechBlog/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="http://localhost/TechBlog/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="http://localhost/TechBlog/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="http://localhost/TechBlog/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="http://localhost/TechBlog/assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="http://localhost/TechBlog/assets/css/main.css" rel="stylesheet">
  <link href="http://localhost/TechBlog/assets/css/styles.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>TechBlog<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar" style="margin-right: 7rem;">
        <ul>
            <li><a href="http://localhost/TechBlog/Dashboard"><span>Home</span>
          <!-- <i class="bi bi-chevron-down dropdown-indicator"></i> -->
          </a>
            <!-- <ul>
              <li><a href="index.html" class="active">Home 1 - index.html</a></li>
              <li><a href="index-2.html">Home 2 - index-2.html</a></li>
              <li><a href="index-3.html">Home 3 - index-3.html</a></li>
              <li><a href="index-4.html">Home 4 - index-4.html</a></li>
            </ul> -->
          </li>

          <!-- <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="index.html#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">Column 1 link 1</a>
                <a href="#">Column 1 link 2</a>
                <a href="#">Column 1 link 3</a>
              </li>
              <li>
                <a href="#">Column 2 link 1</a>
                <a href="#">Column 2 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 3 link 1</a>
                <a href="#">Column 3 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 4 link 1</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
            </ul>
          </li> -->
          <li class="dropdown"><a href="http://localhost/TechBlog/Dashboard/blogs"><span>Blogs</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <?php foreach ($category as $data) {
                    ?>
              <li><a href="http://localhost/TechBlog/Dashboard/Category_blogs/<?php echo $data['id'];?>"><?php echo $data['name'];?></a></li>
                    <?php
                  }
                  ?>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="http://localhost/TechBlog/Dashboard/bloggers">Bloggers</a></li>
          <!-- <li><a class="nav-link scrollto" href="http://localhost/TechBlog/Home/contact">Contact</a></li> -->
          <?php if($is_user_loggedin) {
            ?>
            <li class="dropdown">
                    <a href="http://localhost/TechBlog/Dashboard/profile"><i class="bi bi-person-circle" style="font-size: 1.5rem;"></i><i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <!-- <li><a href="#!">Settings</a></li> -->
                        <li><hr class="dropdown-divider" /></li>
                        <li><a href="http://localhost/TechBlog/Logout">Logout</a></li>
                    </ul>
          </li>
          <?php
          } else {
            ?>
            <a class="btn-getstarted scrollto" href="http://localhost/TechBlog/Signup">Get Started</a>
            <?php
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <!-- <a class="btn-getstarted scrollto" href="Signup" style="visibility: hidden;">Get Started</a> -->

    </div>
  </header><!-- End Header -->
