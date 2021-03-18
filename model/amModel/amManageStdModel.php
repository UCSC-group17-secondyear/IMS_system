<?php
	class amModel {
		public static function getDegreeList($connect) {
			$query = "SELECT * FROM tbl_degree 
			WHERE is_deleted = 0 
			ORDER BY degree_id ASC";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function viewStudents ($connect)
		{
			$query = "SELECT * FROM tbl_students 
			WHERE is_std = 0 
			ORDER BY index_no ASC";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function checkIndex ($index_no, $connect) 
		{
			$query = "SELECT index_no FROM tbl_students 
			WHERE index_no = '{$index_no}' and is_std = 0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function checkRegNum ($registration_no, $connect) 
		{
			$query = "SELECT index_no FROM tbl_students 
			WHERE registration_no = '{$registration_no}' and is_std = 0
			LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function checkEmail ($email, $connect) 
		{
			$query = "SELECT index_no FROM tbl_students 
			WHERE email = '{$email}' and is_std = 0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function addStudent($index_no, $registration_no, $initials, $last_name, $email, $academic_year, $semester, $degree, $batch_number, $connect) 
		{
			$query = "INSERT INTO tbl_students (index_no, registration_no, initials, last_name, email, academic_year, semester, degree, batch_number) 
			VALUES('$index_no', '$registration_no', '$initials', '$last_name', '$email', '$academic_year', '$semester', '$degree', '$batch_number')";
			
			if($connect->query($query))
				return true;
		}

		public static function fetchStudent ($index_no, $connect) 
		{
			$query = "SELECT * FROM tbl_students 
			WHERE index_no = '{$index_no}' and is_std = 0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function regNumExist ($index_no, $registration_no, $connect)
		{
			$query = "SELECT * FROM tbl_students 
			WHERE registration_no = '{$registration_no}' and is_std = 0 and $index_no != '{$index_no}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function emailExist ($index_no, $email, $connect)
		{
			$query = "SELECT * FROM tbl_students 
			WHERE email = '{$email}' and is_std = 0 and $index_no != '{$index_no}' 
			LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function updateStd($index_no, $registration_no, $initials, $last_name, $email, $academic_year, $degree, $connect)
		{
			$query = "UPDATE tbl_students 
			SET registration_no = '{$registration_no}', initials = '{$initials}', last_name = '{$last_name}', email = '{$email}', academic_year='{$academic_year}', degree = '{$degree}' 
			WHERE index_no = '{$index_no}' and is_std = 0 LIMIT 1";

			$result = mysqli_query($connect, $query);
            return $result;
		}

		public static function deleteStd ($index_no, $connect)
		{
			$query = "UPDATE tbl_students 
			SET is_std = 1
			WHERE index_no='{$index_no}' and is_std = 0 
			LIMIT 1";
			
			$result = mysqli_query($connect, $query);
			return $result;
		}
	}
?>