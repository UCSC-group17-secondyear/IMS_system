<?php 
    require_once('../../model/rvModel/rvViewAttendanceModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['fetchStudents-submit'])) {
    	session_start();
    	$records = rvModel::getStudents($connect);
        $_SESSION['student_indexes'] = '';

    	while ($record = mysqli_fetch_array($records)) {
            $_SESSION['student_indexes'] .= "<option value='".$record['index_no']."'>".$record['index_no']." </option>";
        }
        header('Location:../../view/reportViewer/rvStudentWiseAttendanceV.php');
    }

    elseif (isset($_POST['filterStudent-submit'])) {
        session_start();
        $index_no = $_POST['index_no'];
        $_SESSION['index_no'] = $index_no;

        $student = rvModel::filterStudent($index_no, $connect);

        if (mysqli_num_rows($student) == 1) {
            $result = mysqli_fetch_assoc($student);
            $academic_year = $result['academic_year'];
            $semester = $result['semester'];
            $degree_id = $result['degree_id'];

            $records1 = rvModel::filterSubjects($academic_year, $semester, $degree_id, $connect);
            $records2 = rvModel::filterSessionTypes($connect);

            if ($records1 && $records2) {
                $_SESSION['subjectsList'] = '';
                $_SESSION['sessionTypes'] = '';

                while ($record = mysqli_fetch_array($records1)) {
                    $_SESSION['subjectsList'] .= "<option value='".$record['subject_name']."'>".$record['subject_name']."</option>";
                }

                while ($record = mysqli_fetch_array($records2)) {
                    $_SESSION['sessionTypes'] .= "<option value='".$record['sessionType']."'>".$record['sessionType']."</option>";
                }
                header('Location:../../view/reportViewer/rvGetStdStdwiseAttendanceV.php');
            }
            else {
                echo("check");
                /*header('Location:../../view/reportViewer/rvNoSubSessionAvailableV.php');*/
            }
        }       
    }
    elseif (isset($_POST['stdWise-submit'])) {
        session_start();
        $index_no = $_SESSION['index_no'];
        $subject_name = $_POST['subject_name'];
        $sessionType = $_POST['sessionType'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

        if ($startDate > $endDate) {
            echo("error");
            /*header('Location:../../view/reportViewer/rvStartEndDateIssue.php');*/
        }
        else {
            $_SESSION['index_no'] = $index_no;
            $_SESSION['subject_name'] = $subject_name;
            $_SESSION['sessionType'] = $sessionType;
            $_SESSION['startDate'] = $startDate;
            $_SESSION['endDate'] = $endDate;

            $result_subject_id = rvModel::getSubjectID($subject_name, $connect);
            $result1 = mysqli_fetch_assoc($result_subject_id);

            $result_sessionTypeId = rvModel::getSessionTypeID($sessionType, $connect);
            $result2 = mysqli_fetch_assoc($result_sessionTypeId);

            $result_student_id = rvModel::filterStudent ($index_no, $connect);
            $result3 = mysqli_fetch_assoc($result_student_id);

            if ($result1 && $result2 && $result3) {
                $subject_id = $result1['subject_id'];
                $sessionTypeId = $result2['sessionTypeId'];
                $std_id = $result3['std_id'];

                $attendance = rvModel::stdAttendance ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);

                $get_totDays = rvModel::getTotDays ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);
                $result_totDays = mysqli_fetch_assoc($get_totDays);
                $_SESSION['totalDays'] = $result_totDays['totalDays'];

                if ($_SESSION['totalDays'] == 0) {
                    echo "no session has been held for the given subject in the given duration";
                }
                else {
                    $get_attendDays = rvModel::getAttendDays ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);
                    $result_attendDays = mysqli_fetch_assoc($get_attendDays);
                    $_SESSION['attendDays'] = $result_attendDays['attendDays'];

                    $get_attendPercentage = rvModel::getAttendPercentage ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);
                    $result_attendPercentage = mysqli_fetch_assoc($get_attendPercentage);
                    $_SESSION['attendPercentage'] = $result_attendPercentage['attendPercentage'];

                    if ($attendance && $result_totDays  && $result_attendDays && $result_attendPercentage) {
                        $_SESSION['stdAttendance_list'] = '';

                        while ($record = mysqli_fetch_assoc($attendance)) {
                            $_SESSION['stdAttendance_list'] .= "<tr>";
                            $_SESSION['stdAttendance_list'] .= "<td>{$record['date']}</td>";
                            $_SESSION['stdAttendance_list'] .= "<td>{$record['attendance']}</td>";
                            $_SESSION['stdAttendance_list'] .= "</tr>";
                        }

                        header('Location:../../view/reportViewer/rvDisplayStdwiseAttendanceV.php');
                    }
                    else {
                        echo "error";
                        /*header('Location:../../view/reportViewer/rvNoAttendance.php');*/
                    }
                }
            }
            else {
                echo "error";
/*                header('Location:../../view/reportViewer/rvNoSubIDSessionID.php');*/
            }
        }
    }

?>