<?php
	class adminModel {
		public static function checkPost ($post_name, $connect) {
			$query = "SELECT pst_id FROM tbl_post WHERE post_name ='{$post_name}' AND is_deleted=0 LIMIT 1 " ;

			$result_set = mysqli_query($connect, $query);

            return $result_set;
		}

		public static function getPost ($post_name, $connect) {
			$query = "SELECT * FROM tbl_post WHERE post_name = '{$post_name}' AND is_deleted=0 LIMIT 1 " ;

			$result_set = mysqli_query($connect, $query);

            return $result_set;
		}

		public static function addPost ($post_name, $userId, $connect) 
		{
			$query = "INSERT INTO tbl_post (post_name, userId) VALUES ('$post_name', '$userId')";
		
			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getUsers ($connect) {
			$query = "SELECT empid FROM users WHERE is_deleted=0 ORDER BY empid";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function get_userId ($empid, $connect) {
			$query = "SELECT userId FROM users 
			WHERE empid = '{$empid}' AND is_deleted=0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function get_empid ($userId, $connect) {
			$query = "SELECT empid FROM users 
			WHERE userId = '{$userId}' AND is_deleted=0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function viewPosts ($connect)
		{
			$query = "SELECT post_name FROM tbl_post WHERE is_deleted=0 ORDER BY pst_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function updateUser ($post_name, $userId, $connect)
		{
			$query = "UPDATE tbl_post SET userId = '{$userId}' 
			WHERE post_name = '{$post_name}' AND is_deleted = 0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function removePosts ($post_name, $connect) {
			$query = "UPDATE tbl_post SET is_deleted = 1 WHERE post_name = '{$post_name}' AND is_deleted = 0 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
	}
?>