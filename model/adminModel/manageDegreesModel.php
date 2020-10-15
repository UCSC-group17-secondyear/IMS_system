<?php
	class adminModel {
		public static function addDegree($degree_name, $degree_abbriviation, $connect) 
		{
			$checkquery = "SELECT * FROM degrees WHERE degree_abbriviation ='{$degree_abbriviation}'" ;

			// if ($checkquery) {
			// 	echo "Degree already exists in the database.";
			// }
			// else {
				$query = "INSERT INTO degrees (degree_name, degree_abbriviation) 
					VALUES('$degree_name', '$degree_abbriviation')";
			
				if($connect->query($query))
					return true;
			// }
		}
	}
?>