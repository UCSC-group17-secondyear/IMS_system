<?php
	class basicModel {
		public static function view($user_id, $connect)
		{
			$query = "SELECT * FROM users WHERE userId='{$user_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function departments($connect)
        {
            $query = "SELECT department FROM tbl_department ORDER BY department_id";

			$result = mysqli_query($connect, $query);

			return $result;
        }

        public static function membertype($connect)
		{
			$query = "SELECT member_type FROM tbl_member_type";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function civilstatus($connect)
		{
			$query = "SELECT csname FROM tbl_civilstatus";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		// public static function scheme($connect)
		// {
		// 	$query = "SELECT schemeName FROM tbl_medicalscheme WHERE is_deleted=0";
			
		// 	$result_set = mysqli_query($connect, $query);
			
		// 	return $result_set;
		// }

		public static function isscheme($user_id, $connect)
		{
			$query = "SELECT schemename FROM tbl_user_flag WHERE user_id='{$user_id}'";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
        }
        
        public static function getmembershipstatus($user_id, $connect)
        {
            $query = "SELECT membership_status FROM tbl_user_flag WHERE user_id='{$user_id}'";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}
		
		public static function getscheme($scheme, $connect)
		{
			$query = "SELECT permanentStaff, contractStaff, temporaryStaff FROM tbl_medicalscheme WHERE schemeName = '{$scheme}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getservicemonths($user_id,$connect)
		{
			$query = "SELECT DATEDIFF(CURRENT_DATE(), appointment)FROM users WHERE userId='{$user_id}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}
	}
?>