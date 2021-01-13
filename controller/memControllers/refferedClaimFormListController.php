<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/claimFormModel.php');
?>

<?php

    $_SESSION['ref_form_no'] = '';
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_ref_forms = claimFormModel::getReferredForms($user_id, $connect);

    if(mysqli_num_rows($result_ref_forms) > 0){
        while($row = mysqli_fetch_assoc($result_ref_forms)){

            $date = claimFormModel::getSubmitDate($user_id, $row['claim_form_no'], $connect);
            $sub_date = mysqli_fetch_array($date);
            $submitted_date = $sub_date[0];
            $_SESSION['form_status'] = $row['acceptance_status'];

            $_SESSION['ref_form_no'] .= "<tr>";
            $_SESSION['ref_form_no'] .= "<td>{$row['claim_form_no']}</td>";
            $_SESSION['ref_form_no'] .= "<td>{$submitted_date}</td>";
            
            if($_SESSION['form_status'] == 1){
                $_SESSION['ref_form_no'] .= "<td><a href=\"../../controller/memControllers/refferedClaimFormListControllerTwo.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Accepted</a></td>";
            }
            if($_SESSION['form_status'] == 0){
                $_SESSION['ref_form_no'] .= "<td><a href=\"../../controller/memControllers/refferedClaimFormListControllerTwo.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Rejected</a></td>";
            }

            header('Location:../../view/medicalSchemeMember/memRefClaimFormsV.php');
        }

    }
    else{
        header('Location:../../view/medicalSchemeMember/memNoFormsAvaliableV.php');
    }
?>