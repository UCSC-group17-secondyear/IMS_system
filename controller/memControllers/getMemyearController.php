<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/memModel.php');
?>

<?php

    $user_id = mysqli_real_escape_string($connect, $_GET);
    echo $user_id;

    $result_year = memModel::getMemYears($connect);

    $_SESSION['medical_year'] = '';

    if (mysqli_num_rows($result_year)>0) {
        while ($year = mysqli_fetch_array($result_year)) {
            $_SESSION['medical_year'] .= "<option value='".$year['medical_year']."'>".$year['medical_year']."</option>";
            
        }

        header('Location:../../view/medicalSchemeMember/memGetClaimDetailsV.php');
    }
    
?>