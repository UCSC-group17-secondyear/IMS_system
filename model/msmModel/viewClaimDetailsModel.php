<?php
    class msmModel{
        public static function medicalyears($connect)
        {
            $query = "SELECT medical_year FROM tbl_medical_year ORDER BY myid";

			$result = mysqli_query($connect, $query);

			return $result;
        }

        public static function departments($connect)
        {
            $query = "SELECT department FROM tbl_department ORDER BY department_id";

			$result = mysqli_query($connect, $query);

			return $result;
        }
    }
?>