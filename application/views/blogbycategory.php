<section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </div>

        <div class="row">

          <?php foreach ($blog as $data) {
            ?>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="http://localhost/TechBlog/uploads/images/<?php echo $data['img'];?>" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date"><?php echo $data['created_date'];?></span>
                <span class="post-author"><?php foreach ($user as $userdata) {
                  if($data['userid'] == $userdata['id']) {
                    echo $userdata['name'];
                  }
                }
              ?></span>
              </div>
              <h3 class="post-title"><?php echo $data['heading'];?></h3>
              <!-- <p><?php //echo $data['description'];?></p> -->
              <a href="http://localhost/TechBlog/Dashboard/blogdetails/<?php echo $data['id'];?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <?php
          }
          ?>

        </div>

      </div>

    </section>