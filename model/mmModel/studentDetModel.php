<?php
    class studentDetModel {
        public static function getBatchNumbers($connect){
			$query = "SELECT DISTINCT batch_number FROM tbl_students ORDER BY batch_number ASC";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDegrees($connect){
			$query = "SELECT * FROM tbl_degree";

			$result = mysqli_query($connect, $query);

			return $result;
		}

        public static function getStudentList($batch_number, $degree, $connect){
            $query = "SELECT * FROM tbl_students WHERE batch_number='{$batch_number}' AND degree_id='{$degree}' AND is_std='0'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getStuDetails($student_id, $connect){
            $query = "SELECT * FROM tbl_students WHERE std_id = '{$student_id}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function updateMahapolaStuDetails($stu_id, $mahapola_nominated, $mahapola_category, $connect){
			$query = "UPDATE tbl_students SET mahapola_nominated={$mahapola_nominated} , mahapola_category='{$mahapola_category}' WHERE std_id='{$stu_id}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

        public static function getNominatedList($batch_no, $degree, $connect){
            $query = "SELECT * FROM tbl_students WHERE (batch_number = '{$batch_no}' AND degree_id='{$degree}' AND mahapola_nominated='1' AND is_std='0')";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getStuDegree($degree,$connect){
			$query = "SELECT * FROM tbl_degree WHERE degree_id='{$degree}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }

?>