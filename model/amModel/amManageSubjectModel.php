<?php
	class amModel {
		public static function getDegreeList($connect) {
			$query = "SELECT * FROM tbl_degree 
			WHERE is_deleted = 0 
			ORDER BY degree_id ASC";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function getSubjectsList($connect) {
			$query = "SELECT subject_name FROM tbl_subject WHERE is_deleted = 0 ORDER BY subject_code ASC";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function get_degree_id($degree, $connect) {
			$query = "SELECT degree_id FROM tbl_degree WHERE degree_name = '{$degree}' AND is_deleted = 0 LIMIT 1";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function get_degree_name ($degree_id, $connect) {
			$query = "SELECT degree_name FROM tbl_degree WHERE degree_id = '{$degree_id}' AND is_deleted = 0 LIMIT 1";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function check_Subject ($subject_name, $degree_id, $connect) {
			$query = "SELECT * FROM tbl_subject WHERE subject_name = '{$subject_name}' AND degree_id = '{$degree_id}' AND is_deleted = 0";

			$result = mysqli_query($connect, $query);
			return $result;
		}

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

		public static function addSubject ($subject_code, $subject_name, $degree_id, $academic_year, $semester, $mandatory_subject, $connect)
		{
			$query = " INSERT INTO tbl_subject (subject_code, subject_name, degree_id, academic_year, semester, mandatory_subject) 
			VALUES ('$subject_code', '$subject_name', '$degree_id', '$academic_year', '$semester', '$mandatory_subject') ";
			
			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function fetchSubject ($subject_name, $degree_id, $connect) 
		{
			$query = "SELECT * FROM tbl_subject 
			WHERE subject_name = '{$subject_name}' AND degree_id = '{$degree_id}' AND is_deleted = 0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function check_subCodeToUpdate ($subject_id, $subject_code, $connect) 
		{
			$query = "SELECT * FROM tbl_subject 
			WHERE subject_code = '{$subject_code}' AND subject_id != '{$subject_id}' AND is_deleted = 0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function check_subjectToUpdate ($subject_id, $subject_name, $degree_id, $connect) 
		{
			$query = "SELECT subject_id FROM tbl_subject 
			WHERE subject_name = '{$subject_name}' AND degree_id = '{$degree_id}' AND subject_id != '{$subject_id}' AND is_deleted = 0 LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function saveUpdatedSubject ($subject_id, $subject_code, $subject_name, $degree_id, $academic_year, $semester, $connect)
		{
			$query = "UPDATE tbl_subject 
			SET subject_code = '{$subject_code}', subject_name = '{$subject_name}', degree_id = '{$degree_id}', academic_year = '{$academic_year}', semester = '{$semester}'
			WHERE subject_id = '{$subject_id}' AND is_deleted = 0";

			$result = mysqli_query($connect, $query);
            return $result;
		}

		public static function removeSubject ($subject_id, $connect)
		{
			$query = "UPDATE tbl_subject SET is_deleted = 1 WHERE subject_id = '{$subject_id}' AND is_deleted = 0 LIMIT 1";

			$result = mysqli_query($connect, $query);
			return $result;
		}
	}
?>