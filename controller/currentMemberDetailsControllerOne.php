<?php

    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php
        if(isset($_POST['submit-scheme'])){

            $user_id = mysqli_real_escape_string($connect, $_SESSION['user_id']);
            $scheme = $_POST['scheme_name'];
            $result_set = Model::getMeidcalMemDetails($user_id, $connect);
            $result_one = Model::getMeidcalMemDetailsOne($user_id, $connect);
            $depts = Model::department($connect);
            $_SESSION['department'] = '';

            if ($result_set && $result_one && $depts) {
                if(mysqli_num_rows($result_set)==1){

                    $result = mysqli_fetch_assoc($result_set);
                    $result_two = mysqli_fetch_assoc($result_one);
                    
                    $_SESSION['empid'] = $result['empid'];
                    $_SESSION['initials'] = $result['initials'];
                    $_SESSION['sname'] = $result['sname'];
                    $_SESSION['email'] = $result['email'];
                    $_SESSION['designation'] = $result['designation'];

                    while ($dept = mysqli_fetch_array($depts)) {
                        $_SESSION['department'] .= "<option value='".$dept['department']."'>".$dept['department']."</option>";
                        
                    }
                    
                    $_SESSION['health_condition'] = $result_two['healthcondition'];
                    $_SESSION['civilstatus'] = $result_two['civilstatus'];
                    $_SESSION['scheme'] = $scheme;
                    
                    header('Location:../view/medicalSchemeMember/memCurrentMemberDetailsV.php');
                    
                    
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

            $user_id = mysqli_real_escape_string($connect, $_SESSION['user_id']);
            $scheme = Model::getSchemeName($user_id, $connect);
            $s_name = mysqli_fetch_array($scheme);
            $name = $s_name[0];
            $result_set = Model::getMeidcalMemDetails($user_id, $connect);
            $result_one = Model::getMeidcalMemDetailsOne($user_id, $connect);
            $depts = Model::department($connect);
            $_SESSION['department'] = '';

            if ($result_set && $result_one) {
                if(mysqli_num_rows($result_set)==1){

                    $result = mysqli_fetch_assoc($result_set);
                    $result_two = mysqli_fetch_assoc($result_one);
                    
                    $_SESSION['empid'] = $result['empid'];
                    $_SESSION['initials'] = $result['initials'];
                    $_SESSION['sname'] = $result['sname'];
                    $_SESSION['email'] = $result['email'];
                    $_SESSION['designation'] = $result['designation'];

                    while ($dept = mysqli_fetch_array($depts)) {
                        $_SESSION['department'] .= "<option value='".$dept['department']."'>".$dept['department']."</option>";
                        
                    }

                    $_SESSION['health_condition'] = $result_two['healthcondition'];
                    $_SESSION['civilstatus'] = $result_two['civilstatus'];
                    $_SESSION['scheme'] = $name;

                    header('Location:../view/medicalSchemeMember/memCurrentMemberDetailsV.php');
                    
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
            $result_set = Model::getMeidcalMemDetails($user_id, $connect);
            $result_one = Model::getMeidcalMemDetailsOne($user_id, $connect);
            $depts = Model::department($connect);
            $_SESSION['department'] = '';

            if ($result_set && $result_one) {
                if(mysqli_num_rows($result_set)==1){

                    $result = mysqli_fetch_assoc($result_set);
                    $result_two = mysqli_fetch_assoc($result_one);
                    
                    $_SESSION['empid'] = $result['empid'];
                    $_SESSION['initials'] = $result['initials'];
                    $_SESSION['sname'] = $result['sname'];
                    $_SESSION['email'] = $result['email'];
                    $_SESSION['designation'] = $result['designation'];

                    while ($dept = mysqli_fetch_array($depts)) {
                        $_SESSION['department'] .= "<option value='".$dept['department']."'>".$dept['department']."</option>";
                        
                    }

                    $_SESSION['health_condition'] = $result_two['healthcondition'];
                    $_SESSION['civilstatus'] = $result_two['civilstatus'];
                    $_SESSION['scheme'] = 'scheme 3';
                    
                    header('Location:../view/medicalSchemeMember/memCurrentMemberDetailsV.php');
                    
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