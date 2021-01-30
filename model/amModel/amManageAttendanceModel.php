<?php
	class amModel {
        public static function getsubjects($connect)
        {
			$query = "SELECT subject_code, subject_name FROM tbl_subject WHERE is_deleted = 0 ORDER BY subject_code";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }
        
        public static function fetchstudents($date, $subject, $connect)
        {
            $query = "SELECT s.index_no, s.initials, s.last_name FROM tbl_students s INNER JOIN tbl_student_has_attendance sa ON s.index_no = sa.student_index INNER JOIN tbl_subject_has_session ss ON sa.subject_session_id = ss.subject_session_id WHERE subject_code='SCS2209' AND date='2021-01-26'";

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