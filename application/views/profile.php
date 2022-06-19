<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
<?php
foreach ($result as $data) {
?>
          <div class="col-lg-5">
            <div class="about-img">
              <img src="http://localhost/TechBlog/uploads/images/<?php echo $data['img'];?>" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-7">

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Personal info</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Social links</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Blogs</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Name</h4>
                </div>
                <p><?php echo $data['name'];?></p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Phone</h4>
                </div>
                <p><?php echo $data['phone'];?></p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Email</h4>
                </div>
                <p><?php echo $data['email'];?></p>
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-linkedin"></i>
                  <h4></h4>
                </div>
                <p><?php echo $data['linkedin']; ?></p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-instagram"></i>
                  <h4></h4>
                </div>
                <p><?php echo $data['instagram']; ?></p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-facebook"></i>
                  <h4></h4>
                </div>
                <p><?php echo $data['facebook']; ?></p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-twitter"></i>
                  <h4></h4>
                </div>
                <p><?php echo $data['twitter']; ?></p>

              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">

                <?php foreach($blog as $result) {
                  ?>
                  <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="d-flex align-items-center mt-4">
                      <div class="post-box">
             <!--  <div class="post-img"><img src="http://localhost/TechBlog/uploads/images/<?php echo $result['img'];?>" class="img-fluid" alt=""></div> -->
              <div class="meta">
                <span class="post-date"><?php echo $result['created_date'];?></span>
              </div>
              <h3 class="post-title"><?php echo $result['heading'];?></h3>
              <!-- <p><?php //echo $data['description'];?></p> -->
              <a href="http://localhost/TechBlog/Dashboard/blogdetails/<?php echo $result['id'];?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
                    </div>
                    <br>
                  </div>
                  <?php
                }
                ?>

                <!-- <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                </div>
                <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p> -->

                <a href="http://localhost/TechBlog/Dashboard/blog" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Add BLOG</a>

              </div><!-- End Tab 3 Content -->

            </div>

          </div>

        </div>

      </div>
    </section>
<?php
    } 
?>