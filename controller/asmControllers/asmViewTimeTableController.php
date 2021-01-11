<?php

    session_start();
    require_once("../../config/database.php");
    require_once("../../model/asmModel/viewTimeTableModel.php");

    $_SESSION['time_table'] = '';
    //$result = asmModel::getDetails($connect);
    $tTable = asmModel::viewTimeTable($connect);

    if ($tTable) {
        while($t = mysqli_fetch_assoc($tTable)) {
            $_SESSION['time_table'] .= "<tr>";
            $_SESSION['time_table'] .= "<td>{$t['day']}</td>";
            $_SESSION['time_table'] .= "<td>{$t['start_time']}</td>";
            $_SESSION['time_table'] .= "<td>{$t['end_time']}</td>";
            $_SESSION['time_table'] .= "<td>{$t['hall_name']}</td>";
            $_SESSION['time_table'] .= "<td>{$t['semester']}</td>";
            $_SESSION['time_table'] .= "<td>{$t['academic_year']}</td>";
            $_SESSION['time_table'] .= "</tr>";

            header('Location:../../view/academicStaffMember/asmWeeklyTimeTableV.php');
        }
    }

?>