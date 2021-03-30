<?php 
    require_once('../../model/amModel/amViewAttendanceModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['fetchDegrees-submit'])) {
    	session_start();
    	$records = amModel::getDegrees($connect);
        $_SESSION['degree_list'] = '';

    	while ($record = mysqli_fetch_array($records)) {
            $_SESSION['degree_list'] .= "<option value='".$record['degree_name']."'>".$record['degree_name']." </option>";
        }
        header('Location:../../view/attendanceMaintainer/amMonthWiseAttendanceV.php');
    }

    elseif (isset($_POST['getSubjects-submit'])) {
        $calander_year = $_POST['calander_year'];
        $month = $_POST['month'];
        $degree_name = $_POST['degree_name'];
        $academic_year = $_POST['academic_year'];
        $semester = $_POST['semester'];

        if ($calander_year > date("Y")) {
            header('Location:../../view/attendanceMaintainer/amFutureYearMV.php');
        }
        elseif ($calander_year == date("Y") && $month > date("m")) {
            header('Location:../../view/attendanceMaintainer/amFutureMonthMV.php');
        }
        else {
            session_start();

            $get_degreeId = amModel::getDegreeId ($degree_name, $connect);
            $result_degreeID = mysqli_fetch_assoc($get_degreeId);
            $degree_id = $result_degreeID['degree_id'];

            $attendance = amModel::filterSubjects($academic_year, $semester, $degree_id, $connect);
            $_SESSION['subjects_list'] = '';
            while ($record = mysqli_fetch_array($attendance)) {
                $_SESSION['subjects_list'] .= "<option value='".$record['subject_name']."'>".$record['subject_name']." </option>";
            }

            $sessionTypes = amModel::filterSessionTypes($connect);
            $_SESSION['sessionTypes_list'] = '';
            while ($record1 = mysqli_fetch_array($sessionTypes)) {
                $_SESSION['sessionTypes_list'] .= "<option value='".$record1['sessionType']."'>".$record1['sessionType']." </option>";
            }

            $_SESSION['calander_year'] = $calander_year;
            $_SESSION['month'] = $month;
            $_SESSION['degree_name'] = $degree_name;
            $_SESSION['academic_year'] = $academic_year;
            $_SESSION['semester'] = $semester;

            header('Location:../../view/attendanceMaintainer/amSeletcSubjectV.php');
        }

    }

    elseif (isset($_POST['monthWise-submit'])) {
        session_start();
        $calander_year = $_SESSION['calander_year'];
        $month = $_SESSION['month'];
        $degree_name = $_SESSION['degree_name'];
        $academic_year = $_SESSION['academic_year'];
        $semester = $_SESSION['semester'];
        $subject_name = $_POST['subject_name'];
        $sessionType = $_POST['sessionType'];

        $_SESSION['calander_year'] = $calander_year;
        $_SESSION['month'] = $month;
        $_SESSION['degree_name'] = $degree_name;
        $_SESSION['subject_name'] = $subject_name;
        $_SESSION['sessionType'] = $sessionType;

        $result_getDegreeId = amModel::getDegreeId ($degree_name, $connect);
        $result3 = mysqli_fetch_assoc($result_getDegreeId);

        if ($result3) {
            $degree_id = $result3['degree_id'];

            $result_subject_id = amModel::getSubjectID($subject_name, $degree_id, $connect);
            $result1 = mysqli_fetch_assoc($result_subject_id);

            $result_sessionTypeId = amModel::getSessionTypeID($sessionType, $connect);
            $result2 = mysqli_fetch_assoc($result_sessionTypeId);

            if ($result1 && $result2) {
                $subject_id = $result1['subject_id'];
                $sessionTypeId = $result2['sessionTypeId'];

                $get_monthDays = amModel::getMonthDays($calander_year, $month, $subject_id, $sessionTypeId, $connect);
                $result_monthDays = mysqli_fetch_assoc($get_monthDays);
                $_SESSION['monthDays'] = $result_monthDays['monthDays'];

                if ($_SESSION['monthDays'] == 0) {
                    header('Location:../../view/attendanceMaintainer/amNoMonthlyAttendance.php');
                }
                else {
                    $get_degreeId = amModel::getDegreeId ($degree_name, $connect);
                    $result_degreeID = mysqli_fetch_assoc($get_degreeId);
                    $degree_id = $result_degreeID['degree_id'];

                    $get_stdCount = amModel::getStdCount($academic_year, $semester, $degree_id, $connect);
                    $result_stdCount = mysqli_fetch_assoc($get_stdCount);
                    $_SESSION['stdCount'] = $result_stdCount['stdCount'];

                    $get_attendPercentage = amModel::getMonthAttendPercentage($calander_year, $month, $degree_id, $subject_id, $sessionTypeId, $connect);
                    $result_attendPercentage = mysqli_fetch_assoc($get_attendPercentage);
                    $_SESSION['attendPercentage'] = $result_attendPercentage['attendPercentage'];
                    
                    $attendance = amModel::monthAttendance ($calander_year, $month, $subject_id, $sessionTypeId, $connect);

                    if ($attendance && $result_monthDays && $result_stdCount && $result_attendPercentage) {
                        $_SESSION['monthAttendance_list'] = '';

                        while ($record = mysqli_fetch_assoc($attendance)) {
                            $std_id = $record['std_id'];
                            $get_student_index = amModel::getStdIndex ($std_id, $connect);
                            $result_student_index = mysqli_fetch_assoc($get_student_index);

                            $_SESSION['monthAttendance_list'] .= "<tr>";
                            $_SESSION['monthAttendance_list'] .= "<td>{$result_student_index['index_no']}</td>";
                            $_SESSION['monthAttendance_list'] .= "<td>{$record['attendance']}</td>";
                            $_SESSION['monthAttendance_list'] .= "</tr>";
                        }

                        header('Location:../../view/attendanceMaintainer/amDisplayMonthlyAttendanceV.php');
                    }
                    else {
                        header('Location:../../view/attendanceMaintainer/amNoMonthlyAttendance.php');
                    }
                }
            }
            else {
                header('Location:../../view/attendanceMaintainer/amNoSubIDSessionID.php');
            }
        }
        else {
            header('Location:../../view/attendanceMaintainer/amRequestDenied.php');
        }
    }

    elseif (isset($_POST['monthPdf'])) {
        session_start();

        require_once("../FPDF/fpdf.php");
        
        class getPdf extends FPDF
        {
            function header () {
                /*$this -> image('../../view/assests/img/favicon1.png', 2, 2);*/
                $this -> SetFont('Arial', 'B', 20);
                $this -> Cell(276, 10, "Monthly Attendance Details", 0, 1, 'C');
                $this -> Ln();
            }

            function footer () {
                $this -> SetY(-15);
                $this -> SetFont('Arial', '', 8);
                $this -> Cell(0, 10, 'Page Number '.$this->PageNo(), 0, 0, 'C');
            }

            function displayInfo($connect) {
                $calander_year = $_SESSION['calander_year'];
                $month = $_SESSION['month'];
                $degree_name = $_SESSION['degree_name'];
                $subject_name = $_SESSION['subject_name'];
                $sessionType = $_SESSION['sessionType'];
                $result_monthDays['monthDays'] = $_SESSION['monthDays'];
                $result_stdCount['stdCount'] = $_SESSION['stdCount'];
                $result_attendPercentage['attendPercentage'] = $_SESSION['attendPercentage'];

                $subject_id = $_SESSION['subject_id'];
                $sessionTypeId = $_SESSION['sessionTypeId'];

                $this -> Cell(75, 10, "Calendar Year", 1, 0, 'B');
                $this -> Cell(0, 10, $calander_year, 1, 1);

                $this -> Cell(75, 10, "Month", 1, 0);
                $this -> Cell(0, 10, $month, 1, 1);

                $this -> Cell(75, 10, "Degree", 1, 0);
                $this -> Cell(0, 10, $degree_name, 1, 1);

                $this -> Cell(75, 10, "Subject Name", 1, 0);
                $this -> Cell(0, 10, $subject_name, 1, 1);

                $this -> Cell(75, 10, "Session Type", 1, 0);
                $this -> Cell(0, 10, $sessionType, 1, 1);

                $this -> Cell(75, 10, "Total Number of days", 1, 0);
                $this -> Cell(0, 10, $result_monthDays['monthDays'], 1, 1);

                $this -> Cell(75, 10, "Total Number of students", 1, 0);
                $this -> Cell(0, 10, $result_stdCount['stdCount'], 1, 1);

                $this -> Cell(75, 10, "Attendance Percentage", 1, 0);
                $this -> Cell(0, 10, $result_attendPercentage['attendPercentage'], 1, 1);

                $this -> Ln();

                $this -> SetFont('Arial', 'B', 16);
                $this -> Cell(75, 10, "Index Number", 1, 0, 'C');
                $this -> Cell(0, 10, "Attendance", 1, 0, 'C');
                $this -> Ln();

                $this -> SetFont('Arial', '', 14);
                $attendance = amModel::monthAttendance ($calander_year, $month, $subject_id, $sessionTypeId, $connect);
                while ($record = mysqli_fetch_assoc($attendance)) {
                    $std_id = $record['std_id'];
                    $get_student_index = amModel::getStdIndex ($std_id, $connect);
                    $result_student_index = mysqli_fetch_assoc($get_student_index);

                    $this -> Cell(75, 10, $result_student_index['index_no'], 1, 0);
                    $this -> Cell(0, 10, $record['attendance'], 1, 1);
                }
            }
        }

        $pdf = new getPdf();
        $pdf -> AddPage('L', 'A4', 0);
        $pdf -> SetFont("Arial", "", 14);
        $pdf -> displayInfo($connect);
        $pdf->output();
    }
?>