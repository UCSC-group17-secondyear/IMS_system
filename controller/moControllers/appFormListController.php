<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/moModel/claimFormModel.php');
?>

<?php

    $_SESSION['app_form_no'] = '';
    $result_app = array();
    $result_app = claimFormModel::getApporvedForms($connect);

    if(mysqli_num_rows($result_app)>0){

        while($row = mysqli_fetch_assoc($result_app)){

                $_SESSION['app_form_no'] .= "<tr>";
                $_SESSION['app_form_no'] .= "<td>{$row['claim_form_no']}</td>";
                $_SESSION['app_form_no'] .= "<td><a href=\"../../controller/moControllers/viewRefFormController.php?claim_form_no={$row['claim_form_no']}\">View Form</a></td>";

                header('Location:../../view/medicalOfficer/moApprovedClaimFormsV.php');
                   
        }
    }

    if(mysqli_num_rows($result_app) == 0){
        header('Location:../../view/medicalOfficer/moNoFormsAvaliableV.php');

    }
    

?>