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
			$query = "SELECT * FROM tbl_weekly_time_table wtt INNER JOIN tbl_hall h ON wtt.hall_id = h.hall_id INNER JOIN tbl_semester s ON wtt.sem_id = s.sem_id INNER JOIN tbl_degree d ON wtt.degree_id = d.degree_id INNER JOIN tbl_subject st ON wtt.subject_id = st.subject_id WHERE wtt.sem_id = '{$sem_id}' AND wtt.degree_id = '{$degree}' AND wtt.year = '{$year}' AND wtt.is_deleted = 0 ORDER BY wtt.wtt_id";

            $result = mysqli_query($connect, $query);

            return $result;
		}

		public static function getEvent($update_wtt , $connect)
		{
			$query = "SELECT wtt.*, s.academic_year, s.semester, sub.subject_code, sub.subject_name, d.degree_name FROM tbl_weekly_time_table wtt, tbl_semester s, tbl_subject sub, tbl_degree d where s.sem_id = wtt.sem_id AND sub.subject_id = wtt.subject_id AND sub.degree_id = wtt.degree_id AND sub.degree_id = d.degree_id AND wtt.wtt_id = '{$update_wtt}'";

            $result = mysqli_query($connect, $query);

            return $result;
		}

		public static function getthesubjects($u_degree, $u_year, $connect)
		{
			$query = "SELECT sub.* FROM tbl_subject sub, tbl_degree d where sub.degree_id = d.degree_id AND d.degree_name = '{$u_degree}' AND sub.academic_year = '{$u_year}' AND sub.is_deleted=0";

            $result = mysqli_query($connect, $query);

            return $result;
		}

		public static function updateEvent($wtt_id, $starttime, $endtime, $subject, $hall, $day, $connect)
		{
			$query = "UPDATE tbl_weekly_time_table wtt SET start_time = '{$starttime}', end_time='{$endtime}', subject_id='{$subject}', hall_id='{$hall}', day='{$day}' WHERE wtt_id = '{$wtt_id}'";

            $result = mysqli_query($connect, $query);

            return $result;
		}

		public static function deleteEvent($delete_tt , $connect)
		{
			$query = "UPDATE tbl_weekly_time_table SET is_deleted = 1 WHERE wtt_id = '{$delete_tt}'";

            $result = mysqli_query($connect, $query);

            return $result;
		}
	}
?>