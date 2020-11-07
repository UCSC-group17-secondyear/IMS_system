<?php

    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php
    
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    //echo $user_id;
    $result_set = Model::viewMember($user_id, $connect);

    if ($result_set) {
        if(mysqli_num_rows($result_set)==1){

            header('Location:../view/medicalSchemeMember/memOpdFormV.php');
                              
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