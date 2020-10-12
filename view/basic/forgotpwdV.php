<main>
  <title>Password Reset</title>
  <?php
    require "header.php";
  ?>

  <div class="header"></div>

  <div class="side-nav">
    <!-- <div>
      <h2>IMS of Academic And Publication Division </h2>
    </div> -->
  </div>
  <div class="content">
    <form action="../../controller/pwdController.php" method="POST">
        <h2>Password Reset</h2>
        <p>
          <label>Employee ID</label>
          <input id="empid" value="" name="empid" type="text" placeholder="Employee id" required="required" />
        </p>

        <p>
          <button type="submit" name="submit_uname">Enter</button>
        </p>
      </form>
  </div>
  <?php
    require "footer.php";
  ?>
</main>
