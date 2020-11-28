<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/msmModel/viewFormsinMSModel.php');
    
    $claim_form_no = mysqli_real_escape_string($connect, $_GET['claim_form_no']);
    $result_form = msmModel::getSelectedForm($claim_form_no, $connect);
        
    if(mysqli_num_rows($result_form) == 1){  
        $scf = mysqli_fetch_assoc($result_form);

        $_SESSION['empid'] = $scf['empid'];
        $_SESSION['initials'] = $scf['initials'];
        $_SESSION['sname'] = $scf['sname'];
        $_SESSION['acceptance_status'] = $scf['acceptance_status'];

        if ($scf['opd_form_flag'] == 1) {
            $_SESSION['claim_form_no'] = $scf['claim_form_no'];
            $_SESSION['patient_name'] = $scf['patient_name'];
            $_SESSION['relationship'] = $scf['relationship'];
            $_SESSION['doctor_name'] = $scf['doctor_name'];
            $_SESSION['treatment_received_date'] = $scf['treatment_received_date'];
            $_SESSION['bill_issued_date'] = $scf['bill_issued_date'];
            $_SESSION['purpose'] = $scf['purpose'];
            $_SESSION['bill_amount'] = $scf['bill_amount'];

            header('Location:../../view/medicalSchemeMaintainer/msmOpdClaimDetailsV.php');
        } else {
            $_SESSION['claim_form_no'] = $scf['claim_form_no'];
            $_SESSION['patient_name'] = $scf['patient_name'];
            $_SESSION['relationship'] = $scf['relationship'];
            $_SESSION['accident_date'] = $scf['accident_date'];
            $_SESSION['how_occured'] = $scf['how_occured'];
            $_SESSION['injuries'] = $scf['injuries'];
            $_SESSION['nature_of_illness'] = $scf['nature_of_illness'];
            $_SESSION['commence_date'] = $scf['commence_date'];
            $_SESSION['first_consult_date'] = $scf['first_consult_date'];
            $_SESSION['doctor_name'] = $scf['doctor_name'];
            $_SESSION['doctor_address'] = $scf['doctor_address'];
            $_SESSION['hospitalized_date'] = $scf['hospitalized_date'];
            $_SESSION['discharged_date'] = $scf['discharged_date'];
            $_SESSION['illness_before'] = $scf['illness_before'];
            $_SESSION['illness_before_years'] = $scf['illness_before_years'];
            $_SESSION['sick_injury'] = $scf['sick_injury'];
            $_SESSION['insurer_claims'] = $scf['insurer_claims'];
            $_SESSION['nature_of'] = $scf['nature_of'];

            header('Location:../../view/medicalSchemeMaintainer/msmSurgicalClaimDetailsV.php');
        }
    }

?>