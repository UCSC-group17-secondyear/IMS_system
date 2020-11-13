<?php
	class adminModel {
		public static function checkSessionType($sessionType, $connect){
			$query = "SELECT * FROM sessionTypes WHERE sessionType ='{$sessionType}' AND is_deleted = 0 LIMIT 1 " ;
			
			$result_set = mysqli_query($connect, $query);
            
            return $result_set;
		}

		public static function addSessionType($sessionType, $connect) 
		{
			$query = "INSERT INTO sessionTypes (sessionType) VALUES('$sessionType')";
		
			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function viewSessionTypes($connect) {
			$query = "SELECT sessionType
			FROM sessionTypes 
			WHERE is_deleted=0 
			ORDER BY sessionTypeId";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>