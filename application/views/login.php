<main id="main">
	<div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Log-In</h2>
        </div>

      </div>
    </div>
	 <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="http://localhost/TechBlog/assets/img/myimg/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="post" action="http://localhost/TechBlog/Login/login">
          <?php echo @$error;?>
          <div class="form-outline mb-4">
            <input type="email" id="idemail" name="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <!-- <label class="form-label" for="form3Example3">Email address</label> -->
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="idpassword" name="pass" class="form-control form-control-lg"
              placeholder="Enter password" />
            <!-- <label class="form-label" for="form3Example4">Password</label> -->
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login">
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="http://localhost/TechBlog/Signup" class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
 </main>