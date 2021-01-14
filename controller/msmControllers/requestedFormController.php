<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel/claimFormModel.php');
?>

<?php

        $_SESSION['req_form_no'] = '';
        $result_forms = array();
        $result_forms = claimFormModel::getReqClaimForms($connect);

        if(mysqli_num_rows($result_forms)>0){

            while($row = mysqli_fetch_assoc($result_forms)){

                    $_SESSION['req_form_no'] .= "<tr>";
                    $_SESSION['req_form_no'] .= "<td>{$row['claim_form_no']}</td>";
                    $_SESSION['req_form_no'] .= "<td><a href=\"../../controller/msmControllers/viewReqFormController.php?claim_form_no={$row['claim_form_no']}\">View Form</a></td>";

                    header('Location:../../view/medicalSchemeMaintainer/msmRequestedClaimFormV.php');
                    
            }
        }

        if(mysqli_num_rows($result_forms) == 0){
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');

        }

?>