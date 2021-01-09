<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/hamModel/hamViewHallAllocScheduleModel.php');

    if (isset($_POST['displayschedule-submit'])) { 
        $date = $_POST['enterDate'];
        $_SESSION['selected_date'] = $date;
        $_SESSION['Halls'] = '';

        $hall_allocated = hamModel::gethallsbookings($date, $connect);
        $all_halls = hamModel::getAllHalls($connect);

        if ($hall_allocated) {
            while ($ha = mysqli_fetch_assoc($hall_allocated)) {
                $_SESSION['Halls'] .= "<tr>";
                $_SESSION['Halls'] .= "<td>{$ha['start_time']}</td>";
                $_SESSION['Halls'] .= "<td>{$ha['end_time']}</td>";
                $_SESSION['Halls'] .= "<td colspan=\"4\">";
                while ($allh = mysqli_fetch_assoc($all_halls)) {
                    if ($allh['hall_name'] == $ha['hall_name']) {
                        $_SESSION['Halls'] .= "<a class=\"red\">{$allh['hall_name']}</a>";
                    } else {
                        $_SESSION['Halls'] .= "<a class=\"green\">{$allh['hall_name']}</a>";
                    }
                }
                $_SESSION['Halls'] .= "</td>";
                $_SESSION['Halls'] .= "</tr>";

                header('Location:../../view/hallAllocationMaintainer/hamHallAllocationScheduleViewV.php');
            }
        } else {
            header('Location:../../hallAllocationMaintainer/hamNoHallAllocatedV.php');
        }
    }

?>