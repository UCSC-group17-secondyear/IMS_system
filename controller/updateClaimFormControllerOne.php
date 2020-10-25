<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');
?>

<?php
        $user_id='';
        $_SESSION['claim_form_no'] = '';

        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $result_opd = array();
        $result_surgical = array();
        $result_opd = Model::opdFormIds($user_id, $connect);
        $result_surgical = Model::surgicalFormIds($user_id, $connect);
        

        if(mysqli_num_rows($result_opd)>0){
            while($row = mysqli_fetch_assoc($result_opd)){

                $_SESSION['claim_form_no'] .= "<tr>";
                $_SESSION['claim_form_no'] .= "<td>{$row['claim_form_no']}</td>";
                $_SESSION['claim_form_no'] .= "<td><a href=\"../../controller/updateClaimFormControllerTwo.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Update Form</a></td>";
                $_SESSION['claim_form_no'] .= "<td><a href=\"../../controller/deleteClaimFormController.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Delete Form</a></td>";

                header('Location:../view/medicalSchemeMember/memUpdateClaimFormsV.php');
               
            }
        }
        
        if(mysqli_num_rows($result_surgical)>0){
            while($row = mysqli_fetch_assoc($result_surgical)){

                $_SESSION['claim_form_no'] .= "<tr>";
                $_SESSION['claim_form_no'] .= "<td>{$row['claim_form_no']}</td>";
                $_SESSION['claim_form_no'] .= "<td><a href=\"../../controller/updateClaimFormControllerTwo.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Update Form</a></td>";
                $_SESSION['claim_form_no'] .= "<td><a href=\"../../controller/deleteClaimFormController.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Delete Form</a></td>";

                header('Location:../view/medicalSchemeMember/memUpdateClaimFormsV.php');
               
            }
        }

        else{
            header('Location:../view/medicalSchemeMember/memUpdateClaimFormsV.php');
        }


?>