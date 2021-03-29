<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/asmModel/asmViewHallAllocScheduleModel.php');

    if (isset($_POST['selectschedule-submit'])) {

        $halls = asmModel::getAllHalls($connect);
        $academicyear = asmModel::getAcademicYear($connect);
        $_SESSION['allhalls'] = "";
        $_SESSION['sem_starts'] = "";
        $_SESSION['sem_ends'] = "";

        if ($halls && mysqli_num_rows($academicyear) == 1) {
            while ($h = mysqli_fetch_array($halls)) {
                $_SESSION['allhalls'] .= "<option value='".$h['hall_id']."'>".$h['hall_name']."</option>";
            }

            while ($ay = mysqli_fetch_array($academicyear)) {
                $_SESSION['sem_starts'] = $ay['start_date'];
                $_SESSION['sem_ends'] = $ay['end_date'];
            }

            header('Location:../../view/academicStaffMember/asmViewHallAllocationScheduleV.php');   
        }

    } elseif (isset($_POST['displayschedule1-submit'])) { 

        $date = $_POST['enterDate'];
        $_SESSION['selected_date'] = $date;
        $_SESSION['Halls'] = '';
        $_SESSION['day_tt'] = "";
        $_SESSION['wtt_fortheday'] = '';
        $_SESSION['aretherehalls'] = '';

        $hall_allocated = asmModel::gethallsbookings($date, $connect);

        $dayname = asmModel::getDayName($date, $connect);

        while ($day = mysqli_fetch_assoc($dayname)) {
            $_SESSION['day_name'] = $day['day_name'];
        }

        $weekly_tt_day = asmMOdel::getTTonthatday($_SESSION['day_name'], $connect);

        if (mysqli_num_rows($hall_allocated) > 0 || mysqli_num_rows($weekly_tt_day) > 0) {

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
                }
                $_SESSION['aretherehalls'] = 1;
            } else {
                $_SESSION['aretherehalls'] = 0;
            }

            if (mysqli_num_rows($weekly_tt_day) > 0) {
                while ($wtd = mysqli_fetch_array($weekly_tt_day)) {
                    $_SESSION['day_tt'] .= "<tr>";
                    $_SESSION['day_tt'] .= "<td>{$wtd['day']}</td>";
                    $_SESSION['day_tt'] .= "<td>{$wtd['start_time']}</td>";
                    $_SESSION['day_tt'] .= "<td>{$wtd['end_time']}</td>";
                    $_SESSION['day_tt'] .= "<td>{$wtd['subject_name']}</td>";
                    $_SESSION['day_tt'] .= "<td>{$wtd['hall_name']}</td>";
                    $_SESSION['day_tt'] .= "</tr>";
                }
                $_SESSION['wtt_fortheday'] = 1;
            } else {
                $_SESSION['wtt_fortheday'] = 0;
            }

            header('Location:../../view/academicStaffMember/asmHallAllocationScheduleViewV.php');
            
        } else {
            header('Location:../../view/academicStaffMember/asmNoHallAllocatedV.php');
        }

    } elseif (isset($_POST['displayschedule2-submit'])) {

        $startdate = $_POST['startDate'];
        $enddate = $_POST['endDate'];
        $hall = $_POST['hall'];
        $_SESSION['dr_tt'] = "";
        $_SESSION['selected_hall'] = '';
        $_SESSION['hall_start_date'] = $startdate;
        $_SESSION['hall_end_date'] = $enddate;

        $hallname = asmModel::getHallname($hall, $connect);
        while ($hn = mysqli_fetch_assoc($hallname)) {
            $_SESSION['selected_hall'] = $hn['hall_name'];
        }

        $_SESSION['SelectedHall'] = '';
        $_SESSION['aretherehalls'] = '';
        $_SESSION['wtt_forhall'] = '';

        $hall_allocated = asmModel::gethallsbookingswithinrange($startdate, $enddate, $hall, $connect);
        $weekly_tt_day = asmMOdel::getTTinthehall($startdate, $enddate, $hall, $connect);

        if (mysqli_num_rows($hall_allocated) > 0 || mysqli_num_rows($weekly_tt_day) > 0) {

            if (mysqli_num_rows($hall_allocated) > 0) {
                while ($ha = mysqli_fetch_assoc($hall_allocated)) {
                    $_SESSION['SelectedHall'] .= "<tr>";
                    $_SESSION['SelectedHall'] .= "<td>{$ha['start_time']}</td>";
                    $_SESSION['SelectedHall'] .= "<td>{$ha['end_time']}</td>";
                    $_SESSION['SelectedHall'] .= "<td>{$ha['reason']}</td>";
                    $_SESSION['SelectedHall'] .= "</tr>";
                }
                $_SESSION['aretherehalls'] = 1;
            } else {
                $_SESSION['aretherehalls'] = 0;
            }

            if (mysqli_num_rows($weekly_tt_day) > 0) {
                while ($wtd = mysqli_fetch_array($weekly_tt_day)) {
                    $_SESSION['dr_tt'] .= "<tr>";
                    $_SESSION['dr_tt'] .= "<td>{$wtd['day']}</td>";
                    $_SESSION['dr_tt'] .= "<td>{$wtd['start_time']}</td>";
                    $_SESSION['dr_tt'] .= "<td>{$wtd['end_time']}</td>";
                    $_SESSION['dr_tt'] .= "<td>{$wtd['subject_name']}</td>";
                    $_SESSION['dr_tt'] .= "</tr>";
                }
                $_SESSION['wtt_forhall'] = 1;
            } else {
                $_SESSION['wtt_forhall'] = 0;
            }

            header('Location:../../view/academicStaffMember/asmHallAllocationScheduleDRViewV.php');

        } else {
            header('Location:../../view/academicStaffMember/asmNoHallAllocatedV.php');
        }

    }

?>