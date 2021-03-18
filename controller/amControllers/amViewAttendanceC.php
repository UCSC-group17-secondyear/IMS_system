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

            $records1 = amModel::filterSubjects($academic_year, $semester, $degree, $connect);
            $records2 = amModel::filterSessionTypes($connect);

            if ($records1 && $records2) {
            	session_start();
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
    	$index_no = $_POST['index_no'];
    	$subject_name = $_POST['subject_name'];
    	$sessionType = $_POST['sessionType'];
    	$startDate = $_POST['startDate'];
    	$endDate = $_POST['endDate'];

    	if ($startDate > $endDate) {
    		header('Location:../../view/attendanceMaintainer/amStartEndDateIssue.php');
    	}
    	else {
    		session_start();
	    	$_SESSION['index_no'] = $index_no;
	    	$_SESSION['subject_name'] = $subject_name;
	    	$_SESSION['sessionType'] = $sessionType;
	    	$_SESSION['startDate'] = $startDate;
	    	$_SESSION['endDate'] = $endDate;

	    	$result_subject_id = amModel::getSubjectID($subject_name, $connect);
	    	$result1 = mysqli_fetch_assoc($result_subject_id);

	    	$result_sessionTypeId = amModel::getSessionTypeID($sessionType, $connect);
	    	$result2 = mysqli_fetch_assoc($result_sessionTypeId);

	    	if ($result1 && $result2) {
	    		$subject_id = $result1['subject_id'];
	    		$sessionTypeId = $result2['sessionTypeId'];

	    		$attendance = amModel::stdAttendance($index_no, $subject_id, $sessionTypeId, $startDate, $endDate, $connect);

		    	if ($attendance) {
		    		$_SESSION['stdAttendance_list'] = '';

		            while ($record = mysqli_fetch_assoc($attendance)) {
		            	$_SESSION['stdAttendance_list'] .= "<tr>";
		            	$_SESSION['stdAttendance_list'] .= "<td>{$record['date']}</td>";
		            	$_SESSION['stdAttendance_list'] .= "<td>{$record['attendance']}</td>";
		            	$_SESSION['stdAttendance_list'] .= "</tr>";
		            	print($record['date']);
		            }

		            header('Location:../../view/attendanceMaintainer/amDisplayStdwiseAttendanceV.php');
		        }
		        else {
                    header('Location:../../view/attendanceMaintainer/amNoAttendance.php');
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
    	echo "$calander_year";

    	/*if (!($calander_year <= date("Y"))) {
    		echo "future year";
    	}
    	elseif (!($calander_year = date("Y") && $month <= date("m"))) {
    		echo "future date or month is out of bound";
    	}
    	elseif (!(1 <= $academic_year && $academic_year <= 4)) {
    		echo "academic_year out of bound";
    	}
    	elseif (!(1 <= $semester && $semester <= 2)) {
    		echo "semester out of bound";
    	}
    	else {*/
    		session_start();

			$attendance = amModel::filterSubjects($academic_year, $semester, $degree_name, $connect);
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
    	/*}*/

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

    	$result_subject_id = amModel::getSubjectID($subject_name, $connect);
    	$result1 = mysqli_fetch_assoc($result_subject_id);

    	$result_sessionTypeId = amModel::getSessionTypeID($sessionType, $connect);
    	$result2 = mysqli_fetch_assoc($result_sessionTypeId);

    	if ($result1 && $result2) {
    		$subject_id = $result1['subject_id'];
    		$sessionTypeId = $result2['sessionTypeId'];
    		
    		$attendance = amModel::monthAttendance($calander_year, $month, $subject_id, $sessionTypeId, $connect);

    		if ($attendance) {
	    		$_SESSION['monthAttendance_list'] = '';

	            while ($record = mysqli_fetch_assoc($attendance)) {
	            	$_SESSION['monthAttendance_list'] .= "<tr>";
	            	$_SESSION['monthAttendance_list'] .= "<td>{$record['student_index']}</td>";
	            	$_SESSION['monthAttendance_list'] .= "<td>{$record['attendance']}</td>";
	            	$_SESSION['monthAttendance_list'] .= "</tr>";
	            }

	            header('Location:../../view/attendanceMaintainer/amDisplayMonthlyAttendanceV.php');
	        }
	        else {
	        	header('Location:../../view/attendanceMaintainer/amNoMonthlyAttendance.php');
	        }
    	}
    	else {
    		header('Location:../../view/attendanceMaintainer/amNoSubIDSessionID.php');
    	}
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////
    
    elseif (isset($_POST['fetchSubjects-submit'])) {
        session_start();
        $records1 = amModel::fetchSubjects($connect);
        $records2 = amModel::filterSessionTypes($connect);

        if ($records1 && $records2) {
            session_start();
            $_SESSION['subjectsList'] = '';
            $_SESSION['sessionTypes'] = '';

            while ($record = mysqli_fetch_array($records1)) {
                $_SESSION['subjectsList'] .= "<option value='".$record['subject_name']."'>".$record['subject_name']."</option>";
            }

            while ($record = mysqli_fetch_array($records2)) {
                $_SESSION['sessionTypes'] .= "<option value='".$record['sessionType']."'>".$record['sessionType']."</option>";
            }
            header('Location:../../view/attendanceMaintainer/amSubjectWiseAttendanceV.php');
        }
    }

    elseif (isset($_POST['subjectWise-submit'])) {
        $subject_name = $_POST['subject_name'];
        $sessionType = $_POST['sessionType'];
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
            $result_subject_id = amModel::getSubjectID($subject_name, $connect);
            $result1 = mysqli_fetch_assoc($result_subject_id);

            $result_sessionTypeId = amModel::getSessionTypeID($sessionType, $connect);
            $result2 = mysqli_fetch_assoc($result_sessionTypeId);

            if ($result1 && $result2) {
                $subject_id = $result1['subject_id'];
                $sessionTypeId = $result2['sessionTypeId'];

                $records = amModel::fetchSubjectAttendance($subject_id, $sessionTypeId, $batch_number, $startDate, $endDate, $connect);

                if ($records) {
                    session_start();
                    $_SESSION['subWise_attendance'] = '';

                    while ($record = mysqli_fetch_assoc($records)) {
                        $_SESSION['subWise_attendance'] .= "<tr>";
                        $_SESSION['subWise_attendance'] .= "<td>{$record['student_index']}</td>";
                        $_SESSION['subWise_attendance'] .= "<td>{$record['attendance']}</td>";
                        $_SESSION['subWise_attendance'] .= "</tr>";
                    }

                    $_SESSION['subject_name'] = $subject_name;
                    $_SESSION['sessionType'] = $sessionType;
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
                header('Location:../../view/attendanceMaintainer/amNoSubIDSessionID_S.php');
            }
        }
    }
?>