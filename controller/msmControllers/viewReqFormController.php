<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel/claimFormModel.php');
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

        $_SESSION['mem_initials'] = $name[0];
        $_SESSION['mem_sname'] = $name[1];
        $_SESSION['claim_form_no'] = $result_one['claim_form_no'];
        
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
        $_SESSION['file_name'] = $result_one['file_name'];

        header('Location:../../view/medicalSchemeMaintainer/msmViewReqClaimFormV.php');

    }

    if(mysqli_num_rows($result_surgical)==1){
        
        $result_one = mysqli_fetch_assoc($result_surgical);
        $user_id = $result_one['user_id'];
        $mem_name = claimFormModel::getMemberName($user_id,$connect );
        $name = mysqli_fetch_array($mem_name);

        $_SESSION['mem_initials'] = $name[0];
        $_SESSION['mem_sname'] = $name[1];
        $_SESSION['claim_form_no'] = $result_one['claim_form_no'];
        
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
        $_SESSION['file_name'] = $result_one['file_name'];

        header('Location:../../view/medicalSchemeMaintainer/msmViewReqClaimFormV.php');

    }
?>