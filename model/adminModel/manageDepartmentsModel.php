<?php

    class adminModel {
        public static function checkDeptName($dept_name, $connect) 
		{	
            $query = "SELECT * FROM tbl_department WHERE department ='{$dept_name}' AND is_deleted=0" ;
            
            $result_set = mysqli_query($connect, $query);
            
            return $result_set;
        }
        
        public static function enterDepartment($dept_name, $abbr, $dept_head, $dept_head_email, $connect)
		{
			$query = "INSERT INTO tbl_department (department, department_abbriviation, department_head, department_head_email) VALUES('$dept_name', '$abbr', '$dept_head', '$dept_head_email')";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function viewDepartments($connect) 
		{
			$query = "SELECT * FROM tbl_department WHERE is_deleted=0 ORDER BY department_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function isEmptyDept($connect)
		{
			$query = "SELECT COUNT(department_id) FROM tbl_department";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function viewADept($dept_id, $connect)
		{
			$query = "SELECT * FROM tbl_department WHERE department_id='{$dept_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function checkDeptThree($dept_id, $department, $connect)
		{
			$query = "SELECT * FROM tbl_department WHERE department='{$department}' AND department_id!={$dept_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;	
        }
        
        public static function updateDepartment($dept_id, $department, $department_head, $department_head_email, $abbriviation, $connect)
		{
			$query = "UPDATE tbl_department SET department='{$department}', department_head='{$department_head}', department_head_email='{$department_head_email}', department_abbriviation='{$abbriviation}' WHERE department_id={$dept_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function deleteDepartment($dept_id, $connect)
		{
			$query = "UPDATE tbl_department SET is_deleted = 1 WHERE department_id={$dept_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function department($connect)
		{
			$query = "SELECT department FROM tbl_department WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
        }
        
        public static function viewADeptUsingName($department, $connect)
		{
			$query = "SELECT * FROM tbl_department WHERE department='{$department}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function deleteDeptUsingName($department, $connect)
		{
			$query = "UPDATE tbl_department SET is_deleted = 1 WHERE department='{$department}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
    }

        

?>