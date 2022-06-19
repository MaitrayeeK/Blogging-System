 <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </div>

        <div class="row">

          <?php foreach ($result as $data) {
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
          

          <!-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="http://localhost/TechBlog/assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Fri, September 05</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
              <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis aliquid necessitatibus tempora consectetur doloribus...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
            <div class="post-box">
              <div class="post-img"><img src="http://localhost/TechBlog/assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, July 27</span>
                <span class="post-author"> / Lisa Hunter</span>
              </div>
              <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
              <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam veritatis dicta nihil...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div> -->

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->