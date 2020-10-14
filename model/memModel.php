<?php
	require_once('../../config/database.php');

	class msmModel {
		public static function registerMS($user_id, $department, $health_condition, $civil_status, $scheme_name, $connect)
		{
			$query = "INSERT INTO tbl_user_flag (user_id, department, healthcondition, civilstatus, schemename) VALUES('$user_id', '$department', '$health_condition', '$civil_status', '$scheme_name')";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function department($connect)
		{
			$query = "SELECT department FROM tbl_department";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function scheme($connect)
		{
			$query = "SELECT schemename FROM tbl_medicalscheme";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
        }
        
        public static function membertype($connect)
		{
			$query = "SELECT member_type FROM tbl_member_type";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}
	}
?>