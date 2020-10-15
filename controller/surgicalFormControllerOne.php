<?php

    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php

    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    //echo $user_id;
    $result_set = Model::viewMember($user_id, $connect);

    if ($result_set) {
        if(mysqli_num_rows($result_set)==1){
            $result = mysqli_fetch_assoc($result_set);
            
            $_SESSION['empid'] = $result['empid'];
            $_SESSION['initials'] = $result['initials'];
            $_SESSION['sname'] = $result['sname'];
            $_SESSION['designation'] = $result['designation'];
            $_SESSION['tp'] = $result['tp'];
            $_SESSION['mobile'] = $result['mobile'];
            

            header('Location:../view/medicalSchemeMember/memSurgicalFormV.php');
                                    
        }
        else{
            echo "User not Found!";
        }
    }
    else
        {
            echo "Query Unsuccessful"; 
        }

?>



