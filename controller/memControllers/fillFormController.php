<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/memModel.php');
    require_once('../../model/memModel/claimFormModel.php');

?>

<?php
    if(isset($_POST['fill-opd'])){
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $result_set = memModel::viewMember($user_id, $connect);
        $count = claimFormModel::getNextFormNumber($connect);
        $name = mysqli_fetch_array($result_set);
        $form_count = mysqli_fetch_array($count);
        $f_count = $form_count[0];
        $initials = $name[2];
        $sname = $name[3];

        $memStatus = memModel::getMemStatus($user_id, $connect);
        $mem_status = mysqli_fetch_array($memStatus);
        $status = $mem_status[0];
        //echo $status;


        $dependants = claimFormModel::getDependantName($user_id, $connect);
        $_SESSION['dependant_name'] = '';

            if($status==1){
                if ($result_set) {
                    if(mysqli_num_rows($result_set)==1){
                        $_SESSION['claim_form_no'] = $f_count + 1;
                        $_SESSION['dependant_name']  = "<option value='0'>".$initials.' '.$sname."</option>";

                        if($dependants){
                            while ($dependant = mysqli_fetch_array($dependants)) {

                                $_SESSION['dependant_name'] .= "<option value='".$dependant['dependant_id']."'>".$dependant['dependant_name']."</option>";
                                
                            }
                        }
                        
                        header('Location:../../view/medicalSchemeMember/memOpdFormV.php');
                                        
                    }
                    else{
                        echo "User not Found!";
                    }
                }

                else
                    {
                        echo "Query Unsuccessful"; 
                    }
            }
            else{
                header('Location:../../view/medicalSchemeMember/memNotMemberV.php');
            }
    }

    elseif(isset($_POST['fill-sur'])){
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $result_set = memModel::viewMember($user_id, $connect);
        $count = claimFormModel::getNextFormNumber($connect);
        $name = mysqli_fetch_array($result_set);
        $form_count = mysqli_fetch_array($count);
        $f_count = $form_count[0];
        $initials = $name[2];
        $sname = $name[3];

        $memStatus = memModel::getMemStatus($user_id, $connect);
        $mem_status = mysqli_fetch_array($memStatus);
        $status = $mem_status[0];
        //echo $status;

        $dependants = claimFormModel::getDependantName($user_id, $connect);
        $_SESSION['dependant_name'] = '';

            if($status==1){
                if ($result_set) {
                    if(mysqli_num_rows($result_set)==1){
                        $_SESSION['claim_form_no'] = $f_count + 1;
                        $_SESSION['dependant_name']  = "<option value='0'>".$initials.' '.$sname."</option>";

                        if($dependants){
                            while ($dependant = mysqli_fetch_array($dependants)) {
                            
                                $_SESSION['dependant_name'] .= "<option value='".$dependant['dependant_id']."'>".$dependant['dependant_name']."</option>";
                                
                            }
                        }
                        

                        header('Location:../../view/medicalSchemeMember/memSurgicalFormV.php');
                                                
                    }
                    else{
                        echo "User not Found!";
                    }
                }
                else
                    {
                        echo "Query Unsuccessful"; 
                    }
            }
            else{
                header('Location:../../view/medicalSchemeMember/memNotMemberV.php');
            }
        
    }

    elseif(isset($_POST['fill-opd-submit'])){
        $errors = array();
        $user_id = '';
        $moEmail = claimFormModel::getMoEmail($connect);
        $email = mysqli_fetch_array($moEmail);
        $new_mail = $email[0];
        $claim_form_no = $_SESSION['claim_form_no'];
        

        
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
                $dependant_id = mysqli_real_escape_string($connect, $_POST['dependant_id']);
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

                        if($dependant_id == '0'){
                            $result = claimFormModel::fillOpdFormNew($user_id, $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount,  $file_name_db, $submitted_date, $connect);
                        }
                        else{
                            $result = claimFormModel::fillOpdForm($user_id, $dependant_id, $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount,  $file_name_db, $submitted_date, $connect);
                        }

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

    elseif(isset($_POST['fill-sur-submit'])){
        $errors = array();
        $user_id = '';
        $moEmail = claimFormModel::getMoEmail($connect);
        $email = mysqli_fetch_array($moEmail);
        $new_mail = $email[0];
        $claim_form_no = $_SESSION['claim_form_no'];
    
        
            $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    
            $userInfo = array( 'how_occured'=>255, 
                                'injuries'=>255, 'nature_of_illness'=>255, 'doctor_name'=>255, 'doctor_address'=>255, 
                                'illness_before'=>255, 'illness_before_years'=>255,'sick_injury'=>255, 'insurer_claims'=>255, 'nature_of'=>255);
            
            foreach ($userInfo as $info=>$maxLen) 
            {
                // echo $_POST[$info];
                if (strlen(trim($_POST[$info])) >  $maxLen) 
                {
                    $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
                }
            }
            
            if (empty($errors)) {
    
                $dependant_id = mysqli_real_escape_string($connect, $_POST['dependant_id']);
                $accident_date = mysqli_real_escape_string($connect, $_POST['accident_date']);
                $how_occured = mysqli_real_escape_string($connect, $_POST['how_occured']);
                $injuries = mysqli_real_escape_string($connect, $_POST['injuries']);
                $nature_of_illness = mysqli_real_escape_string($connect, $_POST['nature_of_illness']);
                $commence_date = mysqli_real_escape_string($connect, $_POST['commence_date']);
                $first_consult_date = mysqli_real_escape_string($connect, $_POST['first_consult_date']);
                $doctor_name = mysqli_real_escape_string($connect, $_POST['doctor_name']);
                $doctor_address = mysqli_real_escape_string($connect, $_POST['doctor_address']);
                $hospitalized_date = mysqli_real_escape_string($connect, $_POST['hospitalized_date']);
                $discharged_date = mysqli_real_escape_string($connect, $_POST['discharged_date']);
                $illness_before = mysqli_real_escape_string($connect, $_POST['illness_before']);
                $illness_before_years = mysqli_real_escape_string($connect, $_POST['illness_before_years']);
                $sick_injury = mysqli_real_escape_string($connect, $_POST['sick_injury']);
                $insurer_claims = mysqli_real_escape_string($connect, $_POST['insurer_claims']);
                $nature_of = mysqli_real_escape_string($connect, $_POST['nature_of']);
                $submitted_date = date('y-m-d');
    
                //check bill issued date validity
                $hospitalized_year = date('Y', strtotime($hospitalized_date));
                $med_end_date = claimFormModel::getMedYearEndDate($hospitalized_year,$connect);
                $med_end_date_result = mysqli_fetch_assoc($med_end_date);
                $med_year_end_date = $med_end_date_result['end_date'];
                $med_year = $med_end_date_result['medical_year'];
    
                if(strtotime($hospitalized_date) <= strtotime($med_year_end_date)){
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
                        $file_name_new = $user_id."-sur-".$claim_form_no.".".$file_actual_ext;
                        $file_name_db = $user_id."-sur-".$claim_form_no;
                        $file_destination = '../../view/assests/claimforms/surgical/'.$file_name_new;
                        move_uploaded_file($file_tmp_name, $file_destination);
                        $result = claimFormModel::fillSurgicalForm($user_id, $dependant_id, $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of, $file_name_db, $submitted_date,$connect);
    
                        if($dependant_id == '0'){
                            $result = claimFormModel::fillSurgicalFormNew($user_id, $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of, $file_name_db, $submitted_date,$connect);
                        }
                        else{
                            $result = claimFormModel::fillSurgicalForm($user_id, $dependant_id, $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of, $file_name_db, $submitted_date,$connect);

                        }
                        if ($result) {
                                $to_email = $new_mail;
                                $subject = "New claim form submitted.";
                                $body = "New Surgical claim form submited by {$user_id}";
                                $headers = "From: imssystem17@gmail.com";
    
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