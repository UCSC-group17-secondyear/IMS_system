<?php

    class adminModel {
        public static function checkHallName($hall_name, $connect) 
		{	
            $query = "SELECT * FROM tbl_hall WHERE hall_name ='{$hall_name}' AND is_deleted=0" ;
            
            $result_set = mysqli_query($connect, $query);
            
            return $result_set;
        }
        
        public static function enterHall($hall_name, $hall_location, $seating_capacity, $ac, $connect)
		{
			$query = "INSERT INTO tbl_hall (hall_name, location, seating_capacity, AC ) VALUES('$hall_name', '$hall_location', $seating_capacity, $ac)";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function viewHalls($connect) 
		{
			$query = "SELECT * FROM tbl_hall WHERE is_deleted=0 ORDER BY hall_name";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function isEmptyHall($connect)
		{
			$query = "SELECT COUNT(hall_id) FROM tbl_hall";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function viewAHall ($hall_id, $connect) 
		{
			$query = "SELECT * FROM tbl_hall WHERE hall_id='{$hall_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function checkHallThree($hall_id, $hall_name, $connect)
		{
			$query = "SELECT * FROM tbl_hall WHERE hall_name='{$hall_name}' AND hall_id!={$hall_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;	
        }
        
        public static function updateHall($hall_id, $hall_name, $location, $seating_capacity, $ac, $connect)
		{
			$query = "UPDATE tbl_hall SET hall_name='{$hall_name}', location='{$location}', seating_capacity='{$seating_capacity}', AC={$ac} WHERE hall_id={$hall_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function deleteHall($hall_id, $connect)
		{
			$query = "UPDATE tbl_hall SET is_deleted = 1 WHERE hall_id={$hall_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function hall($connect)
		{
			$query = "SELECT hall_name FROM tbl_hall WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
        }
        
        public static function viewAHallUsingName($hall, $connect)
		{
			$query = "SELECT * FROM tbl_hall WHERE hall_name='{$hall}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function deleteHallUsingName($hall, $connect)
		{
			$query = "UPDATE tbl_hall SET is_deleted = 1 WHERE hall_name='{$hall}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }

?>