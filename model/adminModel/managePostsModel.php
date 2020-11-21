<?php
	class adminModel {
		public static function checkPost($post_name, $connect) {
			$query = "SELECT * FROM tbl_post WHERE post_name ='{$post_name}' AND is_deleted=0 LIMIT 1 " ;

			$result_set = mysqli_query($connect, $query);

            return $result_set;
		}

		public static function addPost($post_name, $connect) 
		{
			$query = "INSERT INTO tbl_post (post_name) 
				VALUES ('$post_name')";
		
			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function viewPosts($connect)
		{
			$query = "SELECT post_name FROM tbl_post WHERE is_deleted=0 ORDER BY pst_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function removePosts($post_name, $connect) {
			$query = "UPDATE tbl_post SET is_deleted = 1 WHERE post_name = '{$post_name}' AND is_deleted = 0 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
	}
?>