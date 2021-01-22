<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/rvModel/viewlClaimDetailsModel.php');
?>

<?php
    if(isset($_POST['member-claim'])){

        $emp_id = mysqli_real_escape_string($connect, $_POST['emp_id']);
        $year = mysqli_real_escape_string($connect, $_POST['medical_year']);

        $user_id = viewClaimDetailsModel::getUserId($emp_id, $connect);
        $u_id = mysqli_fetch_array($user_id);
        $id = $u_id[0];
        $claim_det = viewClaimDetailsModel::getMembClaimDetails($id, $year, $connect);
        
        if(mysqli_num_rows($claim_det) == 1){

            $result = mysqli_fetch_assoc($claim_det);

            $_SESSION['year'] = $year;
            $_SESSION['emp_id'] = $emp_id;
            $_SESSION['scheme'] = $result['scheme'];
            $_SESSION['init_amount'] = $result['initial_amount'];
            $_SESSION['used_amount'] = $result['used_amount'];
            $_SESSION['remain_amount'] = $result['remain_amount'];

            header('Location:../../view/reportViewer/rvMemberClaimDetailsV.php');
        }
        else{
            header('Location:../../view/reportViewer/rvNoClaimRecordsAvaliableV.php');
        }
    }

?>