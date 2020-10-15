<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

        $_SESSION['member'] = '';
        $userid = $_GET['std_index'];
        // echo $empid;
        
        $selected_member = Model::getmemberdetails($userid, $connect);

        if ($selected_member) {
            while ($selected_mem = mysqli_fetch_assoc($selected_member)) {
                $_SESSION['member'] .= "<th>{$selected_mem['empid']}</th>";
                $_SESSION['member'] .= "</tr>";
                $_SESSION['member'] .= "<tr>";
                $_SESSION['member'] .= "<td>initials</td>";
                $_SESSION['member'] .= "<td>{$selected_mem['initials']}</td>";
                $_SESSION['member'] .= "</tr>";
                $_SESSION['member'] .= "<tr>";
                $_SESSION['member'] .= "<td>Surname</td>";
                $_SESSION['member'] .= "<td>{$selected_mem['sname']}</td>";
                $_SESSION['member'] .= "</tr>";
                $_SESSION['member'] .= "<tr>";
                $_SESSION['member'] .= "<td>Scheme</td>";
                $_SESSION['member'] .= "<td>{$selected_mem['schemename']}</td>";
                $_SESSION['member'] .= "</tr>";
                $_SESSION['member'] .= "<tr>";
                $_SESSION['member'] .= "<td>Member type</td>";
                $_SESSION['member'] .= "<td>{$selected_mem['member_type']}</td>";
                $_SESSION['member'] .= "</tr>";
                $_SESSION['member'] .= "<tr>";
                $_SESSION['member'] .= "<td><a href=\"msmviewMemberListFourC.php?std_index={$selected_mem['empid']}\"><button type=\"submit\" class=\"button\">Update</button></a></td>";
                $_SESSION['member'] .= "</tr>";
                $_SESSION['member'] .= "<tr>";
                $_SESSION['member'] .= "<td><a href=\"msmviewMemberListFC.php?std_index={$selected_mem['empid']}\"><button type=\"submit\" class=\"button\">Delete</button></a></td>";
                $_SESSION['member'] .= "</tr>";
                
                header('Location:../view/medicalSchemeMaintainer/msmViewMemberDetailsV.php');
            }
        }
?>