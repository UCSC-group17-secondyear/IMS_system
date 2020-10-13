<link rel="stylesheet" type="text/css" href="ModelStyle.css">
<link rel="stylesheet" type="text/css" href="formStyle.css">
<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Login Form</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
    <div class="loginform">
      	<form action="" method="post">
	        <div class="imgcontainer">
	         	<img src="imsLOGO.jpg" alt="Avatar" class="avatar">
	        </div>

        	<div class="container">
          		<input type="text" placeholder="Enter Username" name="uname" required>

          		<input type="password" placeholder="Enter Password" name="psw" required>

          		<button type="submit" class="savebtn">Login</button>

          		<div class="psw"><a href="forgotpwdV.php">Forgot your password?</a></div>
          
        	</div>
      	</form>
      <button type="button" class="logincancelbtn"><a href="homePage.php">Cancel</a></button>
            <div class="psw">No account yet?<a href="signUp.php"> Sign up</a></div>
    </div>
  </div>
</div>

<script type="text/javascript">
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on the button, open the modal
	btn.onclick = function() {
	  modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}
</script>