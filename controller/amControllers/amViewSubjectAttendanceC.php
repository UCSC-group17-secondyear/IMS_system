<?php 
    require_once('../../model/amModel/amViewAttendanceModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['fetchSubjects-submit'])) {
        $records1 = amModel::fetchSubjects($connect);
        $records2 = amModel::filterSessionTypes($connect);
        $records3 = amModel::getDegrees($connect);

        if ($records1 && $records2 && $records3) {
            session_start();
            $_SESSION['subjectsList'] = '';
            $_SESSION['sessionTypes'] = '';
            $_SESSION['degreeList'] = '';

            while ($record = mysqli_fetch_array($records1)) {
                $_SESSION['subjectsList'] .= "<option value='".$record['subject_name']."'>".$record['subject_name']."</option>";
            }

            while ($record = mysqli_fetch_array($records2)) {
                $_SESSION['sessionTypes'] .= "<option value='".$record['sessionType']."'>".$record['sessionType']."</option>";
            }

            while ($record = mysqli_fetch_array($records3)) {
                $_SESSION['degreeList'] .= "<option value='".$record['degree_name']."'>".$record['degree_name']."</option>";
            }
            header('Location:../../view/attendanceMaintainer/amSubjectWiseAttendanceV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amRequestDenied.php');
        }
    }

    elseif (isset($_POST['subjectWise-submit'])) {
        $subject_name = $_POST['subject_name'];
        $sessionType = $_POST['sessionType'];
        $degree_name = $_POST['degree_name'];
        $batch_number = $_POST['batch_number'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

        if ($startDate > $endDate) {
            header('Location:../../view/attendanceMaintainer/amStartEndDateIssueM.php');
        }

        else {
            $get_degreeId = amModel::getDegreeId ($degree_name, $connect);
            $result_degreeID = mysqli_fetch_assoc($get_degreeId);
            $degree_id = $result_degreeID['degree_id'];


            $result_subject_id = amModel::getSubjectID($subject_name, $degree_id, $connect);
            $result1 = mysqli_fetch_assoc($result_subject_id);

            $result_sessionTypeId = amModel::getSessionTypeID($sessionType, $connect);
            $result2 = mysqli_fetch_assoc($result_sessionTypeId);

            if ($result1 && $result2) {
                session_start();
                $subject_id = $result1['subject_id'];
                $sessionTypeId = $result2['sessionTypeId'];

                $get_aySem = amModel::getAySem($subject_name, $degree_id, $connect);
                $result_aySem = mysqli_fetch_assoc($get_aySem);
                $academic_year = $result_aySem['academic_year'];
                $semester = $result_aySem['semester'];

                $get_stdCount = amModel::getStdCount($academic_year, $semester, $degree_id, $connect);
                $result_stdCount = mysqli_fetch_assoc($get_stdCount);
                

                $get_totSubDays = amModel::getTotSubDays($degree_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);
                $result_totSubDays = mysqli_fetch_assoc($get_totSubDays);

                if ($result_stdCount && $result_totSubDays) {
                    $_SESSION['stdCount'] = $result_stdCount['stdCount'];
                    $_SESSION['totSubDays'] = $result_totSubDays['totSubDays'];

                    if ($_SESSION['totSubDays'] == 0) {
                        header('Location:../../view/attendanceMaintainer/amNoSubjectAttendance.php');
                    }
                    else {
                        $get_attendPercentage = amModel::getSubjectAttendPercentage ($degree_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);
                        $result_attendPercentage = mysqli_fetch_assoc($get_attendPercentage);

                        if ($result_attendPercentage) {
                            $_SESSION['attendPercentage'] = $result_attendPercentage['attendPercentage'];

                            $records = amModel::fetchSubjectAttendance($degree_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);
                            $records_check = mysqli_fetch_assoc($records);

                            if ($records_check) {
                                $_SESSION['subWise_attendance'] = '';

                                while ($record = mysqli_fetch_assoc($records)) {
                                    $get_index = amModel::getStdIndex ($record['std_id'], $connect);
                                    $result_index = mysqli_fetch_assoc($get_index);
                                    $index_no = $result_index['index_no'];

                                    $_SESSION['subWise_attendance'] .= "<tr>";
                                    $_SESSION['subWise_attendance'] .= "<td>{$index_no}</td>";
                                    $_SESSION['subWise_attendance'] .= "<td>{$record['attendance']}</td>";
                                    $_SESSION['subWise_attendance'] .= "</tr>";
                                }

                                $_SESSION['subject_name'] = $subject_name;
                                $_SESSION['sessionType'] = $sessionType;
                                $_SESSION['degree_name'] = $degree_name;
                                $_SESSION['batch_number'] = $batch_number;
                                $_SESSION['startDate'] = $startDate;
                                $_SESSION['endDate'] = $endDate;

                                header('Location:../../view/attendanceMaintainer/amDisplaySubjectAttendanceV.php');
                            }
                            else {
                                header('Location:../../view/attendanceMaintainer/amNoSubjectAttendance.php');
                            }
                        }
                        else {
                            header('Location:../../view/attendanceMaintainer/amNoSubjectAttendance.php');
                        }
                    }
                }
                else {
                    header('Location:../../view/attendanceMaintainer/amNoSubjectAttendance.php');
                }
            }
            else {
                header('Location:../../view/attendanceMaintainer/amNoSubIDSessionID_S.php');
            }
        }
    }

    elseif (isset($_POST['subjectPdf'])) {
        session_start();

        require_once("../../FPDF/fpdf.php");
        
        class getPdf extends FPDF
        {
            function header () {
                $this -> SetFont('Arial', 'B', 20);
                $this -> Cell(276, 10, "Subject-wise Attendance Details", 0, 1, 'C');
                $this -> Ln();
            }

            function footer () {
                $this -> SetY(-15);
                $this -> SetFont('Arial', '', 8);
                $this -> Cell(0, 10, 'Page Number '.$this->PageNo(), 0, 0, 'C');
            }

            function displayInfo($connect) {
                $degree_name = $_SESSION['degree_name'];
                $subject_name = $_SESSION['subject_name'];
                $sessionType = $_SESSION['sessionType'];
                $startDate = $_SESSION['startDate'];
                $endDate = $_SESSION['endDate'];
                
                $result_monthDays['monthDays'] = $_SESSION['monthDays'];
                $result_stdCount['stdCount'] = $_SESSION['stdCount'];
                $result_attendPercentage['attendPercentage'] = $_SESSION['attendPercentage'];

                $degree_id = $_SESSION['degree_id'];
                $subject_id = $_SESSION['subject_id'];
                $sessionTypeId = $_SESSION['sessionTypeId'];


                $this -> Cell(75, 10, "Degree", 1, 0);
                $this -> Cell(0, 10, $degree_name, 1, 1);

                $this -> Cell(75, 10, "Subject Name", 1, 0);
                $this -> Cell(0, 10, $subject_name, 1, 1);

                $this -> Cell(75, 10, "Session Type", 1, 0);
                $this -> Cell(0, 10, $sessionType, 1, 1);

                 $this -> Cell(75, 10, "Start date", 1, 0, 'B');
                $this -> Cell(0, 10, $startDate, 1, 1);

                $this -> Cell(75, 10, "End date", 1, 0);
                $this -> Cell(0, 10, $endDate, 1, 1);

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
    
                $attendance = amModel::fetchSubjectAttendance($degree_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);

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