<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/memModel.php');

?>

<?php

    $errors = array();
    //$errors_c = array();
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

    if (isset($_POST['renew-submit'])) {

        $userInfo = array('health_condition'=>255, 'spouse_name'=>50, 'spouse_health'=>100);

        foreach($userInfo as $info=>$maxlen)
        {
            if(strlen(trim($_POST[$info])) > $maxlen)
              {
                  $errors[] = $info . ' must be less than ' . $maxlen . ' characters';
              }
        }

        if(empty($errors)){

            $mem_health = mysqli_real_escape_string($connect, $_POST['health_condition']);
            $scheme_name = mysqli_real_escape_string($connect, $_SESSION['scheme']);
            // echo $mem_health;
            // echo $scheme_name;

            $spouse_id = $_SESSION['spouse_id'];
            $spouse_name = mysqli_real_escape_string($connect, $_POST['spouse_name']);
            $spouse_health = mysqli_real_escape_string($connect, $_POST['spouse_health']);
            $spouse_dob = mysqli_real_escape_string($connect, $_POST['spouse_dob']);
            //echo $spouse_id;
            // echo $spouse_name;
            // echo $spouse_health;
            // echo $spouse_dob;

            $result_mem = memModel::updatememDetails($user_id, $mem_health,$scheme_name, $connect);
            $result_spouse = memModel::updateSpouseDetails($user_id, $spouse_name,$spouse_health,$spouse_dob, $connect);
            
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////

        $c =  $_SESSION['child_count'];
        $child_details = $_POST['child'];
        
        foreach($child_details as $cd){
                
          echo $cd['child_name'];
          echo $cd['child_id'];

            $result_child = memModel::updateChildDetails($user_id,$cd['child_id'], $cd['child_name'], $cd['child_relation'], $cd['child_dob'], $cd['child_health'], $connect);
                
            
        }

        ///////////////////////////////////////////////////////////////////////////////////////////////
        $new_no_of_child = mysqli_real_escape_string($connect, $_POST['add_no_child'] );
        $_SESSION['new_no_child'] = $new_no_of_child;

        if($result_spouse && $result_mem && $result_child){
            if($new_no_of_child>0){
                //echo $new_no_of_child;
                header('Location:../../view/medicalSchemeMember/memAddNewChildDetailsV.php');
            }
            else{
                header('Location:../../view/medicalSchemeMember/memCurrentDetailsUpdateSuccessV.php');
                //echo "Done result";
            }
            
        }

        else{
            echo "Failed result.";
        }
    }
?>