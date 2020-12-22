<?php
	class amModel {
		public static function viewSubjects ($connect)
		{
			$query = "SELECT * FROM tbl_students WHERE is_std = 0 ORDER BY index_no ASC";
			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function checkSubCode ($subject_code, $connect) 
		{
			$query = "SELECT subject_code FROM tbl_subject WHERE subject_code = '{$subject_code}' and is_deleted = 0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function addSubject ($subject_code, $subject_name, $degree, $connect) 
		{
			$query = " INSERT INTO tbl_subject (subject_code, subject_name, degree) 
			VALUES ('$subject_code', '$subject_name', '$degree') ";
			
			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function fetchSubject ($subject_code, $connect) 
		{
			$query = "SELECT * FROM tbl_subject WHERE index_no = '{$index_no}' and is_std = 0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function regNumExist ($index_no, $registrstion_no, $connect)
		{
			$query = "SELECT * FROM tbl_subject WHERE registrstion_no = '{$registrstion_no}' and is_std = 0 and $index_no != '{$index_no}' LIMIT 1";
			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function updateSubject ($index_no, $registrstion_no, $initials, $last_name, $email, $academic_year, $degree, $connect)
		{
			$query = "UPDATE tbl_subject SET registrstion_no = '{$registrstion_no}', initials = '{$initials}', last_name = '{$last_name}', email = '{$email}', academic_year='{$academic_year}', degree = '{$degree}' WHERE index_no = '{$index_no}' and is_std = 0 LIMIT 1";

			$result = mysqli_query($connect, $query);

            return $result;
		}

		public static function deleteSubject ($subject_code, $connect)
		{
			$query = "UPDATE tbl_subject SET is_std = 1 WHERE index_no='{$index_no}' LIMIT 1";
			$result = mysqli_query($connect, $query);
			return $result;
		}
	}
?>