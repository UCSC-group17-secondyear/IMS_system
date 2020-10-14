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
			$checkquery = "SELECT * FROM userroles WHERE role_name ='{$userrole}'" ;

			if ($checkquery) {
				echo "User role already exists.";
			}
			else {
				$query = "INSERT INTO userroles (role_name, description) VALUES('$userrole', '$description')";
			
				if($connect->query($query))
					return true;
			}
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
	}
?>