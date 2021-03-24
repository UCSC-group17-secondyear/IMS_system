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

		public static function addWeeklyTT($semester, $degree, $year, $starttime, $endtime, $subject, $hall, $day, $connect)
		{
			$query = "INSERT INTO tbl_weekly_time_table(day, end_time, start_time, hall_id, subject_id, sem_id, degree_id, year) VALUES ($day, $endtime, $starttime, $hall, $subject, $semester, $degree, $year)";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>