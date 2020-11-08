<?php
	class adminModel {
		public static function addScheme ($schemeName, $maxRoomCharge, $hospitalCharges, $annualPremium, $monthlyPremium, $gvtNoPayingWard, $gvtChildBirthCover, $travelExpensesCover, $annualLimit, $consultantFee, $investigationsCost,  $spectaclesCost, $permanentStaff, $contractStaff, $temporaryStaff, $connect) {
			$checkquery = "SELECT * FROM medicalschemes WHERE schemeName ='{$schemeName}'" ;

			if ($checkquery) {
				echo "Scheme name already exists.";
			}
			else {
				$query = "INSERT INTO tbl_medicalscheme (schemeName, maxRoomCharge, hospitalCharges, annualPremium, monthlyPremium, gvtNoPayingWard, gvtChildBirthCover, travelExpensesCover, annualLimit, consultantFee, investigationsCost, spectaclesCost, permanentStaff, contractStaff, temporaryStaff) 
					VALUES('$schemeName', '$maxRoomCharge', '$hospitalCharges', '$annualPremium', '$monthlyPremium', '$gvtNoPayingWard', '$gvtChildBirthCover', '$travelExpensesCover', '$annualLimit', '$consultantFee', '$investigationsCost', '$spectaclesCost', '$permanentStaff', '$contractStaff', '$temporaryStaff')";
			
				if($connect->query($query))
					return true;
			}
		}

		public static function viewSchemes($connect) {
			$query = "SELECT schemeName, maxRoomCharge, hospitalCharges, annualPremium, monthlyPremium, gvtNoPayingWard, gvtChildBirthCover, travelExpensesCover, annualLimit, consultantFee, investigationsCost, spectaclesCost, permanentStaff, contractStaff, temporaryStaff 
			FROM tbl_medicalscheme 
			WHERE is_deleted=0 
			ORDER BY scheme_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getScheme($schemeName, $connect) {
			$query = "SELECT schemeName, maxRoomCharge, hospitalCharges, annualPremium, monthlyPremium, gvtNoPayingWard, gvtChildBirthCover, travelExpensesCover, annualLimit, consultantFee, investigationsCost, spectaclesCost, permanentStaff, contractStaff, temporaryStaff 
			FROM tbl_medicalscheme 
			WHERE schemeName='$schemeName' AND is_deleted=0 
			ORDER BY scheme_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function updateScheme ($schemeName, $maxRoomCharge, $hospitalCharges, $annualPremium, $monthlyPremium, $gvtNoPayingWard, $gvtChildBirthCover, $travelExpensesCover, $annualLimit, $consultantFee, $investigationsCost,  $spectaclesCost, $permanentStaff, $contractStaff, $temporaryStaff, $connect) {
			
				$query = "UPDATE tbl_medicalscheme 
				SET maxRoomCharge='{$maxRoomCharge}', hospitalCharges='{$hospitalCharges}', annualPremium='{$annualPremium}', monthlyPremium='{$monthlyPremium}', gvtNoPayingWard='{$gvtNoPayingWard}', gvtChildBirthCover='{$gvtChildBirthCover}', travelExpensesCover='{$travelExpensesCover}', annualLimit='{$annualLimit}', consultantFee='{$consultantFee}', investigationsCost='{$investigationsCost}', spectaclesCost='{$spectaclesCost}', permanentStaff ='{$permanentStaff}', contractStaff ='{$contractStaff}', temporaryStaff ='{$temporaryStaff}'
					
					WHERE schemeName='{$schemeName}' ";
			
				if($connect->query($query))
					return true;
			}
	}
?>