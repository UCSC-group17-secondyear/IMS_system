<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/moModel/claimFormModel.php');
?>

<?php

    if(isset($_POST['approve_list'])){
        echo "approve";

    }

    if(isset($_POST['reject_list'])){
        echo "reject";
        
    }

?>