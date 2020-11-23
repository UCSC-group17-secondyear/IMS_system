<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel.php');

    $membership_forms = msmModel::fetchmemberships($connect);
    $_SESSION['memberships'] = '';
    
    if ($membership_forms) {
        // if($mem['acceptance_status'] == 1){
            while ($mem = mysqli_fetch_assoc($membership_forms)) {
                if($mem['acceptance_status'] == 1){
                    $_SESSION['memberships'] .= "<tr>";
                    $_SESSION['memberships'] .= "<td>{$mem['empid']}</td>";
                    $_SESSION['memberships'] .= "<td>{$mem['initials']}</td>";
                    $_SESSION['memberships'] .= "<td>{$mem['sname']}</td>";
                    $_SESSION['memberships'] .= "<td>{$mem['department']}</td>";
                    $_SESSION['memberships'] .= "<td>{$mem['healthcondition']}</td>";
                    $_SESSION['memberships'] .= "<td>{$mem['civilstatus']}</td>";
                    $_SESSION['memberships'] .= "<td>{$mem['form_submission_date']}</td>";
                    $_SESSION['memberships'] .= "<td><a class=\"green\">Approved</a></td>";
                    $_SESSION['memberships'] .= "<td><a href=\"../../controller/msmControllers/msmMembershipForms2C.php?mem_index={$mem['userId']}\">View</a></td>";
                    $_SESSION['memberships'] .= "</tr>";
        
                    header('Location:../../view/medicalSchemeMaintainer/msmViewMembershipFormsV.php');
                } else {
                    $_SESSION['memberships'] .= "<tr>";
                    $_SESSION['memberships'] .= "<td>{$mem['empid']}</td>";
                    $_SESSION['memberships'] .= "<td>{$mem['initials']}</td>";
                    $_SESSION['memberships'] .= "<td>{$mem['sname']}</td>";
                    $_SESSION['memberships'] .= "<td>{$mem['department']}</td>";
                    $_SESSION['memberships'] .= "<td>{$mem['healthcondition']}</td>";
                    $_SESSION['memberships'] .= "<td>{$mem['civilstatus']}</td>";
                    $_SESSION['memberships'] .= "<td>{$mem['form_submission_date']}</td>";
                    $_SESSION['memberships'] .= "<td><a class=\"red\">Declined</a></td>";
                    $_SESSION['memberships'] .= "<td><a href=\"../../controller/msmControllers/msmMembershipForms2C.php?mem_index={$mem['userId']}\">View</a></td>";
                    $_SESSION['memberships'] .= "</tr>";
        
                    header('Location:../../view/medicalSchemeMaintainer/msmViewMembershipFormsV.php');
                }
            }
        // } else {
        //     while ($mem = mysqli_fetch_assoc($membership_forms)) {
                
        //     }
        // } 
    }
?>