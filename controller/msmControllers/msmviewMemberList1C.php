<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/msmModel.php');
    
    $records1 = msmModel::scheme($connect);
    $records2 = msmModel::membertype($connect);
    $_SESSION['scheme'] = '';
    $_SESSION['member_type'] = '';
    
    if ($records1 && $records2) {
        while ($record1 = mysqli_fetch_array($records1)) {
            $_SESSION['scheme'] .= "<option value='".$record1['schemeName']."'>".$record1['schemeName']."</option>";
        }

        while ($record2 = mysqli_fetch_array($records2)) {
            $_SESSION['member_type'] .= "<option value='".$record2['member_type']."'>".$record2['member_type']."</option>";
        }

        header('Location:../../view/medicalSchemeMaintainer/msmSelectMembersV.php');
    } else {
        echo "ffwggrg";
    }
?>