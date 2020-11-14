<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');
?>

<?php

    $errors = array();
    $user_id = '';
    $claim_form_no = '';
    $claim_form_no = mysqli_real_escape_string($connect, $_GET['claim_form_no']);
    $submit_date = Model::getSubmitDate($claim_form_no, $user_id, $connect);
    $sub_date = mysqli_fetch_array($submit_date);
    $date = $sub_date[0];

    if (isset($_POST['update-form'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        $userInfo = array( 'bill_amount'=>11);
		
		foreach ($userInfo as $info=>$maxLen) 
		{
            
			if (strlen(trim($_POST[$info])) >  $maxLen) 
			{
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
        }
        
        
        if (empty($errors)) {
            
            $patient_name = mysqli_real_escape_string($connect, $_POST['patient_name']);
            $relationship = mysqli_real_escape_string($connect, $_POST['relationship']);
            $doctor_name = mysqli_real_escape_string($connect, $_POST['doctor_name']);
            $treatment_received_date = mysqli_real_escape_string($connect, $_POST['treatment_received_date']);
            $bill_issued_date = mysqli_real_escape_string($connect, $_POST['bill_issued_date']);
            $purpose = mysqli_real_escape_string($connect, $_POST['purpose']);
            $bill_amount = mysqli_real_escape_string($connect, $_POST['bill_amount']);
            $updated_date = date('y-m-d');
            
            $file = $_FILES['file'];
            $file_name = $_FILES['file']['name'];
            $file_tmp_name = $_FILES['file']['tmp_name'];
            $file_error = $_FILES['file']['error'];
            $file_type = $_FILES['file']['type'];      

            $file_ext = explode('.',$file_name);
            $file_actual_ext = strtolower(end($file_ext));

            $allowed = array('jpg','jpeg','png','pdf');

            if(in_array($file_actual_ext,$allowed))
              {
                if($file_error === 0){
                   $file_name_new = $user_id."-opd-".$claim_form_no.".".$file_actual_ext;
                   $file_destination = '../view/img/bill/'.$file_name_new;
                   move_uploaded_file($file_tmp_name, $file_destination);
                   $result = Model::updateOpdForm($user_id, $claim_form_no, $patient_name, $relationship , $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount, $file_name_new, $updated_date, $connect);

                }
                else{
                    echo "There was an error uploading your file.";
                }
              }
            else
              {
                echo "File type is incorrrect.";
              }


            if ($result) {
                header('Location:../view/medicalSchemeMember/memFormUpdateSuccessV.php');
            }
            else {
                echo "Failed result";
            }
        }

    }

?>