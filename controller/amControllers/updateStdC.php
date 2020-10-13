<?php
    session_start();
    require_once('../../model/amModel.php');
    require_once('../../config/database.php');

    $std_index = mysqli_real_escape_string($connect, $_GET['std_index']);
    $student = amModel::fetchStudent($std_index, $connect);

    if ($student) {
        if (mysqli_num_rows($student)==1) {
            $std = mysqli_fetch_assoc($student);
            $_SESSION['index_no'] = $std['index_no'];
            $_SESSION['registrstion_no'] = $std['registrstion_no'];
            $_SESSION['initials'] = $std['initials'];
            $_SESSION['last_name'] = $std['last_name'];
            $_SESSION['email'] = $std['email'];
            $_SESSION['academic_year'] = $std['academic_year'];
            $_SESSION['degree'] = $std['degree'];

            header('Location:../../view/attendanceMaintainer/amUpdateStdV.php');
        }
    }

?>