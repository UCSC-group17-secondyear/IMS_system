<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/moModel/claimFormModel.php');
?>

<?php
    if(isset($_POST['accept-submit'])){
        $claim_form_no = $_SESSION['claim_form_no'];

        $revised_amount = mysqli_escape_string($connect, $_POST['rev_bill_amount']);
        $result_accept = claimFormModel::acceptReqClaimForm($claim_form_no,$revised_amount, $connect);

        if($result_accept){
            header('Location:../../view/medicalOfficer/moClaimFormUpdateSuccessV.php');
        }
    }

    if(isset($_POST['reject-submit'])){
        $claim_form_no = $_SESSION['claim_form_no'];

        $result_reject = claimFormModel::rejectReqClaimForm($claim_form_no, $connect);

        if($result_reject){
            header('Location:../../view/medicalOfficer/moClaimFormUpdateSuccessV.php');
        }
    }

?>