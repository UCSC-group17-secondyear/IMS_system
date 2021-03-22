<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel/claimFormModel.php');
    require_once('../../model/msmModel/viewClaimDetailsModel.php');
?>

<?php
    $claim_form_no = mysqli_real_escape_string($connect, $_GET['claim_form_no']);
    $result_opd = claimFormModel::checkWhetherOpd($claim_form_no,$connect);
    $result_surgical = claimFormModel::checkWhetherSurgical($claim_form_no,$connect);
    $_SESSION['opd'] = mysqli_num_rows($result_opd);
    $_SESSION['surgical'] = mysqli_num_rows($result_surgical);

    if(mysqli_num_rows($result_opd)==1){
                  
        $result_one = mysqli_fetch_assoc($result_opd);
        $user_id = $result_one['user_id'];
        $mem_name = claimFormModel::getMemberName($user_id,$connect );
        $name = mysqli_fetch_array($mem_name);

        //check medical year relavant to form
        $bill_issused_date = $result_one['bill_issued_date'];
        $bill_issused_year = date('Y', strtotime($bill_issused_date));

        //get medical year ended date with $bill_issused_yeat
        $med_end_date = claimFormModel::getMedYearEndDate($bill_issused_year,$connect);
        $med_end_date_result = mysqli_fetch_assoc($med_end_date);
        $med_year_end_date = $med_end_date_result['end_date'];
        $med_year = $med_end_date_result['medical_year'];

        if(strtotime($bill_issused_date) <= strtotime($med_year_end_date)){
          $medical_year = $med_year;
        }
        else{
          $medical_year = ($med_year + 1);
        }
        //get mem claim details
        $check_has_claim_det = viewClaimDetailsModel::getMembClaimDetails($user_id, $medical_year, $connect);

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
            $_SESSION['msm_comment'] = "Member hasn't registerd for this medical year";
        }


        $_SESSION['form_no'] = $claim_form_no;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['mem_initials'] = $name[0];
        $_SESSION['mem_sname'] = $name[1];
        $_SESSION['claim_form_no'] = $claim_form_no;
        
        if($result_one['dependant_id'] == '0'){
            $_SESSION['patient_name'] = $name[0]." ".$name[1];
            $_SESSION['relationship'] = 'Myself';
        }
        elseif($result_one['dependant_id'] != '0'){
            $d_name = claimFormModel::getDependPatientName($user_id,$result_one['dependant_id'],$connect);
            $depend = mysqli_fetch_array($d_name);
            $_SESSION['patient_name'] = $depend[0];

            $rela = claimFormModel::getDependPatientRela($user_id,$result_one['dependant_id'],$connect);
            $relationship = mysqli_fetch_array($rela);
            $_SESSION['relationship'] = $relationship[0];
        }

        $_SESSION['doctor_name'] = $result_one['doctor_name'];
        $_SESSION['treatment_received_date'] = $result_one['treatment_received_date'];
        $_SESSION['bill_issued_date'] = $result_one['bill_issued_date'];
        $_SESSION['purpose'] = $result_one['purpose'];
        $_SESSION['bill_amount'] = $result_one['bill_amount'];
        $_SESSION['revised_bill_amount'] = $result_one['revised_bill_amount'];
        $_SESSION['mo_comment'] = $result_one['mo_comment'];
        $_SESSION['a_status'] = $result_one['acceptance_status'];

        header('Location:../../view/medicalSchemeMaintainer/msmToBePaidOpdFormV.php');

    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if(mysqli_num_rows($result_surgical)==1){
        
        $result_one = mysqli_fetch_assoc($result_surgical);
        $user_id = $result_one['user_id'];
        $mem_name = claimFormModel::getMemberName($user_id,$connect );
        $name = mysqli_fetch_array($mem_name);

        //check medical year relavant to form
        $hospitalized_date = $result_one['hospitalized_date'];
        $hospitalized_year = date('Y',strtotime($hospitalized_date));

        //get medical year ended date with $bill_issused_yeat
        $med_end_date = claimFormModel::getMedYearEndDate($hospitalized_year,$connect);
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
        $check_has_claim_det = viewClaimDetailsModel::getMembClaimDetails($user_id, $medical_year, $connect);

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
            $_SESSION['msm_comment'] = "Member hasn't registerd for this medical year";
        }

        $_SESSION['form_no'] = $claim_form_no;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['mem_initials'] = $name[0];
        $_SESSION['mem_sname'] = $name[1];
        $_SESSION['claim_form_no'] = $claim_form_no;
       
        if($result_one['dependant_id'] == '0'){
            $_SESSION['patient_name'] = $name[0]." ".$name[1];
            $_SESSION['relationship'] = 'Myself';
        }
        elseif($result_one['dependant_id'] != '0'){
            $d_name = claimFormModel::getDependPatientName($user_id,$result_one['dependant_id'],$connect);
            $depend = mysqli_fetch_array($d_name);
            $_SESSION['patient_name'] = $depend[0];

            $rela = claimFormModel::getDependPatientRela($user_id,$result_one['dependant_id'],$connect);
            $relationship = mysqli_fetch_array($rela);
            $_SESSION['relationship'] = $relationship[0];
        }
        
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
        $_SESSION['mo_comment'] = $result_one['mo_comment'];
        $_SESSION['a_status'] = $result_one['acceptance_status'];

        header('Location:../../view/medicalSchemeMaintainer/msmToBePaidSurFormV.php');

    }

?>