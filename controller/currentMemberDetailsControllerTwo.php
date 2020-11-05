<?php

    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php

    $errors = array();
    $user_id = '';

    if (isset($_POST['update-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        
        $userInfo = array('health_condition'=>255);

        foreach($userInfo as $info=>$maxlen)
        {
            if(strlen(trim($_POST[$info])) > $maxlen)
              {
                  $errors[] = $info . ' must be less than ' . $maxlen . ' characters';
              }
        }

        if(empty($errors)){

            $department = mysqli_real_escape_string($connect, $_POST['department']);
            $health_condition = mysqli_real_escape_string($connect, $_POST['health_condition']);
            $civil_status = $_POST['civilstatus'];
            $scheme_name = mysqli_real_escape_string($connect, $_SESSION['scheme']);
            
            

            $result_one = Model::updatememDetails($user_id, $department,$health_condition,$civil_status,$scheme_name, $connect);
            
            $result_two = Model::updateScheme($user_id, $scheme_name, $connect);
            

            if($result_one && $result_two){
                header('Location:../view/medicalSchemeMember/memCurrentDetailsUpdateSuccessV.php');
                // echo "one";
            }
        }
    }
?>