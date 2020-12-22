<?php

    class basicModel{
        public static function changeUserRole($user_id, $connect)
		{
			$query = "SELECT ham_flag, mo_flag, dh_flag, msm_flag, mem_flag, a_flag, rv_flag, am_flag, mm_flag, asm_flag FROM tbl_user_flag WHERE user_id={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function setUserRoleTwo($user_id, $userRole, $connect)
		{
			$query = "UPDATE users SET userRole = '{$userRole}' WHERE userId={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }

?>