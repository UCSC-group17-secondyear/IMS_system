<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/msmModel/viewFormsinMSModel.php');
    
    if(isset($_POST['membershipform-submit'])) {
        $membership_forms = msmModel::fetchmemberships($connect);
        $_SESSION['memberships'] = '';
        
        if ($membership_forms > 0) {
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
                $_SESSION['memberships'] .= "<td><a href=\"../../controller/msmControllers/msmMembershipForms2C.php?mem_index={$mem['userId']}\">View</a></td>";
                $_SESSION['memberships'] .= "</tr>";

                header('Location:../../view/medicalSchemeMaintainer/msmViewMembershipFormsV.php');
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }
    }

    if(isset($_POST['requestedclaim-submit'])) {
        $_SESSION['claim_form_no'] = '';
        $result_forms = array();

        $result_forms = msmModel::getClaimForms($connect);

        if(mysqli_num_rows($result_forms)>0){
            while($rf = mysqli_fetch_assoc($result_forms)) {
                if ($rf['acceptance_status'] == 3){
                    $_SESSION['claim_form_no'] .= "<tr>";
                if ($rf['opd_form_flag'] == 1) {
                    $_SESSION['claim_form_no'] .= "<td>OPD</td>";
                } else {
                    $_SESSION['claim_form_no'] .= "<td>Surgical</td>";
                }
                
                
                $_SESSION['claim_form_no'] .= "<td>{$rf['claim_form_no']}</td>";
                $_SESSION['claim_form_no'] .= "<td>{$submitted_date}</td>";
                $_SESSION['claim_form_no'] .= "<td><a href=\"../../controller/memControllers/claimFormListControllerTwo.php?claim_form_no={$rf['claim_form_no']}&user_id={$user_id}\">View Form</a></td>";
                }

                header('Location:../../view/medicalSchemeMaintainer/msmViewRequestedClaimFormV.php'); 
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/memNoFormsAvaliableV.php');
        }
    }

    if(isset($_POST['refferedclaim-submit'])) {

    }

?>