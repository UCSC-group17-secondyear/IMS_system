<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel/viewClaimDetailsModel.php');
?>

<?php
    if(isset($_POST['dept-claim'])){

        $year = mysqli_real_escape_string($connect, $_POST['medical_year']);

        $result = viewClaimDetailsModel::getYearAmount($year, $connect);
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