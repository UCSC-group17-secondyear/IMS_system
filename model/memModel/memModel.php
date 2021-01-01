<?php

	class memModel {
		public static function scheme($connect)
		{
			$query = "SELECT schemename FROM tbl_medicalscheme WHERE is_deleted=0";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}
        
		public static function viewMember($user_id, $connect){ // for opd form & surgical form
			$query = "SELECT * FROM users WHERE userId={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;

		}

		public static function checkEmpidThree($empid, $user_id, $connect){
			$query = "SELECT * FROM users WHERE empid='{$empid}' AND userId!={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function fillOpdForm($user_id, $patient_name, $relationship , $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount,  $file_name_new, $submitted_date,$connect){
			$query = "INSERT INTO tbl_claimform (user_id, patient_name, relationship,  doctor_name, treatment_received_date, bill_issued_date, purpose, bill_amount, opd_form_flag, surgical_form_flag, file_name, submitted_date) VALUES ( $user_id ,  '$patient_name' ,'$relationship', '$doctor_name' , '$treatment_received_date' ,'$bill_issued_date', '$purpose' , '$bill_amount', 1, 0, '$file_name_new','$submitted_date') ";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function fillSurgicalForm($user_id,  $address,  $patient_name, $relationship, $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of, $file_name_new, $submitted_date,$connect){
			$query = "INSERT INTO tbl_claimform (user_id, address, patient_name, relationship, accident_date, how_occured, injuries, nature_of_illness, commence_date, first_consult_date , doctor_name, doctor_address, hospitalized_date, discharged_date, illness_before, illness_before_years, sick_injury, insurer_claims, nature_of, opd_form_flag, surgical_form_flag, file_name, submitted_date) 
					  VALUES ( $user_id ,'$address','$patient_name','$relationship','$accident_date','$how_occured','$injuries','$nature_of_illness','$commence_date','$first_consult_date','$doctor_name','$doctor_address','$hospitalized_date','$discharged_date','$illness_before','$illness_before_years','$sick_injury','$insurer_claims','$nature_of', 0, 1, '$file_name_new','$submitted_date')";
					  
			$result = mysqli_query($connect, $query);
			return $result;

		}

		public static function checkClaimFormNo($claim_form_no, $user_id, $connect){
			$query = "SELECT * FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND user_id={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function checkWhetherOpd($claim_form_no,$user_id, $connect){
			$query = "SELECT * FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND user_id={$user_id} AND opd_form_flag= 1 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
			
		}

		public static function checkWhetherSurgical($claim_form_no,$user_id, $connect){
			$query = "SELECT * FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND user_id={$user_id} AND surgical_form_flag= 1 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
			
		}

		public static function opdFormIds($user_id, $connect){
		    $query = "SELECT claim_form_no FROM tbl_claimform WHERE user_id = {$user_id} AND opd_form_flag=1 AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function surgicalFormIds($user_id, $connect){
		    $query = "SELECT claim_form_no FROM tbl_claimform WHERE user_id = {$user_id} AND surgical_form_flag=1 AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateSurgicalForm($user_id, $claim_form_no,  $address,  $patient_name, $relationship, $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of,$file_name_new, $updated_date ,$connect){
			$query = "UPDATE tbl_claimform SET address='{$address}', patient_name='{$patient_name}', relationship='{$relationship}', accident_date='{$accident_date}', how_occured='{$how_occured}', injuries='{$injuries}', nature_of_illness='{$nature_of_illness}', commence_date='{$commence_date}', first_consult_date='{$first_consult_date}', doctor_name='{$doctor_name}', doctor_address='{$doctor_address}', hospitalized_date='{$hospitalized_date}', discharged_date='{$discharged_date}', 
														illness_before='{$illness_before}', illness_before_years='{$illness_before_years}', sick_injury='{$sick_injury}', insurer_claims='{$insurer_claims}', nature_of='{$nature_of}', file_name= '{$file_name_new}', updated_date= '$updated_date' WHERE user_id={$user_id} AND claim_form_no={$claim_form_no} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;

		}

		public static function updateOpdForm($user_id, $claim_form_no, $patient_name, $relationship , $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount,  $file_name_new, $updated_date, $connect){
			$query = "UPDATE tbl_claimform SET patient_name='{$patient_name}',  relationship='{$relationship}', doctor_name='{$doctor_name}', treatment_received_date='{$treatment_received_date}', bill_issued_date='{$bill_issued_date}', purpose='{$purpose}', bill_amount='{$bill_amount}', file_name= '{$file_name_new}' , updated_date= '$updated_date' WHERE user_id={$user_id} AND claim_form_no={$claim_form_no} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getSubmitDateDiff($claim_form_no, $user_id,$connect){
			$query = "SELECT DATEDIFF(CURRENT_DATE(), submitted_date )FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function deleteClaimForm($claim_form_no, $user_id, $connect){
			$query = "UPDATE tbl_claimform SET is_deleted=1 WHERE claim_form_no={$claim_form_no} AND user_id={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDateDiffFromJoin($user_id,$connect){
			$query = "SELECT DATEDIFF(CURRENT_DATE(), appointment )FROM users WHERE userId={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getMeidcalMemDetails($user_id, $connect){
			$query = "SELECT * FROM tbl_user_flag WHERE user_id={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
		
		public static function getSchemeName($user_id, $connect){
			$query = "SELECT schemename FROM tbl_user_flag WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getSubmitDate($user_id, $claim_form_no, $connect){
			$query = "SELECT submitted_date FROM tbl_claimform WHERE user_id={$user_id} AND claim_form_no={$claim_form_no} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getMoEmail($connect){
			$query = "SELECT email FROM users WHERE userRole='medicalOfficer'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getNextFormNumber($connect){
			$query = "SELECT MAX(claim_form_no) FROM tbl_claimform";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function checkMemberType($user_id,$connect){
			$query = "SELECT member_type FROM tbl_user_flag WHERE user_id={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDependantName($user_id, $connect){
			$query = "SELECT * FROM tbl_dependant WHERE user_id={$user_id} AND is_deleted='0'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function viewSchemes($connect) {
			$query = "SELECT schemeName, maxRoomCharge, hospitalCharges, annualPremium, monthlyPremium, gvtNoPayingWard, gvtChildBirthCover, travelExpensesCover, annualLimit, consultantFee, investigationsCost, spectaclesCost, permanentStaff, contractStaff, temporaryStaff 
			FROM tbl_medicalscheme 
			WHERE is_deleted=0 
			ORDER BY scheme_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function getMemType($user_id, $connect){
			$query = "SELECT member_type FROM tbl_user_flag WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getPermanentSchemes($expMonth, $connect){
			$query = "SELECT * FROM tbl_medicalscheme WHERE permanentStaff<=$expMonth";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getTemporarySchemes($expMonth, $connect){
			$query = "SELECT * FROM tbl_medicalscheme WHERE temporaryStaff<=$expMonth";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getContractSchemes($expMonth, $connect){
			$query = "SELECT * FROM tbl_medicalscheme WHERE contractStaff<=$expMonth";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getMemStatus($user_id, $connect){
			$query = "SELECT membership_status FROM tbl_user_flag WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getClaimDetails($user_id,$year,$connect){
			$query = "SELECT * FROM tbl_claimdetails WHERE user_id={$user_id} AND year={$year} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getChildDetails($user_id, $connect){
			$query = "SELECT * FROM tbl_dependant WHERE user_id={$user_id} AND (relationship='Daughter' OR relationship='Son') AND is_deleted='0'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getSpouseDetails($user_id, $connect){
			$query = "SELECT * FROM tbl_dependant WHERE user_id={$user_id} AND (relationship='Wife' OR relationship='Husband') AND is_deleted='0' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
		
		public static function updatememDetails($user_id,$civil_status, $mem_health,$scheme_name, $connect){
			$query = "UPDATE tbl_user_flag SET civilstatus='{$civil_status}', healthcondition='{$mem_health}', schemename='{$scheme_name}' WHERE user_id={$user_id} ";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateSpouseDetails($user_id, $spouse_name,$spouse_health,$spouse_dob, $connect){
			$query = "UPDATE tbl_dependant SET dependant_name='{$spouse_name}', health_status='{$spouse_health}', dob='{$spouse_dob}' WHERE user_id={$user_id} AND (relationship='Wife' OR relationship='Husband')";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateChildDetails($user_id, $child_id, $child_name, $child_relation, $child_dob, $child_health, $connect){
			$query = "UPDATE tbl_dependant SET dependant_name='{$child_name}', relationship='{$child_relation}', health_status='{$child_health}', dob='{$child_dob}' WHERE user_id={$user_id} AND dependant_id={$child_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function addNewChild($user_id, $name, $relationship, $dob, $healthstatus, $connect){
			$query = "INSERT INTO tbl_dependant (user_id, dependant_name, relationship, dob, health_status) VALUES ('$user_id', '$name', '$relationship', '$dob', '$healthstatus')";

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

		public static function addSpouseDetails($user_id, $spouse_name, $spouse_relationship,$spouse_dob, $spouse_healthstatus, $connect){
			$query = "INSERT INTO tbl_dependant (user_id, dependant_name, relationship, dob, health_status) VALUES ('$user_id', '$spouse_name', '$spouse_relationship', '$spouse_dob', '$spouse_healthstatus')";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function deleteDependant($user_id, $connect){
			$query = "UPDATE tbl_dependant SET is_deleted='1' WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}
		
	}
?>