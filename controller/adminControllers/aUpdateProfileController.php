<?php

    session_start();
    require_once('../../model/adminModel/manageUsersModel.php');
    require_once('../../model/basicModel/manageProfileModel.php');
    require_once('../../config/database.php');

?>

<?php

    $errors = array();
    $user_id = '';

    if (isset($_POST['submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id_Two']);
        $oldMail = mysqli_real_escape_string($connect, $_GET['oldMail']);
        $userInfo = array('empid'=>8, 'initials'=>10, 'sname'=>50, 'email'=>100,'mobile'=>10, 'tp'=>10, 'dob'=>10,'designation'=>50, 'appointment'=>10);
		
		foreach ($userInfo as $info=>$maxLen) 
		{
			if (strlen(trim($_POST[$info])) >  $maxLen) 
			{
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
        }
        
        $EmpId = mysqli_real_escape_string($connect, $_POST['empid']);
        
        $id = str_replace(' ', '', $EmpId);
		if (!(preg_match('/^[A-Za-z]+$/', $id)))
		{
			$errors[] = "Username should be a string";
			header('Location:../../view/admin/aUserNameNotString.php');
			exit();
		}
        
        $empid = strtolower($EmpId);

        $result_set = basicModel::checkEmpidTwo($empid, $user_id, $connect);

        if ($result_set) {
            if(mysqli_num_rows($result_set)==1){
                $errors[] = 'Employee id already exists.'; 
                header('Location:../../view/admin/aEmpIdAlreadyExistsV.php');
            }
        }
        
        if (empty($errors)) {
            $initials = mysqli_real_escape_string($connect, $_POST['initials']);
            $sname = mysqli_real_escape_string($connect, $_POST['sname']);
            $Email = mysqli_real_escape_string($connect, $_POST['email']);
            $mobile = mysqli_real_escape_string($connect, $_POST['mobile']);
            $tp = mysqli_real_escape_string($connect, $_POST['tp']);
            $dob = mysqli_real_escape_string($connect, $_POST['dob']);
            $designation = mysqli_real_escape_string($connect, $_POST['designation']);
            $appointment = mysqli_real_escape_string($connect, $_POST['appointment']);

            $ini = str_replace(' ', '', $initials);
            if (!(preg_match('/^[A-Za-z]+$/', $ini)))
            {
                $errors[] = "Initials should be a string";
                header('Location:../../view/admin/aUserNameNotaString.php');
                exit();
            }

            $name = str_replace(' ', '', $sname);
            if (!(preg_match('/^[A-Za-z]+$/', $name)))
            {
                $errors[] = "Surname should be a string";
                header('Location:../../view/admin/aUserNameNotString.php');
                exit();
            }

            $email = strtolower($Email);

            $firstNumbs = substr($email, 0, -15);
            $lastMail = substr($email, 3);

            if ($lastMail != "@ucsc.cmb.ac.lk") {
                $errors[] = "University mail incorrect.";
                header('Location:../../view/admin/uniMailIncorrect.php');
                exit();
            }

            if ($firstNumbs != $empid) {
                $errors[] = "Username is incorrect.";
                header('Location:../../view/basic/userNameIncorrect.php');
                exit();
            }

            if (!(preg_match('/^[0-9]{10}+$/', $mobile))) 
            {
                $errors[] = "Mobile number is incorrect. The mobile number should have only ten digits.";
                header('Location:../../view/basic/mobilePhoneIncorrect.php');
                exit();
            }

            if (!(preg_match('/^[0-9]{10}+$/', $tp))) 
            {
                $errors[] = "Telephone number is incorrect. The telephone number should have only ten digits.";
                header('Location:../../view/basic/mobilePhoneIncorrect.php');
                exit();
            }

            $results = adminModel::update($user_id, $empid, $initials, $sname, $email, $mobile, $tp, $dob, $designation, $appointment, $connect);

            if ($results) {
                if ($oldMail!=$email) {
                    $to_email = "$email";
                    $subject = "Changes";
                    $body = "Admin change your details. Thank you.";
                    $headers = "From: ims.ucsc@gmail.com";

                    $sendMail = mail($to_email, $subject, $body, $headers);

                    $to_email_two = "$oldMail";
                    $sendMail = mail($to_email_two, $subject, $body, $headers);
                    
                    header('Location:../../view/admin/aProfileUpdatedByAdminV.php');
                }
                else{
                    $to_email = "$email";
                    $subject = "Changes";
                    $body = "Admin change your details. Thank you.";
                    $headers = "From: ims.ucsc@gmail.com";

                    $sendMail = mail($to_email, $subject, $body, $headers);

                    header('Location:../../view/admin/aProfileUpdatedByAdminV.php');
                }
            }
            else {
                header('Location:../../view/admin/aProfileNotUpdatedByAdminV.php');
            }
        }

    }

?>