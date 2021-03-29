<?php

    class asmModel {
        public static function getRole($user_id, $connect)
		{
			$query = "SELECT userRole_id FROM users WHERE userId = {$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }

		public static function checkHall($h_id, $date, $startTime, $endTime, $connect)
		{
			$query = "SELECT * FROM tbl_booking WHERE hall_id='{$h_id}' AND date='{$date}' AND start_time < '{$endTime}' AND end_time > '{$startTime}' AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function checkHallTwo($h_id, $date, $startTime, $endTime, $booking_id, $connect)
		{
			$query = "SELECT * FROM tbl_booking WHERE hall_id='{$h_id}' AND date='{$date}' AND start_time < '{$endTime}' AND end_time > '{$startTime}' AND booking_Id!={$booking_id} AND is_deleted=0 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
        
        public static function book($user_id, $h_id, $sem_id, $date, $startTime, $endTime, $reason, $connect) {
			$query = "INSERT INTO tbl_booking (date, start_time, end_time, reason, user_id, hall_id, sem_id) VALUES('$date', '$startTime', '$endTime', '$reason', '$user_id', '$h_id', '$sem_id')";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function viewBookings($user_id, $sem_id, $connect) 
		{
			$query = "SELECT * FROM tbl_booking INNER JOIN tbl_hall ON tbl_booking.hall_id = tbl_hall.hall_id WHERE tbl_booking.user_id='{$user_id}' AND tbl_booking.sem_id='{$sem_id}' AND tbl_booking.is_deleted=0 AND tbl_hall.is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function viewABook($booking_id, $connect) 
		{
			$query = "SELECT * FROM tbl_booking INNER JOIN tbl_hall ON tbl_booking.hall_id = tbl_hall.hall_id WHERE tbl_booking.booking_id={$booking_id} AND tbl_booking.is_deleted=0 AND tbl_hall.is_deleted=0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function updateBook($booking_id, $h_id, $date, $startTime, $endTime, $reason, $connect)
		{
			$query = "UPDATE tbl_booking SET date='{$date}', start_time='{$startTime}', end_time='{$endTime}', reason='{$reason}', hall_id='{$h_id}' WHERE booking_id={$booking_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function deleteBooking($booking_id, $connect)
		{
			$query = "UPDATE tbl_booking SET is_deleted = 1 WHERE booking_id={$booking_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getHallId($hall, $connect)
		{
			$query = "SELECT hall_id FROM tbl_hall WHERE hall_name='{$hall}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getSemId($date, $connect)
		{	
			$query = "SELECT sem_id FROM tbl_semester WHERE start_date < '{$date}' AND end_date > '{$date}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getSemEndDate($today, $connect)
		{
			$query = "SELECT sem_id,end_date FROM tbl_semester WHERE start_date < '{$today}' AND end_date > '{$today}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDay($date,$connect)
		{
			$query = "SELECT DAYNAME('{$date}') AS day_name";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getNotAvailableHalls($day, $sem_id, $startTime, $endTime, $connect)
		{
			$query = "SELECT hall_id FROM tbl_weekly_time_table WHERE day='{$day}' AND sem_id='{$sem_id}' AND start_time < '{$endTime}' AND end_time > '{$startTime}' AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function allHalls($connect)
		{
			$query = "SELECT hall_id FROM tbl_hall WHERE is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getHallNames($hall_id,$connect)
		{
			$query = "SELECT * FROM tbl_hall WHERE hall_id = '{$hall_id}' AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }

?>