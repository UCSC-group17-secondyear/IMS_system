<?php
    class rvModel{
		public static function fetchmemberships($connect)
		{
			$query = "SELECT u.*, mm.*, d.* FROM users u, tbl_medical_membership mm, tbl_department d WHERE d.department_id = mm.department_id AND u.userId = mm.user_id AND u.is_deleted=0 AND mm.is_deleted=0 AND NOT acceptance_status = 3 ORDER BY mm.user_id";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function view($user_id, $connect)
		{
			$query = "SELECT * FROM users WHERE userId='{$user_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function viewmm($user_id, $connect){
			$query = "SELECT mm.*, m.*, d.*, ms.* FROM tbl_medical_membership mm, tbl_department d, tbl_medicalscheme ms, tbl_member_type m WHERE m.member_id = mm.member_id AND d.department_id = mm.department_id AND ms.scheme_id = mm.scheme_id AND user_id='{$user_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
		
		public static function getRefClaimForms($connect){
            $query = "SELECT u.*, cf.* FROM tbl_claimform cf, users u WHERE cf.user_id = u.userId AND (acceptance_status='0' OR acceptance_status='1') ORDER BY claim_form_no DESC";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function checkWhetherOpd($claim_form_no, $connect)
        {
			$query = "SELECT cf.*, d.* FROM tbl_claimform cf, tbl_dependant d WHERE d.dependant_id = cf.dependant_id AND claim_form_no={$claim_form_no} AND opd_form_flag= 1 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function checkWhetherSurgical($claim_form_no, $connect)
        {
			$query = "SELECT cf.*, d.* FROM tbl_claimform cf, tbl_dependant d WHERE d.dependant_id = cf.dependant_id AND claim_form_no={$claim_form_no} AND surgical_form_flag= 1 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }

        public static function getMemberName($user_id,$connect ){
            $query = "SELECT initials, sname FROM users WHERE userId='{$user_id}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getReqClaimForms($connect){
            $query = "SELECT u.*, cf.* FROM tbl_claimform cf, users u WHERE cf.user_id = u.userId AND acceptance_status='2' AND (DATEDIFF(CURRENT_DATE(), submitted_date )) > 2 ORDER BY submitted_date DESC";

            $result = mysqli_query($connect, $query);

            return $result;
        }

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
            $query = "SELECT department FROM tbl_department";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getMemIds($year, $connect){
            $query = "SELECT user_id FROM tbl_claimdetails WHERE year='{$year}'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getMemDepartment($connect, $id){
            $query = "SELECT department FROM tbl_medical_membership WHERE user_id='{$id}'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getMemAmountDet($connect, $id){
            $query = "SELECT initial_amount,used_amount,remain_amount FROM tbl_claimdetails WHERE user_id='{$id}'";
        
            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getYearInitAmount($year, $connect){
            $query = "SELECT SUM(initial_amount) FROM tbl_claimdetails WHERE year='{$year}'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getYearUsedAmount($year, $connect){
            $query = "SELECT SUM(used_amount) FROM tbl_claimdetails WHERE year='{$year}'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getYearRemainAmount($year, $connect){
            $query = "SELECT SUM(remain_amount) FROM tbl_claimdetails WHERE year='{$year}'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getYearAmount($year, $connect){
            $query = "SELECT SUM(initial_amount) AS init_amount,SUM(used_amount) AS used_amount,SUM(remain_amount) AS remain_amount FROM tbl_claimdetails WHERE year='{$year}'";

            $result = mysqli_query($connect, $query);

            return $result;
        }
    }
?>