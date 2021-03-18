<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel/msmviewclaimdetailsModel.php');

    if(isset($_POST['memberwiseclaim-submit'])) {

        $result_year = msmModel::getMemYears($connect);
        $_SESSION['medical_year'] = '';

        if (mysqli_num_rows($result_year) > 0) {

            while ($year = mysqli_fetch_array($result_year)) {
                $_SESSION['medical_year'] .= "<option value='".$year['medical_year']."'>".$year['medical_year']."</option>";
            }

            header('Location:../../view/medicalSchemeMaintainer/msmViewMemberClaimDetailsV.php');
        }
        
    } elseif (isset($_POST['member-claim-submit'])) {

        $emp_id = mysqli_real_escape_string($connect, $_POST['emp_id']);
        $year = mysqli_real_escape_string($connect, $_POST['medical_year']);

        $user_id = msmModel::getUserId($emp_id, $connect);
        $u_id = mysqli_fetch_array($user_id);
        $id = $u_id[0];
        $claim_det = msmModel::getMembClaimDetails($id, $year, $connect);
        
        if (mysqli_num_rows($claim_det) == 1) {

            $result = mysqli_fetch_assoc($claim_det);

            $_SESSION['year'] = $year;
            $_SESSION['emp_id'] = $emp_id;
            $_SESSION['scheme'] = $result['scheme'];
            $_SESSION['init_amount'] = $result['initial_amount'];
            $_SESSION['used_amount'] = $result['used_amount'];
            $_SESSION['remain_amount'] = $result['remain_amount'];

            header('Location:../../view/medicalSchemeMaintainer/msmMemberClaimDetailsV.php');
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoClaimRecordsAvaliableV.php');
        }
        
    } elseif (isset($_POST['updateremovett-submit'])) {

    } 

?>