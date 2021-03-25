<?php 
	class rvModel {
		
		public static function getStudents($connect)
		{
			$query = "SELECT * FROM tbl_students WHERE is_std = 0 ORDER BY index_no DESC";

            $result = mysqli_query($connect, $query);
            
			return $result;
		}

		public static function filterStudent ($index_no, $connect)
        {
			$query = "SELECT * FROM tbl_students WHERE index_no = '{$index_no}' AND is_std = 0 ";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function filterSubjects($academic_year, $semester, $degree_id, $connect)
        {
			$query = "SELECT * FROM tbl_subject WHERE academic_year = '{$academic_year}' AND semester = '{$semester}' AND degree_id = '{$degree_id}' AND is_deleted = 0 ORDER BY subject_code ASC ";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function filterSessionTypes($connect)
        {
			$query = "SELECT * FROM sessiontypes WHERE is_deleted = 0 ORDER BY sessionTypeId ASC ";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function getSubjectID($subject_name, $connect)
        {
        	$query = "SELECT * FROM tbl_subject WHERE subject_name = '{$subject_name}' AND is_deleted = 0 ";
        	$result = mysqli_query($connect, $query);
        	return $result;
        }

        public static function getSessionTypeID($sessionType, $connect)
        {
        	$query = "SELECT * FROM sessiontypes WHERE sessionType = '{$sessionType}' AND is_deleted = 0 ";
        	$result = mysqli_query($connect, $query);
        	return $result;
        }

        public static function stdAttendance ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect) {
        	$query = "SELECT date, attendance FROM tbl_attendance WHERE std_id = '{$std_id}' AND subject_id = '{$subject_id}' AND sessionTypeId = '{$sessionTypeId}' AND date BETWEEN  '{$startDate}' AND '{$endDate}' ";
        	$result = mysqli_query($connect, $query);
        	return $result;
        }

        public static function getTotDays ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect) {
            $query = "SELECT COUNT(attendance) AS totalDays FROM tbl_attendance WHERE std_id = '{$std_id}' AND subject_id = '{$subject_id}' AND sessionTypeId = '{$sessionTypeId}' AND date BETWEEN  '{$startDate}' AND '{$endDate}' ";
            $result = mysqli_query($connect, $query);
            return $result;
        }

        public static function getAttendDays ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect) {
            $query = "SELECT COUNT(attendance) AS attendDays FROM tbl_attendance 
            WHERE std_id = '{$std_id}' AND subject_id = '{$subject_id}' AND sessionTypeId = '{$sessionTypeId}' AND attendance = 1
            AND date BETWEEN  '{$startDate}' AND '{$endDate}' ";
            $result = mysqli_query($connect, $query);
            return $result;
        }

        public static function getAttendPercentage ($std_id, $subject_id, $sessionTypeId, $startDate, $endDate, $connect) {
            $query = "SELECT round(((AVG(attendance))*100),2) AS attendPercentage FROM tbl_attendance 
            WHERE std_id = '{$std_id}' AND subject_id = '{$subject_id}' AND sessionTypeId = '{$sessionTypeId}'
            AND date BETWEEN  '{$startDate}' AND '{$endDate}' ";
            $result = mysqli_query($connect, $query);
            return $result;
        }
	}
?>