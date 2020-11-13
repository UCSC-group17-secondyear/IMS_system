<?php 
    require_once('../../model/adminModel/manageDegreesModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addDegree-submit'])) {
        $degree_name = $_POST['degree_name'];
        $degree_abbriviation = $_POST['degree_abbriviation'];

        $checkDegree = adminModel::checkDegree($degree_name, $degree_abbriviation, $connect);
        
        if (mysqli_num_rows($checkDegree)==1) {
            header('Location:../../view/admin/aDegreeExists.php');
        }

        else {
            $result = adminModel::addDegree($degree_name, $degree_abbriviation, $connect);

            if ($result) {
                header('Location:../../view/admin/aDegreeAdded.php');
            }
            else {
                header('Location:../../view/admin/aDegreeNotAdded.php');
            }
        }
    }
?>