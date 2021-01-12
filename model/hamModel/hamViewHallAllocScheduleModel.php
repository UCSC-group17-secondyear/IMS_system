<?php
	class hamModel {
        public static function gethallsbookings($date, $connect)
        {
			$query = "SELECT * FROM tbl_booking WHERE date='{$date}' AND is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getAllHalls($connect)
		{
			$query = "SELECT * FROM tbl_hall WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>