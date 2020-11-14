<?php

    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php

    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    //echo $user_id;
    $result_set = Model::viewMember($user_id, $connect);
    $count = Model::getNextFormNumber($connect);
    $form_count = mysqli_fetch_array($count);
    $f_count = $form_count[0];

    if ($result_set) {
        if(mysqli_num_rows($result_set)==1){
            $_SESSION['claim_form_no'] = $f_count + 1;
            header('Location:../view/medicalSchemeMember/memSurgicalFormV.php');
                                    
        }
        else{
            echo "User not Found!";
        }
    }
    else
        {
            echo "Query Unsuccessful"; 
        }

?>