<?php
	require_once('../config/database.php');

?>

<?php
	class Model {
		public static function getlogin($empid, $password, $connect)
		{
			$query = "SELECT * FROM users WHERE empid ='{$empid}' AND password='{$password}'" ;
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

		public static function view($user_id, $connect){
			$query = "SELECT * FROM users WHERE userId={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function checkEmpidTwo($empid, $user_id, $connect){
			$query = "SELECT * FROM users WHERE empid='{$empid}' AND userId!={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function update($user_id, $empid, $initials, $sname, $email, $mobile, $tp, $dob, $designation, $appointment, $connect){
			$query = "UPDATE users SET empid='{$empid}', initials='{$initials}', sname='{$sname}', email='{$email}', mobile='{$mobile}', tp='{$tp}', dob='{$dob}', designation='{$designation}', appointment='{$appointment}' WHERE userId={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updatePassword($user_id, $hashed_password, $connect){
			$query = "UPDATE users SET password = '{$hashed_password}' WHERE userId={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

            return $result;
		}
	}
?>