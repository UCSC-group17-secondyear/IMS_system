<?php
	class amModel {
		public static function addStudent($index_no, $registrstion_no, $initials, $last_name, $email, $academic_year, $degree, $connect) 
		{
			$query = "INSERT INTO students (index_no, registrstion_no, initials, last_name, email, academic_year, degree) VALUES('$index_no', '$registrstion_no', '$initials', '$last_name', '$email', '$academic_year', '$degree')";
			
			if($connect->query($query))
				return true;
		}

		public static function fetchStudent($index_no, $connect) 
		{
			$query = "SELECT * FROM students WHERE index_no='{$index_no}' and is_std = 0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function updateStd($index_no, $registrstion_no, $initials, $last_name, $email, $academic_year, $degree, $connect)
		{
			$query = "UPDATE students SET registrstion_no='{$registrstion_no}', initials='{$initials}', last_name='{$last_name}', email='{$email}', academic_year='{$academic_year}', degree='{$degree}' WHERE index_no='{$index_no}' LIMIT 1";

			$result = mysqli_query($connect, $query);

            return $result;
		}

		public static function deleteStd($std_index, $connect)
		{
			$query = "UPDATE students SET is_std = 1 WHERE index_no='{$std_index}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
	}
?>