<?php
	class adminModel {
		public static function checkMonthlySession ($subject_code, $calendarYear, $month, $sessionType, $connect) {
			$query = "SELECT * FROM sessions_per_month 
			WHERE subject = '{$subject_code}' AND calendarYear = '{$calendarYear}' 
			AND month = '{$month}' AND sessionType = '{$sessionType}' AND is_deleted = 0 ";

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

		public static function addMonthlySession($subject, $calendarYear, $month, $sessionType, $numOfSessions, $connect) 
		{
			// $checkquery = "SELECT * FROM degrees WHERE degree_abbriviation ='{$degree_abbriviation}'" ;

			// if ($checkquery) {
			// 	echo "Degree already exists in the database.";
			// }
			// else {
				$query = "INSERT INTO sessions_per_month (subject, calendarYear, month, sessionType, numOfSessions) 
				VALUES('$subject', '$calendarYear', '$month', '$sessionType', '$numOfSessions')";
			
				if($connect->query($query))
					return true;
			// }
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

		public static function updateMonthlySession($sessionMid, $subject, $calendarYear, $month, $sessionType, $numOfSessions, $connect) {

			$query = "UPDATE sessions_per_month 
			SET subject='{$subject}', calendarYear='{$calendarYear}', month='{$month}', sessionType='{$sessionType}', numOfSessions='{$numOfSessions}'
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