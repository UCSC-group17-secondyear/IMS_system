<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/rvModel/rvViewFormsinMSModel.php');

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
                if($mem['civilstatus'] == 1){
                    $_SESSION['memberships'] .= "<td>Married</td>";
                } else {
                    $_SESSION['memberships'] .= "<td>Single</td>";   
                }
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
                $_SESSION['memberships'] .= "<td><a href=\"../../controller/rvControllers/rvViewFormsController.php?view_member={$mem['userId']}\">View</a></td>";
                $_SESSION['memberships'] .= "</tr>";

                header('Location:../../view/reportViewer/rvViewMembershipFormsV.php');
            }
        } else {
            header('Location:../../view/reportViewer/rvNoFormsAvailableV.php');
        }

    } elseif (isset($_GET['view_member'])) {

        $view_user = mysqli_real_escape_string($connect, $_GET['view_member']);
        $user_details = rvModel::view($view_user, $connect);
        $member_details = rvModel::viewmm($view_user, $connect);

        if(mysqli_num_rows($user_details) == 1 && mysqli_num_rows($member_details) == 1){
            $ud = mysqli_fetch_assoc($user_details);
            $md = mysqli_fetch_assoc($member_details);
            $_SESSION['fr_userId'] = $ud['userId'];
            $_SESSION['fr_empid'] = $ud['empid'];
            $_SESSION['fr_initials'] = $ud['initials'];
            $_SESSION['fr_sname'] = $ud['sname'];
            $_SESSION['fr_department'] = $md['department'];
            $_SESSION['fr_health_condition'] = $md['healthcondition'];
            $_SESSION['fr_member'] = $md['member_type'];
            $_SESSION['fr_civil_status'] = $md['civilstatus'];
            $_SESSION['fr_scheme'] = $md['schemeName'];
            $_SESSION['fr_form_submission_date'] = $md['form_submission_date'];
            $_SESSION['fr_acceptance_status'] = $md['acceptance_status'];
            $_SESSION['fr_membership_status'] = $md['membership_status'];

            header('Location:../../view/reportViewer/rvViewMemberDetailsV.php');
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
                $_SESSION['ref_form_no'] .= "<td><a href=\"../../controller/rvControllers/viewRefFormController.php?reffered_form={$rf['claim_form_no']}&user_id={$user_id}\">View</a></td>";

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