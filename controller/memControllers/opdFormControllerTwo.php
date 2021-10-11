<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/claimFormModel.php');
?>

<?php

    $errors = array();
    $user_id = '';
    $moEmail = claimFormModel::getMoEmail($connect);
    $email = mysqli_fetch_array($moEmail);
    $new_mail = $email['email'];
    $claim_form_no = $_SESSION['claim_form_no'];
    

    if (isset($_POST['form-submit'])) {
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
            //$empid = mysqli_real_escape_string($connect, $_POST['empid']);
            $patient_name = mysqli_real_escape_string($connect, $_POST['patient_name']);
            $relationship = mysqli_real_escape_string($connect, $_POST['relationship']);
            $doctor_name = mysqli_real_escape_string($connect, $_POST['doctor_name']);
            $treatment_received_date = mysqli_real_escape_string($connect, $_POST['treatment_received_date']);
            $bill_issued_date = mysqli_real_escape_string($connect, $_POST['bill_issued_date']);
            $purpose = mysqli_real_escape_string($connect, $_POST['purpose']);
            $bill_amount = mysqli_real_escape_string($connect, $_POST['bill_amount']);
            $submitted_date = date('y-m-d');
            
            //check bill issued date validity
            $bill_issued_year = date('Y', strtotime($bill_issued_date));
            $med_end_date = claimFormModel::getMedYearEndDate($bill_issued_year,$connect);
            $med_end_date_result = mysqli_fetch_assoc($med_end_date);
            $med_year_end_date = $med_end_date_result['end_date'];
            $med_year = $med_end_date_result['medical_year'];

            if(strtotime($bill_issued_date) <= strtotime($med_year_end_date)){
                $medical_year = $med_year;
              }
              else{
                $medical_year = ($med_year + 1);
              }

            //get correct med year end date relavant to form

            $form_med_end_date = claimFormModel::getFormEndMedDate($medical_year, $connect);
            $end_date = mysqli_fetch_array($form_med_end_date);
            $cur_date = date('Y-m-d');
            $date_diff = (strtotime($cur_date) - strtotime($end_date[0]));
            $days = ($date_diff/(60 * 60 * 24));

            if($days <= 91){
                //echo "yes";
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
                       $file_name_db = $user_id."-opd-".$claim_form_no;
                       $file_destination = '../../view/assests/claimforms/opd/'.$file_name_new;
                       move_uploaded_file($file_tmp_name, $file_destination);
                       $result = claimFormModel::fillOpdForm($user_id, $patient_name, $relationship , $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount,  $file_name_db, $submitted_date, $connect);

                        if ($result) {
                            $to_email = $new_mail;
                            $subject = "New claim form submitted.";
                            $body = "New OPD claim form submited by {$user_id}";
                            $headers = "From: imsSystem17@gmail.com";

                            mail($to_email, $subject, $body, $headers);
                            //echo "Form submitted Successfully..";
                            header('Location:../../view/medicalSchemeMember/memFormSubmitSuccessV.php');
                        }
                        else {
                            echo "Failed result";
                        }
                    }
                    else{
                        echo "There was an error uploading your file.";
                    }
                  }
                else
                  {
                    echo "File type is incorrrect.";
                  }

            }
            else{
                echo '<script type="text/javascript">'; 
                echo 'alert("Can\'t Submit");'; 
                echo 'window.location.href = "../../view/medicalSchemeMember/memHomeV.php";';
                echo '</script>';

            }
            
        }

    }

?>