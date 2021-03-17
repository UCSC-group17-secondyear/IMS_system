<?php
	class amModel {
		public static function viewSubjects ($connect)
		{
			$query = "SELECT * FROM tbl_subject WHERE is_deleted = 0 ORDER BY subject_id ASC";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function checkSubCode ($subject_code, $connect) 
		{
			$query = "SELECT subject_code FROM tbl_subject 
			WHERE subject_code = '{$subject_code}' and is_deleted = 0
			LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function addSubject ($subject_code, $subject_name, $degree, $academic_year, $semester, $connect) 
		{
			$query = " INSERT INTO tbl_subject (subject_code, subject_name, degree, academic_year, semester) 
			VALUES ('$subject_code', '$subject_name', '$degree', '$academic_year', '$semester') ";
			
			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function fetchSubject ($subject_code, $connect) 
		{
			$query = "SELECT * FROM tbl_subject 
			WHERE subject_code = '{$subject_code}' and is_deleted = 0
			LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function saveUpdatedSubject ($subject_code, $subject_name, $degree, $academic_year, $semester, $connect)
		{
			$query = "UPDATE tbl_subject 
			SET subject_name = '{$subject_name}', degree = '{$degree}', academic_year = '{$academic_year}', semester = '{$semester}'
			WHERE subject_code = '{$subject_code}' and is_deleted = 0 
			LIMIT 1";

			$result = mysqli_query($connect, $query);
            return $result;
		}

		public static function removeSubject ($subject_code, $connect)
		{
			$query = "UPDATE tbl_subject 
			SET is_deleted = 1 
			WHERE subject_code='{$subject_code}' and is_deleted = 0
			LIMIT 1";

			$result = mysqli_query($connect, $query);
			return $result;
		}
	}
?>