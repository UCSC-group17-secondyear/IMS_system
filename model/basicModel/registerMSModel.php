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
            $query = "SELECT * FROM tbl_department ORDER BY department_id";

			$result = mysqli_query($connect, $query);

			return $result;
        }

        public static function membertype($connect)
		{
			$query = "SELECT * FROM tbl_member_type";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function getmembershipstatus($user_id, $connect)
        {
            $query = "SELECT membership_status FROM tbl_medical_membership WHERE user_id='{$user_id}'";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function gettempMonths($connect)
		{
			$query = "SELECT scheme_id, schemeName, temporaryStaff FROM tbl_medicalscheme WHERE is_deleted = 0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getpermMonths($connect)
		{
			$query = "SELECT scheme_id, schemeName, permanentStaff FROM tbl_medicalscheme WHERE is_deleted = 0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getcontMonths($connect)
		{
			$query = "SELECT scheme_id, schemeName, contractStaff FROM tbl_medicalscheme WHERE is_deleted = 0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getservicemonths($user_id,$connect)
		{
			$query = "SELECT DATEDIFF(CURRENT_DATE(), appointment)FROM users WHERE userId='{$user_id}' AND is_deleted = 0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function checkdependant($loguser, $name, $connect)
		{
			$query = "SELECT * FROM tbl_dependant WHERE dependant_name='{$name}' AND user_id='{$loguser}' AND is_deleted = 0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function adddependant($user_id, $name, $relationship, $dob, $healthstatus, $connect)
		{
			$query = "INSERT INTO tbl_dependant (user_id, dependant_name, relationship, dob, health_status) VALUES ('{$user_id}', '{$name}', '{$relationship}', '{$dob}', '{$healthstatus}')";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function registerMS($user_id, $department, $health_condition, $civil_status, $member_type, $scheme, $connect)
		{
			$query = "UPDATE tbl_medical_membership SET department_id='{$department}', healthcondition='{$health_condition}', married='{$civil_status}', member_id='{$member_type}', scheme_id='{$scheme}', membership_status=2, acceptance_status=2, form_submission_date=CURRENT_DATE() WHERE user_id='{$user_id}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getmailofdh($department, $connect)
		{
			$query = "SELECT department_head_email FROM tbl_department WHERE department_id='{$department}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function isscheme($user_id, $connect)
		{
			$query = "SELECT s.schemeName FROM tbl_medical_membership mm, tbl_medicalscheme s WHERE mm.scheme_id = s.scheme_id AND user_id='{$user_id}'";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
        }
	}
?>