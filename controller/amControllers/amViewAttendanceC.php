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
            $degree = $result['degree'];

            $get_degreeId = amModel::getDegreeId ($degree, $connect);
            $result_degreeID = mysqli_fetch_assoc($get_degreeId);
            $degree_id = $result_degreeID['degree_id'];

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
                $std_id = $result3['std_id'];
                $degree_id = $result3['degree_id'];

                $result_subject_id = amModel::getSubjectID($subject_name, $degree_id, $connect);
                $result1 = mysqli_fetch_assoc($result_subject_id);
                $subject_id = $result1['subject_id'];
                
	    		$attendance = amModel::stdAttendance ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);

                $get_totDays = amModel::getTotDays ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);
                $result_totDays = mysqli_fetch_assoc($get_totDays);
                $_SESSION['totalDays'] = $result_totDays['totalDays'];

                if ($_SESSION['totalDays'] == 0) {
                    echo "no session has been held for the given subject in the given duration";
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

    //////////////////////////////////////////////////////////////////////////////////////////////////
    
    elseif (isset($_POST['fetchDegrees-submit'])) {
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
                    echo "no attendance";
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
            echo "failed";
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////
    
    elseif (isset($_POST['fetchSubjects-submit'])) {
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
            echo "failed";
        }
    }

    elseif (isset($_POST['subjectWise-submit'])) {
        $subject_name = $_POST['subject_name'];
        $sessionType = $_POST['sessionType'];
        $degree_name = $_POST['degree_name'];
        $batch_number = $_POST['batch_number'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

        if ($batch_number<=0) {
            header('Location:../../view/attendanceMaintainer/amBatchNumIssueM.php');
        }

        else if ($startDate > $endDate) {
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
                        echo "no attendance";
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
                                    echo $record['std_id'];
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
                                echo "error1";
                            }
                        }
                        else {
                            header('Location:../../view/attendanceMaintainer/amNoSubjectAttendance.php');
                        }
                    }
                }
                else {
                    echo "error2";
                }
            }
            else {
                header('Location:../../view/attendanceMaintainer/amNoSubIDSessionID_S.php');
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////
    
    elseif (isset($_POST['getDegrees-submit'])) {
        $records1 = amModel::getDegrees($connect);

        if ($records1) {
            session_start();
            $_SESSION['degreeList'] = '';

            while ($record = mysqli_fetch_array($records1)) {
                $_SESSION['degreeList'] .= "<option value='".$record['degree_name']."'>".$record['degree_name']."</option>";
            }
            header('Location:../../view/attendanceMaintainer/amBatchWiseAttendanceV.php');
        }
        else {
            echo "no degrees in the system";
        }
    }

    elseif (isset($_POST['filterSubjects-submit'])) {
        session_start();
        $degree_name = $_POST['degree_name'];
        $academic_year = $_POST['academic_year'];
        $semester = $_POST['semester'];

        $get_degreeId = amModel::getDegreeId ($degree_name, $connect);
        $result_degreeID = mysqli_fetch_assoc($get_degreeId);
        $degree_id = $result_degreeID['degree_id'];
        $_SESSION['degree_id'] = $degree_id;
        
        $records1 = amModel::filterSubjects($academic_year, $semester, $degree_id, $connect);
        $records2 = amModel::filterSessionTypes($connect);

        if ($records1 && $records2) {
            session_start();
            $_SESSION['subject_list'] = '';
            $_SESSION['sessionTypes'] = '';

            while ($record = mysqli_fetch_array($records1)) {
                $_SESSION['subject_list'] .= "<option value='".$record['subject_name']."'>".$record['subject_name']."</option>";
            }

            while ($record = mysqli_fetch_array($records2)) {
                $_SESSION['sessionTypes'] .= "<option value='".$record['sessionType']."'>".$record['sessionType']."</option>";
            }
            header('Location:../../view/attendanceMaintainer/amSelectSub_B.php');
        }
        else {
            echo "error";
        }
    }

    elseif (isset($_POST['batchWise-submit'])) {
        session_start();
        $degree_id = $_SESSION['degree_id'];
        $batch_number = $_POST['batch_number'];
        $subject_name = $_POST['subject_name'];
        $sessionType = $_POST['sessionType'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];

        if ($startDate > $endDate) {
            header('Location:../../view/attendanceMaintainer/amStartEndDateIssueB.php');
        }
        else {
            $_SESSION['batch_number'] = $batch_number;
            $_SESSION['subject_name'] = $subject_name;
            $_SESSION['sessionType'] = $sessionType;
            $_SESSION['startDate'] = $startDate;
            $_SESSION['endDate'] = $endDate;

            $result_subject_id = amModel::getSubjectID($subject_name, $degree_id, $connect);
            $result1 = mysqli_fetch_assoc($result_subject_id);

            $result_sessionTypeId = amModel::getSessionTypeID($sessionType, $connect);
            $result2 = mysqli_fetch_assoc($result_sessionTypeId);

            if ($result1 && $result2) {
                $subject_id = $result1['subject_id'];
                $sessionTypeId = $result2['sessionTypeId'];

                $records1 = amModel::batchAttendance($degree_id, $subject_id, $sessionTypeId, $batch_number, $startDate, $endDate, $connect);
                $records2 = amModel::batchAttendancePercentage($degree_id, $subject_id, $sessionTypeId, $batch_number, $startDate, $endDate, $connect);
                $result_records2 = mysqli_fetch_assoc($records2);
                $attendPercentage = $result_records2['attendPercentage'];
                $stdCount = $result_records2['stdCount'];
                $numOfDays = $result_records2['numOfDays'];

                if ($records1 && $records2) {
                    if (mysqli_num_rows($records1) == 0) {
                        header('Location:../../view/attendanceMaintainer/amNoBatchAttendance.php');
                    }
                    else {
                        $_SESSION['batchWise_attendance'] = '';

                        while ($record = mysqli_fetch_assoc($records1)) {
                            $std_id = $record['std_id'];
                            $get_student_index = amModel::getStdIndex ($std_id, $connect);
                            $result_student_index = mysqli_fetch_assoc($get_student_index);

                            $_SESSION['batchWise_attendance'] .= "<tr>";
                            $_SESSION['batchWise_attendance'] .= "<td>{$result_student_index['index_no']}</td>";
                            $_SESSION['batchWise_attendance'] .= "<td>{$record['attendance']}</td>";
                            $_SESSION['batchWise_attendance'] .= "</tr>";
                        }
                        $_SESSION['attendPercentage'] = $attendPercentage;
                        $_SESSION['stdCount'] = $stdCount;
                        $_SESSION['numOfDays'] = $numOfDays;
                        header('Location:../../view/attendanceMaintainer/amDisplayBatchAttendanceV.php');
                    }
                }
                else {
                    header('Location:../../view/attendanceMaintainer/amNoBatchAttendance.php');
                }
            }
            else {
                header('Location:../../view/attendanceMaintainer/amNoSubIDSessionID_Batch.php');
            }
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////
    
    elseif (isset($_POST['semesterAttendance-submit'])) {
        $calander_year = $_POST ['calander_year'];
        $semester = $_POST ['semester'];

        $startDate_result = amModel::getSemesterStart($calander_year, $semester, $connect);
        $startDate1 = mysqli_fetch_assoc($startDate_result);

        $endDate_result = amModel::getSemesterEnd($calander_year, $semester, $connect);
        $endDate1 = mysqli_fetch_assoc($endDate_result);

        if ($startDate1 && $endDate1) {
            $startDate2 = $startDate1['start_date'];
            $endDate2 = $endDate1['end_date'];
            
            $records = amModel::getSemesterAttendance ($startDate2, $endDate2, $connect);
        
            if ($records) {
                if (mysqli_num_rows($records) == 0) {
                    header('Location:../../view/attendanceMaintainer/amNoAttendanceSemester.php');
                }
                else {
                    session_start();
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
                    header('Location:../../view/attendanceMaintainer/amDisplaySemesterAttendanceV.php');
                }
            }
            else {
                header('Location:../../view/attendanceMaintainer/amNoAttendanceSemester.php');
            }
        }
        else {
            header('Location:../../view/attendanceMaintainer/amNoStartEndDateS.php');
        }
    }
?>