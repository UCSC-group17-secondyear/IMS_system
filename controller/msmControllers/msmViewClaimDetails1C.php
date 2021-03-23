<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/msmModel/viewClaimDetailsModel.php');
    
    $records1 = msmModel::medicalyears($connect);
    $records2 = msmModel::departments($connect);
    $_SESSION['my'] = '';
    $_SESSION['departments'] = '';
    
    if ($records1 && $records2) {
        while ($record1 = mysqli_fetch_array($records1)) {
            $_SESSION['my'] .= "<option value='".$record1['medical_year']."'>".$record1['medical_year']."</option>";
        }

        while ($record2 = mysqli_fetch_array($records2)) {
            $_SESSION['departments'] .= "<option value='".$record2['department']."'>".$record2['department']."</option>";
        }
        header('Location:../../view/medicalSchemeMaintainer/msmViewClaimDetailsV.php');
    }
?>