<?php
	class asmModel {
		public static function getAllHalls($connect)
		{
			$query = "SELECT * FROM tbl_hall WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function gethallsbookings($date, $user, $connect)
        {
			$query = "SELECT * FROM tbl_booking WHERE date='{$date}' AND user_id='{$user}' AND is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public function gethallsbookingswithinrange($startdate, $enddate, $hall, $user, $connect)
		{
			$query = "SELECT * FROM tbl_booking WHERE date BETWEEN '{$startdate}' AND '{$enddate}' AND hall_name='{$hall}' AND user_id='{$user}' AND is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>