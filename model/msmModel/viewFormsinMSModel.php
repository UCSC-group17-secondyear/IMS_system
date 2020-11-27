<?php
    class msmModel{
		public static function fetchmemberships($connect)
		{
			$query = "SELECT u.*, uf.* FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND u.is_deleted=0 AND uf.is_deleted=0 ORDER BY uf.user_id";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function view($user_id, $connect)
		{
			$query = "SELECT * FROM users WHERE userId='{$user_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function viewuf($user_id, $connect){
			$query = "SELECT * FROM tbl_user_flag WHERE user_id='{$user_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
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

		public static function getClaimForms($connect) {
			$query = "SELECT u.* cf.* FROM tbl_claimform cf, users u WHERE cf.user_id = u.userId AND (cf.opd_form_flag = 1 OR cf.surgical_form_flag = 1) AND cf.is_deleted=0 order by cf.claim_form_no";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }
?>