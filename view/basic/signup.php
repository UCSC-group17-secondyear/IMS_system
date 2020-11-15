<?php
	require "topnav.php";
?>

<main>
	<title>Sign Up</title>

	<div class="signupForm">
		<form action="../../controller/SignupController.php" method="post">
			<h2>Sign Up Here</h2>
			<div class="row">
	            <div class="col-25">
	              <label>User name (first three letters of the university mail)</label>
	            </div>
	            <div class="col-75">
	              	<input id="username" type="text" name="empid" title="The first three letters of the private email given to you by UCSC should be entered" required/>
	              	<div id="usernameMSG">
				 		<p id="namelength" class="invalid" style="height: 7px; padding-bottom: 0px; padding-top: 0px; margin-top: -11px; border-bottom-width: 100px;">Length must be <b>3 characters</b></p>
					</div>
	            </div>
	         </div>

	        <div class="row">
	            <div class="col-25">
	              <label>Initials</label>
	            </div>
	            <div class="col-75">
	              <input type="text" name="initials" required/>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-25">
	              <label>Surname</label>
	            </div>
	            <div class="col-75">
	              <input type="text" name="sname" required/>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-25">
	              <label>E-mail address</label>
	            </div>
	            <div class="col-75">
	              <input type="email" name="email"/>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-25">
	              <label>Mobile number</label>
	            </div>
	            <div class="col-75">
	              <input type="text" name="mobile" required/>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-25">
	              <label>Telephone number</label>
	            </div>
	            <div class="col-75">
	              <input type="text" name="tp" />
	            </div>
	        </div>
	          
	        <div class="row">
	            <div class="col-25">
	              <label>Date of birth</label>
	            </div>
	            <div class="col-75">
	              <input type="date" name="dob" required/>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-25">
	              <label>Academic or Non-Academic</label>
	            </div>
	            <div class="col-75">
				  <select name="aca-or-non" required>
                    <option value="">Academic or Non Academic:</option>
                    <option value="academic-staff">Academic Staff Member</option>
                    <option value="non-academic-staff">Non Academic Staff Member</option>
                  </select>
	            </div>
			</div>
			
			<div class="row">
				<div class="col-25">
					<label>Enter designation</label>
				</div>
				<div class="col-75">
					<select name="designation"required>
						<option value="">Select designation: </option>
						<?php echo $_SESSION['design'] ?>
					</select>
				</div>
			</div>

	        <div class="row">
	            <div class="col-25">
	              <label>Date of appointment</label>
	            </div>
	            <div class="col-75">
	              <input type="date" name="appointment" required/>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-25">
	              <label>Password</label>

				</div>
	            <div class="col-75">
		            <input id="psw" type="password" name="password" title="Must contain at least one number and one uppercase and lowercase letter, one special character(only @$!%*?&) and at least 8 or more characters" required/>
		            <!-- <p>Password is required minimum eight characters, at least one uppercase letter, one lowercase letter, one number, and one special character(only @$!%*?&)</p> -->
	             	<div id="message">
				 		<h3>Password must contain the following:</h3>
				  		<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
						<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
				  		<p id="number" class="invalid">A <b>number</b></p>
				  		<!-- <p id="character" class="invalid">one <b>special character</b> (only @$!%*?&)</p> -->
				  		<p id="length" class="invalid">Minimum <b>8 characters</b></p>
					</div>
	            </div>
			</div>
			<!-- <div class="row">
				<b><p>Password is required minimum eight characters, at least one uppercase letter, one lowercase letter, one number, and one special character(only @$!%*?&)</p></b>
			</div> -->

	        <div class="row">
	            <div class="col-25">
	              <label>Confirm password</label>
	            </div>
	            <div class="col-75">
	              <input type="password" name="conpassword" required/>
	            </div>
	        </div>

         	<button type="submit" class="signupbtn" name="signup-submit">Signup</button>
         	<button type="submit" class="cancelbtn">
	         	<a href="homePageV.php">Cancel</a>
	         </button>
		</form>
	</div>
	<button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>

	<script type="text/javascript">
        var mybutton = document.getElementById("myTopBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }


        var myInput = document.getElementById("psw");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");
		var char = document.getElementById("character");

		var myUsername = document.getElementById("username");
		var uNameLength = document.getElementById("namelength");
		myUsername.onfocus = function() {
		  document.getElementById("usernameMSG").style.display = "block";
		}
		myUsername.onblur = function() {
		  document.getElementById("message").style.display = "none";
		}
		myUsername.onkeyup = function() {
			if(myUsername.value.length == 3) {
		    	uNameLength.classList.remove("invalid");
		    	uNameLength.classList.add("valid");
		  	} else {
		    	uNameLength.classList.remove("valid");
		    	uNameLength.classList.add("invalid");
		  	}
		}


		// When the user clicks on the password field, show the message box
		myInput.onfocus = function() {
		  document.getElementById("message").style.display = "block";
		}
		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function() {
		  document.getElementById("message").style.display = "none";
		}
		// When the user starts to type something inside the password field
		myInput.onkeyup = function() {
		  // Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if(myInput.value.match(lowerCaseLetters)) {  
			    letter.classList.remove("invalid");
			    letter.classList.add("valid");
			} else {
			    letter.classList.remove("valid");
			    letter.classList.add("invalid");
			}
		  
		  	// Validate capital letters
		  	var upperCaseLetters = /[A-Z]/g;
		  	if(myInput.value.match(upperCaseLetters)) {  
		    	capital.classList.remove("invalid");
		    	capital.classList.add("valid");
		  	} else {
		    	capital.classList.remove("valid");
		    	capital.classList.add("invalid");
		  	}

		  	// Validate numbers
		  	var numbers = /[0-9]/g;
		  	if(myInput.value.match(numbers)) {  
		    	number.classList.remove("invalid");
		    	number.classList.add("valid");
		  	} else {
		    	number.classList.remove("valid");
		    	number.classList.add("invalid");
		  	}

		  	if(myInput.value.length >= 8) {
		    	length.classList.remove("invalid");
		    	length.classList.add("valid");
		  	} else {
		    	length.classList.remove("valid");
		    	length.classList.add("invalid");
		  	}

		  	// var specialChar = /[@]/g;
		  	// if(myInput.value.match(specialChar)) {  
		   //  	specialChar.classList.remove("invalid");
		   //  	specialChar.classList.add("valid");
		  	// } else {
		   //  	specialChar.classList.remove("valid");
		   //  	specialChar.classList.add("invalid");
		  	// }
		  
		  	// Validate length
		  	
		}
    </script>

</main>

<?php
	 require 'footer.php';
?>