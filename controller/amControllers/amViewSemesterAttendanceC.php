<?php 
    require_once('../../model/amModel/amViewAttendanceModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['semesterAttendance-submit'])) {
        $calander_year = $_POST ['calander_year'];
        $semester = $_POST ['semester'];

        if ($calander_year <= date("Y")) {
            $getDates = amModel::getSemesterDates ($calander_year, $semester, $connect);
            $getDates_result = mysqli_fetch_assoc($getDates);

            if ($getDates_result) {
                $start_date = $getDates_result['start_date'];
                $end_date = $getDates_result['end_date'];
                session_start();
                $_SESSION['start_date'] = $start_date;
                $_SESSION['end_date'] = $end_date;
                
                $records = amModel::getSemesterAttendance ($start_date, $end_date, $connect);
                
                if (!($records)) {
                    header('Location:../../view/attendanceMaintainer/amNoAttendanceSemester.php');
                }
                else {
                    $_SESSION['semesterAttendance_list'] = '';

                    while ($record = mysqli_fetch_assoc($records)) {
                        $subject_id = $record['subject_id'];
                        $get_subject_name = amModel::getSubjectName ($subject_id, $connect);
                        $result_subject_name = mysqli_fetch_assoc($get_subject_name);

                        $sessionTypeId = $record['sessionTypeId'];
                        $get_sessionType = amModel::get_sessionType ($sessionTypeId, $connect);
                        $result_sessionType = mysqli_fetch_assoc($get_sessionType);

                        $std_id = $record['std_id'];
                        $get_student_index = amModel::getStdIndex ($std_id, $connect);
                        $result_student_index = mysqli_fetch_assoc($get_student_index);

                        $_SESSION['semesterAttendance_list'] .= "<tr>";
                        $_SESSION['semesterAttendance_list'] .= "<td>{$result_student_index['index_no']}</td>";
                        $_SESSION['semesterAttendance_list'] .= "<td>{$result_subject_name['subject_name']}</td>";
                        $_SESSION['semesterAttendance_list'] .= "<td>{$result_sessionType['sessionType']}</td>";
                        $_SESSION['semesterAttendance_list'] .= "<td>{$record['attendance']}</td>";
                        $_SESSION['semesterAttendance_list'] .= "</tr>";
                    }
                    $get_attDetails = amModel::getSemDetails ($start_date, $end_date, $connect);
                    $result_attDetails = mysqli_fetch_assoc($get_attDetails);
                    if ($result_attDetails) {
                        $_SESSION['totdays'] = $result_attDetails['totdays'];
                        $_SESSION['attendPercentage'] = $result_attDetails['attendPercentage'];
                        $_SESSION['calander_year'] = $calander_year;
                        $_SESSION['semester'] = $semester;

                        header('Location:../../view/attendanceMaintainer/amDisplaySemesterAttendanceV.php');
                    }
                    else {
                        header('Location:../../view/attendanceMaintainer/amNoStartEndDateS.php');
                    }
                }
            }
            else {
                header('Location:../../view/attendanceMaintainer/amNoStartEndDateS.php');
            }
        }
        else {
            header('Location:../../view/attendanceMaintainer/amSemYearIssue.php');
        }
    }

    elseif (isset($_POST['semPdf'])) {
        session_start();

        require_once("../FPDF/fpdf.php");
        
        class getPdf extends FPDF
        {
            function header () {
                /*$this -> image('../../view/assests/img/favicon1.png', 2, 2);*/
                $this -> SetFont('Arial', 'B', 20);
                $this -> Cell(276, 10, "Semester-wise Attendance Details", 0, 1, 'C');
                $this -> Ln();
            }

            function footer () {
                $this -> SetY(-15);
                $this -> SetFont('Arial', '', 8);
                $this -> Cell(0, 10, 'Page Number '.$this->PageNo(), 0, 0, 'C');
            }

            function displayInfo($connect) {
                $calander_year = $_SESSION['calander_year'];
                $semester = $_SESSION['semester'];
                $totDays = $_SESSION['totdays'];
                $attendPercentage = $_SESSION['attendPercentage'];

                /*$month = $_SESSION['month'];
                $degree_name = $_SESSION['degree_name'];
                $subject_name = $_SESSION['subject_name'];
                $sessionType = $_SESSION['sessionType'];
                $result_monthDays['monthDays'] = $_SESSION['monthDays'];
                $result_stdCount['stdCount'] = $_SESSION['stdCount'];
                $result_attendPercentage['attendPercentage'] = $_SESSION['attendPercentage'];*/

                $subject_id = $_SESSION['subject_id'];
                $sessionTypeId = $_SESSION['sessionTypeId'];

                $start_date = $_SESSION['start_date'];
                $end_date = $_SESSION['end_date'];

                $this -> Cell(75, 10, "Calendar Year", 1, 0, 'B');
                $this -> Cell(0, 10, $calander_year, 1, 1);

                $this -> Cell(75, 10, "Semester", 1, 0);
                $this -> Cell(0, 10, $semester, 1, 1);

                $this -> Cell(75, 10, "Total Number of days", 1, 0);
                $this -> Cell(0, 10, $totDays, 1, 1);

                $this -> Cell(75, 10, "Attendance Percentage", 1, 0);
                $this -> Cell(0, 10, $attendPercentage, 1, 1);

                $this -> Ln();

                $this -> SetFont('Arial', 'B', 16);
                $this -> Cell(60, 10, "Index Number", 1, 0, 'C');
                $this -> Cell(60, 10, "Subject Name", 1, 0, 'C');
                $this -> Cell(60, 10, "Session Type", 1, 0, 'C');
                $this -> Cell(0, 10, "Attendance", 1, 0, 'C');
                $this -> Ln();

                $this -> SetFont('Arial', '', 14);
                $attendance = amModel::getSemesterAttendance ($start_date, $end_date, $connect);
                while ($record = mysqli_fetch_assoc($attendance)) {
                    $subject_id = $record['subject_id'];
                    $get_subject_name = amModel::getSubjectName ($subject_id, $connect);
                    $result_subject_name = mysqli_fetch_assoc($get_subject_name);

                    $sessionTypeId = $record['sessionTypeId'];
                    $get_sessionType = amModel::get_sessionType ($sessionTypeId, $connect);
                    $result_sessionType = mysqli_fetch_assoc($get_sessionType);

                    $std_id = $record['std_id'];
                    $get_student_index = amModel::getStdIndex ($std_id, $connect);
                    $result_student_index = mysqli_fetch_assoc($get_student_index);

                    $this -> Cell(60, 10, $result_student_index['index_no'], 1, 0);
                    $this -> Cell(60, 10, $result_subject_name['subject_name'], 1, 0);
                    $this -> Cell(60, 10, $result_sessionType['sessionType'], 1, 0);
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