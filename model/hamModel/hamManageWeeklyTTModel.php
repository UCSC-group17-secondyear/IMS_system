<?php
	class hamModel {
        public static function getAllsubjects($connect)
		{
			$query = "SELECT * FROM tbl_subject WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
		public static function getAllHalls($connect)
		{
			$query = "SELECT * FROM tbl_hall WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getAllsemesters($connect)
		{
			$query = "SELECT * FROM tbl_semester WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
		public static function getAlldegrees($connect)
		{
			$query = "SELECT * FROM tbl_degree WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>