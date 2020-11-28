<?php
	class dhModel {
		public static function getDeptUsingId($user_id, $connect)
		{
			$query = "SELECT department FROM tbl_user_flag WHERE user_id={$user_id}";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
        }
        
        public static function getDepartmentCertifiedForms($department, $connect)
		{
			$query = "SELECT u.*, uf.department, uf.acceptance_status FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND uf.department = '{$department}' AND NOT uf.acceptance_status=3 ORDER BY u.userId";

			$result = mysqli_query($connect, $query);

			return $result;
        }
	}
?>