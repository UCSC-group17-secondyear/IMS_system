<?php
    class renewModel {

        public static function addNewChild($user_id, $name, $relationship, $dob, $healthstatus, $connect){
			$query = "INSERT INTO tbl_dependant (user_id, dependant_name, relationship, dob, health_status) VALUES ('$user_id', '$name', '$relationship', '$dob', '$healthstatus')";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function getSchemeName($user_id, $connect){
			$query = "SELECT * FROM tbl_medicalscheme INNER JOIN tbl_medical_membership ON tbl_medicalscheme.scheme_id=tbl_medical_membership.scheme_id WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function getDateDiffFromJoin($user_id,$connect){
			$query = "SELECT DATEDIFF(CURRENT_DATE(), appointment )FROM users WHERE userId={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function checkMemberType($user_id,$connect){
			$query = "SELECT member_type FROM tbl_user_flag WHERE user_id={$user_id} LIMIT 1";

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
		
		public static function updatememDetails($user_id,$civil_status, $mem_health, $connect){
			$query = "UPDATE tbl_medical_membership SET married='{$civil_status}', healthcondition='{$mem_health}' WHERE user_id={$user_id} ";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateSpouseDetails($user_id,$spouse_id, $spouse_name,$spouse_health,$spouse_dob, $connect){
			$query = "UPDATE tbl_dependant SET dependant_name='{$spouse_name}', health_status='{$spouse_health}', dob='{$spouse_dob}' WHERE user_id={$user_id} AND dependant_id={$spouse_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateChildDetails($user_id, $child_id, $child_name, $child_relation, $child_dob, $child_health, $connect){
			$query = "UPDATE tbl_dependant SET dependant_name='{$child_name}', relationship='{$child_relation}', health_status='{$child_health}', dob='{$child_dob}' WHERE user_id={$user_id} AND dependant_id={$child_id}";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function deleteSpouse($user_id, $spouse_id, $connect){
			$query = "UPDATE tbl_dependant SET is_deleted='1' WHERE user_id={$user_id} AND dependant_id={$spouse_id}";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function deleteChild($user_id, $child_id, $connect){
			$query = "UPDATE tbl_dependant SET is_deleted='1' WHERE user_id={$user_id} AND dependant_id='{$child_id}'";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function getMeidcalMemDetails($user_id, $connect){
			$query = "SELECT * FROM tbl_medical_membership WHERE user_id={$user_id} LIMIT 1";

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
        
        public static function getMemType($user_id, $connect){
			$query = "SELECT * FROM tbl_member_type INNER JOIN tbl_medical_membership ON tbl_member_type.member_id=tbl_medical_membership.member_id WHERE user_id={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getScheme($scheme_id,$connect){
			$query = "SELECT schemeName FROM tbl_medicalscheme WHERE scheme_id='{$scheme_id}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateScheme($scheme_id,$user_id, $connect){
			$query = "UPDATE tbl_medical_membership SET scheme_id='{$scheme_id}' WHERE user_id='{$user_id}'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

    }

?>