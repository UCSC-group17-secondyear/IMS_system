<?php
  require "topnav.php";
?>

<main>
  <title>Check verification code</title>

  <div class="signupForm" style="margin-top:227px; margin-bottom:227px;">
     <form action="../../controller/pwdController.php" method="POST">
        <h2>Verification Code</h2> 

        <div class="row">
          <div class="col-25">
              <label>Enter received code</label>
          </div>

          <div class="col-75">
              <input type="text" placeholder="verification code" name="code" required/>
          </div>
        </div>

        <button type="submit" name="codecheck-submit" class="signupbtn">Verify</button>
        
    </form>
    <button type="submit" class="cancelbtn"><a href="homePageV.php" style="text-decoration: none; color:white">Cancel</a></button>
  </div>
</main>

<?php
  require "footer.php";
?>