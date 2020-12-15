<?php
  require "topnav.php";
?>

<main>
    <title>Reset Password</title>

    <div class="signupForm" style="margin-top:195px; margin-bottom:195px;">
        <form action="../../controller/basicControllers/pwdController.php" method="POST">
          <h2>Reset Password</h2>

          <div class="row">
              <div class="col-25">
                  <label>Enter Password</label>
              </div>
              <div class="col-75">
                  <input type="password" placeholder="Enter password" name="pwd" required/>
              </div>

              <div class="col-25">
                  <label>Confirm Password</label>
              </div>
              <div class="col-75">
                  <input type="password" placeholder="Confirm Password" name="conpwd" required/>
              </div>
          </div>
          <button type="submit" name="savepwd" class="signupbtn">Save Password</button>
        </form>
        <button type="submit" class="cancelbtn"><a href="homePageV.php" style="text-decoration: none; color:white">Cancel</a></button>
    </div>
</main>

<?php
  require "footer.php";
?>