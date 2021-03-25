<?php

    class asmModel {

        public static function viewTimeTable($sem_id, $batch_year, $degree, $connect)
        {

            $query = "SELECT * FROM tbl_weekly_time_table INNER JOIN tbl_hall ON tbl_weekly_time_table.hall_id = tbl_hall.hall_id INNER JOIN tbl_semester ON tbl_weekly_time_table.sem_id = tbl_semester.sem_id INNER JOIN tbl_degree ON tbl_weekly_time_table.degree_id = tbl_degree.degree_id WHERE tbl_weekly_time_table.sem_id = '{$sem_id}' AND tbl_weekly_time_table.degree_id = '{$degree}' AND tbl_weekly_time_table.year = '{$batch_year}' ORDER BY tbl_semester.academic_year , tbl_semester.semester";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getAcaYear($connect)
        {
            $query = "SELECT academic_year FROM tbl_semester WHERE is_deleted=0";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getDegree($connect)
        {
            $query = "SELECT * FROM tbl_degree WHERE is_deleted=0";

            $result = mysqli_query($connect, $query);

            return $result;
        }

        public static function getSemId($semester, $academic_year, $connect)
        {
            $query = "SELECT sem_id FROM tbl_semester WHERE academic_year = '{$academic_year}' AND semesterDigit = '{$semester}' AND is_deleted = 0";

            $result = mysqli_query($connect, $query);

            return $result;
        }
    }

?>