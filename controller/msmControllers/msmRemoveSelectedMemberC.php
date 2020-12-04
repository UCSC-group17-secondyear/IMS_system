<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel/manageMemberModel.php');

    if (isset($_GET['mem_delete'])) {
        
        $delete_user_id = mysqli_real_escape_string($connect, $_GET['mem_delete']);

        $result = msmModel::deleteMember($delete_user_id , $connect);

        if ($result) {
            header('Location:../../view/medicalSchemeMaintainer/msmDeletedSuccesV.php');
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmDeletedUnsuccesV.php');
        }
    }
?>