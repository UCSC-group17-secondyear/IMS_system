<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');
?>

<?php
        if (isset($_GET['claim_form_no'])) {
            $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
            $claim_form_no = mysqli_real_escape_string($connect, $_GET['claim_form_no']);
            
            $result = Model::deleteClaimForm($claim_form_no,$user_id, $connect);
    
            if ($result) {
                header('Location:../view/medicalSchemeMember/memHomeV.php');
            }
           
        }
?>