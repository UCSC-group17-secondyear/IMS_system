<?php
	class amModel {
        public static function getStudents($connect)
        {
			$query = "SELECT index_no FROM tbl_students WHERE is_std = 0 ORDER BY index_no DESC";

            $result = mysqli_query($connect, $query);
            
			return $result;
        }
    }
?>