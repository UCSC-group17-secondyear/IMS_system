<?php

    class adminModel {
        public static function viewList($connect)
		{
			$query = "SELECT * FROM users INNER JOIN tbl_designation ON users.designation_id = tbl_designation.designation_id WHERE users.is_deleted=0 ORDER BY users.empid";

			// $query = "SELECT * FROM users INNER JOIN tbl_designation ON users.designation_id = tbl_designation.designation_id INNER JOIN tbl_post ON users.post_id = tbl_post.pst_id WHERE tbl_booking.user_id='{$user_id}' AND tbl_booking.sem_id='{$sem_id}' AND tbl_booking.is_deleted=0 AND tbl_hall.is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function view($user_id, $connect)
		{
			// $query = "SELECT * FROM users WHERE userId='{$user_id}' LIMIT 1";
			$query = "SELECT * FROM users INNER JOIN tbl_designation ON users.designation_id = tbl_designation.designation_id WHERE userId='{$user_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function designation($connect)
		{
			$query = "SELECT * FROM tbl_designation WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
        }

        public static function viewPosts($connect)
		{
			$query = "SELECT * FROM tbl_post WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function update($user_id, $empid, $initials, $sname, $email, $mobile, $tp, $dob, $designation, $appointment, $connect)
		{
			$query = "UPDATE users SET empid='{$empid}', initials='{$initials}', sname='{$sname}', email='{$email}', mobile='{$mobile}', tp='{$tp}', dob='{$dob}', designation_id='{$designation}', appointment='{$appointment}' WHERE userId={$user_id} LIMIT 1";

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