<?php

    class basicModel {
        public static function checkEmpid($empid, $connect) 
		{
			$query = "SELECT * FROM users WHERE empid ='{$empid}'" ;
			$result_set = mysqli_query($connect, $query);
            return $result_set;
        }
        
        public static function signup($empid, $initials, $sname, $email, $mobile, $tp, $dob, $aca_or_non, $designation, $userRole, $appointment, $password, $connect) 
		{
			$query = "INSERT INTO users (empid, initials, sname, email, mobile, tp, dob, aca_or_non, designation, appointment, userRole, password) VALUES ('$empid', '$initials', '$sname', '$email', '$mobile', '$tp', '$dob', '$aca_or_non', '$designation', '$appointment', '$userRole','$password')";
			
			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function getUId($empid, $connect)
		{
			$query = "SELECT userId FROM users WHERE empid='{$empid}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function setRole($user_id, $asm_flag, $nasm_flag,$connect)
		{
			$query = "INSERT INTO tbl_user_flag (user_id, asm_flag, nasm_flag) VALUES($user_id, $asm_flag, $nasm_flag)";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function getlogin($empid, $password, $connect)
		{	
			$query = "SELECT * FROM users WHERE empid ='{$empid}' AND password='{$password}' AND is_deleted=0" ;
			$result_set = mysqli_query($connect, $query);
            return $result_set;
		}

		public static function updatePassword($uname, $hashed_password, $connect)
		{
			$query = "UPDATE users SET password = '{$hashed_password}' WHERE empid='{$uname}' LIMIT 1";

			$result = mysqli_query($connect, $query);

            return $result;
		}
    }

?>