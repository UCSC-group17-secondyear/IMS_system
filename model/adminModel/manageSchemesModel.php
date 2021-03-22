<?php
	class adminModel {
		public static function checkScheme($schemeName, $connect) {
			$query = "SELECT * FROM tbl_medicalscheme WHERE schemeName ='{$schemeName}' AND is_deleted=0" ;
			$result_set = mysqli_query($connect, $query);
            return $result_set;
		}

		public static function addScheme ($schemeName, $maxRoomCharge, $hospitalCharges, $annualPremium, $gvtNoPayingWard, $gvtChildBirthCover, $consultantFee, $spectaclesCost, $permanentStaff, $contractStaff, $temporaryStaff, $connect) {
			
			$query = "INSERT INTO tbl_medicalscheme (schemeName, maxRoomCharge, hospitalCharges, annualPremium, gvtNoPayingWard, gvtChildBirthCover, consultantFee, spectaclesCost, permanentStaff, contractStaff, temporaryStaff)
			VALUES('$schemeName', '$maxRoomCharge', '$hospitalCharges', '$annualPremium', '$gvtNoPayingWard', '$gvtChildBirthCover', '$consultantFee', '$spectaclesCost', '$permanentStaff', '$contractStaff', '$temporaryStaff')";
			
				$result_set = mysqli_query($connect, $query);
            	return $result_set;
		}

		public static function viewSchemes($connect) {
			$query = "SELECT schemeName, maxRoomCharge, hospitalCharges, annualPremium, gvtNoPayingWard, gvtChildBirthCover, consultantFee, spectaclesCost, permanentStaff, contractStaff, temporaryStaff 
			FROM tbl_medicalscheme 
			WHERE is_deleted=0 
			ORDER BY scheme_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getScheme($schemeName, $connect) {
			$query = "SELECT schemeName, maxRoomCharge, hospitalCharges, annualPremium, gvtNoPayingWard, gvtChildBirthCover, consultantFee, spectaclesCost, permanentStaff, contractStaff, temporaryStaff 
			FROM tbl_medicalscheme 
			WHERE schemeName='$schemeName' AND is_deleted=0 
			ORDER BY scheme_id";

			$result_set = $connect->query($query);

			return $result_set;
		}

		public static function updateScheme ($schemeName, $maxRoomCharge, $hospitalCharges, $annualPremium, $gvtNoPayingWard, $gvtChildBirthCover, $consultantFee, $spectaclesCost, $permanentStaff, $contractStaff, $temporaryStaff, $connect) {
			
			$query = "UPDATE tbl_medicalscheme 
			SET maxRoomCharge='{$maxRoomCharge}', hospitalCharges='{$hospitalCharges}', annualPremium='{$annualPremium}', gvtNoPayingWard='{$gvtNoPayingWard}', gvtChildBirthCover='{$gvtChildBirthCover}', consultantFee='{$consultantFee}', spectaclesCost='{$spectaclesCost}', permanentStaff ='{$permanentStaff}', contractStaff ='{$contractStaff}', temporaryStaff ='{$temporaryStaff}'
				
				WHERE schemeName='{$schemeName}' ";
		
			if($connect->query($query))
				return true;
		}

		public static function getSchemeNames($connect)
		{
			$query = "SELECT schemeName FROM tbl_medicalscheme WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function removeScheme($schemeName, $connect) {
			$query = "UPDATE tbl_medicalscheme SET is_deleted=1 
			WHERE schemeName = '{$schemeName}'";

			// $result_set = mysqli_query($connect, $query);
			
			if($connect->query($query))
				return true;
		}
	}
?>