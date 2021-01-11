<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/memModel.php');
?>

<?php

        $user_id='';
        $_SESSION['claim_form_no'] = '';

        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $result_opd = array();
        $result_surgical = array();
        $result_opd = memModel::opdReqFormIds($user_id, $connect);
        $result_surgical = memModel::surgicalReqFormIds($user_id, $connect);
        

        if(mysqli_num_rows($result_opd)>0){
            while($row_o = mysqli_fetch_assoc($result_opd)){

                $date = memModel::getSubmitDate($user_id, $row_o['claim_form_no'], $connect);
                $sub_date = mysqli_fetch_array($date);
                $submitted_date = $sub_date[0];

                $_SESSION['user_id'] = $user_id;
                $_SESSION['claim_form_no'] .= "<tr>";
                $_SESSION['claim_form_no'] .= "<td>OPD</td>";
                $_SESSION['claim_form_no'] .= "<td>{$row_o['claim_form_no']}</td>";
                $_SESSION['claim_form_no'] .= "<td>{$submitted_date}</td>";
                $_SESSION['claim_form_no'] .= "<td><a href=\"../../controller/memControllers/claimFormListControllerTwo.php?claim_form_no={$row_o['claim_form_no']}&user_id={$user_id}\">View Form</a></td>";

                header('Location:../../view/medicalSchemeMember/memClaimFormListV.php');
               
            }
        }
        
        if(mysqli_num_rows($result_surgical)>0){
            while($row_s = mysqli_fetch_assoc($result_surgical)){

                $date = memModel::getSubmitDate($user_id, $row_s['claim_form_no'], $connect);
                $sub_date = mysqli_fetch_array($date);
                $submitted_date = $sub_date[0];
            
                $_SESSION['user_id'] = $user_id;
                $_SESSION['claim_form_no'] .= "<tr>";
                $_SESSION['claim_form_no'] .= "<td>Surgical</td>";
                $_SESSION['claim_form_no'] .= "<td>{$row_s['claim_form_no']}</td>";
                $_SESSION['claim_form_no'] .= "<td>{$submitted_date}</td>";
                $_SESSION['claim_form_no'] .= "<td><a href=\"../../controller/memControllers/claimFormListControllerTwo.php?claim_form_no={$row_s['claim_form_no']}&user_id={$user_id}\">View Form</a></td>";

                header('Location:../../view/medicalSchemeMember/memClaimFormListV.php');
               
            }
        }

        if(mysqli_num_rows($result_surgical)==0 && mysqli_num_rows($result_opd)==0){
            
            header('Location:../../view/medicalSchemeMember/memNoFormsAvaliableV.php');
        }
 
?>