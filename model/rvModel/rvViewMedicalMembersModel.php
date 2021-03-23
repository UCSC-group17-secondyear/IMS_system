<?php
	class rvModel {
		public static function fetchmembers($connect)
		{
			$query = "SELECT u.*, mm.*, mt.*, d.*, ms.* FROM users u, tbl_medical_membership mm, tbl_member_type mt, tbl_medicalscheme ms, tbl_department d WHERE mt.member_id = mm.member_id AND ms.scheme_id = mm.scheme_id AND d.department_id = mm.department_id AND u.userId = mm.user_id AND mm.membership_status = 1 AND mm.is_deleted = 0 ORDER BY mm.user_id";

			$result_set = mysqli_query($connect, $query);
					
			return $result_set;
		}
	}
?>