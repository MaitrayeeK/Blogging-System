

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sign-Up</h2>
          <ol>
            <li><a href="http://localhost/TechBlog/Home">Home</a></li>
            <li>Sign-Up</li>
          </ol>
        </div>

      </div>
    </div> --><!-- End Breadcrumbs -->


 <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Sign-Up</h2>
          <!-- <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p> -->
        </div>

      </div>

      <!-- <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>End Google Maps -->

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">
            <div class="info">
              <img src="http://localhost/TechBlog/assets/img/myimg/draw1.webp" height="260px" width="320px">
            </div>
          </div>

          <div class="col-lg-8">
            <?php echo form_open_multipart('Signup/Register');?>
            <!-- <form method="post" action="http://localhost/TechBlog/Signup/Register"> -->
          <?php echo @$error;?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-outline mb-4">
                <input type="text" id="idname" name="name" class="form-control form-control-lg"
                  placeholder="Enter name" required />
                <!-- <label class="form-label" for="form3Example3">Email address</label> -->
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-outline mb-3">
                <input type="tel" id="idpassword" name="phone" class="form-control form-control-lg"
                  placeholder="Enter phone" pattern="[0-9]{5}[0-9]{5}" required />
                <!-- <label class="form-label" for="form3Example4">Password</label> -->
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-outline mb-4">
                <input type="email" id="idemail" name="email" class="form-control form-control-lg"
                  placeholder="Enter email" required />
                <!-- <label class="form-label" for="form3Example3">Email address</label> -->
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-outline mb-3">
                <input type="password" id="idpassword" name="pass" class="form-control form-control-lg"
                  placeholder="Enter password" required />
                <!-- <label class="form-label" for="form3Example4">Password</label> -->
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-outline mb-4">
                <input type="text" id="twitter" name="twitter" class="form-control form-control-lg"
                  placeholder="Twitter" required />
                <!-- <label class="form-label" for="form3Example3">Email address</label> -->
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-outline mb-3">
                <input type="text" id="facebook" name="facebook" class="form-control form-control-lg"
                  placeholder="Facebook" required />
                <!-- <label class="form-label" for="form3Example4">Password</label> -->
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-outline mb-4">
                <input type="text" id="linkedin" name="linkedin" class="form-control form-control-lg"
                  placeholder="Linkedin" required />
                <!-- <label class="form-label" for="form3Example3">Email address</label> -->
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-outline mb-3">
                <input type="text" id="instagram" name="instagram" class="form-control form-control-lg"
                  placeholder="Instagram" required />
                <!-- <label class="form-label" for="form3Example4">Password</label> -->
              </div>
            </div>
          </div>

          <div class="form-outline mb-3">
                <input type="file" id="idimg" name="image" class="form-control form-control-lg" required />
                <!-- <label class="form-label" for="form3Example4">Password</label> -->
              </div>

          <div class="text-center">
            <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Signup">
            <p class="small fw-bold mt-2 pt-1 mb-0"> <a href="http://localhost/TechBlog/Login" class="link-danger">Already a user?</a></p>
          </div>

        <!-- </form> -->
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>
  </main><!-- End #main -->