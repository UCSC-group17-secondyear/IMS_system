<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/asmModel/ViewHallAllocScheduleModel.php');

    if (isset($_POST['selectschedule-submit'])) {

        $halls = asmModel::getAllHalls($connect);
        $_SESSION['allhalls'] = "";

        if ($halls) {
            while ($h = mysqli_fetch_array($halls)) {
                $_SESSION['allhalls'] .= "<option value='".$h['hall_id']."'>".$h['hall_name']."</option>";
            }
            header('Location:../../view/academicStaffMember/asmViewHallAllocationScheduleV.php');   
        }

    } elseif (isset($_POST['displayschedule1-submit'])) { 

        $user = mysqli_real_escape_string($connect, $_GET['asmuser']);
        $date = $_POST['enterDate'];
        $_SESSION['selected_date'] = '';
        $_SESSION['selected_date'] = $date;
        $_SESSION['Halls'] = '';

        $hall_allocated = asmModel::gethallsbookings($date, $connect);

        if (mysqli_num_rows($hall_allocated) > 0) {
            while ($ha = mysqli_fetch_assoc($hall_allocated)) {
                $_SESSION['Halls'] .= "<tr>";
                $_SESSION['Halls'] .= "<td>{$ha['start_time']}</td>";
                $_SESSION['Halls'] .= "<td>{$ha['end_time']}</td>";
                $_SESSION['Halls'] .= "<td colspan=\"4\">";
                $all_halls = asmModel::getAllHalls($connect);
                while ($allh = mysqli_fetch_assoc($all_halls)) {
                    if ($allh['hall_name'] == $ha['hall_name']) {
                        $_SESSION['Halls'] .= "<a class=\"red\">{$allh['hall_name']}</a>";
                    } else {
                        $_SESSION['Halls'] .= "<a class=\"green\">{$allh['hall_name']}</a>";
                    }
                }
                $_SESSION['Halls'] .= "</td>";
                $_SESSION['Halls'] .= "</tr>";

                header('Location:../../view/academicStaffMember/asmHallAllocationScheduleViewV.php');
            }
        } else {
            header('Location:../../view/academicStaffMember/asmNoHallAllocatedV.php');
        }

    } elseif (isset($_POST['displayschedule2-submit'])) {

        $user = mysqli_real_escape_string($connect, $_GET['asmuser']);
        $startdate = $_POST['startDate'];
        $enddate = $_POST['endDate'];
        $hall = $_POST['hall'];

        $_SESSION['hall_start_date'] = '';
        $_SESSION['hall_end_date'] = '';
        $_SESSION['selected_hall'] = '';
        $_SESSION['hall_start_date'] = $startdate;
        $_SESSION['hall_end_date'] = $enddate;
        $_SESSION['selected_hall'] = $hall;
        $_SESSION['SelectedHall'] = '';

        $hall_allocated = asmModel::gethallsbookingswithinrange($startdate, $enddate, $hall, $connect);

        if (mysqli_num_rows($hall_allocated) > 0) {
            while ($ha = mysqli_fetch_assoc($hall_allocated)) {
                $_SESSION['SelectedHall'] .= "<tr>";
                $_SESSION['SelectedHall'] .= "<td>{$ha['start_time']}</td>";
                $_SESSION['SelectedHall'] .= "<td>{$ha['end_time']}</td>";
                $_SESSION['SelectedHall'] .= "<td>{$ha['reason']}</td>";
                $_SESSION['SelectedHall'] .= "</tr>";

                header('Location:../../view/academicStaffMember/asmHallAllocationScheduleDRViewV.php');
            }
        } else {
            header('Location:../../view/academicStaffMember/asmNoHallAllocatedV.php');
        }

    }

?>