<?php
	class amModel {
		public static function getDegreeList($connect) {
			$query = "SELECT * FROM tbl_degree WHERE is_deleted = 0 ORDER BY degree_id ASC";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function degreeId ($degree_name, $connect) {
			$query = "SELECT * FROM tbl_degree WHERE degree_name = '{$degree_name}' AND is_deleted = 0 LIMIT 1";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function get_degree_name ($degree_id, $connect) {
			$query = "SELECT * FROM tbl_degree WHERE degree_id = '{$degree_id}' AND is_deleted = 0 LIMIT 1";

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

		public static function addStudent ($index_no, $registration_no, $initials, $last_name, $email, $academic_year, $semester, $degree_id, $batch_number, $connect) 
		{
			$query = "INSERT INTO tbl_students (index_no, registration_no, initials, last_name, email, academic_year, semester, degree_id, batch_number) 
			VALUES('$index_no', '$registration_no', '$initials', '$last_name', '$email', '$academic_year', '$semester', '$degree_id', '$batch_number')";
			
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

		public static function check_assignedSub ($std_id, $subject_id, $connect) {
			
			$query = "SELECT * FROM tbl_std_nonMandatorySub WHERE std_id = '{$std_id}' AND subject_id = '{$subject_id}' AND is_deleted = 0 ";
			
			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}
		
		public static function assignSubject ($std_id, $subject_id, $connect) {
			
			$query = "INSERT INTO tbl_std_nonMandatorySub (std_id, subject_id) 
			VALUES('$std_id', '$subject_id')";
			
			if($connect->query($query))
				return true;
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

		public static function get_mandatorySubjects ($degree_id, $academic_year, $semester, $connect)
		{
			$query = "SELECT * FROM tbl_subject 
			WHERE degree_id = '{$degree_id}' AND academic_year = '{$academic_year}' AND semester = '{$semester}' AND mandatory_subject = 1 AND is_deleted = 0 ";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function get_nonMandatorySubjects ($degree_id, $academic_year, $semester, $connect)
		{
			$query = "SELECT * FROM tbl_subject 
			WHERE degree_id = '{$degree_id}' AND academic_year = '{$academic_year}' AND semester = '{$semester}' AND mandatory_subject = 0 AND is_deleted = 0 ";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function get_assignedNonMandatorySubjects ($std_id, $connect)
		{
			$query = "SELECT * FROM tbl_std_nonmandatorysub 
			WHERE std_id = '{$std_id}' AND is_deleted = 0 ";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function get_Subjects ($subject_id, $connect)
		{
			$query = "SELECT * FROM tbl_subject 
			WHERE subject_id = '{$subject_id}' AND is_deleted = 0 ";

			$result_set = mysqli_query($connect, $query);
			return $result_set;
		}

		public static function removeSubject ($std_id, $subject_id, $connect)
		{
			$query = "UPDATE tbl_std_nonmandatorysub SET is_deleted = 1
			WHERE std_id = '{$std_id}' AND subject_id = '{$subject_id}' AND is_deleted = 0 
			LIMIT 1";
			
			$result = mysqli_query($connect, $query);
			return $result;
		}
	}
?>