<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel/viewClaimDetailsModel.php');
?>

<?php
    if(isset($_POST['dept-claim'])){

        $dept = mysqli_real_escape_string($connect, $_POST['dept']);
        $year = mysqli_real_escape_string($connect, $_POST['medical_year']);

        $_SESSION['dept'] = $dept;
        $_SESSION['year'] = $year;

        $mem_ids = viewClaimDetailsModel::getMemIds($year, $connect);
        $_SESSION['init_amount'] = '';
        $_SESSION['used_amount'] = '';
        $_SESSION['remain_amount'] = '';

        $i_amount = 0;
        $u_amount = 0;
        $r_amount = 0;
        
        if(mysqli_num_rows($mem_ids) > 0){
            while($mem = mysqli_fetch_array($mem_ids)){
                $getDept = viewClaimDetailsModel::getMemDepartment($connect, $mem['user_id']);
                $department = mysqli_fetch_array($getDept);
                $mem_dept = $department[0];
                
                if($mem_dept == $dept){
                    $amout_det = viewClaimDetailsModel::getMemAmountDet($connect, $mem['user_id']);
                    echo $mem['user_id'];
                    $mem_amount = mysqli_fetch_assoc($amout_det);
                    // echo $mem_amount[0];

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
            
        }
        else{
            header('Location:../../view/medicalSchemeMaintainer/msmNoClaimRecordsAvaliableV.php');
        }
    }

?>