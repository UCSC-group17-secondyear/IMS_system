<?php
	class dhModel {
		public static function getDeptUsingId($user_id, $connect)
		{
			$query = "SELECT department_id FROM tbl_department d, tbl_post p WHERE p.pst_id = d.post AND p.userId={$user_id}";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}
        
        public static function getDepartmentCertifiedForms($department, $connect)
		{
			$query = "SELECT u.*, mm.*, d.department FROM users u, tbl_medical_membership mm, tbl_department d WHERE u.userId = mm.user_id AND d.department_id = mm.department_id AND mm.department_id = '{$department}' AND (mm.acceptance_status=1 OR mm.acceptance_status=0) ORDER BY u.userId";

			$result = mysqli_query($connect, $query);

			return $result;
        }
	}
?>