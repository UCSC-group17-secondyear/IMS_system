<?php
    class mahapolaModel {
		public static function getBatchNumbers($connect){
			$query = "SELECT DISTINCT batch_number FROM tbl_students ORDER BY batch_number ASC";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDegrees($connect){
			$query = "SELECT * FROM tbl_degree";

			$result = mysqli_query($connect, $query);

			return $result;
		}
        
        public static function getNominatedList($batch_no, $degree, $connect){
            $query = "SELECT * FROM tbl_students WHERE (batch_number = '{$batch_no}' AND degree_id='{$degree}' AND mahapola_nominated='1' AND is_std='0')";

            $result = mysqli_query($connect, $query);

            return $result;
        }
    }

?>