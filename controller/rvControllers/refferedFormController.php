<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/rvModel/claimFormModel.php');
?>

<?php

        $_SESSION['ref_form_no'] = '';
        $result_forms = array();
        $result_forms = claimFormModel::getRefClaimForms($connect);

        if(mysqli_num_rows($result_forms)>0){

            while($row = mysqli_fetch_assoc($result_forms)){

                $_SESSION['form_status'] = $row['acceptance_status'];
                $_SESSION['paid_status'] = $row['paid_status'];

                $_SESSION['ref_form_no'] .= "<tr>";
                $_SESSION['ref_form_no'] .= "<td>{$row['claim_form_no']}</td>";

                if($_SESSION['form_status'] == 1 && $_SESSION['paid_status'] == 0){
                    $_SESSION['ref_form_no'] .= "<td><a class=\"yellow\" href=\"../../controller/rvControllers/viewRefFormController.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Accepted/Payment Denied</a></td>";
                }
                if($_SESSION['form_status'] == 1 && $_SESSION['paid_status'] == 1){
                    $_SESSION['ref_form_no'] .= "<td><a class=\"green\" href=\"../../controller/rvControllers/viewRefFormController.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Accepted/Paid</a></td>";
                }
                if($_SESSION['form_status'] == 0){
                    $_SESSION['ref_form_no'] .= "<td><a class=\"red\" href=\"../../controller/rvControllers/viewRefFormController.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Rejected</a></td>";
                }

                header('Location:../../view/reportViewer/rvRefferedClaimFormV.php');
                    
            }
        }

        if(mysqli_num_rows($result_forms) == 0){
            header('Location:../../view/reportViewer/rvNoFormsAvaliableV.php');

        }

?>