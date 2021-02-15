<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/renewModel.php');

?>
<?php
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

    if(isset($_POST['add-child'])){
        
        $child_details = $_POST['child'];

        foreach($child_details as $cd){

                $birthdate = new DateTime($cd['child_dob']);
                $today   = new DateTime('today');
                $age = $birthdate->diff($today)->y;

                if($age <= 18 && $cd['liv_status'] == 'Yes'){
                    $addNewDependant = renewModel::addNewChild($user_id, $cd['child_name'], $cd['relationship'], $cd['child_dob'], $cd['health_status'], $connect);
                
                }
        }

        if($addNewDependant){
            header('Location:../../view/medicalSchemeMember/memCurrentDetailsUpdateSuccessV.php');
        }
        else{
            echo "Failed Result";
        }
        
    }
?>