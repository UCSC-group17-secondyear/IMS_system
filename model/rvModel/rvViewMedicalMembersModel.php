<?php
	class rvModel {
		public static function fetchmembers($connect)
		{
			$query = "SELECT u.empid, u.initials, u.sname, u.userId, uf.department, uf.healthcondition, uf.civilstatus, uf.acceptance_status, uf.membership_status, uf.schemename, uf.member_type FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND uf.membership_status = 1 AND uf.is_deleted = 0 ORDER BY uf.user_id";

			$result_set = mysqli_query($connect, $query);
					
			return $result_set;
		}
	}
?>