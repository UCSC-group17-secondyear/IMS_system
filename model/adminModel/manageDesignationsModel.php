<?php

    class adminModel {
        public static function checkDesignationName($designation, $connect) 
		{	
            $query = "SELECT * FROM tbl_designation WHERE designation_name ='{$designation}' AND is_deleted=0" ;
            
            $result_set = mysqli_query($connect, $query);
            
            return $result_set;
        }
        
        public static function enterDesignation($designation, $description, $connect)
		{
			$query = "INSERT INTO tbl_designation (designation_name, description) VALUES('$designation','$description')";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function viewDesignations($connect)
		{
			$query = "SELECT * FROM tbl_designation WHERE is_deleted=0 ORDER BY designation_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function isEmptyDesig($connect)
		{
			$query = "SELECT COUNT(designation_id) FROM tbl_designation";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function viewADesign($designation_id, $connect)
		{
			$query = "SELECT * FROM tbl_designation WHERE designation_id={$designation_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function checkDesignThree($designation_id, $designation, $connect)
		{
			$query = "SELECT * FROM tbl_designation WHERE designation_name='{$designation}' AND designation_id!={$designation_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;	
        }
        
        public static function updateDesignation($designation_id, $designation, $description, $connect)
		{
			$query = "UPDATE tbl_designation SET designation_name='{$designation}', description='{$description}' WHERE designation_id={$designation_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function deleteDesignation($designation_id, $connect)
		{
			$query = "UPDATE tbl_designation SET is_deleted = 1 WHERE designation_id={$designation_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function designation($connect)
		{
			$query = "SELECT designation_name FROM tbl_designation WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
        }
        
        public static function viewADesignUsingName($designation, $connect)
		{
			$query = "SELECT * FROM tbl_designation WHERE designation_name='{$designation}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function deleteDesignUsingName($designation, $connect)
		{
			$query = "UPDATE tbl_designation SET is_deleted = 1 WHERE designation_name='{$designation}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getPost($connect)
		{
			$query = "SELECT post_name FROM tbl_post WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}
    }

?>