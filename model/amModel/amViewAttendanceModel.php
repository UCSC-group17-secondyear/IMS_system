<?php
	class amModel {
        public static function getStudents($connect)
        {
			$query = "SELECT index_no FROM tbl_students WHERE is_std = 0 ORDER BY index_no DESC";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function filterStudent($index_no, $connect)
        {
			$query = "SELECT academic_year, semester, degree FROM tbl_students WHERE index_no = '{$index_no}' AND is_std = 0 ";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function filterSubjects($academic_year, $semester, $degree, $connect)
        {
			$query = "SELECT subject_name FROM tbl_subject WHERE academic_year = '{$academic_year}' AND semester = '{$semester}' AND degree = '{$degree}' AND is_deleted = 0 ORDER BY subject_code ASC ";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function filterSessionTypes($connect)
        {
			$query = "SELECT sessionType FROM sessiontypes WHERE is_deleted = 0 ORDER BY sessionTypeId ASC ";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function getSubjectID($subject_name, $connect)
        {
        	$query = "SELECT subject_id FROM tbl_subject WHERE subject_name = '{$subject_name}' AND is_deleted = 0 ";
        	$result = mysqli_query($connect, $query);
        	return $result;
        }

        public static function getSessionTypeID($sessionType, $connect)
        {
        	$query = "SELECT sessionTypeId FROM sessiontypes WHERE sessionType = '{$sessionType}' AND is_deleted = 0 ";
        	$result = mysqli_query($connect, $query);
        	return $result;
        }

        public static function stdAttendance($index_no, $subject_id, $sessionTypeId, $startDate, $endDate, $connect) {
        	$query = "SELECT date, attendance FROM tbl_attendance WHERE student_index = '{$index_no}' AND subject_id = '{$subject_id}' AND sessionTypeId = '{$sessionTypeId}' AND date BETWEEN  '{$startDate}' AND '{$endDate}' ";
        	$result = mysqli_query($connect, $query);
        	return $result;
        }
    }
?>