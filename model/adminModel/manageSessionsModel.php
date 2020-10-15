<?php
	class adminModel {
		public static function addSessionType($sessionType, $connect) 
		{
			// $checkquery = "SELECT * FROM degrees WHERE degree_abbriviation ='{$degree_abbriviation}'" ;

			// if ($checkquery) {
			// 	echo "Degree already exists in the database.";
			// }
			// else {
				$query = "INSERT INTO sessionTypes (sessionType) VALUES('$sessionType')";
			
				if($connect->query($query))
					return true;
			// }
		}
	}
?>