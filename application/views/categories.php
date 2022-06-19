<section id="featured-services" class="featured-services">
  <div class="container">
    <table class="table align-middle mb-2 bg-white" style="margin-top: 2rem;">
      <thead class="bg-light">
        <tr>
          <th>No</th>
          <th>Name</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($result as $data) {
          ?>
          <tr>
          <td>
            <p class="text-muted mb-0"><?php echo $data['id'];?></p>
          </td>
          <td>
            <p class="text-muted mb-0"><?php echo $data['name'];?></p>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <div class="d-flex">
      <a href="javascript:showform()" class="btn-get-started scrollto">Add new category</a>
    </div>
  </div>
</section>
<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
<form method="post" id="catform" action="http://localhost/TechBlog/Admin/addcat" style="display: none;">

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="text" id="idcat" name="cate" class="form-control form-control-lg"
              placeholder="Enter Category name" />
            <!-- <label class="form-label" for="form3Example4">Password</label> -->
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="ADD">
          </div>

        </form>
      </div>

      <script type="text/javascript">
        function showform() {
          console.log("here");
          var obj = document.getElementById("catform");
          obj.style["display"] = "block";
        }
      </script>

    </body>
    </html>
