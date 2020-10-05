<?php
	class Model {
		public function getloginM($empid, $connect)
		{
			$query = "SELECT * FROM users WHERE empid ='{$empid}'";
			$result_set = mysqli_query($connect, $query);
            return $result_set;
		}

		public function signupM($empid,$initials,$sname,$email,$mobile,$tp,$dob,$designation,$appointment,$password, $connect) {
			$query = "INSERT INTO users (empid, initials, sname, email, mobile, tp, dob, designation, appointment, password) VALUES('$empid', '$initials', '$sname', '$email', '$mobile', '$tp', '$dob', '$designation', '$appointment', '$password')";
			if($connect->query($query))
				return true;
			// $testquery = "SELECT * FROM users WHERE empid ='{$empid}' LIMIT 1";
			// $result_set = mysqli_query($connect, $testquery);
   //          return $result_set;
		}

		/*public function signupM($empid, $connect){
			$query = "INSERT INTO test(test) VALUES ('$empid')";
			
			if($connect->query($query)){
				echo "auhfuoab";
			}
			else
				echo "huu huuu";
			

		}*/
	}
?>