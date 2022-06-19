  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
      <?php if($is_user_loggedin) {
        ?>
        <h2>Welcome <span><?php echo $name;?></span></h2>
      <?php } else {
        ?>
        <h2>Welcome to <span>TechBlog</span></h2>
        <?php
      }
      ?> 
      <p>Blogging is not a rocket science. 
          <br>It's about yourself and putting what you have into it.</p>
          <?php if($is_admin){
            ?>
            <div class="d-flex">
              <a href="http://localhost/TechBlog/Admin/Manage" class="btn-get-started scrollto">Manage</a> 
            </div>
            <?php
          }
          ?>
        <?php if(!$is_user_loggedin) {
          ?>
           <div class="d-flex">
              <a href="http://localhost/TechBlog/Signup" class="btn-get-started scrollto">Get Started</a> 
            </div>
            <div class="text-center text-lg-start mt-0 pt-2">
              <a class="fw-bold" href="http://localhost/TechBlog/Login" class="link-danger">Already a user?</a>
            </div>
          <?php
        }
        ?>
        <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
    </div>
  </section>

  <main id="main">


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
