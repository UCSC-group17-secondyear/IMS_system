<?php
    class msmModel{
        public static function fetchmembers($scheme, $member_type, $connect)
		{
			$query = "SELECT u.*, uf.* FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND uf.schemename = '{$scheme}' AND uf.member_type = '{$member_type}' ORDER BY userId";

			$result_set = mysqli_query($connect, $query);
					
			return $result_set;
		}
    }
?>