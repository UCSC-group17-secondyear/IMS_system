<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/memModel.php');

?>

<?php
        $user_id = mysqli_real_escape_string($connect, $_SESSION['user_id']);
        $result = memModel::viewMember($user_id,$connect);
        $result_set = memModel::getMeidcalMemDetails($user_id, $connect);
        
        $result_civil_status = memModel::getCivilStatus($connect);
        
        $_SESSION['c_state'] = '';

        if(isset($_POST['submit-scheme'])){

            $scheme = $_POST['scheme_name'];
            
            if ($result_set && $result) {
                if(mysqli_num_rows($result_set)==1){

                    while ($c_state = mysqli_fetch_array($result_civil_status)) {
                        $_SESSION['c_state'] .= "<option value='".$c_state['csname']."'>".$c_state['csname']."</option>";
                        
                    }

                    $result_two = mysqli_fetch_assoc($result_set);
                    $result_three = mysqli_fetch_assoc($result);

                    $_SESSION['prev_status'] = $result_two['civilstatus'];
                    $_SESSION['name'] = $result_three['initials']." ".$result_three['sname'];
                    $_SESSION['health_condition'] = $result_two['healthcondition'];
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

            $scheme = memModel::getSchemeName($user_id, $connect);
            $s_name = mysqli_fetch_array($scheme);
            $name = $s_name[0];

            if ($result_set && $result) {
                if(mysqli_num_rows($result_set)==1){

                    while ($c_state = mysqli_fetch_array($result_civil_status)) {
                        $_SESSION['c_state'] .= "<option value='".$c_state['csname']."'>".$c_state['csname']."</option>";
                        
                    }

                    $result_two = mysqli_fetch_assoc($result_set);
                    $result_three = mysqli_fetch_assoc($result);

                    $_SESSION['prev_status'] = $result_two['civilstatus'];
                    $_SESSION['name'] = $result_three['initials']." ".$result_three['sname'];
                    $_SESSION['health_condition'] = $result_two['healthcondition'];
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


?>