<main id="main">

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
    
        <div class="row g-5" style="margin-top: 1rem;">

          <div class="col-lg-8">
            <?php echo @$error;?>
            <?php foreach ($comment as $commentdata) {
              ?>
            <div class="comments">
              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="http://localhost/TechBlog/uploads/images/<?php foreach ($user as $userdata) {
                  if($commentdata['userid'] == $userdata['id']) {
                    echo $userdata['img'];
                  }
                }
              ?>" alt=""></div>
                  <div>
                    <h5><?php foreach ($user as $userdata) {
                  if($commentdata['userid'] == $userdata['id']) {
                    echo $userdata['name'];
                  }
                }
              ?> <!-- <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a> --></h5>
                    <time datetime="2020-01-01"><?php echo $commentdata['created_date'];?></time>
                    <p>
                      <?php echo $commentdata['comment'];?>
                    </p>
                  </div>
                </div>
              </div>
              <p class="text-danger"><a href="http://localhost/TechBlog/Admin/deletecomment/<?php echo $commentdata['id'];?>">Delete</a></p>
            </div>
              <?php
            }
            ?>

          </div>

        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main>