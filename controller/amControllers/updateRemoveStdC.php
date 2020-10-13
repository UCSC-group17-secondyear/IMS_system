<?php
    session_start();
    require_once('../../model/amModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['getStudent-submit'])) {
        $_SESSION['std_info'] = '';

        $index_no = $_POST['index_no'];
        $student = amModel::fetchStudent($index_no, $connect);

        if ($student) {
            while ($std = mysqli_fetch_assoc($student)) {
                $_SESSION['std_info'] .= "<tr>";
                $_SESSION['std_info'] .= "<td>{$std['index_no']}</td>";
                $_SESSION['std_info'] .= "<td>{$std['registrstion_no']}</td>";
                $_SESSION['std_info'] .= "<td>{$std['initials']}</td>";
                $_SESSION['std_info'] .= "<td>{$std['last_name']}</td>";
                $_SESSION['std_info'] .= "<td>{$std['email']}</td>";
                $_SESSION['std_info'] .= "<td>{$std['academic_year']}</td>";
                $_SESSION['std_info'] .= "<td>{$std['degree']}</td>";
                
                $_SESSION['std_info'] .= "<td><a href=\"../../controller/amControllers/updateStdC.php?std_index={$std['index_no']}\">Update</a></td>";

                $_SESSION['std_info'] .= "<td><a href=\"../../controller/amControllers/deleteStdC.php?std_index={$std['index_no']}\">Delete</a></td>";

                $_SESSION['std_info'] .= "</tr>";

                header('Location:../../view/attendanceMaintainer/amStdDetailsV.php');
            }
        }
    }
    else {
        echo "querry dailed";
    }
?>