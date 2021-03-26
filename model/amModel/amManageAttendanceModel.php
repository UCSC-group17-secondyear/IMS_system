<?php
	class amModel {
        public static function getsubjects($connect)
        {
			$query = "SELECT * FROM tbl_subject WHERE is_deleted = 0 ORDER BY subject_code";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function getdegrees($connect)
        {
			$query = "SELECT * FROM tbl_degree WHERE is_deleted = 0 ORDER BY degree_id";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function getsessiontypes($connect)
        {
            $query = "SELECT * FROM tbl_sessiontypes WHERE is_deleted = 0 ORDER BY sessionTypeId";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function getSemesterdetails($connect)
        {
            $query = "SELECT * FROM tbl_semester WHERE start_date <= CURRENT_DATE() AND CURRENT_DATE() <= end_date AND is_deleted = 0 LIMIT 1";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function getsubjectDetails($subject, $degree, $connect)
        {
            $query = "SELECT * FROM tbl_subject WHERE subject_id = '{$subject}' AND degree_id = '{$degree}' AND is_deleted = 0 LIMIT 1";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function checkAttendance($degree, $subject, $sessiontype, $date, $connect)
        {
            $query = "SELECT count(attendance_id) AS count FROM tbl_attendance WHERE subject_id = '{$subject}' AND degree_id = '{$degree}' AND sessionTypeId = '{$sessiontype}' AND date='{$date}'";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function getStudents($aca_year, $semester, $degree, $connect)
        {
            $query = "SELECT * FROM tbl_students WHERE degree_id = '{$degree}' AND semester = '{$semester}' AND academic_year = '{$aca_year}' AND is_std = 0";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function getStudentsnotMand($subject, $connect)
        {
            $query = "SELECT * FROM tbl_std_nonmandatorysub WHERE subject_id = '{$subject}' AND is_deleted = 0";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function setallstudents($std_id, $degree, $subject, $sessiontype, $date, $connect)
        {
            $query = "INSERT INTO tbl_attendance(std_id, degree_id, subject_id, sessionTypeId, date) VALUES ('{$std_id}', '{$degree}', '{$subject}', '{$sessiontype}', '{$date}' )";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function fetchstudents($degree, $subject, $sessiontype, $date, $connect)
        {
            $query = "SELECT a.*, s.* FROM tbl_attendance a, tbl_students s WHERE a.subject_id = '{$subject}' AND a.degree_id = '{$degree}' AND a.sessionTypeId = '{$sessiontype}' AND a.date='{$date}' AND s.std_id = a.std_id";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }
        
        public static function getpresence($index_no, $date, $degree, $subject, $sessiontype, $connect)
        {
            $query = "SELECT attendance FROM tbl_attendance WHERE std_id='{$index_no}' AND subject_id = '{$subject}' AND degree_id = '{$degree}' AND sessionTypeId = '{$sessiontype}' AND date='{$date}'";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }

        public static function addstudentattendance($sm, $degree, $subject, $sessiontype, $date, $connect)
        {
            $query = "UPDATE tbl_attendance SET attendance=1 WHERE std_id='{$sm}' ANd degree_id='{$degree}' AND subject_id='{$subject}' AND sessionTypeId='{$sessiontype}' AND date='{$date}'";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }
	}
?>