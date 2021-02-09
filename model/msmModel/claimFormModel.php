<?php
    class claimFormModel {
        public static function getToBePaidClaimForms($connect){
            $query = "SELECT * FROM tbl_claimform WHERE acceptance_status='1' AND paid_status='2' ORDER BY submitted_date DESC";

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
    }
?>