<?php 
    require_once('../../model/adminModel/manageDegreesModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addDegree-submit'])) {
        $degree_name = $_POST['degree_name'];
        $degree_abbriviation = $_POST['degree_abbriviation'];

        $result = adminModel::addDegree($degree_name, $degree_abbriviation, $connect);

        if ($result) {
            echo "Degree is added successfully";
        }
        else {
            echo "Degree was not added";
        }
    }
?>