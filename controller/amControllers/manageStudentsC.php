<?php 
    require_once('../../model/amManageStdModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addStudent-submit'])) {
        $index_no = $_POST['index_no'];
        $registrstion_no = $_POST['registrstion_no'];
        $initials = $_POST['initials'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $academic_year = $_POST['academic_year'];
        $degree = $_POST['degree'];

        $stdCheck = amModel::checkStudent ($index_no, $registrstion_no, $connect);

        if (mysqli_num_rows($stdCheck)==1) {
            echo "This index number or the registration number exists already";
        }
        else {
            $result = amModel::addStudent($index_no, $registrstion_no, $initials, $last_name, $email, $academic_year, $degree, $connect);

            if ($result) {
                header('Location:../../view/attendanceMaintainer/amStudentAdded.php');
            }
            else {
                header('Location:../../view/attendanceMaintainer/amStudentNotAdded.php');
            }
        }
    }
    else {
        echo "button not clicked";
    }
?>