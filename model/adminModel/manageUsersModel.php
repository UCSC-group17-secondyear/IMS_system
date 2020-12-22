<?php

    class adminModel {
        public static function viewList($connect)
		{
			$query = "SELECT * FROM users WHERE is_deleted=0 ORDER BY empid";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function view($user_id, $connect)
		{
			$query = "SELECT * FROM users WHERE userId='{$user_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function designation($connect)
		{
			$query = "SELECT designation_name FROM tbl_designation WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
        }

        public static function viewPosts($connect)
		{
			$query = "SELECT post_name FROM tbl_post WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function update($user_id, $empid, $initials, $sname, $email, $mobile, $tp, $dob, $designation, $post, $appointment, $connect)
		{
			$query = "UPDATE users SET empid='{$empid}', initials='{$initials}', sname='{$sname}', email='{$email}', mobile='{$mobile}', tp='{$tp}', dob='{$dob}', designation='{$designation}', post='{$post}', appointment='{$appointment}' WHERE userId={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function deleteUser($user_id , $connect)
		{
			$query = "UPDATE users SET is_deleted = 1 WHERE userId={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }

?>