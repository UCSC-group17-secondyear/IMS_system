<?php
	class amModel {
        public static function getsubjects($connect)
        {
			$query = "SELECT subject_code FROM tbl_subject WHERE is_deleted = 0 ORDER BY subject_code";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }
        
        public static function fetchstudents($date, $subject, $connect)
        {
            // $query = "SELECT (SELECT subject_session_id FROM tbl_student_has_session WHERE subject_code='{$subject}' AND date='{$date}');

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function fetchAttendance($subject_code, $connect)
        {
            // $query = "";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }
	}
?>