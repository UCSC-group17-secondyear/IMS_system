<?php

	class memModel {
		public static function scheme($connect)
		{
			$query = "SELECT schemeName FROM tbl_medicalscheme WHERE is_deleted=0";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}
        
		public static function viewMember($user_id, $connect){ // for opd form & surgical form
			$query = "SELECT * FROM users WHERE userId='{$user_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;

		}

		public static function getPermanentSchemes($expMonth, $connect){
			$query = "SELECT * FROM tbl_medicalscheme WHERE permanentStaff<=$expMonth AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getTemporarySchemes($expMonth, $connect){
			$query = "SELECT * FROM tbl_medicalscheme WHERE temporaryStaff<=$expMonth AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getContractSchemes($expMonth, $connect){
			$query = "SELECT * FROM tbl_medicalscheme WHERE contractStaff<=$expMonth AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getMemStatus($user_id, $connect){
			$query = "SELECT membership_status FROM tbl_medical_membership WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getClaimDetails($user_id,$year,$connect){
			$query = "SELECT * FROM tbl_claimdetails WHERE user_id={$user_id} AND year={$year} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getMemYears($connect){
			$query = "SELECT medical_year FROM tbl_medical_year";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getCivilStatus($connect){
			$query = "SELECT * FROM tbl_civilstatus";

			$result = mysqli_query($connect, $query);

			return $result;
		}
		
		public static function getInitAmount($s_id, $connect){
			$query = "SELECT (maxRoomCharge + hospitalCharges + gvtNoPayingWard + gvtChildBirthCover + consultantFee + spectaclesCost) AS SUM FROM tbl_medicalscheme WHERE scheme_id='$s_id'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function addYearClaimDetails($user_id, $cur_year,$s_id, $amount, $connect ){
			$query = "INSERT INTO tbl_claimdetails (user_id, year, scheme, initial_amount,remain_amount) VALUES ($user_id, '$cur_year', '$s_id', '$amount','$amount')";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function checkClaimDetYear($user_id, $cur_year, $connect){
			$query = "SELECT * FROM tbl_claimdetails WHERE user_id='{$user_id}' AND year='{$cur_year}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getSchemeId($scheme_name,$connect){
			$query = "SELECT * FROM tbl_medicalscheme WHERE schemeName='{$scheme_name}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getSchemeName($scheme_id,$connect){
			$query = "SELECT * FROM tbl_medicalscheme WHERE scheme_id='{$scheme_id}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
	}
?>