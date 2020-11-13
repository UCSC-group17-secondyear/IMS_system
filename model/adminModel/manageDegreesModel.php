<?php
	class adminModel {
		public static function checkDegree($degree_name, $degree_abbriviation, $connect) {
			$query = "SELECT * FROM tbl_degree WHERE degree_abbriviation ='{$degree_abbriviation}' AND degree_name ='{$degree_name}' LIMIT 1 " ;
			$result_set = mysqli_query($connect, $query);
            return $result_set;
		}

		public static function addDegree($degree_name, $degree_abbriviation, $connect) 
		{
			$query = "INSERT INTO tbl_degree (degree_name, degree_abbriviation) 
				VALUES('$degree_name', '$degree_abbriviation')";
		
			if($connect->query($query))
				return true;
		}

		public static function viewDegrees($connect)
		{
			$query = "SELECT * FROM tbl_degree WHERE is_deleted=0 ORDER BY degree_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>