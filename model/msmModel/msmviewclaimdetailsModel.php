<?php
    class msmModel{
        public static function getMemYears($connect){
			$query = "SELECT medical_year FROM tbl_medical_year";

			$result = mysqli_query($connect, $query);

			return $result;
        }

        public static function getUserId($emp_id, $connect){
            $query = "SELECT userId FROM users WHERE empid='{$emp_id}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getMembClaimDetails($id, $year, $connect){
            $query = "SELECT * FROM tbl_claimdetails WHERE user_id='{$id}' AND year='{$year}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function viewDept($connect){
            $query = "SELECT * FROM tbl_department";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getMemIds($year, $connect){
            $query = "SELECT user_id FROM tbl_claimdetails WHERE year='{$year}'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getMemDepartment($connect, $id){
            $query = "SELECT department_id FROM tbl_medical_membership WHERE user_id='{$id}'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getMemAmountDet($connect, $id, $year){
            $query = "SELECT initial_amount,used_amount,remain_amount FROM tbl_claimdetails WHERE user_id='{$id}' AND year='{$year}'";
        
            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getYearAmount($year, $connect){
            $query = "SELECT SUM(initial_amount) AS init_amount, SUM(used_amount) AS used_amount, SUM(remain_amount) AS remain_amount FROM tbl_claimdetails WHERE year='{$year}'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getSchemeName($scheme,$connect){
            $query = "SELECT * FROM tbl_medicalscheme WHERE scheme_id = '{$scheme}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getDeptName($dept,$connect){
            $query = "SELECT department FROM tbl_department WHERE department_id='{$dept}'";

            $result = mysqli_query($connect, $query);

            return $result;
        }
    }
?>