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
	            echo "student has no subjects yet";
	            // header('Location:../../view/attendanceMaintainer/amNoStudentsAvailableV.php');
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

	    	if ($result1) {
	    		$subject_id = $result1['subject_id'];
	    	}
	    	else {
	    		echo "no subject id";
	    	}
	    	

	    	$result_sessionTypeId = amModel::getSessionTypeID($sessionType, $connect);
	    	$result2 = mysqli_fetch_assoc($result_sessionTypeId);

	    	if ($result2) {
	    		$sessionTypeId = $result2['sessionTypeId'];
	    	}
	    	else {
	    		echo "No session type id";
	    	}

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
	        	echo "no records fetched";
	        }
    	}
    }
?>