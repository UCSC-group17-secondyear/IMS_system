<?php
	class adminModel {
		public static function addDegree($degree_name, $degree_abbriviation, $connect) 
		{
			$checkquery = "SELECT * FROM tbl_degree WHERE degree_abbriviation ='{$degree_abbriviation}'" ;

			// if ($checkquery) {
			// 	echo "Degree already exists in the database.";
			// }
			// else {
				$query = "INSERT INTO tbl_degree (degree_name, degree_abbriviation) 
					VALUES('$degree_name', '$degree_abbriviation')";
			
				if($connect->query($query))
					return true;
			// }
		}

		public static function viewDegrees($connect)
		{
			$query = "SELECT * FROM tbl_degree WHERE is_deleted=0 ORDER BY degree_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>