<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/memModel.php');
    require_once('../../model/memModel/claimFormModel.php');

?>

<?php
    
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = memModel::viewMember($user_id, $connect);
    $count = claimFormModel::getNextFormNumber($connect);
    $name = mysqli_fetch_array($result_set);
    $form_count = mysqli_fetch_array($count);
    $f_count = $form_count[0];
    $initials = $name[2];
    $sname = $name[3];

    $memStatus = memModel::getMemStatus($user_id, $connect);
    $mem_status = mysqli_fetch_array($memStatus);
    $status = $mem_status[0];
    //echo $status;

    $dependants = claimFormModel::getDependantName($user_id, $connect);
    $_SESSION['dependant_name'] = '';

        if($status==1){
            if ($result_set) {
                if(mysqli_num_rows($result_set)==1){
                    $_SESSION['claim_form_no'] = $f_count + 1;
                    $_SESSION['dependant_name']  = "<option value='".$initials.' '.$sname."'>".$initials.' '.$sname."</option>";

                    while ($dependant = mysqli_fetch_array($dependants)) {

                        $_SESSION['dependant_name'] .= "<option value='".$dependant['dependant_name']."'>".$dependant['dependant_name']."</option>";
                        
                    }
                    
                    header('Location:../../view/medicalSchemeMember/memOpdFormV.php');
                                    
                }
                else{
                    echo "User not Found!";
                }
            }

            else
                {
                    echo "Query Unsuccessful"; 
                }
        }
        else{
            header('Location:../../view/medicalSchemeMember/memNotMemberV.php');
        }

?>