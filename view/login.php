<?php 
    if (isset($_POST['login-submit'])) {
        include_once 'C:\xampp\htdocs\LoginSystem\database.php';

        $empid = $_POST['empid'];
        $password = $_POST['password'];
        
        $results = "SELECT * FROM users WHERE empid='$empid';";
        mysqli_query ($conn, $results);
        
        if ($results) {
            $pwdCheck = password_verify($password, $results['password']);
            //$role = "SELECT 'userRole' FROM users WHERE empid='$empid';";
            //$role = $results['userRole'];
            
            if ($pwdCheck = true) {
                session_start();
                $_SESSION['logid'] = $results['empid'];
                /*if ($role == "admin") {
                    header("Location: adminV.php");
                }*/
                if ($empid == 'SCS14032764') {
                    header("Location: adminV.php");
                }
                else if ($empid == 'SCS14032425') {
                    header("Location: lecturerV.php");
                }
                else if ($empid == 'SCS1234567') {
                    header("Location: attendanceMV.php");
                }
                else if ($empid == 'SCS18000672') {
                    header("Location: hallAllocationMV.php");
                }
                else if ($empid == 'SCS14000764') {
                    header("Location: mahapolaMV.php");
                }
                else if ($empid == 'SCS19408578') {
                    header("Location: medicalMV.php");
                }
                else if ($empid == 'SCS18000867') {
                    header("Location: recordsViwerV.php");
                }
                else if ($empid == 'SCS14000856') {
                    header("Location: departmentHeadV.php");
                }
                else if ($empid == 'SCS18765244') {
                    header("Location: medicalOfficerV.php");
                }
                else {
                    header("Location: signupForm.php?login=success");
                }
            }
            else {
                header("Location: loginForm.php?error=passwordIncorrect");
                exit();
            }
        }
        else {
            header("Location: loginForm.php?login=unsuccess");
            exit();
        }
    }
    else {
        header("Location: homePage.php");
    }
?>