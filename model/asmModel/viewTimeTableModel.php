<?php

    class asmModel {

        public static function viewTimeTable($connect) {

            $query = "SELECT tbl_weekly_time_table.day, tbl_weekly_time_table.start_time, tbl_weekly_time_table.end_time, tbl_hall.hall_name, tbl_semester.semester, tbl_semester.academic_year FROM tbl_weekly_time_table INNER JOIN tbl_hall ON tbl_weekly_time_table.hall_id = tbl_hall.hall_id INNER JOIN tbl_semester ON tbl_weekly_time_table.sem_id = tbl_semester.sem_id";

            $result = mysqli_query($connect, $query);

            return $result;
        }
    }

?>