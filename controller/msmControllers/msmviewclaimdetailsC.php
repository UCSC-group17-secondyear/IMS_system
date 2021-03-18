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
        
    } elseif (isset($_POST['departmentwise-submit'])) {

        $dept = msmModel::viewDept($connect);
        $result_year = msmModel::getMemYears($connect);

        $_SESSION['department'] = '';
        $_SESSION['medical_year'] = '';

        if (mysqli_num_rows($dept) > 0 && mysqli_num_rows($result_year) > 0) {
            while ($row = mysqli_fetch_array($dept)) {
                $_SESSION['department'] .= "<option value='".$row['department']."'>".$row['department']."</option>";                
            }
            while ($year = mysqli_fetch_array($result_year)) {
                $_SESSION['medical_year'] .= "<option value='".$year['medical_year']."'>".$year['medical_year']."</option>";
            }

            header('Location:../../view/medicalSchemeMaintainer/msmViewDeptClaimDetailsV.php');
        }

    } elseif (isset($_POST['dept-claim-submit'])) {

        $dept = mysqli_real_escape_string($connect, $_POST['dept']);
        $year = mysqli_real_escape_string($connect, $_POST['medical_year']);
        $_SESSION['dept'] = $dept;
        $_SESSION['year'] = $year;

        $mem_ids = msmModel::getMemIds($year, $connect);
        $_SESSION['init_amount'] = '';
        $_SESSION['used_amount'] = '';
        $_SESSION['remain_amount'] = '';
        $i_amount = 0;
        $u_amount = 0;
        $r_amount = 0;
        
        if (mysqli_num_rows($mem_ids) > 0) {
            while ($mem = mysqli_fetch_array($mem_ids)) {
                $getDept = msmModel::getMemDepartment($connect, $mem['user_id']);
                $department = mysqli_fetch_array($getDept);
                $mem_dept = $department[0];
                
                if ($mem_dept == $dept) {
                    $amout_det = msmModel::getMemAmountDet($connect, $mem['user_id']);
                    echo $mem['user_id'];
                    $mem_amount = mysqli_fetch_assoc($amout_det);
                    $mem_i = $mem_amount['initial_amount'];
                    $mem_u = $mem_amount['used_amount'];
                    $mem_r = $mem_amount['remain_amount'];
                    $i_amount = $i_amount + $mem_i;
                    $u_amount = $u_amount + $mem_u;
                    $r_amount = $r_amount + $mem_r;
                }
            }
            $_SESSION['init_amount'] = $i_amount;
            $_SESSION['used_amount'] = $u_amount;
            $_SESSION['remain_amount'] = $r_amount;

            header('Location:../../view/medicalSchemeMaintainer/msmDeptClaimDetailsV.php');

            if($i_amount == 0 && $u_amount == 0 && $r_amount == 0){
                header('Location:../../view/medicalSchemeMaintainer/msmNoClaimRecordsAvaliableV.php');
            }
            
        } else{
            header('Location:../../view/medicalSchemeMaintainer/msmNoClaimRecordsAvaliableV.php');
        }

    } elseif (isset($_POST['ucsc-submit'])) {

        $result_year = msmModel::getMemYears($connect);
        $_SESSION['medical_year'] = '';

        if (mysqli_num_rows($result_year)>0) {
            
            while ($year = mysqli_fetch_array($result_year)) {
                $_SESSION['medical_year'] .= "<option value='".$year['medical_year']."'>".$year['medical_year']."</option>";
            }

            header('Location:../../view/medicalSchemeMaintainer/msmViewUcscClaimDetailsV.php');
        }

    } elseif (isset($_POST['ucsc-claim-submit'])) {

        $year = mysqli_real_escape_string($connect, $_POST['medical_year']);
        $result = msmModel::getYearAmount($year, $connect);
        $amounts = mysqli_fetch_array($result);
        
        $_SESSION['year'] = $year;
        $_SESSION['init_amount'] = $amounts['init_amount'];
        $_SESSION['used_amount'] = $amounts['used_amount'];
        $_SESSION['remain_amount'] = $amounts['remain_amount'];

        header('Location:../../view/medicalSchemeMaintainer/msmUcscClaimDetailsV.php');
        
        if($amounts['init_amount'] == 0 && $amounts['used_amount'] == 0 && $amounts['remain_amount'] == 0){
            header('Location:../../view/medicalSchemeMaintainer/msmNoClaimRecordsAvaliableV.php');
        }

    }

?>