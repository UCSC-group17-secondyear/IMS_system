<?php
    class mahapolaModel {
		public static function getBatchNumbers($connect){
			$query = "SELECT DISTINCT batch_number FROM tbl_students ORDER BY batch_number ASC";

			$result = mysqli_query($connect, $query);

			return $result;
		}

		public static function getDegrees($connect){
			$query = "SELECT * FROM tbl_degree";

			$result = mysqli_query($connect, $query);

			return $result;
		}
        
        public static function getNominatedList($batch_no, $degree, $connect){
            $query = "SELECT * FROM tbl_students WHERE (batch_number = '{$batch_no}' AND degree_id='{$degree}' AND mahapola_nominated='1' AND is_std='0')";

            $result = mysqli_query($connect, $query);

            return $result;
        }

		public static function getMahapolaStudents($batch_no, $degree,$sem_digit, $connect){
            $query = "SELECT * FROM tbl_students WHERE batch_number = '{$batch_no}' AND degree_id='{$degree}' AND semester='{$sem_digit}' AND mahapola_nominated='1' AND is_std='0'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getAcademicYear($stu_id,$connect){
            $query = "SELECT academic_year FROM tbl_students WHERE std_id='{$stu_id}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }

		public static function getSemDigit($year_month, $connect)
		{	
			$query = "SELECT semesterDigit FROM tbl_semester 
                        WHERE EXTRACT(YEAR_MONTH FROM start_date)<='{$year_month}' AND EXTRACT(YEAR_MONTH FROM end_date)>='{$year_month}' LIMIT 1";

			$result = mysqli_query($connect, $query);

			return $result;
		}

        public static function getStuSemSubjects($degree,$academic_year,$sem_digit,$stu_semester,$connect){
            $query = "SELECT * FROM tbl_subject WHERE academic_year='{$academic_year}' AND degree_id='{$degree}' AND semester='{$sem_digit}' AND is_deleted='0'";

            $result = mysqli_query($connect, $query);

			return $result;
        }

        public static function getStuNonMandSub($degree,$stu_id,$academic_year,$semester_digit,$connect){
            $query = "SELECT subject_id FROM tbl_subject INNER JOIN tbl_std_nonmandatorysub ON tbl_subject.subject_id=tbl_std_nonmandatorysub.subject_id 
                        WHERE tbl_subject.degree_id='{$degree}' 
                        AND tbl_std_nonmandatorysub.std_id='{$stu_id}' 
                        AND tbl_subject.academic_year={$academic_year} 
                        AND tbl_subject.semester='{$semester_digit}'
                        AND is_deleted='0'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getSubjectSessionInMonth($degree,$year,$month,$subject_id,$connect){
            $query = "SELECT SUM(numOfSessions) FROM sessions_per_month 
                        WHERE calendarYear='{$year}' 
                        AND degree_id='{$degree}' 
                        AND subject_id='{$subject_id}' 
                        AND month='{$month}' 
                        AND sessionTypeId='1' 
                        AND is_deleted='0'";

            $result = mysqli_query($connect, $query);

			return $result;
        }

        public static function getStuSubjectAttendance($stu_id,$degree,$subject_id,$year,$month,$connect){
            $query = "SELECT SUM(attendance) FROM tbl_attendance 
                        WHERE std_id='{$stu_id}' 
                        AND degree_id='{$degree}' 
                        AND subject_id='{$subject_id}' 
                        AND YEAR(date)='{$year}' 
                        AND MONTH(date)='{$month}' 
                        AND (sessionTypeId='1' OR sessionTypeId='2') ";
            
            $result = mysqli_query($connect, $query);

			return $result;
        }

        public static function getStudentDetails($eligible_student,$connect){
            $query = "SELECT * FROM tbl_students WHERE std_id = '{$eligible_student}' LIMIT 1";

            $result = mysqli_query($connect, $query);

			return $result;
        }

        public static function checkHasRecord($degree,$batch_no,$year,$month,$connect){
            $query = "SELECT * FROM tbl_reconcilation WHERE degree_id='{$degree}' AND batch_number='{$batch_no}' AND year='{$year}' AND month='{$month}' LIMIT 1";

            $result = mysqli_query($connect, $query);

			return $result;
        }

        public static function updateRecocilation($degree,$batch_no,$year,$month,$eligible_count_m,$eligible_count_o,$non_eligible_count,$connect){
            $query = "UPDATE tbl_reconcilation SET eligible_m='{$eligible_count_m}',eligible_o='{$eligible_count_o}',non_eligible='{$non_eligible_count}' 
                        WHERE degree_id='{$degree}' AND batch_number='{$batch_no}' AND year='{$year}' AND month='{$month}' ";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function insertReconcilation($degree,$batch_no,$year,$month,$eligible_count_m,$eligible_count_o,$non_eligible_count,$connect){
            $query = "INSERT INTO tbl_reconcilation (degree_id,batch_number,year,month,eligible_m,eligible_o,non_eligible)
                        VALUES ('{$degree}','{$batch_no}','{$year}','{$month}','{$eligible_count_m}','{$eligible_count_o}','{$non_eligible_count}')";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getPreviousMonthResult($degree,$batch_no,$prev_year,$prev_month,$connect){
            $query = "SELECT * FROM tbl_reconcilation WHERE degree_id='{$degree}' AND batch_number='{$batch_no}' AND year='{$prev_year}' AND month='{$prev_month}' ";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getCurrentMonthResult($degree,$batch_no,$year,$month,$connect){
            $query = "SELECT * FROM tbl_reconcilation WHERE degree_id='{$degree}' AND batch_number='{$batch_no}' AND year='{$year}' AND month='{$month}' ";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getDegreeName($degree,$connect){
            $query = "SELECT * FROM tbl_degree WHERE degree_id = '{$degree}' LIMIT 1";

            $result = mysqli_query($connect, $query);

            return $result;
        }
    }

?>