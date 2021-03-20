<?php
	class adminModel {
		public static function checkMonthlySession ($degree_id, $subject_id, $sessionTypeId, $calendarYear, $month, $connect) {
			$query = "SELECT sessionMid, numOfSessions FROM sessions_per_month 
			WHERE degree_id = '{$degree_id}' AND subject_id = '{$subject_id}' 
			AND calendarYear = '{$calendarYear}' AND month = '{$month}' 
			AND sessionType = '{$sessionType}' AND is_deleted = 0 ";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getSubjects($connect) {
			$query = "SELECT subject_name FROM tbl_subject WHERE is_deleted=0  ORDER BY subject_code";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function get_subject_code ($subject, $degree, $connect) {
			$query = "SELECT subject_code FROM tbl_subject 
			WHERE subject_name = '{$subject}' AND degree = '{$degree}' AND is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function get_degree_id ($degree_name, $connect) {
			$query = "SELECT degree_id FROM tbl_degree 
			WHERE degree_name = '{$degree_name}' AND is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function get_subject_id ($subject_name, $connect) {
			$query = "SELECT subject_id FROM tbl_subject 
			WHERE subject_name = '{$subject_name}' AND is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function get_sessionTypeId ($sessionType, $connect) {
			$query = "SELECT sessionTypeId FROM sessiontypes 
			WHERE sessionType = '{$sessionType}' AND is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function addMonthlySession ($degree_id, $subject_id, $sessionTypeId, $calendarYear, $month, $numOfSessions, $connect) 
		{
			$query = "INSERT INTO sessions_per_month (degree_id, subject_id, sessionTypeId, calendarYear, month, numOfSessions) 
			VALUES('$degree_id', '$subject_id', '$sessionTypeId', '$calendarYear', '$month', '$numOfSessions')";
		
			if($connect->query($query))
				return true;
		}

		public static function sessionType($connect) {
			$query = "SELECT sessionType FROM sessionTypes WHERE is_deleted=0 ORDER BY sessionTypeId";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getMonthlySession($subject, $calendarYear, $month, $sessionType, $connect) {
			$query = "SELECT * FROM sessions_per_month WHERE is_deleted=0 ORDER BY sessionMid";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function updateMonthlySession ($sessionMid, $calendarYear, $month, $numOfSessions, $connect) {

			$query = "UPDATE sessions_per_month 
			SET calendarYear = '{$calendarYear}', month = '{$month}', numOfSessions='{$numOfSessions}'
			WHERE sessionMid='{$sessionMid}' ";

			if($connect->query($query))
				return true;
		}

		public static function removeMonthlySession($sessionMid, $connect) {
			$query = "UPDATE sessions_per_month SET is_deleted=1 WHERE sessionMid='{$sessionMid}' ";

			if($connect->query($query))
				return true;
		}

		public static function viewSessionTypes($connect) {
			$query = "SELECT sessionType FROM sessionTypes WHERE is_deleted=0  ORDER BY sessionTypeId";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getDegrees($connect) {
			$query = "SELECT degree_name FROM tbl_degree WHERE is_deleted=0  ORDER BY degree_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>