<?php
	class hamModel {
		public static function viewSchemes($connect) {
			$query = "SELECT schemeName, maxRoomCharge, hospitalCharges, annualPremium, gvtNoPayingWard, gvtChildBirthCover, consultantFee, spectaclesCost, permanentStaff, contractStaff, temporaryStaff 
			FROM tbl_medicalscheme 
			WHERE is_deleted=0 
			ORDER BY scheme_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
	}
?>