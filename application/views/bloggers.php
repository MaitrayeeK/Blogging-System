<section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Bloggers</h2>
          <!-- <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p> -->
        </div>

        <div class="row gy-5">

          <?php foreach ($user as $data) {
            ?>
            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="http://localhost/TechBlog/uploads/images/<?php echo $data['img'];?>" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href="<?php echo prep_url($data['twitter']);?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo prep_url($data['facebook']);?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo prep_url($data['instagram']);?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?php echo prep_url($data['linkedin']);?>"><i class="bi bi-linkedin"></i></a>
                </div>
                <span id="name"><h4><?php echo $data['name'];?></h4></span>
                <a href="" class="readmore stretched-link" data-bs-toggle="modal" data-bs-target="#modalLoginAvatar"></a>
                <!-- <span>Chief Executive Officer</span> -->
              </div>
            </div>
          </div>
          <?php
            }
          ?>

          <!-- End Team Member -->

         <!--  <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="http://localhost/TechBlog/assets/img/team/team-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="http://localhost/TechBlog/assets/img/team/team-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div> -->

        </div>

      </div>
      <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.webp" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <span id="modalname"><h5 class="mt-1 mb-2"></h5></span>

        <div class="md-form ml-0 mr-0">
          <div class="social">
                  <a href="<?php echo prep_url($data['twitter']);?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo prep_url($data['facebook']);?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo prep_url($data['instagram']);?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?php echo prep_url($data['linkedin']);?>"><i class="bi bi-linkedin"></i></a>
                </div>
        </div>

        <div class="text-center mt-4">
          <button class="btn btn-cyan mt-1">Login <i class="fas fa-sign-in ml-1"></i></button>
        </div>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
    </section>