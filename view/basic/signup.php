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
	              <label>User name</label>
	            </div>
	            <div class="col-75">
	              <input type="text" name="empid" required/>
	              <p>Give the first three letters of the private email given to you by UCSC.</p>
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
	              <label>Designation</label>
	            </div>
	            <div class="col-75">
				  <select name="designation" required>
                    <option value="">...</option>
                    <option value="lecturer">Lecturer</option>
                    <option value="non-academic-staff">Non Academic Staff Member</option>
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
	              <input type="password" name="password" required/>
	              <p>Password is required minimum eight characters, at least one uppercase letter, one lowercase letter, one number, and one special character(only @$!%*?&)</p>
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
    </script>

</main>

<?php
	 require 'footer.php';
?>