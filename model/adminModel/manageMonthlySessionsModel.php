<?php
	class adminModel {
		public static function addMonthlySession($year, $month, $subject, $sessionType, $numOfSessions,$connect) 
		{
			// $checkquery = "SELECT * FROM degrees WHERE degree_abbriviation ='{$degree_abbriviation}'" ;

			// if ($checkquery) {
			// 	echo "Degree already exists in the database.";
			// }
			// else {
				$query = "INSERT INTO monthlysessions (year, month, subject, sessionType, numOfSessions) 
				VALUES('$year', '$month', '$subject', '$sessionType', '$numOfSessions')";
			
				if($connect->query($query))
					return true;
			// }
		}

		public static function sessionType($connect) {
			$query = "SELECT sessionType
			FROM sessionTypes 
			WHERE is_deleted=0 
			ORDER BY sessionTypeId";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>