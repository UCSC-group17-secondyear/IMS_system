<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/hamModel/hamViewHallAllocScheduleModel.php');

    if (isset($_POST['selectschedule-submit'])) {

        $halls = hamModel::getAllHalls($connect);
        $_SESSION['allhalls'] = "";

        if ($halls) {
            while ($h = mysqli_fetch_array($halls)) {
                $_SESSION['allhalls'] .= "<option value='".$h['hall_name']."'>".$h['hall_name']."</option>";
            }
            header('Location:../../view/hallAllocationMaintainer/hamViewHallAllocationScheduleV.php');   
        }

    } elseif (isset($_POST['displayschedule1-submit'])) { 

        $date = $_POST['enterDate'];
        $_SESSION['selected_date'] = $date;
        $_SESSION['Halls'] = '';

        $hall_allocated = hamModel::gethallsbookings($date, $connect);

        if ($hall_allocated) {
            while ($ha = mysqli_fetch_assoc($hall_allocated)) {
                $_SESSION['Halls'] .= "<tr>";
                $_SESSION['Halls'] .= "<td>{$ha['start_time']}</td>";
                $_SESSION['Halls'] .= "<td>{$ha['end_time']}</td>";
                $_SESSION['Halls'] .= "<td colspan=\"4\">";
                $all_halls = hamModel::getAllHalls($connect);
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

    } elseif (isset($_POST['displayschedule2-submit'])) {

        $startdate = $_POST['startDate'];
        $enddate = $_POST['endDate'];
        $hall = $_POST['hall'];
        $_SESSION['hall_start_date'] = $startdate;
        $_SESSION['hall_end_date'] = $enddate;
        $_SESSION['selected_hall'] = $hall;
        $_SESSION['SelectedHall'] = '';

        $hall_allocated = hamModel::gethallsbookingswithinrange($startdate, $enddate, $hall, $connect);

        if ($hall_allocated) {
            while ($ha = mysqli_fetch_assoc($hall_allocated)) {
                $_SESSION['SelectedHall'] .= "<tr>";
                $_SESSION['SelectedHall'] .= "<td>{$ha['start_time']}</td>";
                $_SESSION['SelectedHall'] .= "<td>{$ha['end_time']}</td>";
                $_SESSION['SelectedHall'] .= "<td>{$ha['reason']}</td>";
                $_SESSION['SelectedHall'] .= "</tr>";

                header('Location:../../view/hallAllocationMaintainer/hamHallAllocationScheduleDRViewV.php');
            }
        } else {
            header('Location:../../hallAllocationMaintainer/hamNoHallAllocatedV.php');
        }

    }

?>