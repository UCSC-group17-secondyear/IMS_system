<?php
    class claimFormModel {
        public static function getRefClaimForms($connect){
            $query = "SELECT * FROM tbl_claimform WHERE (acceptance_status='0' OR acceptance_status='1')";

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
            $query = "SELECT * FROM tbl_claimform WHERE acceptance_status='2' AND (DATEDIFF(CURRENT_DATE(), submitted_date )) > 2";

            $result = mysqli_query($connect, $query);

            return $result;
        }
    }


?>