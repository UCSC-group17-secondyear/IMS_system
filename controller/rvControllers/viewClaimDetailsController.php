<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/rvModel/viewClaimDetailsModel.php');
?>

<?php
    if(isset($_POST['memberwise-submit']) || $_GET['btn']==55){
        $result_year = viewClaimDetailsModel::getMemYears($connect);

        $_SESSION['medical_year'] = '';

        if (mysqli_num_rows($result_year)>0) {
            while ($year = mysqli_fetch_array($result_year)) {
                $_SESSION['medical_year'] .= "<option value='".$year['medical_year']."'>".$year['medical_year']."</option>";
                
            }

            header('Location:../../view/reportViewer/rvViewMemberClaimDetailsV.php');
        }
    }

    elseif(isset($_POST['member-claim-submit'])){

        $emp_id = mysqli_real_escape_string($connect, $_POST['emp_id']);
        $year = mysqli_real_escape_string($connect, $_POST['medical_year']);

        $user_id = viewClaimDetailsModel::getUserId($emp_id, $connect);
        $u_id = mysqli_fetch_array($user_id);
        $id = $u_id[0];
        $claim_det = viewClaimDetailsModel::getMembClaimDetails($id, $year, $connect);
        
        if(mysqli_num_rows($claim_det) == 1){

            $result = mysqli_fetch_assoc($claim_det);

            $scheme_name = viewClaimDetailsModel::getSchemeName($result['scheme'],$connect);
            $sch_name = mysqli_fetch_array($scheme_name);
            $scheme = $sch_name[0];

            $_SESSION['year'] = $year;
            $_SESSION['emp_id'] = $emp_id;
            $_SESSION['scheme'] = $scheme;
            $_SESSION['init_amount'] = $result['initial_amount'];
            $_SESSION['used_amount'] = $result['used_amount'];
            $_SESSION['remain_amount'] = $result['remain_amount'];

            header('Location:../../view/reportViewer/rvMemberClaimDetailsV.php');
        }
        else{
            header('Location:../../view/reportViewer/rvNoClaimRecordsAvaliableV.php');
        }
    }

    elseif(isset($_POST['departmentwise-submit']) || $_GET['btn']==56){
        $dept = viewClaimDetailsModel::viewDept($connect);
        $result_year = viewClaimDetailsModel::getMemYears($connect);

        $_SESSION['department'] = '';
        $_SESSION['medical_year'] = '';

        if (mysqli_num_rows($dept)>0 && mysqli_num_rows($result_year)>0) {
            while ($row = mysqli_fetch_array($dept)) {
                $_SESSION['department'] .= "<option value='".$row['department_id']."'>".$row['department']."</option>";
                
            }

            while ($year = mysqli_fetch_array($result_year)) {
                $_SESSION['medical_year'] .= "<option value='".$year['medical_year']."'>".$year['medical_year']."</option>";
                
            }

            header('Location:../../view/reportViewer/rvViewDeptClaimDetailsV.php');
        }
    }

    elseif (isset($_POST['dept-claim-submit'])) {

        $dept = mysqli_real_escape_string($connect, $_POST['dept']);
        $year = mysqli_real_escape_string($connect, $_POST['medical_year']);
        echo $_SESSION['year'] = $year;

        $dept_name = viewClaimDetailsModel::getDeptName($dept,$connect);
        $deptName = mysqli_fetch_array($dept_name);
        echo $_SESSION['dept'] = $deptName[0];

        $mem_ids = viewClaimDetailsModel::getMemIds($year, $connect);
        $_SESSION['init_amount'] = '';
        $_SESSION['used_amount'] = '';
        $_SESSION['remain_amount'] = '';
        $i_amount = 0;
        $u_amount = 0;
        $r_amount = 0;
        
        if (mysqli_num_rows($mem_ids) > 0) {
            while ($mem = mysqli_fetch_array($mem_ids)) {
                $getDept = viewClaimDetailsModel::getMemDepartment($connect, $mem['user_id']);
                $department = mysqli_fetch_array($getDept);
                echo $mem_dept = $department[0];
                
                if ($mem_dept == $dept) {
                    $amout_det = viewClaimDetailsModel::getMemAmountDet($connect, $mem['user_id'], $year);
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
            echo $_SESSION['init_amount'] = $i_amount;
            echo $_SESSION['used_amount'] = $u_amount;
            echo $_SESSION['remain_amount'] = $r_amount;

            header('Location:../../view/reportViewer/rvDeptClaimDetailsV.php');

            if($i_amount == 0){
                header('Location:../../view/reportViewer/rvNoClaimRecordsAvaliableV.php');
            }
            
        } else{
            echo "faisl";
            header('Location:../../view/reportViewer/rvNoClaimRecordsAvaliableV.php');
        }

    } 
    
    elseif (isset($_POST['ucsc-submit']) || $_GET['btn']==57) {

        $result_year = viewClaimDetailsModel::getMemYears($connect);
        $_SESSION['medical_year'] = '';

        if (mysqli_num_rows($result_year)>0) {
            
            while ($year = mysqli_fetch_array($result_year)) {
                $_SESSION['medical_year'] .= "<option value='".$year['medical_year']."'>".$year['medical_year']."</option>";
            }

            header('Location:../../view/reportViewer/rvViewUcscClaimDetailsV.php');
        }

    } elseif (isset($_POST['ucsc-claim-submit'])) {

        $year = mysqli_real_escape_string($connect, $_POST['medical_year']);
        $result = viewClaimDetailsModel::getYearAmount($year, $connect);
        $amounts = mysqli_fetch_array($result);
        
        $_SESSION['year'] = $year;
        $_SESSION['init_amount'] = $amounts['init_amount'];
        $_SESSION['used_amount'] = $amounts['used_amount'];
        $_SESSION['remain_amount'] = $amounts['remain_amount'];

        header('Location:../../view/reportViewer/rvUcscClaimDetailsV.php');
        
        if($amounts['init_amount'] == 0 ){
            header('Location:../../view/reportViewer/rvNoClaimRecordsAvaliableV.php');
        }

    }
?>