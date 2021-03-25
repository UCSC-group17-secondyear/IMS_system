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

		public static function viewTimeTable($sem_id, $year, $degree, $connect)
		{
			$query = "SELECT * FROM tbl_weekly_time_table INNER JOIN tbl_hall ON tbl_weekly_time_table.hall_id = tbl_hall.hall_id INNER JOIN tbl_semester ON tbl_weekly_time_table.sem_id = tbl_semester.sem_id INNER JOIN tbl_degree ON tbl_weekly_time_table.degree_id = tbl_degree.degree_id INNER JOIN tbl_subject ON tbl_weekly_time_table.subject_id = tbl_subject.subject_id WHERE tbl_weekly_time_table.sem_id = '{$sem_id}' AND tbl_weekly_time_table.degree_id = '{$degree}' AND tbl_weekly_time_table.year = '{$year}' ORDER BY tbl_semester.academic_year , tbl_semester.semester";

            $result = mysqli_query($connect, $query);

            return $result;
		}
	}
?>