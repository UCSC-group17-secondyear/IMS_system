<?php
    class mahapolaModel {
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
        
        public static function getNominatedList($batch_no, $degreeId, $connect){
			$query = "SELECT tbl_student.student_index,tbl_student.student_initials,tbl_student.student_surname FROM tbl_student INNER JOIN tbl_student_degree ON tbl_student_degree.student_index=tbl_student.student_index WHERE tbl_student_degree.degree_id='{$degreeId}' AND batch_number='{$batch_no}' AND mahapola_nominated='1'";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }

?>