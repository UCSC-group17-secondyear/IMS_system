<?php
    class msmModel{
        public static function checkMedicalYear($medical_year, $connect)
		{
			$query = "SELECT * FROM tbl_medical_year WHERE medical_year ='{$medical_year}' LIMIT 1 " ;

			$result_set = mysqli_query($connect, $query);

            return $result_set;
		}

		public static function addMedicalYear($medical_year, $start_date, $end_date, $connect)
		{
			$query = "INSERT INTO tbl_medical_year(medical_year, start_date, end_date) VALUES ('$medical_year}', '{$start_date}', '{$end_date}')";
		
			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getEmailsofmembers($connect)
		{
			$query = "SELECT u.email from users u, tbl_medical_membership mm WHERE u.userId = mm.user_id AND mm.membership_status = 1;";
		
			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function viewMedicalYears($connect)
		{
			$query = "SELECT * FROM tbl_medical_year ORDER BY myid";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function updateMedicalYear($medical_year, $start_date, $end_date, $connect)
		{
			$query = "UPDATE tbl_medical_year SET start_date = '{$start_date}' AND end_date = '{$end_date}' WHERE medical_year = '{$medical_year}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }
?>