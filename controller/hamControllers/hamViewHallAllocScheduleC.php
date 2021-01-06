<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/hamModel/hamViewHallAllocScheduleModel.php');

    if (isset($_POST['displayschedule-submit'])) {
        $date = $_POST['enterDate'];
        $_SESSION['selected_date'] = $date;
        $_SESSION['Halls'] = '';

        $hall_allocated = hamModel::gethallsbookings($date, $connect);

        if ($hall_allocated) {
            while ($ha = mysqli_fetch_assoc($hall_allocated)) {
                $_SESSION['Halls'] .= "<tr>";
                $_SESSION['Halls'] .= "<td>{$ha['start_time']}</td>";
                $_SESSION['Halls'] .= "<td>{$ha['end_time']}</td>";
                $_SESSION['Halls'] .= "<td>{$ha['hallname']}</td>";
                $_SESSION['Halls'] .= "</tr>";

                header('Location:../../view/hallAllocationMaintainer/hamHallAllocationScheduleViewV.php');
            }
        }
        else {
            header('Location:../../hallAllocationMaintainer/hamNoHallAllocatedV.php');
        }
    }

?>