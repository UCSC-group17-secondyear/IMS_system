<?php
    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');
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
            while($row_o = mysqli_fetch_assoc($result_opd)){

                $_SESSION['claim_form_no'] .= "<tr>";
                $_SESSION['claim_form_no'] .= "<td>O</td>";
                $_SESSION['claim_form_no'] .= "<td>{$row_o['claim_form_no']}</td>";
                $_SESSION['claim_form_no'] .= "<td><a href=\"../../controller/claimFormListControllerTwo.php?claim_form_no={$row_o['claim_form_no']}&user_id={$user_id}\">View Form</a></td>";

                header('Location:../view/medicalSchemeMember/memClaimFormListV.php');
               
            }
        }
        
        if(mysqli_num_rows($result_surgical)>0){
            while($row_s = mysqli_fetch_assoc($result_surgical)){

                $_SESSION['claim_form_no'] .= "<tr>";
                $_SESSION['claim_form_no'] .= "<td>S</td>";
                $_SESSION['claim_form_no'] .= "<td>{$row_s['claim_form_no']}</td>";
                $_SESSION['claim_form_no'] .= "<td><a href=\"../../controller/claimFormListControllerTwo.php?claim_form_no={$row_s['claim_form_no']}&user_id={$user_id}\">View Form</a></td>";

                header('Location:../view/medicalSchemeMember/memClaimFormListV.php');
               
            }
        }

        else{
            header('Location:../view/medicalSchemeMember/memClaimFormListV.php');
        }
 
?>