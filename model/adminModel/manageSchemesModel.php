<?php
	class adminModel {
		public static function addScheme ($schemeName, $maxRoomCharge, $hospitalCharges, $annualPremium, $monthlyPremium, $gvtNoPayingWard, $gvtChildBirthCover, $travelExpensesCover, $annualLimit, $consultantFee, $investigationsCost,  $spectaclesCost, $eleigibilityConditions, $connect) 
		{
			// $checkquery = "SELECT * FROM medicalschemes WHERE schemeName ='{$schemeName}'" ;

			// if ($checkquery) {
			// 	echo "Scheme name already exists.";
			// }
			// else {
				$query = "INSERT INTO medicalschemes (schemeName, maxRoomCharge, hospitalCharges, annualPremium, monthlyPremium, gvtNoPayingWard, gvtChildBirthCover, travelExpensesCover, annualLimit, consultantFee, investigationsCost, spectaclesCost, eleigibilityConditions) 
					VALUES('$schemeName', '$maxRoomCharge', '$hospitalCharges', '$annualPremium', '$monthlyPremium', '$gvtNoPayingWard', '$gvtChildBirthCover', '$travelExpensesCover', '$annualLimit', '$consultantFee', '$investigationsCost', '$spectaclesCost', '$eleigibilityConditions')";
			
				if($connect->query($query))
					return true;
			// }
		}
	}
?>