<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

    if (isset($_POST['viewMemberList-submit'])) {
        $_SESSION['member_info'] = '';
        
        $scheme = $_POST['schemename'];
        $member_type = $_POST['member_type'];
        $members = Model::fetchmembers($scheme, $member_type, $connect);
        
        if ($members) {
            while ($mem = mysqli_fetch_assoc($members)) {
                $_SESSION['member_info'] .= "<tr>";
                $_SESSION['member_info'] .= "<td>{$mem['empid']}</td>";
                $_SESSION['member_info'] .= "<td>{$mem['initials']}</td>";
                $_SESSION['member_info'] .= "<td>{$mem['sname']}</td>";
                $_SESSION['member_info'] .= "<td><a href=\"../../controller/msmviewMemberListThreeC.php?std_index={$mem['userId']}\">View</a></td>";
                $_SESSION['member_info'] .= "</tr>";
                
                header('Location:../view/medicalSchemeMaintainer/msmMedicalMemberlistV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    } else {
        echo "Button not pressed.";
    }
?>