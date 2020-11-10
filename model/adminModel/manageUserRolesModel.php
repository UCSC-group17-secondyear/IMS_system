<?php
	class adminModel {
		public static function checkEmpid($empid, $connect) 
		{
			$query = "SELECT * FROM users WHERE empid ='{$empid}'" ;
			$result_set = mysqli_query($connect, $query);
            return $result_set;
		}

		public static function addUserrole($userrole, $description, $connect) 
		{
			// $checkquery = "SELECT * FROM userroles WHERE role_name ='{$userrole}'" ;

			// if (($connect->query($checkquery)) {
			// 	echo "User role already exists.";
			// }
			// else {
				$query = "INSERT INTO userroles (role_name, description) VALUES('$userrole', '$description')";
			
				if($connect->query($query))
					return true;
			// }
		}

		public static function viewUserRoles($connect)
		{
			$query = "SELECT * FROM userroles WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function removeUserrole($userrole, $connect)
		{
			$query = "UPDATE userroles SET is_deleted = 1 WHERE role_name='{$userrole}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function setUserRole($empid, $userRole, $connect)
		{
			$query = "UPDATE users SET userRole = '{$userRole}' WHERE empid='{$empid}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		} 

		public static function updateUserRole($empid, $userRole, $connect)
		{
			$query = "UPDATE users SET userRole = '{$userRole}' WHERE empid='{$empid}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
		
		public static function getUId($empid, $connect)
		{
			$query = "SELECT userId FROM users WHERE empid='{$empid}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function setRoleByAdminOne($user_id, $a_flag, $connect)
		{
			$query = "UPDATE tbl_user_flag SET a_flag={$a_flag} WHERE user_id={$user_id} LIMIT 1";
		
			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function setRoleByAdminTwo($user_id, $asm_flag, $connect)
		{
			$query = "UPDATE tbl_user_flag SET asm_flag={$asm_flag} WHERE user_id={$user_id} LIMIT 1";
		
			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function setRoleByAdminThree($user_id, $am_flag, $connect)
		{
			$query = "UPDATE tbl_user_flag SET am_flag={$am_flag} WHERE user_id={$user_id} LIMIT 1";
		
			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function setRoleByAdminFour($user_id, $ham_flag, $connect)
		{
			$query = "UPDATE tbl_user_flag SET ham_flag={$ham_flag} WHERE user_id={$user_id} LIMIT 1";
		
			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function setRoleByAdminFive($user_id, $mm_flag, $connect)
		{
			$query = "UPDATE tbl_user_flag SET mm_flag={$mm_flag} WHERE user_id={$user_id} LIMIT 1";
		
			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function setRoleByAdminSix($user_id, $msm_flag, $connect)
		{
			$query = "UPDATE tbl_user_flag SET msm_flag={$msm_flag} WHERE user_id={$user_id} LIMIT 1";
		
			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function setRoleByAdminSeven($user_id, $mem_flag, $connect)
		{
			$query = "UPDATE tbl_user_flag SET mem_flag={$mem_flag} WHERE user_id={$user_id} LIMIT 1";
		
			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function setRoleByAdminEight($user_id, $rv_flag, $connect)
		{
			$query = "UPDATE tbl_user_flag SET rv_flag={$rv_flag} WHERE user_id={$user_id} LIMIT 1";
		
			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function setRoleByAdminNine($user_id, $dh_flag, $connect)
		{
			$query = "UPDATE tbl_user_flag SET dh_flag={$dh_flag} WHERE user_id={$user_id} LIMIT 1";
		
			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function setRoleByAdminTen($user_id, $mo_flag, $connect)
		{
			$query = "UPDATE tbl_user_flag SET mo_flag={$mo_flag} WHERE user_id={$user_id} LIMIT 1";
		
			$result = mysqli_query($connect, $query);

			return $result;
		}
	}
?>