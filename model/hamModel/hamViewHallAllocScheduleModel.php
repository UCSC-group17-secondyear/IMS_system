<?php
	class hamModel {
        public static function gethallsbookings($date, $connect)
        {
			$query = "SELECT start_time, end_time, hallname FROM tbl_booking WHERE date='{$date}' AND is_deleted=0";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>