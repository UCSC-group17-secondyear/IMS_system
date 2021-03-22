<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel/claimFormModel.php');
    require_once('../../model/msmModel/viewClaimDetailsModel.php');
?>

<?php
    if(isset($_POST['paid-submit'])){

        $claim_form_no = mysqli_real_escape_string($connect, $_POST['claim_form_no']);
        $user_id = $_SESSION['user_id'];
        $msm_comment = mysqli_real_escape_string($connect, $_POST['msm_comment']);
        $medical_year = mysqli_real_escape_string($connect, $_POST['medical_year']);
        $final_bill_amount = mysqli_real_escape_string($connect, $_POST['final_bill_amount']);

            //echo "yes";
            $check_has_claim_det = viewClaimDetailsModel::getMembClaimDetails($user_id, $medical_year, $connect);

            if(mysqli_num_rows($check_has_claim_det) == 1){
                $remain_amount = mysqli_real_escape_string($connect, $_POST['remain_amount']);

                if($final_bill_amount <= $remain_amount){

                    $new_remain = $remain_amount - $final_bill_amount;
                    $result_form = claimFormModel::updatePaidStatus($claim_form_no, $user_id, $final_bill_amount, $msm_comment, $connect);
                    $result_amount = claimFormModel::updateClaimAmount($user_id, $medical_year, $new_remain, $final_bill_amount, $connect);

                    if($result_amount && $result_form){
                        header('Location:../../view/medicalSchemeMaintainer/msmFormUpdateSuccessV.php');
                    }
                }

                if($remain_amount!=0 && $final_bill_amount > $remain_amount){

                    $final_bill_amount = $remain_amount;
                    $new_remain = $remain_amount - $final_bill_amount;
                    $result_form = claimFormModel::updatePaidStatus($claim_form_no, $user_id, $final_bill_amount, $msm_comment, $connect);
                    $result_amount = claimFormModel::updateClaimAmount($user_id, $medical_year, $new_remain, $final_bill_amount, $connect);

                    if($result_amount && $result_form){
                        header('Location:../../view/medicalSchemeMaintainer/msmFormUpdateSuccessV.php');
                    }
                }

                if($remain_amount == 0 || $final_bill_amount == 0){

                    $result_form = claimFormModel::updateNoPaidStatus($claim_form_no, $user_id, $msm_comment, $connect);

                    if($result_form){
                        header('Location:../../view/medicalSchemeMaintainer/msmFormUpdateSuccessV.php');
                    }

                }

            }

            if(mysqli_num_rows($check_has_claim_det) == 0){

                $result_form = claimFormModel::updateNoPaidStatus($claim_form_no, $user_id, $msm_comment, $connect);

                if($result_form){
                    header('Location:../../view/medicalSchemeMaintainer/msmFormUpdateSuccessV.php');
                }
            }

    }
    
?>