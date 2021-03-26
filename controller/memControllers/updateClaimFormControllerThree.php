<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/claimFormModel.php');
?>

<?php
    $errors = array();
    $user_id = $_SESSION['user_id'];
    $claim_form_no = mysqli_real_escape_string($connect, $_GET['claim_form_no']);
    $submit_date = claimFormModel::getSubmitDate($claim_form_no, $user_id, $connect);

    if (isset($_POST['update-opd-form'])) {

        $userInfo = array( 'bill_amount'=>11);
		
          foreach ($userInfo as $info=>$maxLen) 
          {
              
              if (strlen(trim($_POST[$info])) >  $maxLen) 
              {
                  $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
              }
          }
        
        
        if (empty($errors)) {
            
            $dependant_id = mysqli_real_escape_string($connect, $_POST['dependant_id']);
            $relationship = mysqli_real_escape_string($connect, $_POST['relationship']);
            $doctor_name = mysqli_real_escape_string($connect, $_POST['doctor_name']);
            $treatment_received_date = mysqli_real_escape_string($connect, $_POST['treatment_received_date']);
            $bill_issued_date = mysqli_real_escape_string($connect, $_POST['bill_issued_date']);
            $purpose = mysqli_real_escape_string($connect, $_POST['purpose']);
            $bill_amount = mysqli_real_escape_string($connect, $_POST['bill_amount']);
            $updated_date = date('y-m-d');

            if($dependant_id > 0){
              $relation = claimFormModel::getDependRelation($dependant_id,$connect);
              $depend_realtion = mysqli_fetch_assoc($relation);
              $d_relation = $depend_realtion['relationship'];
            }

            if(($dependant_id == '0' && $relationship == 'Myself') || ($d_relation == $relationship)){
            
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

                    $previous_depend = claimFormModel::getPrevDepend($claim_form_no,$connect);
                    $pre_depend = mysqli_fetch_assoc($previous_depend);
                    $p_depend = $pre_depend['dependant_id'];

                    if($p_depend == NULL && $dependant_id == '0'){
                        $result = claimFormModel::updateOpdFormNew($user_id, $claim_form_no,  $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount, $file_name_db, $updated_date, $connect);
                    }
                    elseif(($p_depend > 0 && $dependant_id > 0) || ($p_depend == NULL && $dependant_id > 0)){
                        $result = claimFormModel::updateOpdForm($user_id, $claim_form_no, $dependant_id , $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount, $file_name_db, $updated_date, $connect);
                    }
                    elseif($p_depend > 0 && $dependant_id == '0'){
                        echo '<script type="text/javascript">'; 
                        echo 'alert("Can\'t Update Form. Delete the form and submit new one.");'; 
                        echo 'window.location.href = "../../view/medicalSchemeMember/memHomeV.php";';
                        echo '</script>';
                    }

                  }
                  else{
                    header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
                  }
                }
                else{
                  header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
                }


              if ($result) {
                  header('Location:../../view/medicalSchemeMember/memFormUpdateSuccessV.php');
              }
              else{
                header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
              }

            }
            else{
              echo '<script type="text/javascript">'; 
              echo 'alert("Check whether correct details are entered!");'; 
              echo 'window.location.href = "../../view/medicalSchemeMember/memUpdateOpdFormV.php";';
              echo '</script>';

            }
        }
        else{
          header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
        }
      }
    

    elseif (isset($_POST['update-sur-form'])) {

        $userInfo = array('how_occured'=>255, 
                            'injuries'=>255, 'nature_of_illness'=>255, 'doctor_name'=>255, 'doctor_address'=>255, 
                            'illness_before'=>255, 'illness_before_years'=>255,'sick_injury'=>255, 'insurer_claims'=>255, 'nature_of'=>255);
		
          foreach ($userInfo as $info=>$maxLen) 
          {
                
            if (strlen(trim($_POST[$info])) >  $maxLen) 
            {
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
          }
        
        if (empty($errors)) {
            $dependant_id = mysqli_real_escape_string($connect, $_POST['dependant_id']);
            $relationship = mysqli_real_escape_string($connect, $_POST['relationship']);
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
            $updated_date = date('y-m-d');

            if($dependant_id > 0){
              $relation = claimFormModel::getDependRelation($dependant_id,$connect);
              $depend_realtion = mysqli_fetch_assoc($relation);
              $d_relation = $depend_realtion['relationship'];
            }

            if(($dependant_id == '0' && $relationship == 'Myself') || ($d_relation == $relationship)){

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

                    $previous_depend = claimFormModel::getPrevDepend($claim_form_no,$connect);
                    $pre_depend = mysqli_fetch_assoc($previous_depend);
                    $p_depend = $pre_depend['dependant_id'];

                    if($p_depend == NULL && $dependant_id == '0'){
                        $result = claimFormModel::updateSurgicalFormNew($user_id, $claim_form_no, $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of, $file_name_db, $updated_date,$connect);
                    }
                    elseif(($p_depend > 0 && $dependant_id > 0) || ($p_depend == NULL && $dependant_id > 0)){
                        $result = claimFormModel::updateSurgicalForm($user_id, $claim_form_no, $dependant_id, $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of, $file_name_db, $updated_date,$connect);
                    }
                    elseif($p_depend > 0 && $dependant_id == '0'){
                      echo '<script type="text/javascript">'; 
                      echo 'alert("Can\'t Update Form. Delete the form and submit new one.");'; 
                      echo 'window.location.href = "../../view/medicalSchemeMember/memHomeV.php";';
                      echo '</script>';
                    }

                  }
                  else{
                    header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
                  }
                }
                else{
                  header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
                }


              if ($result) {
                  header('Location:../../view/medicalSchemeMember/memFormUpdateSuccessV.php');
              }
              else{
                header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
              }

            }
            else{
              echo '<script type="text/javascript">'; 
              echo 'alert("Check whether correct details are entered!");'; 
              echo 'window.location.href = "../../view/medicalSchemeMember/memUpdateSurgicalFormV.php";';
              echo '</script>';

            }
        }
        else{
          header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
        }

    }
  
?>