<?php
	class dhModel {
		public static function getDeptUsingId($user_id, $connect)
		{
			$query = "SELECT department_id FROM tbl_medical_membership WHERE user_id={$user_id}";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function getDepartmentForms($department, $connect)
		{
			$query = "SELECT u.*, mm.* FROM users u, tbl_medical_membership mm WHERE u.userId = mm.user_id AND mm.department_id = '{$department}' AND mm.acceptance_status=2 ORDER BY u.userId";

			$result = mysqli_query($connect, $query);

			return $result;
        }

        public static function getDetails($user_id, $connect)
		{
			$query = "SELECT u.empid, u.initials, u.sname, u.email, desi.designation_name, d.department, mm.healthcondition, mm.married, s.schemeName, m.member_type, mm.acceptance_status FROM tbl_medical_membership mm, users u, tbl_department d, tbl_medicalscheme s, tbl_member_type m, tbl_designation desi WHERE u.userId = mm.user_id AND d.department_id = mm.department_id AND s.scheme_id = mm.scheme_id AND m.member_id = mm.member_id AND desi.designation_id = u.designation_id AND mm.user_id='{$user_id}' LIMIT 1";

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
			$query = "UPDATE tbl_medical_membership SET acceptance_status = 1 WHERE user_id='{$user_id}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function requestdecline($user_id, $connect)
		{
			$query = "UPDATE tbl_medical_membership SET acceptance_status = 0 WHERE user_id='{$user_id}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}
	}
?>