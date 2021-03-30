<?php 
    require_once('../../model/amModel/amViewAttendanceModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['fetchStudents-submit'])) {
    	session_start();
    	$records = amModel::getStudents($connect);
        $_SESSION['student_indexes'] = '';

    	while ($record = mysqli_fetch_array($records)) {
            $_SESSION['student_indexes'] .= "<option value='".$record['index_no']."'>".$record['index_no']." </option>";
        }
        header('Location:../../view/attendanceMaintainer/amStudentWiseAttendanceV.php');
    }

    elseif (isset($_POST['filterStudent-submit'])) {
        session_start();
        $index_no = $_POST['index_no'];
        $_SESSION['index_no'] = $index_no;

        $student = amModel::filterStudent($index_no, $connect);

        if (mysqli_num_rows($student) == 1) {
            $result = mysqli_fetch_assoc($student);
            $academic_year = $result['academic_year'];
            $semester = $result['semester'];
            $degree_id = $result['degree_id'];

            $records1 = amModel::filterSubjects($academic_year, $semester, $degree_id, $connect);
            $records2 = amModel::filterSessionTypes($connect);

            if ($records1 && $records2) {
                $_SESSION['subjectsList'] = '';
                $_SESSION['sessionTypes'] = '';

                while ($record = mysqli_fetch_array($records1)) {
                    $_SESSION['subjectsList'] .= "<option value='".$record['subject_name']."'>".$record['subject_name']."</option>";
                }

                while ($record = mysqli_fetch_array($records2)) {
                    $_SESSION['sessionTypes'] .= "<option value='".$record['sessionType']."'>".$record['sessionType']."</option>";
                }
                header('Location:../../view/attendanceMaintainer/amGetStdStdwiseAttendanceV.php');
            }
            else {
                header('Location:../../view/attendanceMaintainer/amNoSubSessionAvailableV.php');
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
            header('Location:../../view/attendanceMaintainer/amStartEndDateIssue.php');
        }
        else {
            $_SESSION['index_no'] = $index_no;
            $_SESSION['subject_name'] = $subject_name;
            $_SESSION['sessionType'] = $sessionType;
            $_SESSION['startDate'] = $startDate;
            $_SESSION['endDate'] = $endDate;

            $result_sessionTypeId = amModel::getSessionTypeID($sessionType, $connect);
            $result2 = mysqli_fetch_assoc($result_sessionTypeId);

            $result_student_id = amModel::filterStudent ($index_no, $connect);
            $result3 = mysqli_fetch_assoc($result_student_id);

            if ($result2 && $result3) {
                $sessionTypeId = $result2['sessionTypeId'];
                $_SESSION['sessionTypeId'] = $sessionTypeId;

                $std_id = $result3['std_id'];
                $_SESSION['std_id'] = $std_id;

                $degree_id = $result3['degree_id'];
                $_SESSION['degree_id'] = $degree_id;

                $result_subject_id = amModel::getSubjectID($subject_name, $degree_id, $connect);
                $result1 = mysqli_fetch_assoc($result_subject_id);
                $subject_id = $result1['subject_id'];
                $_SESSION['subject_id'] = $subject_id;
                
                $attendance = amModel::stdAttendance ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);

                $get_totDays = amModel::getTotDays ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);
                $result_totDays = mysqli_fetch_assoc($get_totDays);
                $_SESSION['totalDays'] = $result_totDays['totalDays'];

                if ($_SESSION['totalDays'] == 0) {
                    header('Location:../../view/attendanceMaintainer/amNoStdAttendanceV.php');
                }
                else {
                    $get_attendDays = amModel::getAttendDays ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);
                    $result_attendDays = mysqli_fetch_assoc($get_attendDays);
                    $_SESSION['attendDays'] = $result_attendDays['attendDays'];

                    $get_attendPercentage = amModel::getAttendPercentage ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);
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

                        header('Location:../../view/attendanceMaintainer/amDisplayStdwiseAttendanceV.php');
                    }
                    else {
                        header('Location:../../view/attendanceMaintainer/amNoAttendance.php');
                    }
                }
            }
            else {
                header('Location:../../view/attendanceMaintainer/amNoSubIDSessionID.php');
            }
        }
    }

    elseif (isset($_POST['stdPDF'])) {
        session_start();

        require_once("../../FPDF/fpdf.php");
        
        class getPdf extends FPDF
        {
            function header () {
                /*$this -> image('../../view/assests/img/favicon1.png', 2, 2);*/
                $this -> SetFont('Arial', 'B', 20);
                $this -> Cell(276, 10, "Student Attendance Details", 0, 1, 'C');
                $this -> Ln();
            }

            function footer () {
                $this -> SetY(-15);
                $this -> SetFont('Arial', '', 8);
                $this -> Cell(0, 10, 'Page Number '.$this->PageNo(), 0, 0, 'C');
            }

            function attTable()
            {
               $this -> SetFont('Arial', 'B', 16);
               $this -> Cell(75, 10, "Date", 1, 0, 'C');
               $this -> Cell(0, 10, "Attendance", 1, 0, 'C');
               $this -> Ln();
            }

            function displayInfo() {
                $index_no = $_SESSION['index_no'];
                $subject_name = $_SESSION['subject_name'];
                $sessionType = $_SESSION['sessionType'];
                $startDate = $_SESSION['startDate'];
                $endDate = $_SESSION['endDate'];
                $attendDays = $_SESSION['attendDays'];
                $attendPercentage = $_SESSION['attendPercentage'];

                $this -> Cell(75, 10, "Student Index", 1, 0, 'B');
                $this -> Cell(0, 10, $index_no, 1, 1);

                $this -> Cell(75, 10, "Subject Name", 1, 0);
                $this -> Cell(0, 10, $subject_name, 1, 1);

                $this -> Cell(75, 10, "Session Type", 1, 0);
                $this -> Cell(0, 10, $sessionType, 1, 1);

                $this -> Cell(75, 10, "Start Date", 1, 0);
                $this -> Cell(0, 10, $startDate, 1, 1);

                $this -> Cell(75, 10, "End Date", 1, 0);
                $this -> Cell(0, 10, $endDate, 1, 1);

                $this -> Cell(75, 10, "Total Number of days", 1, 0);
                $this -> Cell(0, 10, $attendDays, 1, 1);

                $this -> Cell(75, 10, "Attendance Percentage", 1, 0);
                $this -> Cell(0, 10, $attendPercentage, 1, 1);

                $this -> Cell(0, 10, "", 0, 1);
            }

            function displayAttTable($connect) {
                $this -> SetFont('Arial', '', 14);

                $index_no = $_SESSION['index_no'];
                $subject_name = $_SESSION['subject_name'];
                $sessionType = $_SESSION['sessionType'];
                $startDate = $_SESSION['startDate'];
                $endDate = $_SESSION['endDate'];
                $attendDays = $_SESSION['attendDays'];
                $attendPercentage = $_SESSION['attendPercentage'];
                $std_id = $_SESSION['std_id'];
                $degree_id = $_SESSION['degree_id'];
                $subject_id = $_SESSION['subject_id'];
                $sessionTypeId = $_SESSION['sessionTypeId'];

                $attendance = amModel::stdAttendance ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);
                while ($record = mysqli_fetch_assoc($attendance)) {
                    $this -> Cell(75, 10, $record['date'], 1, 0);
                    $this -> Cell(0, 10, $record['attendance'], 1, 1);
                }
            }
        }

        $pdf = new getPdf();
        $pdf -> AddPage('L', 'A4', 0);
        $pdf -> SetFont("Arial", "", 14);
        $pdf -> displayInfo();
        $pdf -> attTable();
        $pdf -> displayAttTable($connect);
        $pdf->output();
    }

?>