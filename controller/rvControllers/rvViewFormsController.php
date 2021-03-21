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

    } elseif (isset($_POST['refferedclaim-submit'])) {

        $_SESSION['ref_form_no'] = '';
        $result_forms = array();
        $result_forms = rvModel::getRefClaimForms($connect);

        if(mysqli_num_rows($result_forms)>0){

            while($rf = mysqli_fetch_assoc($result_forms)){
                $_SESSION['acceptance_status'] = $rf['acceptance_status'];
                $_SESSION['paid_status'] = $rf['paid_status'];

                $_SESSION['ref_form_no'] .= "<tr>";
                if ($rf['opd_form_flag'] == 1) {
                    $_SESSION['ref_form_no'] .= "<td>OPD</td>";
                } else {
                    $_SESSION['ref_form_no'] .= "<td>Surgical</td>";
                }
                $_SESSION['ref_form_no'] .= "<td>{$rf['claim_form_no']}</td>";
                $_SESSION['ref_form_no'] .= "<td>{$rf['empid']}</td>";
                $_SESSION['ref_form_no'] .= "<td>{$rf['initials']}</td>";
                $_SESSION['ref_form_no'] .= "<td>{$rf['sname']}</td>";
                $_SESSION['ref_form_no'] .= "<td>{$rf['submitted_date']}</td>";
                if ($rf['acceptance_status'] == 1) {
                    $_SESSION['ref_form_no'] .= "<td><a class=\"green disabled\" href=\"#\">Accepted</a>";
                } else {
                    $_SESSION['ref_form_no'] .= "<td><a class=\"red disabled\" href=\"#\">Rejected</a>";
                }
                if ($rf['paid_status'] == 1) {
                    $_SESSION['ref_form_no'] .= "<td><a class=\"green disabled\" href=\"#\">Accepted</a></td>";
                } elseif($rf['paid_status'] == 0) {
                    $_SESSION['ref_form_no'] .= "<td><a class=\"red disabled\" href=\"#\">Rejected</a></td>";
                } else {
                    $_SESSION['ref_form_no'] .= "<td><a class=\"yellow disabled\" href=\"#\">Unchecked</a></td>";
                }
                $_SESSION['ref_form_no'] .= "<td><a href=\"../../controller/rvControllers/viewRefFormController.php?claim_form_no={$rf['claim_form_no']}&user_id={$user_id}\">View</a></td>";

                header('Location:../../view/reportViewer/rvRefferedClaimFormV.php');
                    
            }
        } else {
            header('Location:../../view/reportViewer/rvNoFormsAvaliableV.php');
        }

    } elseif (isset($_POST['requestedclaim-submit'])) {

        $_SESSION['req_form_no'] = '';
        $result_forms = array();
        $result_forms = rvModel::getReqClaimForms($connect);

        if(mysqli_num_rows($result_forms)>0){

            while($rf = mysqli_fetch_assoc($result_forms)){

                $_SESSION['req_form_no'] .= "<tr>";
                if ($rf['opd_form_flag'] == 1) {
                    $_SESSION['req_form_no'] .= "<td>OPD</td>";
                } else {
                    $_SESSION['req_form_no'] .= "<td>Surgical</td>";
                }
                $_SESSION['req_form_no'] .= "<td>{$rf['claim_form_no']}</td>";
                $_SESSION['req_form_no'] .= "<td>{$rf['empid']}</td>";
                $_SESSION['req_form_no'] .= "<td>{$rf['initials']}</td>";
                $_SESSION['req_form_no'] .= "<td>{$rf['sname']}</td>";
                $_SESSION['req_form_no'] .= "<td>{$rf['submitted_date']}</td>";
                $_SESSION['req_form_no'] .= "<td><a href=\"../../controller/rvControllers/viewReqFormController.php?claim_form_no={$rf['claim_form_no']}\">View Form</a></td>";

                header('Location:../../view/reportViewer/rvRequestedClaimFormV.php');

            }
        } else {
            header('Location:../../view/reportViewer/rvNoFormsAvaliableV.php');
        }
    }
?>