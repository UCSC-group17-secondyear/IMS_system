<?php
    session_start();
    require_once('../../model/amModel.php');
    require_once('../../config/database.php');

    $std_index = mysqli_real_escape_string($connect, $_GET['std_index']);

    $result = amModel::deleteStd($std_index, $connect);

    if ($result) {
        echo "student is removed.";
    }
    else {
        echo "student is not removed.";
    }
?>