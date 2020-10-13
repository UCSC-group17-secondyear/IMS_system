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

        $userInfo = array( 'bill_amount'=>11);
		
		foreach ($userInfo as $info=>$maxLen) 
		{
            // echo $_POST[$info];
			if (strlen(trim($_POST[$info])) >  $maxLen) 
			{
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
        }
        
        
        if (empty($errors)) {
            $department = mysqli_real_escape_string($connect, $_POST['department']);
            $patientname = mysqli_real_escape_string($connect, $_POST['patientname']);
            $relationship = mysqli_real_escape_string($connect, $_POST['relationship']);
            $doctor_name = mysqli_real_escape_string($connect, $_POST['doctor_name']);
            $treatment_received_date = mysqli_real_escape_string($connect, $_POST['treatment_received_date']);
            $bill_issued_date = mysqli_real_escape_string($connect, $_POST['bill_issued_date']);
            $purpose = mysqli_real_escape_string($connect, $_POST['purpose']);
            $bill_amount = mysqli_real_escape_string($connect, $_POST['bill_amount']);
            $opd_form_flag = mysqli_real_escape_string($connect, $_POST['opd_form_flag']);
            $opd_form_flag = mysqli_real_escape_string($connect, $_POST['surgical_form_flag']);
            

            // $file = $_FILES('bill');
            // //$file = mysqli_real_escape_string($connect, $_POST['file']);

            // $fileName = $_FILES['bill']['name'];
            // //$fileType = $_FILES['bill']['type'];

            // $fileName = mysqli_real_escape_string($connect, $_POST['fileName']);

            // $fileExt = explode('.',$fileName);
            // $fileActualExt = strtolower(end($fileExt));

            // $allowed = array('jpg','jpeg','png','pdf');

            // if(in_array($fileActualExt,$allowed))
            //   {
            //     $result = Model::fillOpdForm($user_id, $empid, $department, $patientname, $relationship, $doctor, $trecieveddate, $bissuedate, $purpose, $amount ,$fileName , $connect);
            //   }
            // else
            //   {
            //     echo "File type is incorrrect.";
            //   }

            $result = Model::fillOpdForm($user_id, $department, $patientname, $relationship , $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount, $opd_form_flag ,$surgical_form_flag , $connect);

            if ($result) {
                // header('Location:../view/hallAllocationMaintainer/hamProfileV.php');
                // header('Location:../view/basic/profileUpdateSuccess.php');
                // echo "Changes updated successfully.";
                header('Location:../view/medicalSchemeMember/memFormSubmitSuccessV.php');
            }
            else {
                echo "Failed result";
            }
        }

    }

?>