<?php
	class adminModel {
		public static function checkEmpid($empid, $connect) 
		{
			$query = "SELECT * FROM users WHERE empid ='{$empid}' AND is_deleted=0" ;
			$result_set = mysqli_query($connect, $query);
            return $result_set;
		}

		public static function checkRole($userrole, $connect) 
		{
			$query = "SELECT * FROM userroles WHERE role_name ='{$userrole}' AND is_deleted = 0 ";
			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function getRoleID($userRole, $connect) {
			$query = "SELECT role_id FROM userroles WHERE role_name ='{$userRole}' AND is_deleted = 0 ";
			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function assignUserRole ($userId, $role_id, $connect) {
			$query = "INSERT INTO tbl_userhasrole (userId, role_id) VALUES('$userId', '$role_id')";
		
			if($connect->query($query)) {
				return true;
			}
		}

		public static function checkUsersRoles ($userId, $role_id, $connect) {
			$query = "SELECT * FROM tbl_userhasrole 
			WHERE is_deleted = 0  AND userId = '{$userId}' AND role_id ='{$role_id}' ";
			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function getUsersRoles ($userId, $connect) {
			$query = "SELECT * FROM tbl_userhasrole 
			WHERE userId = '{$userId}' AND is_deleted = 0 ORDER BY id ASC ";
			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function addUserrole($userrole, $description, $connect) 
		{
			$query = "INSERT INTO userroles (role_name, description) VALUES('$userrole', '$description')";
		
			if($connect->query($query))
				return true;
		}

		public static function getRoleName ($role_id, $connect)
		{
			$query = "SELECT role_name FROM userroles WHERE role_id = '{$role_id}' AND is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
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

		public static function setUserRole($userId, $userRole, $connect)
		{
			$query = "UPDATE users SET userRole = '{$userId}' WHERE empid='{$userId}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		} 

		public static function updateUserRole ($userId, $userRole, $connect)
		{
			$query = "UPDATE tbl_userhasrole SET is_deleted = 1 
			WHERE userId = '{$userId}' AND role_id = '{$userRole}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
		
		public static function getUId ($empid, $connect)
		{
			$query = "SELECT userId FROM users WHERE empid='{$empid}' AND is_deleted = 0 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		/*public static function setRoleByAdminOne($user_id, $a_flag, $connect)
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
		}*/

		public static function userRoles($connect)
		{
			$query = "SELECT role_name FROM userroles WHERE is_deleted=0 ORDER BY role_name ASC";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function userList($connect)
		{
			$query = "SELECT empid FROM users WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}
	}
?>