<?php 
    session_start();
    require_once('../../model/amModel/amViewAttendanceModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['fetchStudents-submit'])) {
    	$records = amModel::getStudents($connect);
        $_SESSION['student_indexes'] = '';

    	while ($record = mysqli_fetch_array($records)) {
            $_SESSION['student_indexes'] .= "<option value='".$record['index_no']."'>".$record['index_no']." </option>";
        }
        header('Location:../../view/attendanceMaintainer/amStudentWiseAttendanceV.php');
    }

    elseif (isset($_POST['filterStudent-submit'])) {
    	$index_no = $_POST['index_no'];
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
?>