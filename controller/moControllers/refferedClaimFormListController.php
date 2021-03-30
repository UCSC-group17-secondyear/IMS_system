<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/moModel/claimFormModel.php');
?>

<?php

    if(isset($_POST['approve_list']) || isset($_GET['btn'])){

        $_SESSION['app_form_no'] = '';
        $result_forms = array();
        $result_forms = claimFormModel::getApporvedForms($connect);

        if (mysqli_num_rows($result_forms) > 0) {
            while ($row = mysqli_fetch_assoc($result_forms)) {
                $_SESSION['app_form_no'] .= "<tr>";
                $_SESSION['app_form_no'] .= "<td>{$row['claim_form_no']}</td>";
                $_SESSION['app_form_no'] .= "<td><a href=\"../../controller/moControllers/viewRefFormController.php?claim_form_no={$row['claim_form_no']}\">View Form</a></td>";
                $_SESSION['app_form_no'] .= "</tr>";

                header('Location:../../view/medicalOfficer/moApprovedClaimFormsV.php');     
            }
        } else {
            header('Location:../../view/medicalOfficer/moNoFormsAvaliableV.php');
        }

    }

    if(isset($_POST['reject_list']) || isset($_GET['btn'])){
       
        $_SESSION['rej_form_no'] = '';
        $result_forms = array();
        $result_forms = claimFormModel::getRejectedForms($connect);

        if (mysqli_num_rows($result_forms) > 0) {
            while ($row = mysqli_fetch_assoc($result_forms)) {
                $_SESSION['rej_form_no'] .= "<tr>";
                $_SESSION['rej_form_no'] .= "<td>{$row['claim_form_no']}</td>";
                $_SESSION['rej_form_no'] .= "<td><a href=\"../../controller/moControllers/viewRefFormController.php?claim_form_no={$row['claim_form_no']}\">View Form</a></td>";
                $_SESSION['rej_form_no'] .= "</tr>";

                header('Location:../../view/medicalOfficer/moRejectedClaimFormsV.php');     
            }
        } else {
            header('Location:../../view/medicalOfficer/moNoFormsAvaliableV.php');
        }
    }

?>