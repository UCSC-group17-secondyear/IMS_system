<?php
	class asmModel {
		public static function getAllHalls($connect)
		{
			$query = "SELECT * FROM tbl_hall WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function gethallsbookings($date, $connect)
        {
			$query = "SELECT b.*, h.* FROM tbl_booking b, tbl_hall h WHERE h.hall_id = b.hall_id AND date='{$date}' AND is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getHallsbooked($start_time, $end_time, $connect)
		{
			$query = "SELECT h.* FROM tbl_booking b, tbl_hall h WHERE h.hall_id = b.hall_id AND b.start_time='{$start_time}' AND b.end_time='{$end_time}' AND b.is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public function gethallsbookingswithinrange($startdate, $enddate, $hall, $connect)
		{
			$query = "SELECT * FROM tbl_booking WHERE date BETWEEN '{$startdate}' AND '{$enddate}' AND hall_id='{$hall}' AND is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>