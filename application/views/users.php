<section id="featured-services" class="featured-services">
  <div class="container">
    <table class="table align-middle mb-2 bg-white" style="margin-top: 2rem;">
      <thead class="bg-light">
        <tr>
          <th>User</th>
          <th>Twitter</th>
          <th>Facebook</th>
          <th>Linkedin</th>
          <th>Instagram</th>
          <th>Joining date</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($user as $userdata) {
          ?>
          <tr>
          <td>
            <div class="d-flex align-items-center">
              <img
                  src="http://localhost/TechBlog/uploads/images/<?php echo $userdata['img'];?>"
                  alt=""
                  style="width: 45px; height: 45px"
                  class="rounded-circle"
                  />
              <div class="ms-3">
                <p class="fw-bold mb-1"><?php echo $userdata['name'];?></p>
                <p class="text-muted mb-0"><?php echo $userdata['phone'];?></p>
                <p class="text-muted mb-0"><?php echo $userdata['email'];?></p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-muted mb-0"><?php echo $userdata['twitter'];?></p>
          </td>
          <td>
            <p class="text-muted mb-0"><?php echo $userdata['facebook'];?></p>
          </td>
          <td>
            <p class="text-muted mb-0"><?php echo $userdata['linkedin'];?></p>
          </td>
          <td>
            <p class="text-muted mb-0"><?php echo $userdata['instagram'];?></p>
          </td>
          <td>
            <p class="text-muted mb-0"><?php echo $userdata['created_date'];?></p>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</section>