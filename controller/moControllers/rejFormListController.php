<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/moModel/claimFormModel.php');
?>

<?php

    $_SESSION['rej_form_no'] = '';
    $result_rej = array();
    $result_rej = claimFormModel::getRejectedForms($connect);

    if(mysqli_num_rows($result_rej)>0){

        while($row = mysqli_fetch_assoc($result_rej)){

                $_SESSION['rej_form_no'] .= "<tr>";
                $_SESSION['rej_form_no'] .= "<td>{$row['claim_form_no']}</td>";
                $_SESSION['rej_form_no'] .= "<td><a href=\"../../controller/moControllers/viewRefFormController.php?claim_form_no={$row['claim_form_no']}\">View Form</a></td>";

                header('Location:../../view/medicalOfficer/moRejectedClaimFormsV.php');
                   
        }
    }

    if(mysqli_num_rows($result_rej) == 0){
        header('Location:../../view/medicalOfficer/moNoFormsAvaliableV.php');

    }
    

?>