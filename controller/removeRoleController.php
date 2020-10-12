<?php 
    require_once('../model/Model.php');
    require_once('../config/database.php');

    if(isset($_POST['remove-submit'])) {
        $userrole = $_POST['userRole'];

        $result = Model::removeUserrole($userrole, $connect);

        if ($result) {
            echo "user role is delted successfully";
        }
        else {
            echo "user role is not deleted";
        }
    }
    else {
        echo "button not clicked";
    }
?>