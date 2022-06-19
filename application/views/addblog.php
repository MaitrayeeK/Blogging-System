<section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Add Blog</h2>
          <!-- <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>-->
        </div>

      </div>

      <!-- <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div> --><!-- End Google Maps -->

      <div class="container">

        <div class="row gy-5 gx-lg-5">
    

        <?php echo form_open_multipart('Dashboard/Addblog');?>
        <!-- <form method="post" action="http://localhost/TechBlog/Dashboard/Addblog"> -->
          <div class="form-outline mb-1">
            <input type="text" id="subject" name="subject" class="form-control form-control-lg"
              placeholder="Subject" />
              <input type="hidden" class="form-control" id="username" name="username" value="<?php echo $userid; ?>">
            <!-- <label class="form-label" for="form3Example3">Email address</label> -->
          </div>
          
          <div class="form-outline mb-1">
            <select class="form-control" name="category" id="category">
                  <option selected>Select Category</option>
                  <?php
                    foreach ($result as $data) {
                      ?>
                      <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                      <?php
                        }
                  ?>
            </select>
          </div>

          <div class="form-outline mb-1">
            <textarea class="form-control" name="description" id="description" placeholder="Description" required rows="15"></textarea>
          </div>

          <div class="form-outline mb-1">
              <input type="file" id="idimg" name="image" class="form-control form-control-lg" required />
                <!-- <label class="form-label" for="form3Example4">Password</label> -->
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Addblog">
          </div>
        <!-- </form> -->

        </div>

      </div>
    </section>