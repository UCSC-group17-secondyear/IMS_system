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
	              <label>Employee id</label>
	            </div>
	            <div class="col-75">
	              <input type="text" name="empid" required/>
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
	              <label>Mail address</label>
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
	            </div>
			</div>
			<div class="row">
				<b><p>Password require Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character(only @$!%*?&)</p></b>
			</div>

	        <div class="row">
	            <div class="col-25">
	              <label>Confirm password</label>
	            </div>
	            <div class="col-75">
	              <input type="password" name="conpassword" required/>
	            </div>
	        </div>

         	<button type="submit" class="signupbtn" name="signup-submit">Signup</button>
         	<button type="submit" class="cancelbtn">Cancel</button>
		</form>
	</div>
</main>

<?php
	 require 'footer.php';
?>