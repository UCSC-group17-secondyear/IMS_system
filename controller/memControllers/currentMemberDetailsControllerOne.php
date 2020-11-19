<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel.php');

?>

<?php
        if(isset($_POST['submit-scheme'])){

            $user_id = mysqli_real_escape_string($connect, $_SESSION['user_id']);
            $scheme = $_POST['scheme_name'];
            $result_set = memModel::getMeidcalMemDetails($user_id, $connect);
            $result_one = memModel::getMeidcalMemDetailsOne($user_id, $connect);

            if ($result_set && $result_one) {
                if(mysqli_num_rows($result_set)==1){

                    //$result = mysqli_fetch_assoc($result_set);
                    $result_two = mysqli_fetch_assoc($result_one);
                    
                    $_SESSION['health_condition'] = $result_two['healthcondition'];
                    $_SESSION['civilstatus'] = $result_two['civilstatus'];
                    $_SESSION['scheme'] = $scheme;
                    
                    header('Location:../../view/medicalSchemeMember/memCurrentMemberDetailsV.php');
                    
                    
                }
                else{
                    echo "User not Found!";
                }
            }
            else{
                echo "Query Unsuccessful";
            }
        }


        if(isset($_POST['no-submit'])){

            $user_id = mysqli_real_escape_string($connect, $_SESSION['userId']);
            $scheme = memModel::getSchemeName($user_id, $connect);
            $s_name = mysqli_fetch_array($scheme);
            $name = $s_name[0];
            $result_set = memModel::getMeidcalMemDetails($user_id, $connect);
            $result_one = memModel::getMeidcalMemDetailsOne($user_id, $connect);

            if ($result_set && $result_one) {
                if(mysqli_num_rows($result_set)==1){

                    //$result = mysqli_fetch_assoc($result_set);
                    $result_two = mysqli_fetch_assoc($result_one);
                   
                    $_SESSION['health_condition'] = $result_two['healthcondition'];
                    $_SESSION['civilstatus'] = $result_two['civilstatus'];
                    $_SESSION['scheme'] = $name;

                    header('Location:../../view/medicalSchemeMember/memCurrentMemberDetailsV.php');
                    
                }
                else{
                    echo "User not Found!";
                }
            }
            else{
                echo "Query failed";
            }
        }

        if(isset($_POST['ok-submit'])){
            
            $user_id = mysqli_real_escape_string($connect, $_SESSION['userId']);
            $result_set = memModel::getMeidcalMemDetails($user_id, $connect);
            $result_one = memModel::getMeidcalMemDetailsOne($user_id, $connect);
            
            if ($result_set && $result_one) {
                if(mysqli_num_rows($result_set)==1){

                    //$result = mysqli_fetch_assoc($result_set);
                    $result_two = mysqli_fetch_assoc($result_one);
                    
                    $_SESSION['health_condition'] = $result_two['healthcondition'];
                    $_SESSION['civilstatus'] = $result_two['civilstatus'];
                    $_SESSION['scheme'] = 'Scheme 3';
                    
                    header('Location:../../view/medicalSchemeMember/memCurrentMemberDetailsV.php');
                    
                }
                else{
                    echo "User not Found!";
                }
            }
            else{
                echo "Query Unsuccessful";
            }
        }

?>