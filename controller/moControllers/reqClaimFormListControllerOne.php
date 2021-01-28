<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/moModel/claimFormModel.php');
?>

<?php

    $_SESSION['claim_form_no'] = '';
    $result_forms = array();
    $result_forms = claimFormModel::getReqClaimForms($connect);

    if(mysqli_num_rows($result_forms)>0){

        while($row = mysqli_fetch_assoc($result_forms)){

                $_SESSION['claim_form_no'] .= "<tr>";
                $_SESSION['claim_form_no'] .= "<td>{$row['claim_form_no']}</td>";
                $_SESSION['claim_form_no'] .= "<td><a href=\"../../controller/moControllers/reqClaimFormControllerTwo.php?claim_form_no={$row['claim_form_no']}\">View Form</a></td>";

                header('Location:../../view/medicalOfficer/moClaimRequestingFormsV.php');
                   
        }
    }

    if(mysqli_num_rows($result_forms) == 0){
        header('Location:../../view/medicalOfficer/moNoFormsAvaliableV.php');

    }
?>