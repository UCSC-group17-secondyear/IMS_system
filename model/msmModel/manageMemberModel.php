<?php
    class msmModel{
		public static function scheme($connect)
		{
			$query = "SELECT * FROM tbl_medicalscheme WHERE is_deleted=0";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function membertype($connect)
		{
			$query = "SELECT * FROM tbl_member_type";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

        public static function fetchmembers($scheme, $member_type, $connect)
		{
			$query = "SELECT u.*, mm.*, d.*, mt.* FROM users u, tbl_medical_membership mm, tbl_department d, tbl_member_type mt WHERE d.department_id = mm.department_id AND mt.member_id = mm.member_id AND u.userId = mm.user_id AND mm.scheme_id = '{$scheme}' AND mm.member_id = '{$member_type}' AND mm.membership_status = 1 AND mm.is_deleted = 0 ORDER BY mm.user_id";

			$result_set = mysqli_query($connect, $query);
					
			return $result_set;
		}

		public static function getmembersdetails($connect)
		{
		    $query = "SELECT u.*, mm.*, d.*, ms.*, mt.* FROM users u, tbl_medical_membership mm, tbl_department d, tbl_medicalscheme ms, tbl_member_type mt WHERE d.department_id = mm.department_id AND mt.member_id = mm.member_id AND mm.scheme_id = ms.scheme_id AND u.userId = mm.user_id AND mm.membership_status = 1 AND mm.is_deleted = 0 ORDER BY mm.user_id";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function deleteMember($delete_user_id , $connect)
		{
			$query = "UPDATE tbl_medical_membership SET is_deleted = 1 WHERE user_id='{$delete_user_id}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }
?>