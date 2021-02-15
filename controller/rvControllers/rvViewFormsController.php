<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/rvModel/viewFormsinMSModel.php');

    if(isset($_POST['membershipform-submit'])) {
        $membership_forms = rvModel::fetchmemberships($connect);
        $_SESSION['memberships'] = '';
        
        if ($membership_forms) {
            while ($mem = mysqli_fetch_assoc($membership_forms)) {
                $_SESSION['memberships'] .= "<tr>";
                $_SESSION['memberships'] .= "<td>{$mem['empid']}</td>";
                $_SESSION['memberships'] .= "<td>{$mem['initials']}</td>";
                $_SESSION['memberships'] .= "<td>{$mem['sname']}</td>";
                $_SESSION['memberships'] .= "<td>{$mem['department']}</td>";
                $_SESSION['memberships'] .= "<td>{$mem['healthcondition']}</td>";
                $_SESSION['memberships'] .= "<td>{$mem['civilstatus']}</td>";
                $_SESSION['memberships'] .= "<td>{$mem['form_submission_date']}</td>";
                if($mem['acceptance_status'] == 1){
                    $_SESSION['memberships'] .= "<td><a class=\"green\">Approved</a></td>";
                } else if($mem['acceptance_status'] == 0){
                    $_SESSION['memberships'] .= "<td><a class=\"red\">Declined</a></td>";
                } else {
                    $_SESSION['memberships'] .= "<td><a class=\"yellow\">Unchecked</a></td>";
                }
                if($mem['membership_status'] == 1){
                    $_SESSION['memberships'] .= "<td><a class=\"green\">Approved</a></td>";
                } else if($mem['membership_status'] == 0){
                    $_SESSION['memberships'] .= "<td><a class=\"red\">Declined</a></td>";
                } else {
                    $_SESSION['memberships'] .= "<td><a class=\"yellow\">Unchecked</a></td>";
                }
                $_SESSION['memberships'] .= "<td><a href=\"../../controller/rvControllers/rvMembershipFormsC.php?mem_index={$mem['userId']}\">View</a></td>";
                $_SESSION['memberships'] .= "</tr>";

                header('Location:../../view/reportViewer/rvViewMembershipFormsV.php');
            }
        } else {
            header('Location:../../view/reportViewer/rvNoFormsAvailableV.php');
        }

    }
    // elseif (isset($_POST[refferedclaim-submit])) {

    //     $_SESSION['ref_form_no'] = '';
    //     $result_forms = array();
    //     $result_forms = rvModel::getRefClaimForms($connect);

    //     if(mysqli_num_rows($result_forms)>0){

    //         while($row = mysqli_fetch_assoc($result_forms)){

    //             $_SESSION['form_status'] = $row['acceptance_status'];
    //             $_SESSION['paid_status'] = $row['paid_status'];

    //             $_SESSION['ref_form_no'] .= "<tr>";
    //             $_SESSION['ref_form_no'] .= "<td>{$row['claim_form_no']}</td>";

    //             if($_SESSION['form_status'] == 1 && $_SESSION['paid_status'] == 0){
    //                 $_SESSION['ref_form_no'] .= "<td><a class=\"yellow\" href=\"../../controller/rvControllers/viewRefFormController.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Accepted/Payment Denied</a></td>";
    //             }
    //             if($_SESSION['form_status'] == 1 && $_SESSION['paid_status'] == 1){
    //                 $_SESSION['ref_form_no'] .= "<td><a class=\"green\" href=\"../../controller/rvControllers/viewRefFormController.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Accepted/Paid</a></td>";
    //             }
    //             if($_SESSION['form_status'] == 0){
    //                 $_SESSION['ref_form_no'] .= "<td><a class=\"red\" href=\"../../controller/rvControllers/viewRefFormController.php?claim_form_no={$row['claim_form_no']}&user_id={$user_id}\">Rejected</a></td>";
    //             }

    //             header('Location:../../view/reportViewer/rvRefferedClaimFormV.php');    
    //         }
    //     }
    //     if(mysqli_num_rows($result_forms) == 0){
    //         header('Location:../../view/reportViewer/rvNoFormsAvaliableV.php');
    //     }

    // } elseif (isset($_POST[requestedclaim-submit])) {

    //     $_SESSION['req_form_no'] = '';
    //     $result_forms = array();
    //     $result_forms = rvModel::getReqClaimForms($connect);

    //     if(mysqli_num_rows($result_forms)>0){

    //         while($row = mysqli_fetch_assoc($result_forms)){
    //             $_SESSION['req_form_no'] .= "<tr>";
    //             $_SESSION['req_form_no'] .= "<td>{$row['claim_form_no']}</td>";
    //             $_SESSION['req_form_no'] .= "<td><a href=\"../../controller/rvControllers/viewReqFormController.php?claim_form_no={$row['claim_form_no']}\">View Form</a></td>";

    //             header('Location:../../view/reportViewer/rvRequestedClaimFormV.php');   
    //         }
    //     }
    //     if(mysqli_num_rows($result_forms) == 0){
    //         header('Location:../../view/reportViewer/rvNoFormsAvaliableV.php');
    //     }

    // }

?>