<?php
  require "topnav.php";
?>

<main>
  <title>Password Reset</title>

  <div class="contentForm" style="margin-top:227px; margin-bottom:227px;">
    <form action="../../controller/pwdController.php" method="POST">
      <h2>Password Reset</h2>
      <div class="row">
        <div class="col-25">
          <label>Enter your user name</label>
        </div>
        <div class="col-75">
          <input id="empid" value="" name="empid" type="text" placeholder="User name" required="required" /> <br>
        </div>
      </div>

      <button type="submit" class="subbtn" name="submit_uname">Enter</button>
      <button type="submit" class="cancelbtn"><a href="login.php" style="text-decoration: none; color:white">Cancel</a></button>
    </form>
    
  </div>
</main>

<?php
  require "footer.php";
?>