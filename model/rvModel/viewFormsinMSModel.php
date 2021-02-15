<?php
    class rvModel{
		public static function fetchmemberships($connect)
		{
			$query = "SELECT u.*, uf.* FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND u.is_deleted=0 AND uf.is_deleted=0 ORDER BY uf.user_id";

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
		
		public static function getRefClaimForms($connect){
            $query = "SELECT * FROM tbl_claimform WHERE (acceptance_status='0' OR acceptance_status='1') ORDER BY claim_form_no DESC";

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
    }
?>