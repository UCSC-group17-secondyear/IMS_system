<?php
    class msmModel{
		public static function fetchmemberships($connect)
		{
			$query = "SELECT u.*, uf.* FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND u.is_deleted=0 AND uf.is_deleted=0 AND ORDER BY uf.user_id";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function view($user_id, $connect)
		{
			$query = "SELECT * FROM users WHERE userId='{$user_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function viewuf($user_id, $connect){
			$query = "SELECT * FROM tbl_user_flag WHERE user_id='{$user_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
		
		public static function getmail($mem_user_id, $connect)
		{
			$query = "SELECT email FROM users WHERE userId={$mem_user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function requestaccept($mem_user_id, $connect)
		{
			$query = "UPDATE tbl_user_flag SET membership_status = 1 WHERE user_id={$mem_user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function requestdecline($mem_user_id, $connect)
		{
			$query = "UPDATE tbl_user_flag SET membership_status = 0 WHERE user_id={$mem_user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getSelectedForm($claim_form_no, $connect)
		{
			$query = "SELECT u.*, cf.* FROM tbl_claimform cf, users u WHERE cf.user_id = u.userId AND cf.claim_form_no = '{$claim_form_no}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getToBePaidClaimForms($connect)
		{
            $query = "SELECT u.*, cf.* FROM tbl_claimform cf, users u WHERE cf.user_id = u.userId AND acceptance_status='1' AND paid_status='2' ORDER BY submitted_date DESC";

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

		public static function paidClaimForms($connect){
            $query = "SELECT u.*, cf.* FROM tbl_claimform cf, users u WHERE cf.user_id = u.userId AND acceptance_status='1' AND (paid_status='0' OR paid_status='1')";

            $result = mysqli_query($connect, $query);

            return $result;
        }

		public static function checkWhetherOpd($claim_form_no, $connect){
			$query = "SELECT * FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND opd_form_flag= 1 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
			
		}

		public static function checkWhetherSurgical($claim_form_no, $connect){
			$query = "SELECT * FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND surgical_form_flag= 1 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
			
        }

        public static function getMemberName($user_id,$connect ){
            $query = "SELECT initials, sname FROM users WHERE userId='{$user_id}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getReqClaimForms($connect){
            $query = "SELECT * FROM tbl_claimform WHERE acceptance_status='2' AND (DATEDIFF(CURRENT_DATE(), submitted_date )) > 2 ORDER BY submitted_date DESC";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getMedYearEndDate($bill_issused_year,$connect){
            $query = "SELECT * FROM tbl_medical_year WHERE YEAR(end_date)='{$bill_issused_year}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function updatePaidStatus($claim_form_no, $user_id, $final_bill_amount, $msm_comment, $connect){
            $query = "UPDATE tbl_claimform SET final_bill_amount='{$final_bill_amount}', msm_comment='{$msm_comment}', paid_status=1 WHERE claim_form_no=$claim_form_no AND user_id=$user_id LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function updateClaimAmount($user_id, $medical_year, $new_remain, $final_bill_amount, $connect){
            $query = "UPDATE tbl_claimdetails SET remain_amount=$new_remain, used_amount=used_amount + $final_bill_amount WHERE user_id=$user_id AND year='{$medical_year}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function updateNoPaidStatus($claim_form_no, $user_id, $msm_comment, $connect){
            $query = "UPDATE tbl_claimform SET msm_comment='{$msm_comment}', paid_status=0 WHERE claim_form_no=$claim_form_no AND user_id=$user_id LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getRejClaimForms($connect){
            $query = "SELECT u.*, cf.* FROM tbl_claimform cf, users u WHERE cf.user_id = u.userId AND acceptance_status='0'";

            $result = mysqli_query($connect, $query);

            return $result;
        }
    }
?>