<?php
    class msmModel{
        public static function fetchmembers($scheme, $member_type, $connect)
		{
			$query = "SELECT u.empid, u.initials, u.sname, u.userId, uf.department, uf.healthcondition, uf.civilstatus, uf.acceptance_status, uf.membership_status FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND uf.schemename = '{$scheme}' AND uf.member_type = '{$member_type}' AND uf.membership_status = 1 AND uf.is_deleted = 0 ORDER BY uf.user_id";

			$result_set = mysqli_query($connect, $query);
					
			return $result_set;
		}

		public static function scheme($connect)
		{
			$query = "SELECT schemeName FROM tbl_medicalscheme WHERE is_deleted=0";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function membertype($connect)
		{
			$query = "SELECT member_type FROM tbl_member_type";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function getmembersdetails($connect)
		{
		    $query = "SELECT u.empid, u.initials, u.sname, uf.user_id, uf.department, uf.schemename, uf.member_type FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND uf.membership_status = 1 AND uf.is_deleted = 0 ORDER BY uf.user_id";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function deleteMember($delete_user_id , $connect)
		{
			$query = "UPDATE tbl_user_flag SET is_deleted = 1 WHERE user_id='{$delete_user_id}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getmail($mem_user_id, $connect)
		{
			$query = "SELECT email FROM users WHERE userId={$mem_user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function requestaccept($mem_user_id, $connect)
		{
			$query = "UPDATE tbl_user_flag SET membership_status = 1 WHERE user_id={$mem_user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function requestdecline($mem_user_id, $connect)
		{
			$query = "UPDATE tbl_user_flag SET membership_status = 0 WHERE user_id={$mem_user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function fetchmemberships($connect)
		{
			$query = "SELECT u.*, uf.* FROM users u, tbl_user_flag uf WHERE u.userId = uf.User_id AND NOT uf.acceptance_status = 3 AND u.is_deleted = 0 ORDER BY u.userId";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }
?>