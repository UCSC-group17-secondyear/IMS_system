<?php

    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php

    $errors = array();
    $user_id = '';

    if (isset($_POST['submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        // echo $user_id;
        $userInfo = array('empid'=>8, 'initials'=>10, 'sname'=>50, 'email'=>100,'mobile'=>10, 'tp'=>10, 'dob'=>10,'designation'=>50, 'appointment'=>10);
		
		foreach ($userInfo as $info=>$maxLen) 
		{
            // echo $_POST[$info];
			if (strlen(trim($_POST[$info])) >  $maxLen) 
			{
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
        }
        
        $empid = mysqli_real_escape_string($connect, $_POST['empid']);
        // echo $empid;
        $result_set = Model::checkEmpidTwo($empid, $user_id, $connect);

        if ($result_set) {
            if(mysqli_num_rows($result_set)==1){
                $errors[] = 'Employee id already exists.'; 
            }
        }
        // print_r($result_set);
        // print_r($errors);
        if (empty($errors)) {
            $initials = mysqli_real_escape_string($connect, $_POST['initials']);
            $sname = mysqli_real_escape_string($connect, $_POST['sname']);
            $email = mysqli_real_escape_string($connect, $_POST['email']);
            $mobile = mysqli_real_escape_string($connect, $_POST['mobile']);
            $tp = mysqli_real_escape_string($connect, $_POST['tp']);
            $dob = mysqli_real_escape_string($connect, $_POST['dob']);
            $designation = mysqli_real_escape_string($connect, $_POST['designation']);
            $appointment = mysqli_real_escape_string($connect, $_POST['appointment']);

            $result = Model::update($user_id, $empid, $initials, $sname, $email, $mobile, $tp, $dob, $designation, $appointment, $connect);

            if ($result) {

                // header('Location:../view/hallAllocationMaintainer/hamProfileV.php');
                header('Location:../view/profileUpdateSuccess.php?');
            }
            else {
                echo "Failed result";
            }
        }

    }

?>