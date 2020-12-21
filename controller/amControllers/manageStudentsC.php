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

    elseif(isset($_POST['deleteupdateStudent-submit'])) {
        $index_no = $_POST['index_no'];
        $fetchStudent = amModel::fetchStudent ($index_no, $connect);
        // fetch d=information of the student having the given index

        if (mysqli_num_rows($fetchStudent) == 1) {
            session_start();
            $result = mysqli_fetch_assoc($fetchStudent);
            $_SESSION['index_no'] = $result['index_no'];
            $_SESSION['registrstion_no'] = $result['registrstion_no'];
            $_SESSION['initials'] = $result['initials'];
            $_SESSION['last_name'] = $result['last_name'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['academic_year'] = $result['academic_year'];
            $_SESSION['degree'] = $result['degree'];

            header('Location:../../view/attendanceMaintainer/amDeleteUpdateStudentV.php');
        }
        else {
            echo "The index number does not exists.";
        }
    }

    elseif(isset($_POST['updateStudent-submit'])) {
        $index_no = $_POST['index_no'];
        $registrstion_no = $_POST['registrstion_no'];
        $initials = $_POST['initials'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $academic_year = $_POST['academic_year'];
        $degree = $_POST['degree'];

        $regNumFlag = 0;
        $mailFlag = 0;

        $regNumExist = amModel::regNumExist ($index_no, $registrstion_no, $connect);
        // check whether the updated registration number exists already for another student
        if (mysqli_num_rows($regNumExist) == 1) {
            $regNumFlag = 1;
            // registration number belongs to another student.
        }
        $emailExist = amModel::emailExist ($index_no, $email, $connect);
        // check whether the updated student email exists for another student
        if (mysqli_num_rows($emailExist) == 1) {
            $mailFlag = 1;
            // email address belongs to another student.
        }

        if ($mailFlag == 1 && $regNumFlag == 1) {
            header('Location:../../view/attendanceMaintainer/amRegnumEmailReserved.php');
        }
        elseif ($mailFlag == 1) {
            header('Location:../../view/attendanceMaintainer/amEmailReserved.php');
        }
        elseif ($regNumFlag == 1) {
            header('Location:../../view/attendanceMaintainer/amRegnumReserved.php');
        }
        else {
            $result = amModel::updateStd ($index_no, $registrstion_no, $initials, $last_name, $email, $academic_year, $degree, $connect);

            if ($result) {
                header('Location:../../view/attendanceMaintainer/amStudentUpdatedV.php');
            }
            else {
                header('Location:../../view/attendanceMaintainer/amStudentNotUpdatedV.php');
            }
        }
    }

    elseif(isset($_POST['removeStudent-submit'])) {
        $index_no = $_POST['index_no'];

        $result = amModel::deleteStd ($index_no, $connect);

        if ($result) {
            header('Location:../../view/attendanceMaintainer/amStudentNotUpdatedV.php');
            echo "student got removed";
        }
        else {
            header('Location:../../view/attendanceMaintainer/amStudentRemoved.php');
        }
    }

    elseif(isset($_POST['viewStudents-submit'])) {
        session_start();
        $_SESSION['student_list'] = '';

        $records = amModel::viewStudents($connect);

        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['student_list'] .= "<tr>";
                $_SESSION['student_list'] .= "<td>{$record['index_no']}</td>";
                $_SESSION['student_list'] .= "<td>{$record['    registrstion_no']}</td>";
                $_SESSION['student_list'] .= "<td>{$record['initials']}</td>";
                $_SESSION['student_list'] .= "<td>{$record['last_name']}</td>";
                $_SESSION['student_list'] .= "<td>{$record['email']}</td>";
                $_SESSION['student_list'] .= "<td>{$record['academic_year']}</td>";
                $_SESSION['student_list'] .= "<td>{$record['degree']}</td>";
                $_SESSION['student_list'] .= "</tr>";

                header('Location:../../view/attendanceMaintainer/amViewStudentDetailsV.php');
            }
        }
        else {
            echo "no students available in the system";
        }
    }

    else {
        echo "button not clicked";
    }
?>