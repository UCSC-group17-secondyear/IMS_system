<?php 
    require_once('../model/Model.php');
    require_once('../config/database.php');

    if(isset($_POST['addUserrole-submit'])) {
        $userrole = $_POST['userRole'];
        $description = $_POST['description'];

        $result = Model::addUserrole($userrole, $description, $connect);

        if ($result) {
            echo "user role is added successfully";
        }
        else {
            echo "user role DID not added";
        }
    }
    else {
        echo "button not clicked";
    }
?>