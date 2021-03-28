<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/renewModel.php');
    require_once('../../model/memModel/memModel.php');

?>

<?php
        $user_id = mysqli_real_escape_string($connect, $_SESSION['userId']);
        $result = memModel::viewMember($user_id,$connect);
        $result_set = renewModel::getMeidcalMemDetails($user_id, $connect);

        if(isset($_POST['check-renew'])){

            $mem_det = mysqli_fetch_assoc($result_set);

            if($mem_det['acceptance_status'] == '1'){

                $cur_date = date('Y-m-d');
                $cur_year = date("Y"); 

                $med_end_date = renewModel::getMedYearEndDate($cur_year,$connect);
                $med_end_date_result = mysqli_fetch_array($med_end_date);
                $med_year_end_date = $med_end_date_result[3];
                $med_year = $med_end_date_result[1];

                $date_diff = renewModel::getDateDiffEndDate($med_year,$connect);
                $end_date_diff = mysqli_fetch_array($date_diff);
                echo $diff = (int)$end_date_diff[0];

                if (strtotime($cur_date) <= strtotime($med_year_end_date) && $diff <= 14) {

                    header('Location:../../view/medicalSchemeMember/memRenewMembershipV.php');
                }
                else{
                    header('Location:../../view/medicalSchemeMember/memCantRenewV.php');

                }   

            }
            else{
                header('Location:../../view/medicalSchemeMember/memCantRenewV.php');
            }
        }

        elseif(isset($_POST['submit-scheme'])){

            $scheme_id = $_POST['scheme_id'];
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

                    $_SESSION['prev_status'] = $result_two['married'];
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