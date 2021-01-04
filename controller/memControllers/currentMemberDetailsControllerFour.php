<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/memModel.php');

?>

<?php

    $errors = array();
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    if (isset($_POST['renew-submit'])) {

        $new_no_child = mysqli_real_escape_string($connect, $_POST['new_no_of_child']);
        $userInfo = array('spouse_name'=>50, 'spouse_health'=>100, 'spouse_dob'=>20);

        foreach($userInfo as $info=>$maxlen)
        {
            if(strlen(trim($_POST[$info])) > $maxlen)
              {
                  $errors[] = $info . ' must be less than ' . $maxlen . ' characters';
              }
        }

        if(empty($errors)){

            $spouse_id = $_SESSION['spouse_id'];
            $spouse_liv_stat = mysqli_real_escape_string($connect, $_POST['spouse_live']);
            $spouse_name = mysqli_real_escape_string($connect, $_POST['spouse_name']);
            $spouse_health = mysqli_real_escape_string($connect, $_POST['spouse_health']);
            $spouse_dob = mysqli_real_escape_string($connect, $_POST['spouse_dob']);

            if($spouse_liv_stat == 'Yes'){
                $result_spouse = memModel::updateSpouseDetails($user_id,$spouse_id, $spouse_name,$spouse_health,$spouse_dob, $connect);

            }
            if($spouse_liv_stat == 'No'){
                $result_spouse = memModel::deleteSpouse($user_id, $spouse_id, $connect);
            }
            
            
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////

        $c =  $_SESSION['child_count'];
        if($c > 0){
            $child_details = $_POST['child'];
            
            foreach($child_details as $cd){
          
            $birthdate = new DateTime($cd['child_dob']);
            $today   = new DateTime('today');
            $age = $birthdate->diff($today)->y;

                if($age <= 18 && $cd['child_liv_stat'] == 'Yes'){
                    $result_child = memModel::updateChildDetails($user_id,$cd['child_id'], $cd['child_name'], $cd['child_relation'], $cd['child_dob'], $cd['child_health'], $connect);

                }
                if($age > 18 && $cd['child_liv_stat'] == 'No'){
                    $result_child = memModel::deleteChild($user_id, $cd['child_id'], $connect);
                }
            
            }
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////
        
        $_SESSION['new_no_child'] = $new_no_child;

        if($result_spouse){
            
                if($new_no_child > 0){
                    //echo $new_no_child;
                    header('Location:../../view/medicalSchemeMember/memAddNewChildDetailsV.php');
                }
                else{
                    //header('Location:../../view/medicalSchemeMember/memCurrentDetailsUpdateSuccessV.php');
                    echo "Done result";
                }
        }
        else{
            echo "Failed result.";
        }
        
    }
?>