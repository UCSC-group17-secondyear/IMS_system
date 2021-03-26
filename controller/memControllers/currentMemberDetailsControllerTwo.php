<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/renewModel.php');
    require_once('../../model/memModel/memModel.php');

?>

<?php 

    if(isset($_POST['mem-det-submit'])){

        $_SESSION['max_date'] = date('Y-m-d');

        $user_id = mysqli_real_escape_string($connect, $_SESSION['user_id']);

        $result_status = renewModel::getMeidcalMemDetails($user_id, $connect);
        $result_prev = mysqli_fetch_assoc($result_status);
        $prev_status = $result_prev['married'];
        $cur_status = mysqli_real_escape_string($connect,$_POST['civilstatus']);

        if($prev_status == '1'){
            $result_child = renewModel::getChildDetails($user_id, $connect);
            $result_spouse = renewModel::getSpouseDetails($user_id, $connect);
            $child_c = mysqli_num_rows($result_child);
            $_SESSION['child_count'] = $child_c;
        }
        

        $errors = array();
        

                if(strlen(trim($_POST['health_condition'])) > 255)
                {
                    $errors[] = $_POST['health_condition'] . ' must be less than ' . '255' . ' characters';
                }

        $mem_health = mysqli_real_escape_string($connect, $_POST['health_condition']);
        $scheme_name = mysqli_real_escape_string($connect, $_SESSION['scheme']);

        $scheme_id = memModel::getSchemeId($scheme_name,$connect);
        $sch_id = mysqli_fetch_assoc($scheme_id);
        $s_id = $sch_id['scheme_id'];

        $init_amount = memModel::getInitAmount($s_id, $connect);
        $i_amount = mysqli_fetch_array($init_amount);
        $amount = $i_amount[2] + $i_amount[3] + $i_amount[4] + $i_amount[5] + $i_amount[6] + $i_amount[7] + $i_amount[8] ;
        $cur_year = date("Y");

        $check_has_claim_det_row = memModel::checkClaimDetYear($user_id, $cur_year, $connect);
        
        if(mysqli_num_rows($check_has_claim_det_row) == 0){

            $result_claim_det = memModel::addYearClaimDetails($user_id, $cur_year,$s_id, $amount, $connect );

        }

    

        $civil_status = $_POST['civilstatus'];
        $result_mem = renewModel::updatememDetails($user_id,$civil_status, $mem_health, $connect);

        ///////////////////////////////////////////////////////////////// Unmarried --> Unmarried
        if( $prev_status=='0' && $cur_status=='0'){

            if($result_mem && ($check_has_claim_det_row || $result_claim_det)){
                
                header('Location:../../view/medicalSchemeMember/memCurrentDetailsUpdateSuccessV.php');
            }
            else{
                header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
            }

        }

        ///////////////////////////////////////////////////////////////// Unmarried --> Married
        elseif( $prev_status=='0' && $cur_status=='1'){
            
            if($result_mem && ($check_has_claim_det_row || $result_claim_det)){
                header('Location:../../view/medicalSchemeMember/memAddSpouseDetailsV.php');
            }
            else{
                header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
            }
        }

        ///////////////////////////////////////////////////////////////// Married --> Married
        elseif( $prev_status=='1' && $cur_status=='1'){
    
            if($result_mem && ($check_has_claim_det_row || $result_claim_det)){

                $spouse = mysqli_fetch_assoc($result_spouse);
                $_SESSION['child_count'] = mysqli_num_rows($result_child);

                if(mysqli_num_rows($result_spouse)==1){
                    $_SESSION['spouse_id'] = $spouse['dependant_id'];
                    $_SESSION['spouse_name'] = $spouse['dependant_name'];
                    $_SESSION['spouse_health'] = $spouse['health_status'];
                    $_SESSION['spouse_dob'] = $spouse['dob'];
                }

                $child  = [];
                if(mysqli_num_rows($result_child)>0){
                    $i = 0;
                    while($child_s = mysqli_fetch_array($result_child)){
                        $child[$i]['child_id'] = $child_s['dependant_id'];
                        $child[$i]['child_name'] = $child_s['dependant_name'];
                        $child[$i]['child_relation'] = $child_s['relationship'];
                        $child[$i]['child_health'] = $child_s['health_status'];
                        $child[$i]['child_dob'] = $child_s['dob'];
                        $i++;
                        
                    }       
                       $_SESSION['child'] = $child;
                }
                
                header('Location:../../view/medicalSchemeMember/memCurrentMemDependDetailsV.php');
            }
            else{
                header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
            }
        }

        ///////////////////////////////////////////////////////////////// Married --> Unmarried
        elseif( $prev_status=='1' && $cur_status=='0'){

            $result_deleted = renewModel::deleteDependant($user_id, $connect);
            
            if($result_deleted && $result_mem && ($check_has_claim_det_row || $result_claim_det)){
                header('Location:../../view/medicalSchemeMember/memCurrentDetailsUpdateSuccessV.php');
            }
            else{
                header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
            }
        }
        
    }

?>