<?php

	class mmModel {
		public static function getStuDetailsIndex($student_index, $connect){
			$query = "SELECT * FROM tbl_student WHERE student_index={$student_index} LIMIT 1 ";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getStuDetailsName($student_initials,$student_surname, $connect){
			$query = "SELECT * FROM tbl_student WHERE student_intials='{$student_initials}' AND student_surname='{$student_surname}' LIMIT 1 ";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getStudentDegree($student_index, $connect){
			$query = "SELECT degree_name FROM tbl_degree INNER JOIN tbl_student_degree ON tbl_degree.degree_id=tbl_student_degree.degree_id WHERE student_index='{$student_index}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateMahapolaStuDetails($student_index, $mahapola_nominated, $mahapola_category, $connect){
			$query = "UPDATE tbl_student SET mahapola_nominated={$mahapola_nominated} , mahapola_category='{$mahapola_category}' WHERE student_index='{$student_index}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function viewSchemes($connect) {
			$query = "SELECT schemeName, maxRoomCharge, hospitalCharges, annualPremium, monthlyPremium, gvtNoPayingWard, gvtChildBirthCover, travelExpensesCover, annualLimit, consultantFee, investigationsCost, spectaclesCost, permanentStaff, contractStaff, temporaryStaff 
			FROM tbl_medicalscheme 
			WHERE is_deleted=0 
			ORDER BY scheme_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		} 

		public static function getBatchNumbers($connect){
			$query = "SELECT DISTINCT batch_number FROM tbl_student ORDER BY batch_number ASC";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDegrees($connect){
			$query = "SELECT * FROM tbl_degree";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		// public static function getDegreeId($degree, $connect){
		// 	$query = "SELECT degree_id FROM tbl_degree WHERE degree_abbriviation='{$degree}'";

		// 	$result = mysqli_query($connect, $query);

		// 	return $result;
		// }

		public static function getNominatedList($batch_no, $degreeId, $connect){
			$query = "SELECT tbl_student.student_index,tbl_student.student_initials,tbl_student.student_surname FROM tbl_student INNER JOIN tbl_student_degree ON tbl_student_degree.student_index=tbl_student.student_index WHERE tbl_student_degree.degree_id='{$degreeId}' AND batch_number='{$batch_no}' AND mahapola_nominated='1'";

			$result = mysqli_query($connect, $query);

			return $result;
		}
	}
?>