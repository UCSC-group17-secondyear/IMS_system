<?php 
    session_start();
    require_once('../../model/adminModel/manageDegreesModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addDegree-submit'])) {
        $degree_name = $_POST['degree_name'];
        $degree_abbriviation = $_POST['degree_abbriviation'];

        $checkDegree = adminModel::checkDegree($degree_name, $degree_abbriviation, $connect);
        
        if (mysqli_num_rows($checkDegree) != 0) {
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

    elseif(isset($_POST['getDegree-submit'])) {
        $records = adminModel::getDegreeList($connect);
        $_SESSION['degreeList'] = '';

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['degreeList'] .= "<option value='".$record['degree_name']."'>".$record['degree_name']."</option>";
            }
            header('Location:../../view/admin/aRemoveUpdateDegreeV.php');
        }
        else {
            header('Location:../../view/admin/aNoDegreesAvailableV.php');
        }
    }

    elseif(isset($_POST['removeDegree-submit'])) {
        $degree_name = $_POST['degree_name'];
        $records = adminModel::removeDegreeList($degree_name, $connect);

        if ($records) {
            header('Location:../../view/admin/aDegreeRemoved.php');
        }
        else {
            header('Location:../../view/admin/aDegreeNotRemoved.php');
        }
    }
?>