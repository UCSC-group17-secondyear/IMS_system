<?php
	class hamModel {
		public static function getAllHalls($connect)
		{
			$query = "SELECT * FROM tbl_hall WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getAcademicYear($connect)
		{
			$query = "SELECT * FROM tbl_semester WHERE start_date <= CURRENT_DATE() AND CURRENT_DATE() <= end_date AND is_deleted=0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getHallname($hall, $connect)
		{
			$query = "SELECT hall_name FROM tbl_hall WHERE hall_id='{$hall}'";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function gethallsbookings($date, $connect)
        {
			$query = "SELECT b.*, h.hall_name FROM tbl_booking b, tbl_hall h WHERE h.hall_id = b.hall_id AND date='{$date}' AND b.is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public function gethallsbookingswithinrange($startdate, $enddate, $hall, $connect)
		{
			$query = "SELECT * FROM tbl_booking WHERE date BETWEEN '{$startdate}' AND '{$enddate}' AND hall_id='{$hall}' AND is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getDayName($date, $connect)
		{
			$query = "SELECT DAYNAME('{$date}') AS day_name";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getTTonthatday($date, $connect)
		{
			$query = "SELECT wtt.*, s.subject_name, h.hall_name FROM tbl_weekly_time_table wtt, tbl_subject s, tbl_hall h WHERE wtt.subject_id = s.subject_id AND wtt.hall_id = h.hall_id AND wtt.day = '{$day}' AND wtt.is_deleted = 0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getTTinthehall($startdate, $enddate, $hall, $connect)
		{
			$query = "SELECT wtt.*, st.subject_name FROM tbl_weekly_time_table wtt INNER JOIN tbl_subject st ON wtt.subject_id = st.subject_id INNER JOIN tbl_semester s ON wtt.sem_id = s.sem_id WHERE s.sem_id = wtt.sem_id AND '{$startdate}' >= s.start_date AND wtt.hall_id = '{$hall}' AND wtt.is_deleted = 0 ORDER BY wtt.wtt_id";

            $result = mysqli_query($connect, $query);

            return $result;
		}
	}
?>