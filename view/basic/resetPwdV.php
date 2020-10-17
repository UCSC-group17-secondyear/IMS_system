<main>
  <title>Reset Password</title>
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
        <h2>Reset Password</h2>
        <p>
          <input type="password" placeholder="Enter password" name="pwd" required/>
        </p>
        
        <p>
          <input type="password" placeholder="Confirm Password" name="conpwd" required/>
        </p>
        
        <p>
          <button type="submit" name="savepwd">Save Password</button>
        </p>
      </form>
  </div>
  <?php
    require "footer.php";
  ?>
</main>