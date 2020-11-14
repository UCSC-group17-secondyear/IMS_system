<?php 
    session_start();
    require_once('../../model/adminModel/manageSessionsModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addSession-submit'])) {
        $sessionType = $_POST['sessionType'];

        $checkSessionType = adminModel::checkSessionType($sessionType, $connect);
        if (mysqli_num_rows($checkSessionType==1)) {
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
    }
?>