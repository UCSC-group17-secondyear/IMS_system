<?php
	require_once('../config/database.php');

?>

<?php
	class Model {
		public static function getlogin($empid, $password, $connect)
		{	
			$query = "SELECT * FROM users WHERE empid ='{$empid}' AND password='{$password}' AND is_deleted=0" ;
			$result_set = mysqli_query($connect, $query);
            return $result_set;
		}

		public static function checkEmpid($empid, $connect) 
		{
			$query = "SELECT * FROM users WHERE empid ='{$empid}'" ;
			$result_set = mysqli_query($connect, $query);
            return $result_set;
		}

		public static function signup($empid, $initials, $sname, $email, $mobile, $tp, $dob, $designation, $appointment, $password, $connect) 
		{
			$query = "INSERT INTO users (empid, initials, sname, email, mobile, tp, dob, designation, appointment, password) VALUES('$empid', '$initials', '$sname', '$email', '$mobile', '$tp', '$dob', '$designation', '$appointment', '$password')";
			
			if($connect->query($query))
				return true;
		}

		public static function view($user_id, $connect)
		{
			$query = "SELECT * FROM users WHERE userId={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function checkEmpidTwo($empid, $user_id, $connect)
		{
			$query = "SELECT * FROM users WHERE empid='{$empid}' AND userId!={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function update($user_id, $empid, $initials, $sname, $email, $mobile, $tp, $dob, $designation, $appointment, $connect)
		{
			$query = "UPDATE users SET empid='{$empid}', initials='{$initials}', sname='{$sname}', email='{$email}', mobile='{$mobile}', tp='{$tp}', dob='{$dob}', designation='{$designation}', appointment='{$appointment}' WHERE userId={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updatePassword($empid, $hashed_password, $connect)
		{
			$query = "UPDATE users SET password = '{$hashed_password}' WHERE empid='{$empid}' LIMIT 1";

			$result = mysqli_query($connect, $query);

            return $result;
		}

		public static function setUserRole($empid, $userRole, $connect)
		{
			$query = "UPDATE users SET userRole = '{$userRole}' WHERE empid='{$empid}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function viewList($connect)
		{
			$query = "SELECT * FROM users WHERE is_deleted=0 ORDER BY empid";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function deleteUser($user_id , $connect)
		{
			$query = "UPDATE users SET is_deleted = 1 WHERE userId={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function checkEmpidThree($empid, $user_id, $connect){
			$query = "SELECT * FROM users WHERE empid='{$empid}' AND userId!={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function fillOpdForm($user_id, $department, $patientname, $relationship , $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount, $opd_form_flag, $surgical_form_flag,  $connect){
			$query = "INSERT INTO tbl_claimform (user_id,  department, patientname, relationship,  doctor_name, treatment_received_date, bill_issued_date, purpose, bill_amount, opd_form_flag, surgical_form_flag) VALUES ( $user_id , '$department', '$patientname' ,'$relationship', '$doctor_name' , '$treatment_received_date' ,'$bill_issued_date', '$purpose' , '$bill_amount', 1, 0) ";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		
	}
?>