<?php
	class adminModel {
		public static function checkDegree($degree_name, $degree_abbriviation, $connect) {
			$query = "SELECT * FROM tbl_degree WHERE degree_abbriviation ='{$degree_abbriviation}' AND degree_name ='{$degree_name}' AND is_deleted=0 LIMIT 1 " ;

			$result_set = mysqli_query($connect, $query);

            return $result_set;
		}

		public static function addDegree($degree_name, $degree_abbriviation, $connect) 
		{
			$query = "INSERT INTO tbl_degree (degree_name, degree_abbriviation) 
				VALUES ('$degree_name', '$degree_abbriviation')";
		
			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function viewDegrees($connect)
		{
			$query = "SELECT * FROM tbl_degree WHERE is_deleted=0 ORDER BY degree_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getDegreeList($connect) {
			$query = "SELECT degree_name FROM tbl_degree WHERE is_deleted=0 ORDER BY degree_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function removeDegree($degree_name, $connect) {
			$query = "UPDATE tbl_degree SET is_deleted = 1 WHERE degree_name = '{$degree_name}' AND is_deleted = 0 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDegree($degree_name, $connect) {
			$query = "SELECT * FROM tbl_degree WHERE degree_name = '{$degree_name}' AND is_deleted=0 ORDER BY degree_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function updateDegree($degree_name, $degree_abbriviation, $connect) {
			$query = "UPDATE tbl_degree SET degree_abbriviation = '{$degree_abbriviation}' WHERE degree_name = '{$degree_name}' AND is_deleted = 0 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
	}
?>