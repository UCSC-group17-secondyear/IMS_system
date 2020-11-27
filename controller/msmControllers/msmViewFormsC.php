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

        if($result_forms > 0){
            while($rf = mysqli_fetch_assoc($result_forms)) {
                if ($rf['acceptance_status'] == 3){
                    $_SESSION['requested'] .= "<tr>";
                    if ($rf['opd_form_flag'] == 1) {
                        $_SESSION['requested'] .= "<td>OPD</td>";
                    } else {
                        $_SESSION['requested'] .= "<td>Surgical</td>";
                    }
                    $_SESSION['requested'] .= "<td>{$rf['claim_form_no']}</td>";
                    $_SESSION['requested'] .= "<td>{$rf['empid']}</td>";
                    $_SESSION['requested'] .= "<td>{$rf['initials']}</td>";
                    $_SESSION['requested'] .= "<td>{$rf['sname']}</td>";
                    $_SESSION['requested'] .= "<td>{$rf['submitted_date']}</td>";
                    $_SESSION['requested'] .= "<td><a href=\"../../controller/memControllers/claimFormListControllerTwo.php?claim_form_no={$rf['claim_form_no']}&user_id={$user_id}\">View</a></td>";
                    $_SESSION['requested'] .= "</tr>";
                }
                header('Location:../../view/medicalSchemeMaintainer/msmViewRequestedClaimFormV.php'); 
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }
    }

    if(isset($_POST['refferedclaim-submit'])) {
        $_SESSION['reffered'] = '';
        $reffered_forms = array();

        $reffered_forms = msmModel::getClaimForms($connect);

        if($reffered_forms > 0){
            while($rcf = mysqli_fetch_assoc($reffered_forms)) {
                if ($rcf['acceptance_status'] != 3){
                    $_SESSION['reffered'] .= "<tr>";
                    if ($rcf['opd_form_flag'] == 1) {
                        $_SESSION['reffered'] .= "<td>OPD</td>";
                    } else {
                        $_SESSION['reffered'] .= "<td>Surgical</td>";
                    }
                    $_SESSION['reffered'] .= "<td>{$rcf['claim_form_no']}</td>";
                    $_SESSION['reffered'] .= "<td>{$rcf['empid']}</td>";
                    $_SESSION['reffered'] .= "<td>{$rcf['initials']}</td>";
                    $_SESSION['reffered'] .= "<td>{$rcf['sname']}</td>";
                    $_SESSION['reffered'] .= "<td>{$rcf['submitted_date']}</td>";
                    if($rf['acceptance_status'] == 1){
                        $_SESSION['memberships'] .= "<td><a class=\"green\">Approved</a></td>";
                    } else {
                        $_SESSION['memberships'] .= "<td><a class=\"red\">Declined</a></td>";
                    }
                    $_SESSION['reffered'] .= "<td><a href=\"../../controller/memControllers/claimFormListControllerTwo.php?claim_form_no={$rf['claim_form_no']}&user_id={$user_id}\">View</a></td>";
                    $_SESSION['reffered'] .= "</tr>";
                }
                header('Location:../../view/medicalSchemeMaintainer/msmViewRefferedCLaimFormsV.php'); 
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }
    }

?>