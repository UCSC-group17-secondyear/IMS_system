<?php 
    require_once('../../model/amModel/amManageStdModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addStudent-submit'])) {
        $index_no = $_POST['index_no'];
        $registrstion_no = $_POST['registrstion_no'];
        $initials = $_POST['initials'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $academic_year = $_POST['academic_year'];
        $degree = $_POST['degree'];
        $indexFlag = 0;
        $regNumFlag = 0;
        $mailFlag = 0;

        $checkIndex = amModel::checkIndex ($index_no, $connect);
        // check whether the student index exists already
        if (mysqli_num_rows($checkIndex) == 1) {
            $indexFlag = 1;
        }

        $checkRegNum = amModel::checkRegNum ($registrstion_no, $connect);
        // check whether the student registration number exists already
        if (mysqli_num_rows($checkRegNum) == 1) {
            $regNumFlag = 1;
        }

        $checkEmail = amModel::checkEmail ($email, $connect);
        // check whether the student email exists already
        if (mysqli_num_rows($checkEmail) == 1) {
            $mailFlag = 1;
        }

        if ($indexFlag == 1 && $regNumFlag == 1) {
            if ($mailFlag == 1) {
                // Student index, registration number and email all three exist already
                header('Location:../../view/attendanceMaintainer/amIndexRegnumEmailExist.php');
            }
            else {
                // both index and registration number exist already
                header('Location:../../view/attendanceMaintainer/amIndexRegnumExist.php');
            }
        }
        elseif ($indexFlag == 1 && $mailFlag == 1) {
            // both index and email exists already
            header('Location:../../view/attendanceMaintainer/amIndexEmailExist.php');
        }
        elseif ($regNumFlag == 1 && $mailFlag == 1) {
            // both registration number and email exists already
            header('Location:../../view/attendanceMaintainer/amRegnumEmailExist.php');
        }
        elseif ($indexFlag == 1) {
            header('Location:../../view/attendanceMaintainer/amIndexExist.php');
        }
        elseif ($regNumFlag == 1) {
            header('Location:../../view/attendanceMaintainer/amRegnumExist.php');
        }
        elseif ($mailFlag == 1) {
            header('Location:../../view/attendanceMaintainer/amEmailExist.php');
        }
        elseif ($errorFlag == 0) {
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