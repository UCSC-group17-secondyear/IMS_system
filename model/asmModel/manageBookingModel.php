<?php

    class asmModel {
        public static function getRole($user_id, $connect)
		{
			$query = "SELECT userRole FROM users WHERE userId = {$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function book($user_id, $hall, $date, $startTime, $endTime, $reason, $connect) {
			$query = "INSERT INTO tbl_booking (date, start_time, end_time, reason, user_id, hall_name) VALUES('$date', '$startTime', '$endTime', '$reason', '$user_id', '$hall')";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function viewBookings($user_id, $connect) 
		{
			$query = "SELECT * FROM tbl_booking WHERE user_id='{$user_id}' AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function viewABook($booking_id, $connect) 
		{
			$query = "SELECT * FROM tbl_booking WHERE booking_id={$booking_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function updateBook($booking_id, $hall, $date, $startTime, $endTime, $reason, $connect)
		{
			$query = "UPDATE tbl_booking SET date='{$date}', start_time='{$startTime}', end_time='{$endTime}', reason='{$reason}', hall_name='{$hall}' WHERE booking_id={$booking_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function deleteBooking($booking_id, $connect)
		{
			$query = "UPDATE tbl_booking SET is_deleted = 1 WHERE booking_id={$booking_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }

?>