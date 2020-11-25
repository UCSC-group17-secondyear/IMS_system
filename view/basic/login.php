<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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
	
	<div style="padding-bottom: 3%;">
		<div class="loginForm">
			<form action="../../controller/loginController.php" method="POST">
				<h2>Login Here</h2>
				<div class="row">
		            <div class="col-50l">
		              	<span class="fa fa-user"></span>
						<input id="empid" value="" name="empid" type="text" placeholder="User name" required="required" /> <br> <br>

						<span class="fa fa-lock"></span>
						<input id="psw" name="password" type="password" placeholder="Password" required="required" />
						
        				
						<i class="fa fa-eye" style="margin-left: -40px;" id="eye" onclick="toggle()"></i>
    					
						<!-- <div class="row">
							<div class="col-25">
								<input type="checkbox" onclick="showPasswordFunction()">
							</div>
							<div class="col-75"><br><br>
								<label>Show Password</label>
							</div>
						</div> -->

						<button class="mainbtn" type="submit" name="submit">LOGIN</button>						
					</div>
					<div class="col-50r">
						<div class="logocontainer">
	                    	<img src="../assests/img/default.png" style="width:40%; margin-top:10px; margin-bottom:20px;">
	                    </div>
		              	<div class="sentence1">
							<h3><a href="forgotpwdV.php">Forgot your password?</a></h3> <br>
							<h3>New here? <a href="../../controller/SignupController.php?desig=99">Sign Up.</a></h3>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script>

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

		// DISPLAY PASSWORD -------------------------------------
		// function showPasswordFunction() {
  		// 	var x = document.getElementById("psw");
  		// 	if (x.type === "password") {
    	// 		x.type = "text";
  		// 	} else {
    	// 		x.type = "password";
  		// 	}
		// }
	</script>
</body>

<?php
	require 'footer.php';
?>