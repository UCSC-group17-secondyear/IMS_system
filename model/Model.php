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

		public static function setRole($user_id, $asm_flag, $connect)
		{
			$query = "INSERT INTO tbl_user_flag (user_id, asm_flag) VALUES($user_id, $asm_flag)";

			$result = mysqli_query($connect, $query);

			return $result;
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

		public static function updatePassword($uname, $hashed_password, $connect)
		{
			$query = "UPDATE users SET password = '{$hashed_password}' WHERE empid='{$uname}' LIMIT 1";

			$result = mysqli_query($connect, $query);

            return $result;
		}

		public static function updatePasswordTwo($user_id, $hashed_password, $connect)
		{
			$query = "UPDATE users SET password = '{$hashed_password}' WHERE userId='{$user_id}' LIMIT 1";

			$result = mysqli_query($connect, $query);

            return $result;
		}

		public static function setUserRole($empid, $userRole, $connect)
		{
			$query = "UPDATE users SET userRole = '{$userRole}' WHERE empid='{$empid}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function setUserRoleTwo($user_id, $userRole, $connect)
		{
			$query = "UPDATE users SET userRole = '{$userRole}' WHERE userId={$user_id} LIMIT 1";

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

		public static function viewMember($user_id, $connect){ // for opd form & surgical form
			$query = "SELECT * FROM users WHERE userId={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;

		}

		public static function checkEmpidThree($empid, $user_id, $connect){
			$query = "SELECT * FROM users WHERE empid='{$empid}' AND userId!={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function fillOpdForm($user_id, $patient_name, $relationship , $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount,  $file_name_new, $submitted_date,$connect){
			$query = "INSERT INTO tbl_claimform (user_id, patient_name, relationship,  doctor_name, treatment_received_date, bill_issued_date, purpose, bill_amount, opd_form_flag, surgical_form_flag, file_name, submitted_date) VALUES ( $user_id ,  '$patient_name' ,'$relationship', '$doctor_name' , '$treatment_received_date' ,'$bill_issued_date', '$purpose' , '$bill_amount', 1, 0, '$file_name_new','$submitted_date') ";

			$result = mysqli_query($connect, $query);
			return $result;
		}

		public static function fillSurgicalForm($user_id,  $address,  $patient_name, $relationship, $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of, $file_name_new, $submitted_date,$connect){
			$query = "INSERT INTO tbl_claimform (user_id, address, patient_name, relationship, accident_date, how_occured, injuries, nature_of_illness, commence_date, first_consult_date , doctor_name, doctor_address, hospitalized_date, discharged_date, illness_before, illness_before_years, sick_injury, insurer_claims, nature_of, opd_form_flag, surgical_form_flag, file_name, submitted_date) 
					  VALUES ( $user_id ,'$address','$patient_name','$relationship','$accident_date','$how_occured','$injuries','$nature_of_illness','$commence_date','$first_consult_date','$doctor_name','$doctor_address','$hospitalized_date','$discharged_date','$illness_before','$illness_before_years','$sick_injury','$insurer_claims','$nature_of', 0, 1, '$file_name_new','$submitted_date')";
					  
			$result = mysqli_query($connect, $query);
			return $result;

		}

		public static function checkClaimFormNo($claim_form_no, $user_id, $connect){
			$query = "SELECT * FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND user_id={$user_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function checkWhetherOpd($claim_form_no,$user_id, $connect){
			$query = "SELECT * FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND user_id={$user_id} AND opd_form_flag= 1 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
			
		}

		public static function checkWhetherSurgical($claim_form_no,$user_id, $connect){
			$query = "SELECT * FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND user_id={$user_id} AND surgical_form_flag= 1 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
			
		}

		public static function hall($connect)
		{
			$query = "SELECT hall_name FROM tbl_hall WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function checkHall($hall, $date, $startTime, $endTime, $connect)
		{
			$query = "SELECT * FROM tbl_booking WHERE hall_name='{$hall}' AND date='{$date}' AND start_time < '{$endTime}' AND end_time > '{$startTime}' AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function book($user_id, $hall, $date, $startTime, $endTime, $reason, $connect) {
			$query = "INSERT INTO tbl_booking (date, start_time, end_time, reason, user_id, hall_name) VALUES('$date', '$startTime', '$endTime', '$reason', '$user_id', '$hall')";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function viewBookings($user_id, $connect) 
		{
			$query = "SELECT * FROM tbl_booking WHERE user_id='{$user_id}' AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function viewABook($booking_id, $connect) 
		{
			$query = "SELECT * FROM tbl_booking WHERE booking_id={$booking_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function checkHallTwo($hall, $date, $startTime, $endTime, $booking_id, $connect)
		{
			$query = "SELECT * FROM tbl_booking WHERE hall_name='{$hall}' AND date='{$date}' AND start_time < '{$endTime}' AND end_time > '{$startTime}' AND booking_Id!={$booking_id} AND is_deleted=0 LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateBook($booking_id, $hall, $date, $startTime, $endTime, $reason, $connect)
		{
			$query = "UPDATE tbl_booking SET date='{$date}', start_time='{$startTime}', end_time='{$endTime}', reason='{$reason}', hall_name='{$hall}' WHERE booking_id={$booking_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function deleteBooking($booking_id, $connect)
		{
			$query = "UPDATE tbl_booking SET is_deleted = 1 WHERE booking_id={$booking_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getmemberdetails($userid, $connect)
		{
			$query = "SELECT * FROM users u,tbl_user_flag f WHERE u.userId = '{$userid}' AND f.user_id = '{$userid}'";

			$result_set = mysqli_query($connect, $query);
					
			return $result_set;
		}

		public static function enterSemester($semester, $academic_year, $start_date, $end_date, $connect)
		{
			$query = "INSERT INTO tbl_semester (semester, academic_year, start_date, end_date ) VALUES('$semester', '$academic_year', '$start_date', '$end_date')";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function viewSemesters($connect) 
		{
			$query = "SELECT * FROM tbl_semester WHERE is_deleted=0 ORDER BY sem_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function semYear($connect)
		{
			$query = "SELECT academic_year FROM tbl_semester WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function semName($connect)
		{
			$query = "SELECT semester FROM tbl_semester WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function viewASem ($sem_id, $connect) 
		{
			$query = "SELECT * FROM tbl_semester WHERE sem_id={$sem_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function viewASemUsingName($academic_year, $semester, $connect)
		{
			$query = "SELECT * FROM tbl_semester WHERE semester='{$semester}' AND academic_year='{$academic_year}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function updateSemester($sem_id, $semester, $academic_year, $start_date, $end_date, $connect)
		{
			$query = "UPDATE tbl_semester SET semester='{$semester}', academic_year='{$academic_year}', start_date='{$start_date}', end_date='{$end_date}' WHERE sem_id={$sem_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function deleteSemester($sem_id, $connect)
		{
			$query = "UPDATE tbl_semester SET is_deleted = 1 WHERE sem_id={$sem_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function deleteSemUsingName($academic_year, $semester, $connect)
		{
			$query = "UPDATE tbl_semester SET is_deleted = 1 WHERE semester='{$semester}' AND academic_year='{$academic_year}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function enterHall($hall_name, $hall_location, $seating_capacity, $ac, $connect)
		{
			$query = "INSERT INTO tbl_hall (hall_name, location, seating_capacity, AC ) VALUES('$hall_name', '$hall_location', $seating_capacity, $ac)";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function viewHalls($connect) 
		{
			$query = "SELECT * FROM tbl_hall WHERE is_deleted=0 ORDER BY hall_name";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function checkHallName($hall_name, $connect) 
		{	
			// echo $hall_name;
			$query = "SELECT * FROM tbl_hall WHERE hall_name ='{$hall_name}' AND is_deleted=0" ;
			$result_set = mysqli_query($connect, $query);
            return $result_set;
		}

		public static function viewAHall ($hall_id, $connect) 
		{
			$query = "SELECT * FROM tbl_hall WHERE hall_id='{$hall_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function viewAHallUsingName($hall, $connect)
		{
			$query = "SELECT * FROM tbl_hall WHERE hall_name='{$hall}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function checkHallThree($hall_id, $hall_name, $connect)
		{
			$query = "SELECT * FROM tbl_hall WHERE hall_name='{$hall_name}' AND hall_id!={$hall_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;	
		}

		public static function updateHall($hall_id, $hall_name, $location, $seating_capacity, $ac, $connect)
		{
			$query = "UPDATE tbl_hall SET hall_name='{$hall_name}', location='{$location}', seating_capacity='{$seating_capacity}', AC={$ac} WHERE hall_id={$hall_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}	

		public static function deleteHall($hall_id, $connect)
		{
			$query = "UPDATE tbl_hall SET is_deleted = 1 WHERE hall_id={$hall_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function deleteHallUsingName($hall, $connect)
		{
			$query = "UPDATE tbl_hall SET is_deleted = 1 WHERE hall_name='{$hall}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}
		
		public static function checkDeptName($dept_name, $connect) 
		{	
			$query = "SELECT * FROM tbl_department WHERE department ='{$dept_name}' AND is_deleted=0" ;
			$result_set = mysqli_query($connect, $query);
            return $result_set;
		}

		public static function enterDepartment($dept_name, $dept_head, $dept_head_email, $connect)
		{
			$query = "INSERT INTO tbl_department (department, department_head, department_head_email) VALUES('$dept_name', '$dept_head', '$dept_head_email')";

			$result = mysqli_query($connect, $query);

			return $result;
		}
		
		public static function viewDepartments($connect) 
		{
			$query = "SELECT * FROM tbl_department WHERE is_deleted=0 ORDER BY department_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function viewADept($dept_id, $connect)
		{
			$query = "SELECT * FROM tbl_department WHERE department_id='{$dept_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
		
		public static function viewADeptUsingName($department, $connect)
		{
			$query = "SELECT * FROM tbl_department WHERE department='{$department}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function checkDeptThree($dept_id, $department, $connect)
		{
			$query = "SELECT * FROM tbl_department WHERE department='{$department}' AND department_id!={$dept_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;	
		}
		
		public static function updateDepartment($dept_id, $department, $department_head, $department_head_email, $description, $connect)
		{
			$query = "UPDATE tbl_department SET department='{$department}', department_head='{$department_head}', department_head_email='{$department_head_email}', description='{$description}' WHERE department_id={$dept_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}	
		
		public static function deleteDepartment($dept_id, $connect)
		{
			$query = "UPDATE tbl_department SET is_deleted = 1 WHERE department_id={$dept_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function deleteDeptUsingName($department, $connect)
		{
			$query = "UPDATE tbl_department SET is_deleted = 1 WHERE department='{$department}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function checkDesignationName($designation, $connect) 
		{	
			$query = "SELECT * FROM tbl_designation WHERE designation_name ='{$designation}' AND is_deleted=0" ;
			$result_set = mysqli_query($connect, $query);
            return $result_set;
		}

		public static function designation($connect)
		{
			$query = "SELECT designation_name FROM tbl_designation WHERE is_deleted=0";

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
		
		public static function viewADesign($designation_id, $connect)
		{
			$query = "SELECT * FROM tbl_designation WHERE designation_id={$designation_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function viewADesignUsingName($designation, $connect)
		{
			$query = "SELECT * FROM tbl_designation WHERE designation_name='{$designation}' LIMIT 1";

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

		public static function deleteDesignUsingName($designation, $connect)
		{
			$query = "UPDATE tbl_designation SET is_deleted = 1 WHERE designation_name='{$designation}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function userRoles($connect)
		{
			$query = "SELECT role_name FROM userroles WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function userList($connect)
		{
			$query = "SELECT empid FROM users WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function viewDegrees($connect)
		{
			$query = "SELECT * FROM tbl_degree WHERE is_deleted=0 ORDER BY degree_id";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}
		
		public static function viewADegree($degree_id, $connect)
		{
			$query = "SELECT * FROM tbl_degree WHERE degree_id='{$degree_id}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;
		}

		public static function checkDegreeThree($degree_id, $degree_name, $connect)
		{
			$query = "SELECT * FROM tbl_degree WHERE degree_name='{$degree_name}' AND degree_id!={$degree_id} LIMIT 1";

			$result_set = mysqli_query($connect, $query);

			return $result_set;	
		}
		
		public static function updateDegree($degree_id, $degree_name, $degree_abbriviation, $connect)
		{
			$query = "UPDATE tbl_degree SET degree_name='{$degree_name}', degree_abbriviation='{$degree_abbriviation}' WHERE degree_id={$degree_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}	

		public static function deleteDegree($degree_id, $connect)
		{
			$query = "UPDATE tbl_degree SET is_deleted = 1 WHERE degree_id={$degree_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function opdFormIds($user_id, $connect){
		    $query = "SELECT claim_form_no FROM tbl_claimform WHERE user_id = {$user_id} AND opd_form_flag=1 AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function surgicalFormIds($user_id, $connect){
		    $query = "SELECT claim_form_no FROM tbl_claimform WHERE user_id = {$user_id} AND surgical_form_flag=1 AND is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateSurgicalForm($user_id, $claim_form_no,  $address,  $patient_name, $relationship, $accident_date, $how_occured, $injuries, $nature_of_illness, $commence_date, $first_consult_date, $doctor_name, $doctor_address, $hospitalized_date, $discharged_date, $illness_before, $illness_before_years, $sick_injury, $insurer_claims, $nature_of,$file_name_new, $updated_date ,$connect){
			$query = "UPDATE tbl_claimform SET address='{$address}', patient_name='{$patient_name}', relationship='{$relationship}', accident_date='{$accident_date}', how_occured='{$how_occured}', injuries='{$injuries}', nature_of_illness='{$nature_of_illness}', commence_date='{$commence_date}', first_consult_date='{$first_consult_date}', doctor_name='{$doctor_name}', doctor_address='{$doctor_address}', hospitalized_date='{$hospitalized_date}', discharged_date='{$discharged_date}', 
														illness_before='{$illness_before}', illness_before_years='{$illness_before_years}', sick_injury='{$sick_injury}', insurer_claims='{$insurer_claims}', nature_of='{$nature_of}', file_name= '{$file_name_new}', updated_date= '$updated_date' WHERE user_id={$user_id} AND claim_form_no={$claim_form_no} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;

		}

		public static function updateOpdForm($user_id, $claim_form_no, $patient_name, $relationship , $doctor_name, $treatment_received_date, $bill_issued_date, $purpose, $bill_amount,  $file_name_new, $updated_date, $connect){
			$query = "UPDATE tbl_claimform SET patient_name='{$patient_name}',  relationship='{$relationship}', doctor_name='{$doctor_name}', treatment_received_date='{$treatment_received_date}', bill_issued_date='{$bill_issued_date}', purpose='{$purpose}', bill_amount='{$bill_amount}', file_name= '{$file_name_new}' , updated_date= '$updated_date' WHERE user_id={$user_id} AND claim_form_no={$claim_form_no} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getSubmitDateDiff($claim_form_no, $user_id,$connect){
			$query = "SELECT DATEDIFF(CURRENT_DATE(), submitted_date )FROM tbl_claimform WHERE claim_form_no={$claim_form_no} AND user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function deleteClaimForm($claim_form_no, $user_id, $connect){
			$query = "UPDATE tbl_claimform SET is_deleted=1 WHERE claim_form_no={$claim_form_no} AND user_id={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getStuDetailsIndex($student_index, $connect){
			$query = "SELECT * FROM tbl_student WHERE student_index={$student_index} LIMIT 1 ";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getStuDetailsName($student_initials,$student_surname, $connect){
			$query = "SELECT * FROM tbl_student WHERE student_intials={$student_initials} AND student_surname={$student_surname} LIMIT 1 ";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function markStudentMahapola($student_index,$mahapola_category, $mahapola_eligibility, $connect){
			$query = "UPDATE tbl_student SET mahapola_category={'$mahapola_category'} , mahapola_eligibility={'$mahapola_eligibility'} WHERE student_index={'$student_index'} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

//..................................................... Department Head ................................................................//
		public static function getDeptUsingId($user_id, $connect)
		{
			$query = "SELECT department FROM tbl_user_flag WHERE user_id={$user_id}";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function getDepartmentForms($department, $connect)
		{
			$query = "SELECT u.*, uf.department FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND uf.department = '{$department}' AND NOT uf.membership_status=1 ORDER BY u.userId";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function requestaccept($user_id, $connect)
		{
			$query = "UPDATE tbl_user_flag SET acceptance_status = 1 WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function requestdecline($user_id, $connect)
		{
			$query = "UPDATE tbl_user_flag SET acceptance_status = 0 WHERE user_id={$user_id}";
			// $query = "UPDATE tbl_user_flag SET healthcondition = '', civilstatus = '', member_type = '', schemename = '', department = '' WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function funct($user_id, $connect)
		{
			$query = "SELECT u.*, uf.healthcondition, uf.civilstatus, uf.membership_status, uf.member_type, uf.schemename, uf.department FROM tbl_user_flag uf, users u WHERE u.userId = uf.user_id AND uf.user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}
//......................................................................................................................................//

//................................................ Medical Scheme Maintainer ...........................................................//
		public static function registerMS($user_id, $department, $health_condition, $civil_status, $scheme_name, $member_type, $connect)
		{
			$query = "UPDATE tbl_user_flag SET department='{$department}', healthcondition='{$health_condition}', civilstatus='{$civil_status}', schemename='{$scheme_name}', membertype='{$member_type}' WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function dept($department, $connect)
		{
			$query = "SELECT department_head_email FROM tbl_department WHERE department='{$department}' LIMIT 1";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function department($connect)
		{
			$query = "SELECT department FROM tbl_department WHERE is_deleted=0";

			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function scheme($connect)
		{
			$query = "SELECT schemename FROM tbl_medicalscheme WHERE is_deleted=0";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function membertype($connect)
		{
			$query = "SELECT member_type FROM tbl_member_type";
			
			$result_set = mysqli_query($connect, $query);
			
			return $result_set;
		}

		public static function fetchmembers($scheme, $member_type, $connect)
		{
			$query = "SELECT u.*, uf.* FROM users u, tbl_user_flag uf WHERE u.userId = uf.user_id AND uf.schemename = '{$scheme}' AND uf.member_type = '{$member_type}' ORDER BY userId";

			$result_set = mysqli_query($connect, $query);
					
			return $result_set;
		}
//......................................................................................................................................//

		public static function getDegreeId($student_index, $connect){
			$query = "SELECT degeree_id FROM tbl_student_degree WHERE student_index={$student_index} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDegreeName($degree_id, $connect){
			$query = "SELECT degree_name FROM tbl_degree WHERE degree_id={$degree_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDateDiffFromJoin($user_id,$connect){
			$query = "SELECT DATEDIFF(CURRENT_DATE(), appointment )FROM users WHERE userId={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getMeidcalMemDetails($user_id, $connect){
			$query = "SELECT * FROM users WHERE userId={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getMeidcalMemDetailsOne($user_id, $connect){
			$query = "SELECT * FROM tbl_user_flag WHERE user_id={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getSchemes($connect){
			$query = "SELECT * FROM tbl_schemes WHERE is_deleted=0";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getSchemeName($user_id, $connect){
			$query = "SELECT schemename FROM tbl_user_flag WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updatememDetails($user_id, $health_condition, $civil_status, $scheme_name, $connect){
			$query = "UPDATE tbl_user_flag SET healthcondition='{$health_condition}', civilstatus='{$civil_status}', schemename='{$scheme_name}' WHERE user_id={$user_id} ";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function updateScheme($user_id, $scheme_name, $connect){
			$query = "UPDATE tbl_user_flag SET schemename='{$scheme_name}' WHERE user_id={$user_id}";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getSubmitDate($user_id, $claim_form_no, $connect){
			$query = "SELECT submitted_date FROM tbl_claimform WHERE user_id={$user_id} AND claim_form_no={$claim_form_no} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function changeUserRole($user_id, $connect)
		{
			$query = "SELECT ham_flag, mo_flag, dh_flag, msm_flag, mem_flag, a_flag, rv_flag, am_flag, mm_flag, asm_flag FROM tbl_user_flag WHERE user_id={$user_id} LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getMoEmail($connect){
			$query = "SELECT email FROM users WHERE userRole='medicalOfficer'";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getNextFormNumber($connect){
			$query = "SELECT MAX(claim_form_no) FROM tbl_claimform";

			$result = mysqli_query($connect, $query);

			return $result;
		}
		
	}
?>