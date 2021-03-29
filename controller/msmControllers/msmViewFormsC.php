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
                if($mem['married'] == 1){
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
        $_SESSION['membership_form_view'] = $view_user;
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
            $_SESSION['fr_scheme_id'] = $md['scheme_id'];
            $_SESSION['fr_form_submission_date'] = $md['form_submission_date'];
            $_SESSION['fr_acceptance_status'] = $md['acceptance_status'];
            $_SESSION['fr_membership_status'] = $md['membershiform_paid'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewMemberDetailsV.php');
        }

    } elseif (isset($_GET['viewed_member'])) {

        $viewed_member = mysqli_real_escape_string($connect, $_GET['viewed_member']);
        $member_email = msmModel::getmail($viewed_member, $connect);
        $me = mysqli_fetch_array($member_email);

        if (isset($_POST['approvemf-submit'])) {

            $result = msmModel::requestaccept($viewed_member, $connect);

            if ($result) {

                $memberdetails = msmModel::getMembershipdetails($viewed_member, $connect);
                while ($mem = mysqli_fetch_array($memberdetails)) {
                    $_SESSION['scheme'] = $mem['scheme_id'];
                    $_SESSION['form_submission'] = $mem['form_submission_date'];
                }

                $medicalyear = msmModel::getMedicalyear($_SESSION['form_submission'], $connect);
                while ($medyear = mysqli_fetch_array($medicalyear)) {
                    $_SESSION['medical_year'] = $medyear['medical_year'];
                }

                $scheme = msmModel::schemePayment($_SESSION['scheme'], $connect);
                while ($s = mysqli_fetch_array($scheme)) {
                    $_SESSION['sum'] = $s['sum'];
                }

                $added = msmModel::addClaimdetails($viewed_member, $_SESSION['medical_year'], $_SESSION['scheme'], $_SESSION['sum'], $connect);

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
                
                // header('Location:../../view/medicalSchemeMaintainer/msmDeclinedSuccesV.php');
            }
            
        } 

    } elseif (isset($_POST['requestedclaim-submit'])) {

        $result_forms = msmModel::getRequestedClaimForms($connect);
        $_SESSION['req_form_no'] = '';
        $_SESSION['form_acceptance'] = '';

        if(mysqli_num_rows($result_forms) > 0) {
            while($rf = mysqli_fetch_assoc($result_forms)) {
                $_SESSION['form_acceptance'] = $rf['acceptance_status'];

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
        $_SESSION['opd'] = mysqli_num_rows($result_opd);
        $_SESSION['surgical'] = mysqli_num_rows($result_surgical);

        if(mysqli_num_rows($result_opd)==1){
                    
            $result_form = mysqli_fetch_assoc($result_opd);
            $dependant_details = msmModel::getDependantDetails($result_form['dependant_id'], $connect);

            $user_id = $result_form['user_id'];

            if ($result_form['dependant_id'] == NULL) {
                $_SESSION['patient_name'] = $result_form['initials']." ".$result_form['sname'];
                $_SESSION['relationship'] = 'Myself';
            } elseif ($result_form['dependant_id'] > 0) {
                if (mysqli_num_rows($dependant_details) == 1) {
                    $depd = mysqli_fetch_assoc($dependant_details);
                    $_SESSION['patient_name'] = $depd['dependant_name'];
                    $_SESSION['relationship'] = $depd['relationship'];
                }
            }

            $_SESSION['mem_initials'] = $result_form['initials'];
            $_SESSION['mem_sname'] = $result_form['sname'];
            $_SESSION['claim_form_no'] = $result_form['claim_form_no'];
            $_SESSION['doctor_name'] = $result_form['doctor_name'];
            $_SESSION['treatment_received_date'] = $result_form['treatment_received_date'];
            $_SESSION['bill_issued_date'] = $result_form['bill_issued_date'];
            $_SESSION['purpose'] = $result_form['purpose'];
            $_SESSION['bill_amount'] = $result_form['bill_amount'];
            $_SESSION['file_name'] = $result_form['file_name'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewOpdFormV.php');

        }

        if(mysqli_num_rows($result_surgical)==1){
            
            $result_form = mysqli_fetch_assoc($result_surgical);
            $dependant_details = msmModel::getDependantDetails($result_form['dependant_id'], $connect);

            $user_id = $result_form['user_id'];

            if ($result_form['dependant_id'] == NULL) {
                $_SESSION['patient_name'] = $result_form['initials']." ".$result_form['sname'];
                $_SESSION['relationship'] = 'Myself';
            } elseif ($result_form['dependant_id'] > 0) {
                if (mysqli_num_rows($dependant_details) == 1) {
                    $depd = mysqli_fetch_assoc($dependant_details);
                    $_SESSION['patient_name'] = $depd['dependant_name'];
                    $_SESSION['relationship'] = $depd['relationship'];
                }
            }

            $_SESSION['mem_initials'] = $result_form['initials'];
            $_SESSION['mem_sname'] = $result_form['sname'];
            $_SESSION['claim_form_no'] = $result_form['claim_form_no'];
            $_SESSION['accident_date'] = $result_form['accident_date'];
            $_SESSION['how_occured'] = $result_form['how_occured'];
            $_SESSION['injuries'] = $result_form['injuries'];
            $_SESSION['nature_of_illness'] = $result_form['nature_of_illness'];
            $_SESSION['commence_date'] = $result_form['commence_date'];
            $_SESSION['first_consult_date'] = $result_form['first_consult_date'];
            $_SESSION['doctor_name'] = $result_form['doctor_name'];
            $_SESSION['doctor_address'] = $result_form['doctor_address'];
            $_SESSION['hospitalized_date'] = $result_form['hospitalized_date'];
            $_SESSION['discharged_date'] = $result_form['discharged_date'];
            $_SESSION['illness_before'] = $result_form['illness_before'];
            $_SESSION['illness_before_years'] = $result_form['illness_before_years'];
            $_SESSION['sick_injury'] = $result_form['sick_injury'];
            $_SESSION['insurer_claims'] = $result_form['insurer_claims'];
            $_SESSION['nature_of'] = $result_form['nature_of'];
            $_SESSION['file_name'] = $result_form['file_name'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewSurgicalFormV.php');

        }

    } elseif (isset($_POST['tobepaid-submit'])) {

        $_SESSION['form_acceptance'] = '';
        $_SESSION['form_paid'] = '';
        $_SESSION['topaid_form_no'] = '';
        $tobepaid_forms = msmModel::getToBePaidClaimForms($connect);

        if (mysqli_num_rows($tobepaid_forms) > 0) {

            while ($tp = mysqli_fetch_assoc($tobepaid_forms)) {
                $_SESSION['form_acceptance'] = $tp['acceptance_status'];
                $_SESSION['form_paid'] = $tp['paid_status'];

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
                    
            $result_form = mysqli_fetch_assoc($result_opd);
            $dependant_details = msmModel::getDependantDetails($result_form['dependant_id'], $connect);

            $user_id = $result_form['user_id'];

            //check medical year relavant to form
            $bill_issused_date = $result_form['bill_issued_date'];
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

            if ($result_form['dependant_id'] == NULL) {
                $_SESSION['patient_name'] = $result_form['initials']." ".$result_form['sname'];
                $_SESSION['relationship'] = 'Myself';
            } elseif ($result_form['dependant_id'] > 0) {
                if (mysqli_num_rows($dependant_details) == 1) {
                    $depd = mysqli_fetch_assoc($dependant_details);
                    $_SESSION['patient_name'] = $depd['dependant_name'];
                    $_SESSION['relationship'] = $depd['relationship'];
                }
            }

            $_SESSION['form_no'] = $claim_form_no;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['mem_initials'] = $result_form['initials'];
            $_SESSION['mem_sname'] = $result_form['sname'];
            $_SESSION['claim_form_no'] = $claim_form_no;
            $_SESSION['doctor_name'] = $result_form['doctor_name'];
            $_SESSION['treatment_received_date'] = $result_form['treatment_received_date'];
            $_SESSION['bill_issued_date'] = $result_form['bill_issued_date'];
            $_SESSION['purpose'] = $result_form['purpose'];
            $_SESSION['bill_amount'] = $result_form['bill_amount'];
            $_SESSION['revised_bill_amount'] = $result_form['revised_bill_amount'];
            $_SESSION['form_acceptance'] = $result_form['acceptance_status'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewOpdFormV.php');

        }

        if(mysqli_num_rows($result_surgical)==1){
            
            $result_form = mysqli_fetch_assoc($result_surgical);
            $dependant_details = msmModel::getDependantDetails($result_form['dependant_id'], $connect);

            $user_id = $result_form['user_id'];

            //check medical year relavant to form
            $hospitalized_date = $result_form['hospitalized_date'];
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

            if (mysqli_num_rows($check_has_claim_det) == 1) {
                
                $result = mysqli_fetch_assoc($check_has_claim_det);
                $_SESSION['medical_year'] = $medical_year;
                $_SESSION['used_amount'] = $result['used_amount'];
                $_SESSION['remain_amount'] = $result['remain_amount'];
                $_SESSION['msm_comment'] = "";

            } elseif (mysqli_num_rows($check_has_claim_det) == 0) {

                $_SESSION['medical_year'] = $medical_year;
                $_SESSION['remain_amount'] = "-";
                $_SESSION['msm_comment'] = "Member hasn't registerd to this medical year";

            }

            if ($result_form['dependant_id'] == NULL) {
                $_SESSION['patient_name'] = $result_form['initials']." ".$result_form['sname'];
                $_SESSION['relationship'] = 'Myself';
            } elseif ($result_form['dependant_id'] > 0) {
                if (mysqli_num_rows($dependant_details) == 1) {
                    $depd = mysqli_fetch_assoc($dependant_details);
                    $_SESSION['patient_name'] = $depd['dependant_name'];
                    $_SESSION['relationship'] = $depd['relationship'];
                }
            }

            $_SESSION['form_no'] = $claim_form_no;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['mem_initials'] = $result_form['initials'];
            $_SESSION['mem_sname'] = $result_form['sname'];
            $_SESSION['claim_form_no'] = $claim_form_no;
            $_SESSION['accident_date'] = $result_form['accident_date'];
            $_SESSION['how_occured'] = $result_form['how_occured'];
            $_SESSION['injuries'] = $result_form['injuries'];
            $_SESSION['nature_of_illness'] = $result_form['nature_of_illness'];
            $_SESSION['commence_date'] = $result_form['commence_date'];
            $_SESSION['first_consult_date'] = $result_form['first_consult_date'];
            $_SESSION['doctor_name'] = $result_form['doctor_name'];
            $_SESSION['doctor_address'] = $result_form['doctor_address'];
            $_SESSION['hospitalized_date'] = $result_form['hospitalized_date'];
            $_SESSION['discharged_date'] = $result_form['discharged_date'];
            $_SESSION['illness_before'] = $result_form['illness_before'];
            $_SESSION['illness_before_years'] = $result_form['illness_before_years'];
            $_SESSION['sick_injury'] = $result_form['sick_injury'];
            $_SESSION['insurer_claims'] = $result_form['insurer_claims'];
            $_SESSION['nature_of'] = $result_form['nature_of'];
            $_SESSION['revised_bill_amount'] = $result_form['revised_bill_amount'];
            $_SESSION['form_acceptance'] = $result_form['acceptance_status'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewSurgicalFormV.php');

        }

    } elseif (isset($_POST['paidaccept-submit'])) {

        $user_id = $_SESSION['user_id'];
        $claim_form_no = mysqli_real_escape_string($connect, $_POST['claim_form_no']);
        $msm_comment = mysqli_real_escape_string($connect, $_POST['msm_comment']);
        $medical_year = mysqli_real_escape_string($connect, $_POST['medical_year']);
        $final_bill_amount = mysqli_real_escape_string($connect, $_POST['final_bill_amount']);

        $check_has_claim_det = msmModel::getMembClaimDetails($user_id, $medical_year, $connect);

        if(mysqli_num_rows($check_has_claim_det) == 1){
            $remain_amount = mysqli_real_escape_string($connect, $_POST['remain_amount']);

            if($final_bill_amount <= $remain_amount){

                $new_remain = $remain_amount - $final_bill_amount;
                $result_form = msmModel::updatePaidStatus($claim_form_no, $user_id, $final_bill_amount, $msm_comment, $connect);
                $result_amount = msmModel::updateClaimAmount($user_id, $medical_year, $new_remain, $final_bill_amount, $connect);

                if($result_form && $result_amount){
                    header('Location:../../view/medicalSchemeMaintainer/msmFormUpdateSuccessV.php');
                }

            } elseif ($remain_amount!=0 && $final_bill_amount > $remain_amount) {

                $final_bill_amount = $remain_amount;
                $new_remain = $remain_amount - $final_bill_amount;
                $result_form = msmModel::updatePaidStatus($claim_form_no, $user_id, $final_bill_amount, $msm_comment, $connect);
                $result_amount = msmModel::updateClaimAmount($user_id, $medical_year, $new_remain, $final_bill_amount, $connect);

                if($result_amount && $result_form){
                    header('Location:../../view/medicalSchemeMaintainer/msmFormUpdateSuccessV.php');
                }
            } elseif ($remain_amount == 0 || $final_bill_amount == 0) {

                $result_form = msmModel::updateNoPaidStatus($claim_form_no, $user_id, $msm_comment, $connect);

                if($result_form){
                    header('Location:../../view/medicalSchemeMaintainer/msmFormUpdateSuccessV.php');
                }
            }

        } elseif (mysqli_num_rows($check_has_claim_det) == 0){

            $result_form = msmModel::updateNoPaidStatus($claim_form_no, $user_id, $msm_comment, $connect);

            if($result_form){
                header('Location:../../view/medicalSchemeMaintainer/msmFormUpdateSuccessV.php');
            }
        }

    } elseif (isset($_POST['paid-submit'])) {

        $_SESSION['paid_form_no'] = '';
        $_SESSION['form_acceptance'] = '';
        $_SESSION['form_paid'] = '';
        $paid_forms = msmModel::paidClaimForms($connect);

        if (mysqli_num_rows($paid_forms) > 0) {
            while ($pf = mysqli_fetch_assoc($paid_forms)) {
                $_SESSION['form_acceptance'] = $pf['acceptance_status'];
                $_SESSION['form_paid'] = $pf['paid_status'];

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

        $_SESSION['opd'] = mysqli_num_rows($result_opd);
        $_SESSION['surgical'] = mysqli_num_rows($result_surgical);
        $_SESSION['form_acceptance'] = '';
        $_SESSION['form_paid'] = '';

        if (mysqli_num_rows($result_opd) == 1) {

            $result_form = mysqli_fetch_assoc($result_opd);
            $dependant_details = msmModel::getDependantDetails($result_form['dependant_id'], $connect);

            $user_id = $result_form['user_id'];

            if ($result_form['dependant_id'] == NULL) {
                $_SESSION['patient_name'] = $result_form['initials']." ".$result_form['sname'];
                $_SESSION['relationship'] = 'Myself';
            } elseif ($result_form['dependant_id'] > 0) {
                if (mysqli_num_rows($dependant_details) == 1) {
                    $depd = mysqli_fetch_assoc($dependant_details);
                    $_SESSION['patient_name'] = $depd['dependant_name'];
                    $_SESSION['relationship'] = $depd['relationship'];
                }
            }

            $_SESSION['claim_form_no'] = $claim_form_no;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['mem_initials'] = $result_form['initials'];
            $_SESSION['mem_sname'] = $result_form['sname'];
            $_SESSION['doctor_name'] = $result_form['doctor_name'];
            $_SESSION['treatment_received_date'] = $result_form['treatment_received_date'];
            $_SESSION['bill_issued_date'] = $result_form['bill_issued_date'];
            $_SESSION['purpose'] = $result_form['purpose'];
            $_SESSION['bill_amount'] = $result_form['bill_amount'];
            $_SESSION['revised_bill_amount'] = $result_form['revised_bill_amount'];
            $_SESSION['form_acceptance'] = $result_form['acceptance_status'];
            $_SESSION['form_paid'] = $result_form['paid_status'];
            $_SESSION['paid_amount'] = $result_form['final_bill_amount'];
            $_SESSION['msm_comment'] = $result_form['msm_comment'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewOpdFormV.php');

        } elseif (mysqli_num_rows($result_surgical) == 1) {

            $result_form = mysqli_fetch_assoc($result_surgical);
            $dependant_details = msmModel::getDependantDetails($result_form['dependant_id'], $connect);


            $user_id = $result_form['user_id'];

            if ($result_form['dependant_id'] == NULL) {
                $_SESSION['patient_name'] = $result_form['initials']." ".$result_form['sname'];
                $_SESSION['relationship'] = 'Myself';
            } elseif ($result_form['dependant_id'] > 0) {
                if (mysqli_num_rows($dependant_details) == 1) {
                    $depd = mysqli_fetch_assoc($dependant_details);
                    $_SESSION['patient_name'] = $depd['dependant_name'];
                    $_SESSION['relationship'] = $depd['relationship'];
                }
            }

            $_SESSION['form_no'] = $claim_form_no;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['mem_initials'] = $result_form['initials'];
            $_SESSION['mem_sname'] = $result_form['sname'];
            $_SESSION['claim_form_no'] = $claim_form_no;
            $_SESSION['accident_date'] = $result_form['accident_date'];
            $_SESSION['how_occured'] = $result_form['how_occured'];
            $_SESSION['injuries'] = $result_form['injuries'];
            $_SESSION['nature_of_illness'] = $result_form['nature_of_illness'];
            $_SESSION['commence_date'] = $result_form['commence_date'];
            $_SESSION['first_consult_date'] = $result_form['first_consult_date'];
            $_SESSION['doctor_name'] = $result_form['doctor_name'];
            $_SESSION['doctor_address'] = $result_form['doctor_address'];
            $_SESSION['hospitalized_date'] = $result_form['hospitalized_date'];
            $_SESSION['discharged_date'] = $result_form['discharged_date'];
            $_SESSION['illness_before'] = $result_form['illness_before'];
            $_SESSION['illness_before_years'] = $result_form['illness_before_years'];
            $_SESSION['sick_injury'] = $result_form['sick_injury'];
            $_SESSION['insurer_claims'] = $result_form['insurer_claims'];
            $_SESSION['nature_of'] = $result_form['nature_of'];
            $_SESSION['revised_bill_amount'] = $result_form['revised_bill_amount'];
            $_SESSION['form_acceptance'] = $result_form['acceptance_status'];
            $_SESSION['form_paid'] = $result_form['paid_status'];
            $_SESSION['paid_amount'] = $result_form['final_bill_amount'];
            $_SESSION['msm_comment'] = $result_form['msm_comment'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewSurgicalFormV.php');
        }

    } elseif (isset($_POST['rejected-submit'])) {

        $_SESSION['rej_form_no'] = '';
        $_SESSION['form_acceptance'] = '';
        $_SESSION['form_paid'] = '';
        $result_forms = array();
        $result_forms = msmModel::getRejClaimForms($connect);

        if (mysqli_num_rows($result_forms) > 0) {
            while ($rf = mysqli_fetch_assoc($result_forms)) {
                $_SESSION['form_acceptance'] = $rf['acceptance_status'];
                $_SESSION['form_paid'] = $rf['paid_status'];

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
        
        $_SESSION['opd'] = mysqli_num_rows($result_opd);
        $_SESSION['surgical'] = mysqli_num_rows($result_surgical);
        $_SESSION['form_acceptance'] = '';

        if (mysqli_num_rows($result_opd) == 1) {
                    
            $result_form = mysqli_fetch_assoc($result_opd);
            $dependant_details = msmModel::getDependantDetails($result_form['dependant_id'], $connect);

            $user_id = $result_form['user_id'];

            if ($result_form['dependant_id'] == NULL) {
                $_SESSION['patient_name'] = $result_form['initials']." ".$result_form['sname'];
                $_SESSION['relationship'] = 'Myself';
            } elseif ($result_form['dependant_id'] > 0) {
                if (mysqli_num_rows($dependant_details) == 1) {
                    $depd = mysqli_fetch_assoc($dependant_details);
                    $_SESSION['patient_name'] = $depd['dependant_name'];
                    $_SESSION['relationship'] = $depd['relationship'];
                }
            }

            $_SESSION['mem_initials'] = $result_form['initials'];
            $_SESSION['mem_sname'] = $result_form['sname'];
            $_SESSION['claim_form_no'] = $result_form['claim_form_no'];
            $_SESSION['doctor_name'] = $result_form['doctor_name'];
            $_SESSION['treatment_received_date'] = $result_form['treatment_received_date'];
            $_SESSION['bill_issued_date'] = $result_form['bill_issued_date'];
            $_SESSION['purpose'] = $result_form['purpose'];
            $_SESSION['bill_amount'] = $result_form['bill_amount'];
            $_SESSION['form_acceptance'] = $result_form['acceptance_status'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewOpdFormV.php');

        } else {
            
            $result_form = mysqli_fetch_assoc($result_surgical);
            $dependant_details = msmModel::getDependantDetails($result_form['dependant_id'], $connect);

            $user_id = $result_form['user_id'];

            if ($result_form['dependant_id'] == NULL) {
                $_SESSION['patient_name'] = $result_form['initials']." ".$result_form['sname'];
                $_SESSION['relationship'] = 'Myself';
            } elseif ($result_form['dependant_id'] > 0) {
                if (mysqli_num_rows($dependant_details) == 1) {
                    $depd = mysqli_fetch_assoc($dependant_details);
                    $_SESSION['patient_name'] = $depd['dependant_name'];
                    $_SESSION['relationship'] = $depd['relationship'];
                }
            }

            $_SESSION['mem_initials'] = $result_form['initials'];
            $_SESSION['mem_sname'] = $result_form['sname'];
            $_SESSION['claim_form_no'] = $result_form['claim_form_no'];
            $_SESSION['accident_date'] = $result_form['accident_date'];
            $_SESSION['how_occured'] = $result_form['how_occured'];
            $_SESSION['injuries'] = $result_form['injuries'];
            $_SESSION['nature_of_illness'] = $result_form['nature_of_illness'];
            $_SESSION['commence_date'] = $result_form['commence_date'];
            $_SESSION['first_consult_date'] = $result_form['first_consult_date'];
            $_SESSION['doctor_name'] = $result_form['doctor_name'];
            $_SESSION['doctor_address'] = $result_form['doctor_address'];
            $_SESSION['hospitalized_date'] = $result_form['hospitalized_date'];
            $_SESSION['discharged_date'] = $result_form['discharged_date'];
            $_SESSION['illness_before'] = $result_form['illness_before'];
            $_SESSION['illness_before_years'] = $result_form['illness_before_years'];
            $_SESSION['sick_injury'] = $result_form['sick_injury'];
            $_SESSION['insurer_claims'] = $result_form['insurer_claims'];
            $_SESSION['nature_of'] = $result_form['nature_of'];
            $_SESSION['form_acceptance'] = $result_form['acceptance_status'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewSurgicalFormV.php');
        }

    }
?>