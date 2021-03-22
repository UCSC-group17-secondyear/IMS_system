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
                $_SESSION['memberships'] .= "<td><a href=\"../../controller/msmControllers/msmViewFormsC.php?view_member={$mem['userId']}\">View</a></td>";
                $_SESSION['memberships'] .= "</tr>";

                header('Location:../../view/medicalSchemeMaintainer/msmViewMembershipFormsV.php');
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }

    } elseif (isset($_GET['view_member'])) {

        $view_user = mysqli_real_escape_string($connect, $_GET['view_member']);
        $user_details = msmModel::view($view_user, $connect);
        $member_details = msmModel::viewmm($view_user, $connect);

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

            header('Location:../../view/medicalSchemeMaintainer/msmViewMemberDetailsV.php');
        }

    } elseif (isset($_GET['viewed_member'])) {

        $viewed_member = mysqli_real_escape_string($connect, $_GET['viewed_member']);
        $member_email = msmModel::getmail($viewed_member, $connect);

        if (isset($_POST['approvemf-submit'])) {

            $result = msmModel::requestaccept($viewed_member, $connect);

            if ($result) {
                $to_email = $member_email;
                $subject = "Membership Acceptance";
                $body =  "Your request for the membership of Medical scheme have been accepted  by the Medical Scheme Maintainer. Now you are a medical scheme member of IMSystem.";
                $headers = "From: ims.ucsc@gmail.com";

                $sendMail = mail($to_email, $subject, $body, $headers);
                
                header('Location:../../view/medicalSchemeMaintainer/msmAcceptedSuccesV.php');
            }

        } elseif (isset($_POST['declinemf-submit'])) {

            $result = msmModel::requestdecline($viewed_member, $connect);

            if ($result) {
                $to_email = $member_email;
                $subject = "Membership Declination";
                $body =  "Your request for the membership of Medical scheme have been declined by the Medical Scheme Maintainer because the mentioned department is wrong. Try again.";
                $headers = "From: ims.ucsc@gmail.com";

                $sendMail = mail($to_email, $subject, $body, $headers);
                
                header('Location:../../view/medicalSchemeMaintainer/msmDeclinedSuccesV.php');
            }
            
        } 

    } elseif (isset($_POST['requestedclaim-submit'])) {

        $result_forms = msmModel::getRequestedClaimForms($connect);
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
                $_SESSION['req_form_no'] .= "<td><a href=\"../../controller/msmControllers/msmViewFormsC.php?claim_form_no={$rf['claim_form_no']}\">View Form</a></td>";
                $_SESSION['req_form_no'] .= "</tr>";

                header('Location:../../view/medicalSchemeMaintainer/msmViewRequestedClaimFormV.php');
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }

    } elseif (isset($_GET['claim_form_no'])) {

        $claim_form_no = mysqli_real_escape_string($connect, $_GET['claim_form_no']);
        $result_opd = msmModel::checkWhetherOpd($claim_form_no,$connect);
        $result_surgical = msmModel::checkWhetherSurgical($claim_form_no,$connect);
        $_SESSION['rc_opd'] = mysqli_num_rows($result_opd);
        $_SESSION['rc_surgical'] = mysqli_num_rows($result_surgical);

        if(mysqli_num_rows($result_opd)==1){
                    
            $result_one = mysqli_fetch_assoc($result_opd);
            $user_id = $result_one['user_id'];
            $mem_name = msmModel::getMemberName($user_id, $connect);
            $name = mysqli_fetch_array($mem_name);

            $_SESSION['rc_mem_initials'] = $name[0];
            $_SESSION['rc_mem_sname'] = $name[1];
            $_SESSION['rc_claim_form_no'] = $result_one['claim_form_no'];
            $_SESSION['rc_patient_name'] = $result_one['dependant_name'];
            $_SESSION['rc_relationship'] = $result_one['relationship'];
            $_SESSION['rc_doctor_name'] = $result_one['doctor_name'];
            $_SESSION['rc_treatment_received_date'] = $result_one['treatment_received_date'];
            $_SESSION['rc_bill_issued_date'] = $result_one['bill_issued_date'];
            $_SESSION['rc_purpose'] = $result_one['purpose'];
            $_SESSION['rc_bill_amount'] = $result_one['bill_amount'];
            $_SESSION['rc_file_name'] = $result_one['file_name'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewReqClaimFormV.php');

        }

        if(mysqli_num_rows($result_surgical)==1){
            
            $result_one = mysqli_fetch_assoc($result_surgical);
            $user_id = $result_one['user_id'];
            $mem_name = msmModel::getMemberName($user_id,$connect );
            $name = mysqli_fetch_array($mem_name);

            $_SESSION['rc_mem_initials'] = $name[0];
            $_SESSION['rc_mem_sname'] = $name[1];
            $_SESSION['rc_claim_form_no'] = $result_one['claim_form_no'];
            $_SESSION['rc_patient_name'] = $result_one['dependant_name'];
            $_SESSION['rc_relationship'] = $result_one['relationship'];
            $_SESSION['rc_accident_date'] = $result_one['accident_date'];
            $_SESSION['rc_how_occured'] = $result_one['how_occured'];
            $_SESSION['rc_injuries'] = $result_one['injuries'];
            $_SESSION['rc_nature_of_illness'] = $result_one['nature_of_illness'];
            $_SESSION['rc_commence_date'] = $result_one['commence_date'];
            $_SESSION['rc_first_consult_date'] = $result_one['first_consult_date'];
            $_SESSION['rc_doctor_name'] = $result_one['doctor_name'];
            $_SESSION['rc_doctor_address'] = $result_one['doctor_address'];
            $_SESSION['rc_hospitalized_date'] = $result_one['hospitalized_date'];
            $_SESSION['rc_discharged_date'] = $result_one['discharged_date'];
            $_SESSION['rc_illness_before'] = $result_one['illness_before'];
            $_SESSION['rc_illness_before_years'] = $result_one['illness_before_years'];
            $_SESSION['rc_sick_injury'] = $result_one['sick_injury'];
            $_SESSION['rc_insurer_claims'] = $result_one['insurer_claims'];
            $_SESSION['rc_nature_of'] = $result_one['nature_of'];
            $_SESSION['rc_file_name'] = $result_one['file_name'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewReqClaimFormV.php');

        }

    } elseif (isset($_POST['tobepaid-submit'])) {

        $_SESSION['topaid_form_no'] = '';
        $tobepaid_forms = msmModel::getToBePaidClaimForms($connect);

        if (mysqli_num_rows($tobepaid_forms) > 0) {

            while ($tp = mysqli_fetch_assoc($tobepaid_forms)) {
                $_SESSION['topaid_form_no'] .= "<tr>";
                if ($tp['opd_form_flag'] == 1) {
                    $_SESSION['topaid_form_no'] .= "<td>OPD</td>";
                } else {
                    $_SESSION['topaid_form_no'] .= "<td>Surgical</td>";
                }
                $_SESSION['topaid_form_no'] .= "<td>{$tp['claim_form_no']}</td>";
                $_SESSION['topaid_form_no'] .= "<td>{$tp['empid']}</td>";
                $_SESSION['topaid_form_no'] .= "<td>{$tp['initials']}</td>";
                $_SESSION['topaid_form_no'] .= "<td>{$tp['sname']}</td>";
                $_SESSION['topaid_form_no'] .= "<td>{$tp['submitted_date']}</td>";
                $_SESSION['topaid_form_no'] .= "<td><a href=\"../../controller/msmControllers/msmViewFormsC.php?topaid_claim_form={$tp['claim_form_no']}\">View Form</a></td>";

                header('Location:../../view/medicalSchemeMaintainer/msmViewToBePaidClaimFormsV.php');  
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }

    } elseif (isset($_GET['topaid_claim_form'])) {

        $claim_form_no = mysqli_real_escape_string($connect, $_GET['topaid_claim_form']);
        $result_opd = msmModel::checkWhetherOpd($claim_form_no,$connect);
        $result_surgical = msmModel::checkWhetherSurgical($claim_form_no,$connect);
        $_SESSION['opd'] = mysqli_num_rows($result_opd);
        $_SESSION['surgical'] = mysqli_num_rows($result_surgical);

        if(mysqli_num_rows($result_opd)==1){
                    
            $result_one = mysqli_fetch_assoc($result_opd);
            $user_id = $result_one['user_id'];
            $mem_name = msmModel::getMemberName($user_id,$connect );
            $name = mysqli_fetch_array($mem_name);

            //check medical year relavant to form
            $bill_issused_date = $result_one['bill_issued_date'];
            $bill_issused_year = date('Y', strtotime($bill_issused_date));

            //get medical year ended date with $bill_issused_year
            $med_end_date = msmModel::getMedYearEndDate($bill_issused_year,$connect);
            $med_end_date_result = mysqli_fetch_assoc($med_end_date);
            $med_year_end_date = $med_end_date_result['end_date'];
            $med_year = $med_end_date_result['medical_year'];

            if (strtotime($bill_issused_date) <= strtotime($med_year_end_date)) {
                $medical_year = $med_year;
            } else {
                $medical_year = ($med_year + 1);
            }

            //get mem claim details
            $check_has_claim_det = msmModel::getMembClaimDetails($user_id, $medical_year, $connect);

            if (mysqli_num_rows($check_has_claim_det) == 1) {
                $result = mysqli_fetch_assoc($check_has_claim_det);

                $_SESSION['medical_year'] = $medical_year;
                $_SESSION['used_amount'] = $result['used_amount'];
                $_SESSION['remain_amount'] = $result['remain_amount'];
                $_SESSION['msm_comment'] = "";
            } elseif (mysqli_num_rows($check_has_claim_det) == 0) {
                $_SESSION['medical_year'] = $medical_year;
                $_SESSION['remain_amount'] = "-";
                $_SESSION['msm_comment'] = "Member hasn't registerd for this medical year";
            }

            $_SESSION['form_no'] = $claim_form_no;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['mem_initials'] = $name[0];
            $_SESSION['mem_sname'] = $name[1];
            $_SESSION['claim_form_no'] = $claim_form_no;
            $_SESSION['patient_name'] = $result_one['dependant_name'];
            $_SESSION['relationship'] = $result_one['relationship'];
            $_SESSION['doctor_name'] = $result_one['doctor_name'];
            $_SESSION['treatment_received_date'] = $result_one['treatment_received_date'];
            $_SESSION['bill_issued_date'] = $result_one['bill_issued_date'];
            $_SESSION['purpose'] = $result_one['purpose'];
            $_SESSION['bill_amount'] = $result_one['bill_amount'];
            $_SESSION['revised_bill_amount'] = $result_one['revised_bill_amount'];
            $_SESSION['a_status'] = $result_one['acceptance_status'];

            header('Location:../../view/medicalSchemeMaintainer/msmToBePaidOpdFormV.php');

        }

        if(mysqli_num_rows($result_surgical)==1){
            
            $result_one = mysqli_fetch_assoc($result_surgical);
            $user_id = $result_one['user_id'];
            $mem_name = msmModel::getMemberName($user_id,$connect );
            $name = mysqli_fetch_array($mem_name);

            //check medical year relavant to form
            $hospitalized_date = $result_one['hospitalized_date'];
            $hospitalized_year = date('Y',strtotime($hospitalized_date));

            //get medical year ended date with $bill_issused_yeat
            $med_end_date = msmModel::getMedYearEndDate($hospitalized_year,$connect);
            $med_end_date_result = mysqli_fetch_assoc($med_end_date);
            $med_year_end_date = $med_end_date_result['end_date'];
            $med_year = $med_end_date_result['medical_year'];

            if(strtotime($hospitalized_date) <= strtotime($med_year_end_date)){
                $medical_year = $med_year;
            }
            else{
                $medical_year = ($med_year + 1);
            }

            //get mem claim details
            $check_has_claim_det = msmModel::getMembClaimDetails($user_id, $medical_year, $connect);

            if(mysqli_num_rows($check_has_claim_det) == 1){

                $result = mysqli_fetch_assoc($check_has_claim_det);

                $_SESSION['medical_year'] = $medical_year;
                $_SESSION['used_amount'] = $result['used_amount'];
                $_SESSION['remain_amount'] = $result['remain_amount'];
                $_SESSION['msm_comment'] = "";

            }
            if(mysqli_num_rows($check_has_claim_det) == 0){

                $_SESSION['medical_year'] = $medical_year;
                $_SESSION['remain_amount'] = "-";
                $_SESSION['msm_comment'] = "Member hasn't registerd to this medical year";
            }

            $_SESSION['form_no'] = $claim_form_no;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['mem_initials'] = $name[0];
            $_SESSION['mem_sname'] = $name[1];
            $_SESSION['claim_form_no'] = $claim_form_no;
            $_SESSION['patient_name'] = $result_one['dependant_name'];
            $_SESSION['relationship'] = $result_one['relationship'];
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
            $_SESSION['revised_bill_amount'] = $result_one['revised_bill_amount'];
            $_SESSION['a_status'] = $result_one['acceptance_status'];

            header('Location:../../view/medicalSchemeMaintainer/msmToBePaidSurFormV.php');

        }

    // } elseif (isset($_POST['paidaccept-submit'])) {

    //     $user_id = $_SESSION['user_id'];
    //     $claim_form_no = mysqli_real_escape_string($connect, $_POST['claim_form_no']);
    //     $msm_comment = mysqli_real_escape_string($connect, $_POST['msm_comment']);
    //     $medical_year = mysqli_real_escape_string($connect, $_POST['medical_year']);
    //     $final_bill_amount = mysqli_real_escape_string($connect, $_POST['final_bill_amount']);

    //     $check_has_claim_det = msmModel::getMembClaimDetails($user_id, $medical_year, $connect);

    //     if(mysqli_num_rows($check_has_claim_det) == 1){
    //         $remain_amount = mysqli_real_escape_string($connect, $_POST['remain_amount']);

    //         if ($final_bill_amount <= $remain_amount) {

    //             $new_remain = $remain_amount - $final_bill_amount;
    //             $result_form = msmModel::updatePaidStatus($claim_form_no, $user_id, $final_bill_amount, $msm_comment, $connect);
    //             $result_amount = msmModel::updateClaimAmount($user_id, $medical_year, $new_remain, $final_bill_amount, $connect);

    //             if($result_amount && $result_form){
    //                 header('Location:../../view/medicalSchemeMaintainer/msmFormUpdateSuccessV.php');
    //             }
    //         } elseif ($remain_amount!=0 && $final_bill_amount > $remain_amount) {

    //             $final_bill_amount = $remain_amount;
    //             $new_remain = $remain_amount - $final_bill_amount;
    //             $result_form = msmModel::updatePaidStatus($claim_form_no, $user_id, $final_bill_amount, $msm_comment, $connect);
    //             $result_amount = msmModel::updateClaimAmount($user_id, $medical_year, $new_remain, $final_bill_amount, $connect);

    //             if($result_amount && $result_form){
    //                 header('Location:../../view/medicalSchemeMaintainer/msmFormUpdateSuccessV.php');
    //             }

    //         } elseif($remain_amount == 0 || $final_bill_amount == 0){

    //             $result_form = msmModel::updateNoPaidStatus($claim_form_no, $user_id, $msm_comment, $connect);

    //             if($result_form){
    //                 header('Location:../../view/medicalSchemeMaintainer/msmFormUpdateSuccessV.php');
    //             }

    //         }

    //     } elseif(mysqli_num_rows($check_has_claim_det) == 0){

    //         $result_form = msmModel::updateNoPaidStatus($claim_form_no, $user_id, $msm_comment, $connect);

    //         if($result_form){
    //             header('Location:../../view/medicalSchemeMaintainer/msmFormUpdateSuccessV.php');
    //         }
    //     }

    } elseif (isset($_POST['paid-submit'])) {

        $_SESSION['paid_form_no'] = '';
        $paid_forms = msmModel::paidClaimForms($connect);

        if (mysqli_num_rows($paid_forms) > 0) {
            while ($pf = mysqli_fetch_assoc($paid_forms)) {
                $_SESSION['paid_form_no'] .= "<tr>";
                if ($pf['opd_form_flag'] == 1) {
                    $_SESSION['paid_form_no'] .= "<td>OPD</td>";
                } else {
                    $_SESSION['paid_form_no'] .= "<td>Surgical</td>";
                }
                $_SESSION['paid_form_no'] .= "<td>{$pf['claim_form_no']}</td>";
                $_SESSION['paid_form_no'] .= "<td>{$pf['empid']}</td>";
                $_SESSION['paid_form_no'] .= "<td>{$pf['initials']}</td>";
                $_SESSION['paid_form_no'] .= "<td>{$pf['sname']}</td>";
                $_SESSION['paid_form_no'] .= "<td>{$pf['submitted_date']}</td>";
                $_SESSION['paid_form_no'] .= "<td><a href=\"../../controller/msmControllers/msmViewFormsC.php?claimpaid_form={$pf['claim_form_no']}\">View Form</a></td>";

                header('Location:../../view/medicalSchemeMaintainer/msmViewPaidClaimFormsV.php');
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }

    } elseif (isset($_GET['claimpaid_form'])) {

        $claim_form_no = mysqli_real_escape_string($connect, $_GET['claimpaid_form']);
        $result_opd = msmModel::checkWhetherOpd($claim_form_no,$connect);
        $result_surgical = msmModel::checkWhetherSurgical($claim_form_no,$connect);

        $_SESSION['pcf_opd'] = mysqli_num_rows($result_opd);
        $_SESSION['pcf_surgical'] = mysqli_num_rows($result_surgical);

        if (mysqli_num_rows($result_opd) == 1) {

            $result_one = mysqli_fetch_assoc($result_opd);

            $user_id = $result_one['user_id'];
            $mem_name = msmModel::getMemberName($user_id,$connect );
            $name = mysqli_fetch_array($mem_name);

            $_SESSION['pcf_claim_form_no'] = $claim_form_no;
            $_SESSION['pcf_user_id'] = $user_id;
            $_SESSION['pcf_mem_initials'] = $name[0];
            $_SESSION['pcf_mem_sname'] = $name[1];
            $_SESSION['pcf_patient_name'] = $result_one['dependant_name'];
            $_SESSION['pcf_relationship'] = $result_one['relationship'];
            $_SESSION['pcf_doctor_name'] = $result_one['doctor_name'];
            $_SESSION['pcf_treatment_received_date'] = $result_one['treatment_received_date'];
            $_SESSION['pcf_bill_issued_date'] = $result_one['bill_issued_date'];
            $_SESSION['pcf_purpose'] = $result_one['purpose'];
            $_SESSION['pcf_bill_amount'] = $result_one['bill_amount'];
            $_SESSION['pcf_revised_bill_amount'] = $result_one['revised_bill_amount'];
            $_SESSION['pcf_a_status'] = $result_one['acceptance_status'];
            $_SESSION['pcf_p_status'] = $result_one['paid_status'];
            $_SESSION['pcf_paid_amount'] = $result_one['final_bill_amount'];
            $_SESSION['pcf_msm_comment'] = $result_one['msm_comment'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewPaidFormV.php');

        } elseif (mysqli_num_rows($result_surgical) == 1) {

            $result_one = mysqli_fetch_assoc($result_surgical);

            $user_id = $result_one['user_id'];
            $mem_name = msmModel::getMemberName($user_id,$connect );
            $name = mysqli_fetch_array($mem_name);

            $_SESSION['pcf_form_no'] = $claim_form_no;
            $_SESSION['pcf_user_id'] = $user_id;
            $_SESSION['pcf_mem_initials'] = $name[0];
            $_SESSION['pcf_mem_sname'] = $name[1];
            $_SESSION['pcf_claim_form_no'] = $claim_form_no;
            $_SESSION['pcf_patient_name'] = $result_one['dependant_name'];
            $_SESSION['pcf_relationship'] = $result_one['relationship'];
            $_SESSION['pcf_accident_date'] = $result_one['accident_date'];
            $_SESSION['pcf_how_occured'] = $result_one['how_occured'];
            $_SESSION['pcf_injuries'] = $result_one['injuries'];
            $_SESSION['pcf_nature_of_illness'] = $result_one['nature_of_illness'];
            $_SESSION['pcf_commence_date'] = $result_one['commence_date'];
            $_SESSION['pcf_first_consult_date'] = $result_one['first_consult_date'];
            $_SESSION['pcf_doctor_name'] = $result_one['doctor_name'];
            $_SESSION['pcf_doctor_address'] = $result_one['doctor_address'];
            $_SESSION['pcf_hospitalized_date'] = $result_one['hospitalized_date'];
            $_SESSION['pcf_discharged_date'] = $result_one['discharged_date'];
            $_SESSION['pcf_illness_before'] = $result_one['illness_before'];
            $_SESSION['pcf_illness_before_years'] = $result_one['illness_before_years'];
            $_SESSION['pcf_sick_injury'] = $result_one['sick_injury'];
            $_SESSION['pcf_insurer_claims'] = $result_one['insurer_claims'];
            $_SESSION['pcf_nature_of'] = $result_one['nature_of'];
            $_SESSION['pcf_revised_bill_amount'] = $result_one['revised_bill_amount'];
            $_SESSION['pcf_a_status'] = $result_one['acceptance_status'];
            $_SESSION['pcf_p_status'] = $result_one['paid_status'];
            $_SESSION['pcf_paid_amount'] = $result_one['final_bill_amount'];
            $_SESSION['pcf_msm_comment'] = $result_one['msm_comment'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewPaidFormV.php');
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
                $_SESSION['rej_form_no'] .= "<td><a href=\"../../controller/msmControllers/msmViewFormsC.php?reject_form_no={$rf['claim_form_no']}\">View Form</a></td>";

                header('Location:../../view/medicalSchemeMaintainer/msmRejectedClaimFormsV.php');
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoFormsV.php');
        }
    } elseif (isset($_GET['reject_form_no'])) {

        $claim_form_no = mysqli_real_escape_string($connect, $_GET['reject_form_no']);
        $result_opd = msmModel::checkWhetherOpd($claim_form_no,$connect);
        $result_surgical = msmModel::checkWhetherSurgical($claim_form_no,$connect);
        $_SESSION['rcf_opd'] = mysqli_num_rows($result_opd);
        $_SESSION['rcf_surgical'] = mysqli_num_rows($result_surgical);

        if (mysqli_num_rows($result_opd) == 1) {
                    
            $result_one = mysqli_fetch_assoc($result_opd);
            $user_id = $result_one['user_id'];
            $mem_name = msmModel::getMemberName($user_id,$connect );
            $name = mysqli_fetch_array($mem_name);

            $_SESSION['rcf_mem_initials'] = $name[0];
            $_SESSION['rcf_mem_sname'] = $name[1];
            $_SESSION['rcf_claim_form_no'] = $result_one['claim_form_no'];
            $_SESSION['rcf_patient_name'] = $result_one['dependant_name'];
            $_SESSION['rcf_relationship'] = $result_one['relationship'];
            $_SESSION['rcf_doctor_name'] = $result_one['doctor_name'];
            $_SESSION['rcf_treatment_received_date'] = $result_one['treatment_received_date'];
            $_SESSION['rcf_bill_issued_date'] = $result_one['bill_issued_date'];
            $_SESSION['rcf_purpose'] = $result_one['purpose'];
            $_SESSION['rcf_bill_amount'] = $result_one['bill_amount'];
            $_SESSION['rcf_a_status'] = $result_one['acceptance_status'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewRejClaimFormV.php');

        } else {
            
            $result_one = mysqli_fetch_assoc($result_surgical);
            $user_id = $result_one['user_id'];
            $mem_name = msmModel::getMemberName($user_id,$connect );
            $name = mysqli_fetch_array($mem_name);

            $_SESSION['rcf_mem_initials'] = $name[0];
            $_SESSION['rcf_mem_sname'] = $name[1];
            $_SESSION['rcf_claim_form_no'] = $result_one['claim_form_no'];
            $_SESSION['rcf_patient_name'] = $result_one['dependant_name'];
            $_SESSION['rcf_relationship'] = $result_one['relationship'];
            $_SESSION['rcf_accident_date'] = $result_one['accident_date'];
            $_SESSION['rcf_how_occured'] = $result_one['how_occured'];
            $_SESSION['rcf_injuries'] = $result_one['injuries'];
            $_SESSION['rcf_nature_of_illness'] = $result_one['nature_of_illness'];
            $_SESSION['rcf_commence_date'] = $result_one['commence_date'];
            $_SESSION['rcf_first_consult_date'] = $result_one['first_consult_date'];
            $_SESSION['rcf_doctor_name'] = $result_one['doctor_name'];
            $_SESSION['rcf_doctor_address'] = $result_one['doctor_address'];
            $_SESSION['rcf_hospitalized_date'] = $result_one['hospitalized_date'];
            $_SESSION['rcf_discharged_date'] = $result_one['discharged_date'];
            $_SESSION['rcf_illness_before'] = $result_one['illness_before'];
            $_SESSION['rcf_illness_before_years'] = $result_one['illness_before_years'];
            $_SESSION['rcf_sick_injury'] = $result_one['sick_injury'];
            $_SESSION['rcf_insurer_claims'] = $result_one['insurer_claims'];
            $_SESSION['rcf_nature_of'] = $result_one['nature_of'];
            $_SESSION['rcf_a_status'] = $result_one['acceptance_status'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewRejClaimFormV.php');
        }

    }
?>