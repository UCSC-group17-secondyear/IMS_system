<?php
    class dhModel{
        public static function getDeptUsingId($user_id, $connect)
		{
			$query = "SELECT department FROM tbl_user_flag WHERE user_id={$user_id}";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function getDepartmentForms($department, $connect)
		{
			$query = "SELECT u.*, uf.department FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND uf.department = '{$department}' AND uf.acceptance_status=3 ORDER BY u.userId";

			$result = mysqli_query($connect, $query);

			return $result;
        }

        public static function getDepartmentCertifiedForms($department, $connect)
		{
			$query = "SELECT u.*, uf.department, uf.acceptance_status FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND uf.department = '{$department}' AND NOT uf.acceptance_status=3 ORDER BY u.userId";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function getmail($user_id, $connect)
		{
			$query = "SELECT email FROM users WHERE userId={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function requestaccept($user_id, $connect)
		{
			$query = "UPDATE tbl_user_flag SET acceptance_status = 1 WHERE user_id='{$user_id}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function requestdecline($user_id, $connect)
		{
			$query = "UPDATE tbl_user_flag SET acceptance_status = 0 WHERE user_id='{$user_id}'";
			// $query = "UPDATE tbl_user_flag SET healthcondition = '', civilstatus = '', member_type = '', schemename = '', department = '' WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function funct($user_id, $connect)
		{
			
			$query = "SELECT u.*, uf.healthcondition, uf.civilstatus, uf.acceptance_status, uf.member_type, uf.schemename, uf.department FROM tbl_user_flag uf, users u WHERE u.userId = uf.user_id AND uf.user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }
?>