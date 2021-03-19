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
        $records = adminModel::removeDegree($degree_name, $connect);

        if ($records) {
            header('Location:../../view/admin/aDegreeRemoved.php');
        }
        else {
            header('Location:../../view/admin/aDegreeNotRemoved.php');
        }
    }

    elseif(isset($_POST['updateDegree-submit'])) {
        $degree_name = $_POST['degree_name'];
        $result_set = adminModel::getDegree($degree_name, $connect);

        if ($result_set) {
            if(mysqli_num_rows($result_set)==1) {
                $result = mysqli_fetch_assoc($result_set);
                $_SESSION['degree_name'] = $result['degree_name'];
                $_SESSION['degree_abbriviation'] = $result['degree_abbriviation'];

                header('Location:../../view/admin/aUpdateDegreeFoundV.php');
            }
            else {
                header('Location:../../view/admin/aQueryFailedV.php');
            }
        }
        else {
            header('Location:../../view/admin/aNoDegreesAvailableV.php');
        }
    }

    elseif(isset($_POST['saveUpdateDegree-submit'])) {
        $degree_name = $_POST['degree_name'];
        $degree_abbriviation = $_POST['degree_abbriviation'];

        $result_set = adminModel::updateDegree($degree_name, $degree_abbriviation, $connect);

        if ($result_set) {
            header('Location:../../view/admin/aDegreeUpdated.php');
        }
        else {
            header('Location:../../view/admin/aDegreeNotUpdated.php');
        }
    }
?>