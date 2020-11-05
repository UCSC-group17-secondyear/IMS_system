<?php
	class adminModel {
		public static function addScheme ($schemeName, $maxRoomCharge, $hospitalCharges, $annualPremium, $monthlyPremium, $gvtNoPayingWard, $gvtChildBirthCover, $travelExpensesCover, $annualLimit, $consultantFee, $investigationsCost,  $spectaclesCost, $eleigibilityConditions, $connect) {
			// $checkquery = "SELECT * FROM medicalschemes WHERE schemeName ='{$schemeName}'" ;

			// if ($checkquery) {
			// 	echo "Scheme name already exists.";
			// }
			// else {
				$query = "INSERT INTO tbl_medicalscheme (schemeName, maxRoomCharge, hospitalCharges, annualPremium, monthlyPremium, gvtNoPayingWard, gvtChildBirthCover, travelExpensesCover, annualLimit, consultantFee, investigationsCost, spectaclesCost, eleigibilityConditions) 
					VALUES('$schemeName', '$maxRoomCharge', '$hospitalCharges', '$annualPremium', '$monthlyPremium', '$gvtNoPayingWard', '$gvtChildBirthCover', '$travelExpensesCover', '$annualLimit', '$consultantFee', '$investigationsCost', '$spectaclesCost', '$eleigibilityConditions')";
			
				if($connect->query($query))
					return true;
			// }
		}

		public static function viewSchemes($connect) {
			$query = "SELECT schemeName, maxRoomCharge, hospitalCharges, annualPremium, monthlyPremium, gvtNoPayingWard, gvtChildBirthCover, travelExpensesCover, annualLimit, consultantFee, investigationsCost, spectaclesCost, eleigibilityConditions 
			FROM tbl_medicalscheme 
			WHERE is_deleted=0 
			ORDER BY scheme_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>