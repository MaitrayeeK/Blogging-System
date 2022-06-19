<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li>Blog Details</li>
          </ol>
        </div>

      </div>
    </div> --><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
    
        <div class="row g-5" style="margin-top: 1rem;">
          <?php foreach ($blog as $data) {
                ?>

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="http://localhost/TechBlog/uploads/images/<?php echo $data['img'];?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?php echo $data['heading'];?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i><?php foreach ($user as $userdata) {
                  if($data['userid'] == $userdata['id']) {
                    echo $userdata['name'];
                  }
                }
              ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time><?php echo $data['created_date'];?></time></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> -->
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <?php echo $data['description'];?>
              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="http://localhost/TechBlog/Dashboard/Category_blogs/<?php echo $data['categoryid'];?>"><?php foreach ($category as $cdata) {
                  if($data['categoryid'] == $cdata['id']) {
                    echo $cdata['name'];
                  }
                }
              ?></a></li>
                </ul>

               <!--  <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul> -->
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->
            <?php foreach ($user as $userdata) {
                  if($data['userid'] == $userdata['id']) {
                    ?>
                    <div class="post-author d-flex align-items-center">
              <img src="http://localhost/TechBlog/uploads/images/<?php echo $userdata['img'];?>" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4><?php echo $userdata['name'];?></h4>
                <div class="social-links">
                  <a href="<?php echo prep_url($userdata['twitter']);?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo prep_url($userdata['facebook']);?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo prep_url($userdata['instagram']);?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?php echo prep_url($userdata['linkedin']);?>"><i class="bi bi-linkedin"></i></a>
                </div>
                <!-- <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p> -->
              </div>
            </div> 
                    <?php
                  }
                }
              ?>

            <!-- End post author-->
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
            </div>
              <?php
            }
            ?>

            <div class="reply-form" style="padding: 1rem;">

                <form action="http://localhost/TechBlog/Dashboard/Addcomment" method="post">
                  <div class="row">
                    <div class="col form-group">
                      <input type="hidden" name="blogid" value="<?php echo $data['id']?>">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Post Comment" style="margin-top: 1rem;">

                </form>

              </div>

          </div>
          <?php
              }
              ?>

          <div class="col-lg-4">

            <div class="sidebar">

              <!--  <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div> --> <!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <?php foreach ($category as $data) {
                    ?>
                    <li><a href="http://localhost/TechBlog/Dashboard/Category_blogs/<?php echo $data['id'];?>"><?php echo $data['name'];?></a></li>
                    <?php
                  }
                  ?>
                </ul>
              </div><!-- End sidebar categories-->
              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="mt-3">
                  <?php foreach ($recent as $post) {
                    ?>
                    <div class="post-item mt-3">
                    <img src="http://localhost/TechBlog/uploads/images/<?php echo $post['img'];?>" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="http://localhost/TechBlog/Dashboard/blogdetails/<?php echo $post['id'];?>"><?php echo $post['heading'];?></a></h4>
                      <time datetime="2020-01-01"><?php echo $post['created_date'];?></time>
                    </div>
                  </div>
                    <?php
                  }
                  ?>
                </div>
              </div>

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main>