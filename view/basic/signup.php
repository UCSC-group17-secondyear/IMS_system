<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="icon" href="../assests/img/favicon1.png">
    <link rel="stylesheet" type="text/css" href="../assests/css/new.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
        <div class="topnav">
            <img src="../assests/img/cover_final.png" alt="" style="width: 16%; margin-left: 3px; margin-top:1px">
            
			<a href="../basic/homePageV.php"><i class="fa fa fa-home"></i>Home</a>
    				
        </div>
    </header>

	<div class="signupForm">
		<form action="../../controller/basicControllers/SignupController.php" method="post">
			<h2>Sign Up Here</h2>
			<div class="row">
	            <div class="col-25">
	              <label>USER NAME (first three letters of the university mail)</label>
	            </div>
	            <div class="col-75">
	              	<input id="username" type="text" name="empid" title="The first three letters of the private email given to you by UCSC should be entered" required/>
	              	<div id="usernameMSG">
				 		<p id="ucapital" class="valid">No <b>capital </b>letters.</p>
				 		<p id="spaceChar" class="valid">No <b>spaces</b></p>
				 		<p id="unumbers" class="valid">No <b>numbers</b></p>
				 		<p id="namelength" class="invalid">Length must be <b>three </b>characters.</p>
					</div>
	            </div>
	         </div>

	        <div class="row">
	            <div class="col-25">
	              	<label>INITIALS</label>
	            </div>
	            <div class="col-75">
	              	<input id="initials" type="text" name="initials" required/>
	              	<div id="initialsMSG">
				 		<p id="innumbers" class="valid">No <b>numbers</b></p>
					</div>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-25">
	              	<label>LAST NAME</label>
	            </div>
	            <div class="col-75">
	              	<input id="surname" type="text" name="sname" required/>
	              	<div id="surnameMSG">
				 		<p id="snumbers" class="valid">No <b>numbers</b></p>
					</div>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-25">
	              	<label>E-MAIL ADDRESS</label>
	            </div>
	            <div class="col-75" style="width: 15%">
	              	<input type="text" name="email1"/>
	            </div>
				<div class="col-75" style="width: 51%;">
	              	<input type="text" name="email2" value="@ucsc.cmb.ac.lk" readonly/>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-25">
	              	<label>MOBILE NUMBER</label>
	            </div>
	            <div class="col-75">
	              	<input id="mobile" type="text" name="mobile" min="0" required/>
	              	<div id="mobileMSG">
	              		<p id="mobilelength" class="invalid">There must be <b>ten </b>digits.</p>
	              	</div>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-25">
	              	<label>TELEPHONE NUMBER</label>
	            </div>
	            <div class="col-75">
	              	<input id="tp" type="text" name="tp" min="0" />
	              	<div id="tpMSG">
	              		<p id="tplength" class="invalid">There must be <b>ten </b>digits.</p>
	              	</div>
	            </div>
	        </div>
	          
	        <div class="row">
	            <div class="col-25">
	              	<label>DATE OF BIRTH</label>
	            </div>
	            <div class="col-75">
	              	<input type="date" name="dob" max="<?php echo date('Y-m-d'); ?>" id="birth-date" required/>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-25">
	              	<label>MEMBER TYPE</label>
	            </div>
	            <div class="col-75">
				  	<select name="aca-or-non" required>
                    <!-- <option value="">Your Member Type</option> -->
	                    <option value="academic-staff">Academic Staff Member</option>
	                    <option value="non-academic-staff">Non Academic Staff Member</option>
	                  </select>
	            </div>
			</div>
			
			<div class="row">
				<div class="col-25">
					<label>DESIGNATION</label>
				</div>
				<div class="col-75">
					<select name="designation"required>
						<option value="">Your Designation</option>
						<?php echo $_SESSION['design'] ?>
					</select>
				</div>
			</div>

	        <div class="row">
	            <div class="col-25">
	              <label>APPOINTMENT DATE</label>
	            </div>
	            <div class="col-75">
	              <input type="date" name="appointment" max="<?php echo date('Y-m-d'); ?>" id="app-date" onclick="checkDate()"; required/>
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-25">
	              <label>PASSWORD</label>

				</div>
	            <div class="col-75">
					<input id="psw" type="password" name="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
					<i class="fa fa-eye" id="eye" onclick="toggle()"></i>
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

	        <div class="row">
	            <div class="col-25">
	              <label>CONFIRM PASSWORD</label>
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

		// VALIDATE USER NAME---------------------------------
		var myUsername = document.getElementById("username");
		var uNameLength = document.getElementById("namelength");
		var ucapital = document.getElementById("ucapital");
		var space = document.getElementById("spaceChar");
		var unumbers = document.getElementById("unumbers");
		myUsername.onfocus = function() {
		  document.getElementById("usernameMSG").style.display = "block";
		}
		myUsername.onblur = function() {
		  document.getElementById("usernameMSG").style.display = "none";
		}
		myUsername.onkeyup = function() {
			var upperCaseLetters = /[A-Z]/g;
		  	if(myUsername.value.match(upperCaseLetters)) {  
		    	ucapital.classList.remove("valid");
		    	ucapital.classList.add("invalid");
		  	} else {
		    	ucapital.classList.remove("invalid");
		    	ucapital.classList.add("valid");
		  	}

		  	var spaces = /[ ]/g;
		  	if (myUsername.value.match(spaces)) {
		  		space.classList.remove("valid");
		    	space.classList.add("invalid");
		  	}
		  	else {
		    	space.classList.remove("invalid");
		    	space.classList.add("valid");
		  	}

		  	var digits = /[0-9]/g;
		  	if(myUsername.value.match(digits)) {  
		    	unumbers.classList.remove("valid");
		    	unumbers.classList.add("invalid");
		  	} else {
		    	unumbers.classList.remove("invalid");
		    	unumbers.classList.add("valid");
		  	}

		  	if(myUsername.value.length == 3) {
		    	uNameLength.classList.remove("invalid");
		    	uNameLength.classList.add("valid");
		  	} else {
		    	uNameLength.classList.remove("valid");
		    	uNameLength.classList.add("invalid");
		  	}
		}
		// --------------------------------------------------------

		// VALIDATE INITIALS ----------------------------------
		var myInitials = document.getElementById("initials");
		var innumbers = document.getElementById("innumbers");
		myInitials.onfocus = function() {
		  document.getElementById("initialsMSG").style.display = "block";
		}
		myInitials.onblur = function() {
		  document.getElementById("initialsMSG").style.display = "none";
		}
		myInitials.onkeyup = function() {
			var digits = /[0-9]/g;
		  	if(myInitials.value.match(digits)) {  
		    	innumbers.classList.remove("valid");
		    	innumbers.classList.add("invalid");
		  	} else {
		    	innumbers.classList.remove("invalid");
		    	innumbers.classList.add("valid");
		  	}
		}

		// ----------------------------------------------------

		// VALIDATE SURNAME ---------------------------------
		var mySurname = document.getElementById("surname");
		var snumbers = document.getElementById("snumbers");
		mySurname.onfocus = function() {
		  document.getElementById("surnameMSG").style.display = "block";
		}
		mySurname.onblur = function() {
		  document.getElementById("surnameMSG").style.display = "none";
		}
		mySurname.onkeyup = function() {
			var digits = /[0-9]/g;
		  	if(mySurname.value.match(digits)) {  
		    	snumbers.classList.remove("valid");
		    	snumbers.classList.add("invalid");
		  	} else {
		    	snumbers.classList.remove("invalid");
		    	snumbers.classList.add("valid");
		  	}
		}
		// ---------------------------------------------------

		// VALIDATE PHONE NUMBER------------------------------
		var tplength = document.getElementById("tplength");
		var mytp = document.getElementById("tp");
		mytp.onfocus = function() {
		  document.getElementById("tpMSG").style.display = "block";
		}
		mytp.onblur = function() {
		  document.getElementById("tpMSG").style.display = "none";
		}
		mytp.onkeyup = function() {
			if(mytp.value.length == 10) {
		    	tplength.classList.remove("invalid");
		    	tplength.classList.add("valid");
		  	} 
		  	else {
		    	tplength.classList.remove("valid");
		    	tplength.classList.add("invalid");
		  	}
		}
		// ---------------------------------------------------

		// VALIDATE MOBILE NUMBER-----------------------------
		var mobilelength = document.getElementById("mobilelength");
		var mymobile = document.getElementById("mobile");
		mymobile.onfocus = function() {
		  document.getElementById("mobileMSG").style.display = "block";
		}
		mymobile.onblur = function() {
		  document.getElementById("mobileMSG").style.display = "none";
		}
		mymobile.onkeyup = function() {
			if(mymobile.value.length == 10) {
		    	mobilelength.classList.remove("invalid");
		    	mobilelength.classList.add("valid");
		  	} 
		  	else {
		    	mobilelength.classList.remove("valid");
		    	mobilelength.classList.add("invalid");
		  	}
		}

		// VALIDATE PASSWORD -----------------------------------
		// When the user clicks on the password field, show the message box
		var myInput = document.getElementById("psw");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");
		var char = document.getElementById("character");

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
		}
		// --------------------------------------------------------


		// DISPLAY PASSWORD -------------------------------------
		// function showPasswordFunction() {
  		// 	var x = document.getElementById("psw");
  		// 	if (x.type === "password") {
    	// 		x.type = "text";
  		// 	} else {
    	// 		x.type = "password";
  		// 	}
		// }

		var state= false;
		function toggle(){
			if(state){
			document.getElementById("psw").setAttribute("type","password");
			document.getElementById("eye").style.color='#7a797e';
			state = false;
			}
			else{
			document.getElementById("psw").setAttribute("type","text");
			document.getElementById("eye").style.color='#5887ef';
			state = true;
			}
		}

		//Check dates
		function checkDate(){
            var birth_date = document.getElementById("birth-date").value;
            var appointment_date = document.getElementById("app-date").value;

            if(birth_date < appointment_date){
                alert("Enter birthdate and appointment date correctly !");
                document.getElementById("birth-date").value = "mm/dd/yyyy";
                document.getElementById("app-date").value = "mm/dd/yyyy";
            }
        }
    </script>

</body>

<?php
	 require 'footer.php';
?>