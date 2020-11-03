<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');
?>

<?php
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $claim_form_no = mysqli_real_escape_string($connect, $_GET['claim_form_no']);
           
        $result_set = Model::checkClaimFormNo($claim_form_no, $user_id, $connect);
        $result_opd = Model::checkWhetherOpd($claim_form_no,$user_id,$connect);
        $result_surgical = Model::checkWhetherSurgical($claim_form_no,$user_id,$connect);
        //$submit_date = Model::getSubmitDate($claim_form_no,$user_id, $connect);

                if(mysqli_num_rows($result_opd)==1){
                                
                    $result_one = mysqli_fetch_assoc($result_opd);

                    $_SESSION['user_id'] = $result_one['user_id'];
                    $_SESSION['claim_form_no'] = $result_one['claim_form_no'];
                    $_SESSION['patient_name'] = $result_one['patient_name'];
                    $_SESSION['relationship'] = $result_one['relationship'];
                    $_SESSION['doctor_name'] = $result_one['doctor_name'];
                    $_SESSION['treatment_received_date'] = $result_one['treatment_received_date'];
                    $_SESSION['bill_issued_date'] = $result_one['bill_issued_date'];
                    $_SESSION['purpose'] = $result_one['purpose'];
                    $_SESSION['bill_amount'] = $result_one['bill_amount'];
                    $_SESSION['submitted_date'] = $result_one['submitted_date'];

                    header('Location:../view/medicalSchemeMember/memUpdateOpdFormV.php');

                }

                if(mysqli_num_rows($result_surgical)==1){
                    
                    $result_one = mysqli_fetch_assoc($result_surgical);

                    $_SESSION['user_id'] = $result_one['user_id'];
                    $_SESSION['claim_form_no'] = $result_one['claim_form_no'];
                    $_SESSION['patient_name'] = $result_one['patient_name'];
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
                    $_SESSION['submitted_date'] = $result_one['submitted_date'];

                    header('Location:../view/medicalSchemeMember/memUpdateSurgicalFormV.php');

                }

?>