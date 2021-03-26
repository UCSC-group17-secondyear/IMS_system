<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/renewModel.php');
    require_once('../../model/memModel/memModel.php');

?>

<?php
        $user_id = mysqli_real_escape_string($connect, $_SESSION['user_id']);
        $result = memModel::viewMember($user_id,$connect);
        $result_set = renewModel::getMeidcalMemDetails($user_id, $connect);

        if(isset($_POST['submit-scheme'])){

            echo $scheme_id = $_POST['scheme_id'];
            $scheme = renewModel::getScheme($scheme_id,$connect);
            $scheme_name = mysqli_fetch_array($scheme);
            $scheme_new = $scheme_name[0];

            if ($result_set && $result) {
                if(mysqli_num_rows($result_set)==1){

                    $scheme_change = renewModel::updateScheme($scheme_id,$user_id, $connect);
                    $result_two = mysqli_fetch_assoc($result_set);
                    $result_three = mysqli_fetch_assoc($result);

                    $_SESSION['prev_status'] = $result_two['married'];
                    $_SESSION['name'] = $result_three['initials']." ".$result_three['sname'];
                    $_SESSION['health_condition'] = $result_two['healthcondition'];
                    $_SESSION['scheme'] = $scheme_new;

                    if($scheme_change){
                        header('Location:../../view/medicalSchemeMember/memCurrentMemberDetailsV.php');
                    }
                    else{
                        header('Location:../../view/medicalSchemeMember/memUpdateUnsuccessV.php');
                    }
                }
            }
            else{
                header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
            }
        }


        elseif(isset($_POST['no-submit'])){

            $scheme = renewModel::getSchemeName($user_id, $connect);
            $s_name = mysqli_fetch_assoc($scheme);
            $name = $s_name['schemeName'];

            if ($result_set && $result) {
                if(mysqli_num_rows($result_set)==1){

                    $result_two = mysqli_fetch_assoc($result_set);
                    $result_three = mysqli_fetch_assoc($result);

                    $_SESSION['prev_status'] = $result_two['civilstatus'];
                    $_SESSION['name'] = $result_three['initials']." ".$result_three['sname'];
                    $_SESSION['health_condition'] = $result_two['healthcondition'];
                    $_SESSION['scheme'] = $name;
                   
                    header('Location:../../view/medicalSchemeMember/memCurrentMemberDetailsV.php');
                    
                }
                
            }
            else{
                header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
            }
        }


?>