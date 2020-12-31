<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/memModel.php');

?>

<?php 
        $user_id = mysqli_real_escape_string($connect, $_SESSION['user_id']);

        if(isset($_POST['spouse-det-submit'])){

            $userInfo = array('spouse_name'=>50, 'health_status'=>100);
            $children_no = $_SESSION['num_of_child'];
            foreach($userInfo as $info=>$maxlen)
            {
                if(strlen(trim($_POST[$info])) > $maxlen)
                {
                    $errors[] = $info . ' must be less than ' . $maxlen . ' characters';
                }
            }

            if (empty($errors)) {
                
                $spouse_name = mysqli_real_escape_string($connect, $_POST['spouse_name']);
                $spouse_relationship = mysqli_real_escape_string($connect, $_POST['relationship']);
                $spouse_dob = mysqli_real_escape_string($connect, $_POST['dob']);
                $spouse_healthstatus = mysqli_real_escape_string($connect, $_POST['health_status']);
    
                $result_spouse = memModel::addSpouseDetails($user_id, $spouse_name, $spouse_relationship,$spouse_dob, $spouse_healthstatus, $connect);


                $_SESSION['children_no'] = $children_no;

                if($children_no > 0){
                    header('Location:../../view/medicalSchemeMember/memAddNewChildDetailsV.php');
                }
                else{
                    header('Location:../../view/medicalSchemeMember/memCurrentDetailsUpdateSuccessV.php');
                }
            }
        }

?>