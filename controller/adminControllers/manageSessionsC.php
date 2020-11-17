<?php 
    session_start();
    require_once('../../model/adminModel/manageSessionsModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addSession-submit'])) {
        $sessionType = mysqli_real_escape_string($connect, $_POST['sessionType']);

        $checkSessionType = adminModel::checkSessionType($sessionType, $connect);
        if (mysqli_num_rows($checkSessionType)==1) {
            header('Location:../../view/admin/aSessionTypeExists.php');
        }

        else {
            $result = adminModel::addSessionType($sessionType, $connect);

            if ($result) { 
                header('Location:../../view/admin/aSessionTypeAdded.php');
            }
            else { 
                header('Location:../../view/admin/aSessionTypeNotAdded.php');
            }
        }
    }

    elseif(isset($_POST['sessionTypeList-submit'])) {
        $_SESSION['sessionTypes'] = '';
        $records = adminModel::viewSessionTypes($connect);
        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['sessionTypes'] .= "<tr>";
                $_SESSION['sessionTypes'] .= "<td>{$record['sessionType']}</td>";
                $_SESSION['sessionTypes'] .= "</tr>";

                header('Location:../../view/admin/aViewSessionTypesV.php');
            }
        }
        else {
            header('Location:../../view/admin/aNoSessionTypesAvailableV.php');
        }
    }

    elseif(isset($_POST['getTypeSIdeNave-submit'])) {
        $records = adminModel::viewSessionTypes($connect);
        $_SESSION['sessionTypes'] = '';

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['sessionTypes'] .= "<option value='".$record['sessionType']."'>".$record['sessionType']."</option>";
            }
            header('Location:../../view/admin/aRemoveSessionTypeV.php');
        }
        else {
            header('Location:../../view/admin/aNoSessionTypesAvailableV.php');
        }
    }

    elseif(isset($_POST['removeSessionType-submit'])) {
        $sessionType = mysqli_real_escape_string($connect, $_POST['sessionType']);

        $removeSessionType = adminModel::removeSessionType($sessionType, $connect);

        if ($removeSessionType) {
            header('Location:../../view/admin/aSessionTypeRemovedV.php');
        }
        else {
            header('Location:../../view/admin/aSessionTypeNotRemovedV.php');
        }
    }
?>