<?php
    class claimFormModel {

        public static function getReqClaimForms($connect){
            $query = "SELECT * FROM tbl_claimform WHERE acceptance_status='2' AND (DATEDIFF(CURRENT_DATE(), submitted_date )) > 2";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getSubmitDateDiff($claim_form_no,$connect){
			$query = "SELECT DATEDIFF(CURRENT_DATE(), submitted_date )FROM tbl_claimform WHERE claim_form_no={$claim_form_no}";

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

        public static function acceptReqClaimForm($claim_form_no, $revised_amount, $connect){
            $query = "UPDATE tbl_claimform SET acceptance_status='1',revised_bill_amount='{$revised_amount}' WHERE claim_form_no='{$claim_form_no}'";
            
            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function rejectReqClaimForm($claim_form_no, $connect){
            $query = "UPDATE tbl_claimform SET acceptance_status='0',paid_status='0' WHERE claim_form_no='{$claim_form_no}'";
            
            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getApporvedForms($connect){
            $query = "SELECT * FROM tbl_claimform WHERE acceptance_status='1' ORDER BY submitted_date DESC";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getRejectedForms($connect){
            $query = "SELECT * FROM tbl_claimform WHERE acceptance_status='0' ORDER BY submitted_date DESC";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getMemberName($user_id,$connect ){
            $query = "SELECT initials, sname FROM users WHERE userId='{$user_id}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }
    }
    
?>