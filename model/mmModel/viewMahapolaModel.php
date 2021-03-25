<?php
    class viewMahapolaModel{

        public static function getMahapolaStudents($batch_no, $degree, $connect){
            $query = "SELECT * FROM tbl_students WHERE batch_number = '{$batch_no}' AND degree='{$degree}' AND mahapola_nominated='1' AND is_std='1'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getStuMonthSessions($index_no,$connect){
            $query = "SELECT subject_session_id FROM tbl_student_has_attendance WHERE student_index='{$index_no}'";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getSubjectOnMonth($subject_session_id,$year,$month,$connect){
            $query = "SELECT subject_code FROM tbl_subject_has_session WHERE subject_session_id='{$subject_session_id}' AND date('y')='{$year}' AND date('m')='{$month}'";

            $result = mysqli_query($connect, $query);

            return $result;

        }
    }

?>