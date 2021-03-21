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
            $query = "SELECT department FROM tbl_department ORDER BY department_id";

			$result = mysqli_query($connect, $query);

			return $result;
        }

        public static function membertype($connect)
		{
			$query = "SELECT member_type FROM tbl_member_type";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function civilstatus($connect)
		{
			$query = "SELECT csname FROM tbl_civilstatus";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function isscheme($user_id, $connect)
		{
			$query = "SELECT schemename FROM tbl_user_flag WHERE user_id='{$user_id}'";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
        }
        
        public static function getmembershipstatus($user_id, $connect)
        {
            $query = "SELECT membership_status FROM tbl_user_flag WHERE user_id='{$user_id}'";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}
		
		public static function getscheme($scheme, $connect)
		{
			$query = "SELECT permanentStaff, contractStaff, temporaryStaff FROM tbl_medicalscheme WHERE schemeName = '{$scheme}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getservicemonths($user_id,$connect)
		{
			$query = "SELECT DATEDIFF(CURRENT_DATE(), appointment)FROM users WHERE userId='{$user_id}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function registerMS($user_id, $department, $health_condition, $civil_status, $member_type, $scheme, $connect)
		{
			$query = "UPDATE tbl_user_flag SET department='{$department}', healthcondition='{$health_condition}', civilstatus='{$civil_status}', member_type='{$member_type}', schemename='{$scheme}', membership_status=2,  attendance_status=2, form_submission_date=CURRENT_DATE() WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function adddependant($user_id, $name, $relationship, $dob, $healthstatus, $connect)
		{
			$query = "INSERT INTO tbl_dependant (user_id, dependant_name, relationship, dob, health_status) VALUES ('$user_id', '$name', '$relationship', '$dob', '$healthstatus')";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function dept($department, $connect)
		{
			$query = "SELECT department_head_email FROM tbl_department WHERE department='{$department}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}
	}
?>