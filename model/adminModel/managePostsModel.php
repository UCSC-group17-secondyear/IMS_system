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
			$query = "SELECT * FROM tbl_post WHERE is_deleted=0 ORDER BY pst_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		// public static function getDegreeList($connect) {
		// 	$query = "SELECT degree_name FROM tbl_degree WHERE is_deleted=0 ORDER BY degree_id";

		// 	$result_set = mysqli_query($connect, $query);

		// 	return $result_set;
		// }

		// public static function removeDegree($degree_name, $connect) {
		// 	$query = "UPDATE tbl_degree SET is_deleted = 1 WHERE degree_name = '{$degree_name}' AND is_deleted = 0 LIMIT 1";

		// 	$result = mysqli_query($connect, $query);

		// 	return $result;
		// }

		// public static function getDegree($degree_name, $connect) {
		// 	$query = "SELECT * FROM tbl_degree WHERE degree_name = '{$degree_name}' AND is_deleted=0 ORDER BY degree_id";

		// 	$result_set = mysqli_query($connect, $query);

		// 	return $result_set;
		// }

		// public static function updateDegree($degree_name, $degree_abbriviation, $connect) {
		// 	$query = "UPDATE tbl_degree SET degree_abbriviation = '{$degree_abbriviation}' WHERE degree_name = '{$degree_name}' AND is_deleted = 0 LIMIT 1";

		// 	$result = mysqli_query($connect, $query);

		// 	return $result;
		// }
	}
?>