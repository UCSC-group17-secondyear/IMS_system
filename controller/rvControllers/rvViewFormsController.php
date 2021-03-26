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
                $_SESSION['ref_form_no'] .= "<td><a href=\"../../controller/rvControllers/rvViewFormsController.php?reffered_form={$rf['claim_form_no']}&user_id={$user_id}\">View</a></td>";

                header('Location:../../view/reportViewer/rvRefferedClaimFormV.php');
                    
            }
        } else {
            header('Location:../../view/reportViewer/rvNoFormsAvaliableV.php');
        }

    } elseif (isset($_GET['reffered_form'])) {

        $claim_form_no = mysqli_real_escape_string($connect, $_GET['reffered_form']);
        $result_opd = rvModel::checkWhetherOpd($claim_form_no,$connect);
        $result_surgical = rvModel::checkWhetherSurgical($claim_form_no,$connect);
        $_SESSION['opd'] = mysqli_num_rows($result_opd);
        $_SESSION['surgical'] = mysqli_num_rows($result_surgical);

        if(mysqli_num_rows($result_opd)==1){
                    
            $result_one = mysqli_fetch_assoc($result_opd);
            $dependant_details = rvModel::getDependantDetails($result_one['dependant_id'], $connect);

            $user_id = $result_one['user_id'];

            if ($result_one['dependant_id'] == NULL) {
                $_SESSION['patient_name'] = $result_one['initials']." ".$result_one['sname'];
                $_SESSION['relationship'] = 'Myself';
            } elseif ($result_one['dependant_id'] > 0) {
                if (mysqli_num_rows($dependant_details) == 1) {
                    $depd = mysqli_fetch_assoc($dependant_details);
                    $_SESSION['patient_name'] = $depd['dependant_name'];
                    $_SESSION['relationship'] = $depd['relationship'];
                }
            }

            $_SESSION['mem_initials'] = $result_one['initials'];
            $_SESSION['mem_sname'] = $result_one['sname'];
            $_SESSION['claim_form_no'] = $result_one['claim_form_no'];
            $_SESSION['doctor_name'] = $result_one['doctor_name'];
            $_SESSION['treatment_received_date'] = $result_one['treatment_received_date'];
            $_SESSION['bill_issued_date'] = $result_one['bill_issued_date'];
            $_SESSION['purpose'] = $result_one['purpose'];
            $_SESSION['bill_amount'] = $result_one['bill_amount'];
            $_SESSION['a_status'] = $result_one['acceptance_status'];
            $_SESSION['revised_bill_amount'] = $result_one['revised_bill_amount'];
            $_SESSION['paid_status'] = $result_one['paid_status'];
            $_SESSION['final_bill_amount'] = $result_one['final_bill_amount'];
            $_SESSION['msm_comment'] = $result_one['msm_comment'];

            header('Location:../../view/reportViewer/rvViewRefClaimFormV.php');

        } elseif(mysqli_num_rows($result_surgical)==1){
            
            $result_one = mysqli_fetch_assoc($result_surgical);
            $dependant_details = rvModel::getDependantDetails($result_one['dependant_id'], $connect);

            $user_id = $result_one['user_id'];

            if ($result_one['dependant_id'] == NULL) {
                $_SESSION['patient_name'] = $result_one['initials']." ".$result_one['sname'];
                $_SESSION['relationship'] = 'Myself';
            } elseif ($result_one['dependant_id'] > 0) {
                if (mysqli_num_rows($dependant_details) == 1) {
                    $depd = mysqli_fetch_assoc($dependant_details);
                    $_SESSION['patient_name'] = $depd['dependant_name'];
                    $_SESSION['relationship'] = $depd['relationship'];
                }
            }

            $_SESSION['mem_initials'] = $result_one['initials'];
            $_SESSION['mem_sname'] = $result_one['sname'];
            $_SESSION['claim_form_no'] = $result_one['claim_form_no'];
            $_SESSION['accident_date'] = $result_one['accident_date'];
            $_SESSION['how_occured'] = $result_one['how_occured'];
            $_SESSION['injuries'] = $result_one['injuries'];
            $_SESSION['nature_of_illness'] = $result_one['nature_of_illness'];
            $_SESSION['commence_date'] = $result_one['commence_date'];
            $_SESSION['first_consult_date'] = $result_one['first_consult_date'];
            $_SESSION['doctor_name'] = $result_one['doctor_name'];
            $_SESSION['doctor_address'] = $result_one['doctor_address'];
            $_SESSION['hospitalized_date'] = $result_one['hospitalized_date'];
            $_SESSION['discharged_date'] = $result_one['discharged_date'];
            $_SESSION['illness_before'] = $result_one['illness_before'];
            $_SESSION['illness_before_years'] = $result_one['illness_before_years'];
            $_SESSION['sick_injury'] = $result_one['sick_injury'];
            $_SESSION['insurer_claims'] = $result_one['insurer_claims'];
            $_SESSION['nature_of'] = $result_one['nature_of'];
            $_SESSION['a_status'] = $result_one['acceptance_status'];
            $_SESSION['revised_bill_amount'] = $result_one['revised_bill_amount'];
            $_SESSION['paid_status'] = $result_one['paid_status'];
            $_SESSION['final_bill_amount'] = $result_one['final_bill_amount'];
            $_SESSION['msm_comment'] = $result_one['msm_comment'];

            header('Location:../../view/reportViewer/rvViewRefClaimFormV.php');
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
                $_SESSION['req_form_no'] .= "<td><a href=\"../../controller/rvControllers/rvViewFormsController.php?requested_form={$rf['claim_form_no']}\">View Form</a></td>";

                header('Location:../../view/reportViewer/rvRequestedClaimFormV.php');

            }
        } else {
            header('Location:../../view/reportViewer/rvNoFormsAvaliableV.php');
        }
    } elseif (isset($_GET['requested_form'])) {

        $claim_form_no = mysqli_real_escape_string($connect, $_GET['requested_form']);
        $result_opd = rvModel::checkWhetherOpd($claim_form_no,$connect);
        $result_surgical = rvModel::checkWhetherSurgical($claim_form_no,$connect);
        $_SESSION['reqf_opd'] = mysqli_num_rows($result_opd);
        $_SESSION['reqf_surgical'] = mysqli_num_rows($result_surgical);

        if(mysqli_num_rows($result_opd)==1){
                    
            $result_one = mysqli_fetch_assoc($result_opd);
            $dependant_details = rvModel::getDependantDetails($result_one['dependant_id'], $connect);

            $user_id = $result_one['user_id'];

            if ($result_one['dependant_id'] == NULL) {
                $_SESSION['reqf_patient_name'] = $result_one['initials']." ".$result_one['sname'];
                $_SESSION['reqf_relationship'] = 'Myself';
            } elseif ($result_one['dependant_id'] > 0) {
                if (mysqli_num_rows($dependant_details) == 1) {
                    $depd = mysqli_fetch_assoc($dependant_details);
                    $_SESSION['reqf_patient_name'] = $depd['dependant_name'];
                    $_SESSION['reqf_relationship'] = $depd['relationship'];
                }
            }

            $_SESSION['reqf_mem_initials'] = $result_one['initials'];
            $_SESSION['reqf_mem_sname'] = $result_one['sname'];
            $_SESSION['reqf_claim_form_no'] = $result_one['claim_form_no'];
            $_SESSION['reqf_doctor_name'] = $result_one['doctor_name'];
            $_SESSION['reqf_treatment_received_date'] = $result_one['treatment_received_date'];
            $_SESSION['reqf_bill_issued_date'] = $result_one['bill_issued_date'];
            $_SESSION['reqf_purpose'] = $result_one['purpose'];
            $_SESSION['reqf_bill_amount'] = $result_one['bill_amount'];
            $_SESSION['reqf_file_name'] = $result_one['file_name'];

            header('Location:../../view/reportViewer/rvViewReqClaimFormV.php');

        }

        if(mysqli_num_rows($result_surgical)==1){
            
            $result_one = mysqli_fetch_assoc($result_surgical);
            $dependant_details = rvModel::getDependantDetails($result_one['dependant_id'], $connect);

            $user_id = $result_one['user_id'];

            if ($result_one['dependant_id'] == NULL) {
                $_SESSION['patient_name'] = $result_one['initials']." ".$result_one['sname'];
                $_SESSION['relationship'] = 'Myself';
            } elseif ($result_one['dependant_id'] > 0) {
                if (mysqli_num_rows($dependant_details) == 1) {
                    $depd = mysqli_fetch_assoc($dependant_details);
                    $_SESSION['patient_name'] = $depd['dependant_name'];
                    $_SESSION['relationship'] = $depd['relationship'];
                }
            }

            $_SESSION['reqf_mem_initials'] = $result_one['initials'];
            $_SESSION['reqf_mem_sname'] = $result_one['sname'];
            $_SESSION['reqf_claim_form_no'] = $result_one['claim_form_no'];
            $_SESSION['reqf_accident_date'] = $result_one['accident_date'];
            $_SESSION['reqf_how_occured'] = $result_one['how_occured'];
            $_SESSION['reqf_injuries'] = $result_one['injuries'];
            $_SESSION['reqf_nature_of_illness'] = $result_one['nature_of_illness'];
            $_SESSION['reqf_commence_date'] = $result_one['commence_date'];
            $_SESSION['reqf_first_consult_date'] = $result_one['first_consult_date'];
            $_SESSION['reqf_doctor_name'] = $result_one['doctor_name'];
            $_SESSION['reqf_doctor_address'] = $result_one['doctor_address'];
            $_SESSION['reqf_hospitalized_date'] = $result_one['hospitalized_date'];
            $_SESSION['reqf_discharged_date'] = $result_one['discharged_date'];
            $_SESSION['reqf_illness_before'] = $result_one['illness_before'];
            $_SESSION['reqf_illness_before_years'] = $result_one['illness_before_years'];
            $_SESSION['reqf_sick_injury'] = $result_one['sick_injury'];
            $_SESSION['reqf_insurer_claims'] = $result_one['insurer_claims'];
            $_SESSION['reqf_nature_of'] = $result_one['nature_of'];
            $_SESSION['reqf_file_name'] = $result_one['file_name'];

            header('Location:../../view/reportViewer/rvViewReqClaimFormV.php');

        }

    }
?>