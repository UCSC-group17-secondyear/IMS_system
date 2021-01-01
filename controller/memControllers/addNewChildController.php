<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/memModel.php');

?>
<?php
    $errors = array();
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

    if(isset($_POST['add-child'])){
        
        $child_details = $_POST['child'];

        foreach($child_details as $cd){

            // $userInfo = array($cd['child_name']=>50, $cd['relationship']=>8, $cd['child_dob']=>20, $cd['health_status']=>100);
    
            // foreach ($userInfo as $info=>$maxLen) {
            //     if (strlen(trim($_POST[$info])) >  $maxLen) {
            //         $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            //     }
            // }

            //if (empty($errors)) {
                $birthdate = new DateTime($cd['child_dob']);
                $today   = new DateTime('today');
                $age = $birthdate->diff($today)->y;

                if($age <= 18){
                    $addNewDependant = memModel::addNewChild($user_id, $cd['child_name'], $cd['relationship'], $cd['child_dob'], $cd['health_status'], $connect);
                }
            //}

            if($addNewDependant){
                //echo "Done";
                header('Location:../../view/medicalSchemeMember/memCurrentDetailsUpdateSuccessV.php');
            }
            else{
                echo "Failed result";
            }
        }
    }

?>