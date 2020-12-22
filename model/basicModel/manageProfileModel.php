<?php

    class basicModel{
        public static function view($user_id, $connect)
		{
			$query = "SELECT * FROM users WHERE userId='{$user_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function getRole($user_id, $connect)
		{
			$query = "SELECT userRole FROM users WHERE userId = {$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function update($user_id, $empid, $initials, $sname, $email, $mobile, $tp, $dob, $designation, $post, $appointment, $connect)
		{
			$query = "UPDATE users SET empid='{$empid}', initials='{$initials}', sname='{$sname}', email='{$email}', mobile='{$mobile}', tp='{$tp}', dob='{$dob}', designation='{$designation}', post='{$post}', appointment='{$appointment}' WHERE userId={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function updatePasswordTwo($user_id, $hashed_password, $connect)
		{
			$query = "UPDATE users SET password = '{$hashed_password}' WHERE userId={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

            return $result;
        }
        
        public static function checkEmpidTwo($empid, $user_id, $connect)
		{
			$query = "SELECT * FROM users WHERE empid='{$empid}' AND userId!={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
    }

?>