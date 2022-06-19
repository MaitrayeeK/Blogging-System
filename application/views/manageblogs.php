<section id="featured-services" class="featured-services">
      <div class="container">
        <?php echo @$error;?>
        <div class="row gy-4">
        <?php foreach ($result as $data) {
          ?>
          
          <div class="col-xl-6 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"></div><span class="post-date"><?php echo $data['created_date'];?></span>
              <span class="post-author"><?php foreach ($user as $userdata) {
                  if($data['userid'] == $userdata['id']) {
                    echo $userdata['name'];
                  }
                }
              ?></span>
              <input type="hidden" name="blogid" value="<?php echo $data['id'];?>">
              <h4><?php echo $data['heading'];?></h4>
              <p><?php echo $data['description'];?></p>
              <p class="text-danger"><a href="http://localhost/TechBlog/Admin/deleteblog/<?php echo $data['id'];?>">Delete</a></p>
            </div>
          </div><!-- End Service Item -->
        
        <?php
      }
        ?>
        </div>

      </div>
    </section>