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

        public static function getTotDays($index_no, $subject_id, $sessionTypeId, $startDate, $endDate, $connect) {
            $query = "SELECT COUNT(attendance) AS totalDays FROM tbl_attendance WHERE student_index = '{$index_no}' AND subject_id = '{$subject_id}' AND sessionTypeId = '{$sessionTypeId}' AND date BETWEEN  '{$startDate}' AND '{$endDate}' ";
            $result = mysqli_query($connect, $query);
            return $result;
        }

        public static function getAttendDays($index_no, $subject_id, $sessionTypeId, $startDate, $endDate, $connect) {
            $query = "SELECT COUNT(attendance) AS attendDays FROM tbl_attendance 
            WHERE student_index = '{$index_no}' AND subject_id = '{$subject_id}' AND sessionTypeId = '{$sessionTypeId}' AND attendance = 1
            AND date BETWEEN  '{$startDate}' AND '{$endDate}' ";
            $result = mysqli_query($connect, $query);
            return $result;
        }

        public static function getAttendPercentage($index_no, $subject_id, $sessionTypeId, $startDate, $endDate, $connect) {
            $query = "SELECT round(((AVG(attendance))*100),2) AS attendPercentage FROM tbl_attendance 
            WHERE student_index = '{$index_no}' AND subject_id = '{$subject_id}' AND sessionTypeId = '{$sessionTypeId}'
            AND date BETWEEN  '{$startDate}' AND '{$endDate}' ";
            $result = mysqli_query($connect, $query);
            return $result;
        }

        /////////////////////////////////////////////////////////////////////////////////////////

        public static function getDegrees($connect) {
			$query = "SELECT degree_name FROM tbl_degree WHERE is_deleted = 0 ORDER BY degree_id ASC";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function monthAttendance($calander_year, $month, $subject_id, $sessionTypeId, $connect) {
			$query = "SELECT student_index, COUNT(attendance) AS attendance 
            FROM tbl_attendance 
            WHERE subject_id = '{$subject_id}' AND sessionTypeId = '{$sessionTypeId}' 
            AND attendance = 1 AND year(tbl_attendance.date) = '{$calander_year}' 
            AND month(tbl_attendance.date) = '{$month}'
            GROUP BY student_index
            ORDER BY student_index ";
        	
            $result = mysqli_query($connect, $query);
        	return $result;
		}

        public static function fetchSubjects($connect)
        {
            $query = "SELECT subject_name FROM tbl_subject WHERE is_deleted = 0 ORDER BY subject_code ASC ";

            $result = mysqli_query($connect, $query);
            
            return $result;
        }

        public static function fetchSubjectAttendance($subject_id, $sessionTypeId, $batch_number, $startDate, $endDate, $connect) {
            $query = "SELECT ta.student_index, COUNT(ta.attendance) AS attendance
            FROM tbl_attendance ta
            INNER JOIN tbl_students ts
            ON ta.student_index = ts.index_no
            WHERE ta.subject_id = '{$subject_id}' AND ta.sessionTypeId = '{$sessionTypeId}' 
            AND ts.batch_number = '{$batch_number}' AND ts.is_std = 0 
            AND ta.attendance = 1 AND ta.date BETWEEN '{$startDate}' AND '{$endDate}'
            GROUP BY ta.student_index
            ORDER BY ta.attendance_id ASC ";

            $result = mysqli_query($connect, $query);
            
            return $result;
        }

        public static function batchAttendance($subject_id, $sessionTypeId, $batch_number, $startDate, $endDate, $connect) {
            $query = "SELECT ta.student_index, COUNT(ta.attendance) AS attendance
            FROM tbl_attendance ta
            INNER JOIN tbl_students ts
            ON ta.student_index = ts.index_no
            WHERE ta.subject_id = '{$subject_id}' AND ta.sessionTypeId = '{$sessionTypeId}' 
            AND ts.batch_number = '{$batch_number}' AND ts.is_std = 0 
            AND ta.attendance = 1 AND ta.date BETWEEN '{$startDate}' AND '{$endDate}'
            GROUP BY ta.student_index
            ORDER BY ta.attendance_id ASC ";

            $result = mysqli_query($connect, $query);
            
            return $result;
        }

        public static function getSemesterStart($calander_year, $semester, $connect)  {
            $query = "SELECT start_date FROM tbl_semester WHERE academic_year = '{$calander_year}' AND semesterDigit = '{$semester}' ";
            $result = mysqli_query($connect, $query);
            return $result;
        }

        public static function getSemesterEnd($calander_year, $semester, $connect)  {
            $query = "SELECT end_date FROM tbl_semester WHERE academic_year = '{$calander_year}' AND semesterDigit = '{$semester}' ";
            $result = mysqli_query($connect, $query);
            return $result;
        }

        public static function getSemesterAttendance($startDate, $endDate, $connect) {
            $query = "SELECT student_index, subject_id, sessionTypeId, COUNT(attendance) AS attendance 
            FROM tbl_attendance WHERE attendance = 1 AND date BETWEEN '{$startDate}' AND '{$endDate}'
            GROUP BY student_index , subject_id , sessionTypeId ORDER BY attendance_id ASC" ;

            $result = mysqli_query($connect, $query);
            return $result;
        }
    }
?>