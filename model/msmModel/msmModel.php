<?php
    class msmModel{
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
			$query = "SELECT u.*, uf.* FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND u.is_deleted=0 AND uf.is_deleted=0 ORDER BY uf.user_id";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }
?>