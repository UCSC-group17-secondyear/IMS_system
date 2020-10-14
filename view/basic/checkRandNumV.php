<main>
  <title>Check verification code</title>
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
    <form action="../../controller/pwdControllerTwo.php" method="POST">
        <h2>Verification Code</h2>
        <p>
          <label>Enter received code</label>
          <input type="text" placeholder="verification code" name="code" required/>
        </p>
        
        
        <p>
          <button type="submit" name="codecheck-submit">Verify</button>
        </p>
        <p>
          
      </form>
      
  </div>
  <?php
    require "footer.php";
  ?>
</main>