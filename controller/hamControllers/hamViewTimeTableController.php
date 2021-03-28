<?php

    session_start();
    require_once("../../config/database.php");
    require_once("../../model/asmModel/viewTimeTableModel.php");

    if (!$_GET['submit']) {
        $_SESSION['degree'] = '';
        $_SESSION['aca_year'] = '';
        $_SESSION['posts'] = '';

        $records = asmModel::getDegree($connect);
        $records2 = asmModel::getAcaYear($connect);

        if ($records && $records2) {

            while ($record2 = mysqli_fetch_array($records2)) {
                echo $_SESSION['aca_year'] .= "<option value='".$record2['academic_year']."'>".$record2['academic_year']."</option>";
        	}

        	while ($record = mysqli_fetch_array($records)) {
                echo $_SESSION['degree'] .= "<option value='".$record['degree_id']."'>".$record['degree_name']."</option>";
        	}
        
        	header('Location:../../view/hallAllocationMaintainer/hamFormForViewTimetableV.php');
        }
    }
    elseif ($_GET['submit']==1) {
         $_SESSION['time_table'] = '';

        $semester = mysqli_real_escape_string($connect, $_POST['semester']);
		$academic_year = mysqli_real_escape_string($connect, $_POST['aca_year']);
		$batch_year = mysqli_real_escape_string($connect, $_POST['batch_year']);
        $degree = mysqli_real_escape_string($connect, $_POST['degree']);

        $get_semId = asmModel::getSemId($semester, $academic_year, $connect);

        if ($get_semId) {
            while ($rec = mysqli_fetch_assoc($get_semId)) {
                $sem_id = $rec['sem_id'];
            }
        }

        $tTable = asmModel::viewTimeTable($sem_id, $batch_year, $degree, $connect);

        if ($tTable) {
            while($t = mysqli_fetch_assoc($tTable)) {
               $_SESSION['time_table'] .= "<tr>";
               $_SESSION['time_table'] .= "<td>{$t['day']}</td>";
               $_SESSION['time_table'] .= "<td>{$t['start_time']}</td>";
               $_SESSION['time_table'] .= "<td>{$t['end_time']}</td>";
               $_SESSION['time_table'] .= "<td>{$t['subject_name']}</td>";
               $_SESSION['time_table'] .= "<td>{$t['hall_name']}</td>";
               $_SESSION['time_table'] .= "</tr>";

                header('Location:../../view/hallAllocationMaintainer/hamWeeklyTimeTableV.php');
            }
        }
    }

?>