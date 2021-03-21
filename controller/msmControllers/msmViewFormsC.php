<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/msmModel/viewFormsinMSModel.php');
    
    if(isset($_POST['membershipform-submit'])) {

        $membership_forms = msmModel::fetchmemberships($connect);
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
                $_SESSION['memberships'] .= "<td><a href=\"../../controller/msmControllers/msmMembershipFormsC.php?mem_index={$mem['userId']}\">View</a></td>";
                $_SESSION['memberships'] .= "</tr>";

                header('Location:../../view/medicalSchemeMaintainer/msmViewMembershipFormsV.php');
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }

    } elseif(isset($_POST['requestedclaim-submit'])) {

        $result_forms = array();
        $result_forms = msmModel::getReqClaimForms($connect);
        $_SESSION['req_form_no'] = '';

        if(mysqli_num_rows($result_forms) > 0) {
            while($rf = mysqli_fetch_assoc($result_forms)) {
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
                $_SESSION['req_form_no'] .= "<td><a href=\"../../controller/msmControllers/viewReqFormController.php?claim_form_no={$rf['claim_form_no']}\">View Form</a></td>";
                $_SESSION['req_form_no'] .= "</tr>";

                header('Location:../../view/medicalSchemeMaintainer/msmViewRequestedClaimFormV.php');
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }

    } elseif (isset($_POST['tobepaid-submit'])) {

        $_SESSION['topaid_form_no'] = '';
        $result_forms = array();
        $result_forms = msmModel::getToBePaidClaimForms($connect);

        if (mysqli_num_rows($result_forms) > 0) {

            while ($rf = mysqli_fetch_assoc($result_forms)) {
                $_SESSION['topaid_form_no'] .= "<tr>";
                if ($rf['opd_form_flag'] == 1) {
                    $_SESSION['topaid_form_no'] .= "<td>OPD</td>";
                } else {
                    $_SESSION['topaid_form_no'] .= "<td>Surgical</td>";
                }
                $_SESSION['topaid_form_no'] .= "<td>{$rf['claim_form_no']}</td>";
                $_SESSION['topaid_form_no'] .= "<td>{$rf['empid']}</td>";
                $_SESSION['topaid_form_no'] .= "<td>{$rf['initials']}</td>";
                $_SESSION['topaid_form_no'] .= "<td>{$rf['sname']}</td>";
                $_SESSION['topaid_form_no'] .= "<td>{$rf['submitted_date']}</td>";
                $_SESSION['topaid_form_no'] .= "<td><a href=\"../../controller/msmControllers/viewtoPaidFormController.php?claim_form_no={$rf['claim_form_no']}\">View Form</a></td>";

                header('Location:../../view/medicalSchemeMaintainer/msmViewToBePaidClaimFormsV.php');  
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }

    } elseif (isset($_POST['paid-submit'])) {

        $_SESSION['paid_form_no'] = '';
        $result_forms = array();
        $result_forms = msmModel::paidClaimForms($connect);

        if (mysqli_num_rows($result_forms) > 0) {
            while ($rf = mysqli_fetch_assoc($result_forms)) {
                $_SESSION['paid_form_no'] .= "<tr>";
                if ($rf['opd_form_flag'] == 1) {
                    $_SESSION['paid_form_no'] .= "<td>OPD</td>";
                } else {
                    $_SESSION['paid_form_no'] .= "<td>Surgical</td>";
                }
                $_SESSION['paid_form_no'] .= "<td>{$rf['claim_form_no']}</td>";
                $_SESSION['paid_form_no'] .= "<td>{$rf['empid']}</td>";
                $_SESSION['paid_form_no'] .= "<td>{$rf['initials']}</td>";
                $_SESSION['paid_form_no'] .= "<td>{$rf['sname']}</td>";
                $_SESSION['paid_form_no'] .= "<td>{$rf['submitted_date']}</td>";
                $_SESSION['paid_form_no'] .= "<td><a href=\"../../controller/msmControllers/paidFormController.php?claim_form_no={$rf['claim_form_no']}\">View Form</a></td>";

                header('Location:../../view/medicalSchemeMaintainer/msmViewPaidClaimFormsV.php');
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }

    } elseif (isset($_POST['rejected-submit'])) {

        $_SESSION['rej_form_no'] = '';
        $result_forms = array();
        $result_forms = msmModel::getRejClaimForms($connect);

        if (mysqli_num_rows($result_forms) > 0) {
            while ($rf = mysqli_fetch_assoc($result_forms)) {
                $_SESSION['rej_form_no'] .= "<tr>";
                $_SESSION['rej_form_no'] .= "<tr>";
                if ($rf['opd_form_flag'] == 1) {
                    $_SESSION['rej_form_no'] .= "<td>OPD</td>";
                } else {
                    $_SESSION['rej_form_no'] .= "<td>Surgical</td>";
                }
                $_SESSION['rej_form_no'] .= "<td>{$rf['claim_form_no']}</td>";
                $_SESSION['rej_form_no'] .= "<td>{$rf['empid']}</td>";
                $_SESSION['rej_form_no'] .= "<td>{$rf['initials']}</td>";
                $_SESSION['rej_form_no'] .= "<td>{$rf['sname']}</td>";
                $_SESSION['rej_form_no'] .= "<td>{$rf['submitted_date']}</td>";
                $_SESSION['rej_form_no'] .= "<td><a href=\"../../controller/msmControllers/rejectFormController.php?claim_form_no={$rf['claim_form_no']}\">View Form</a></td>";

                header('Location:../../view/medicalSchemeMaintainer/msmRejectedClaimFormsV.php');
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }
    }
?>