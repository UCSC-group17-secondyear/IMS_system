<?php

    class adminModel {
        public static function checkDeptName($dept_name, $connect) 
		{	
            $query = "SELECT * FROM tbl_department WHERE department ='{$dept_name}' AND is_deleted=0" ;
            
            $result_set = mysqli_query($connect, $query);
            
            return $result_set;
        }

		public static function getPostUsingName($post, $connect)
		{
			$query = "SELECT pst_id FROM tbl_post WHERE post_name = '{$post}' AND is_deleted = 0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function addFlag($u_id, $connect)
		{
			$query = "UPDATE tbl_user_flag SET dh_flag=1 WHERE user_id='{$u_id}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getIds($connect)
		{
			$query = "SELECT empid FROM users WHERE is_deleted=0 ORDER BY userId";

			$result = mysqli_query($connect, $query);

			return $result;
		}
        
        public static function enterDepartment($dept_name, $abbr, $p_id, $connect)
		{
			$query = "INSERT INTO tbl_department (department, department_abbriviation, post) VALUES('$dept_name', '$abbr', '$p_id')";

			$result = mysqli_query($connect, $query);

			return $result;
        }
        
        public static function viewDepartments($connect) 
		{
			$query = "SELECT * FROM tbl_department INNER JOIN tbl_post ON tbl_department.post = tbl_post.pst_id WHERE tbl_department.is_deleted=0 AND tbl_post.is_deleted=0";

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
			// $query = "SELECT * FROM tbl_department WHERE department_id='{$dept_id}' LIMIT 1";
			$query = "SELECT * FROM tbl_department INNER JOIN tbl_post ON tbl_department.post = tbl_post.pst_id WHERE department_id='{$dept_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function checkDeptThree($dept_id, $department, $connect)
		{
			$query = "SELECT * FROM tbl_department WHERE department='{$department}' AND department_id!={$dept_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;	
        }
        
        public static function updateDepartment($dept_id, $department, $p_id, $abbriviation, $connect)
		{
			$query = "UPDATE tbl_department SET department='{$department}', post='{$p_id}', department_abbriviation='{$abbriviation}' WHERE department_id={$dept_id} LIMIT 1";

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
			// $query = "SELECT * FROM tbl_department WHERE department='{$department}' LIMIT 1";
			$query = "SELECT * FROM tbl_department INNER JOIN tbl_post ON tbl_department.post = tbl_post.pst_id WHERE department='{$department}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
        }
        
        public static function deleteDeptUsingName($department, $connect)
		{
			$query = "UPDATE tbl_department SET is_deleted = 1 WHERE department='{$department}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function removeOldDh($old_head, $connect)
		{
			$query = "UPDATE tbl_user_flag INNER JOIN users ON tbl_user_flag.user_id = users.userId SET dh_flag = 0 WHERE users.empid = '{$old_head}'";

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