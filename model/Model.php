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

		public function signup($empid, $initials, $sname, $email, $mobile, $tp, $dob, $designation, $appointment, $password, $connect) 
		{
			$query = "INSERT INTO users (empid, initials, sname, email, mobile, tp, dob, designation, appointment, password) VALUES('$empid', '$initials', '$sname', '$email', '$mobile', '$tp', '$dob', '$designation', '$appointment', '$password')";
			
			if($connect->query($query))
				return true;
		}
	}
?>