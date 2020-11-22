<?php
	include_once('../config/database.php');
?>

<?php

	class mmModel {
		public static function getStuDetailsIndex($student_index, $connect){
			$query = "SELECT * FROM tbl_student WHERE student_index={$student_index} LIMIT 1 ";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getStuDetailsName($student_initials,$student_surname, $connect){
			$query = "SELECT * FROM tbl_student WHERE student_intials={$student_initials} AND student_surname={$student_surname} LIMIT 1 ";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function markStudentMahapola($student_index,$mahapola_category, $mahapola_eligibility, $connect){
			$query = "UPDATE tbl_student SET mahapola_category={'$mahapola_category'} , mahapola_eligibility={'$mahapola_eligibility'} WHERE student_index={'$student_index'} LIMIT 1";

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
	}
?>