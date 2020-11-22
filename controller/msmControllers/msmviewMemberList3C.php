<?php

    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = Model::view($user_id, $connect);
    $records = Model::viewuf($user_id, $connect);

    if ($result_set && $records) {
        if(mysqli_num_rows($result_set)==1 && mysqli_num_rows($records)==1){
            $result = mysqli_fetch_assoc($result_set);
            $record = mysqli_fetch_assoc($records);
            $_SESSION['userId'] = $result['userId'];
            $_SESSION['empid'] = $result['empid'];
            $_SESSION['initials'] = $result['initials'];
            $_SESSION['sname'] = $result['sname'];
            $_SESSION['deps'] = $record['department'];
            $_SESSION['health_condition'] = $record['healthcondition'];
            $_SESSION['membert'] = $record['member_type'];
            $_SESSION['civil_status'] = $record['civilstatus'];
            $_SESSION['scheme'] = $record['schemename'];
            $_SESSION['form_submission_date'] = $record['form_submission_date'];
            $_SESSION['acceptance_status'] = $record['acceptance_status'];

            header('Location:../view/medicalSchemeMember/msmViewMemberDetailsV.php');
        } else{
            header('Location:../view/medicalSchemeMember/msmViewMemberDetailsV.php');
        }
    }

?>

<?php
    // session_start();
    // require_once('../../model/Model.php');
    // require_once('../../config/database.php');

    // $_SESSION['member'] = '';
    // $userid = $_GET['std_index'];
    
    // $selected_member = Model::getmemberdetails($userid, $connect);

    // if ($selected_member) {
    //     while ($selected_mem = mysqli_fetch_assoc($selected_member)) {
    //         $_SESSION['member'] .= "<th>{$selected_mem['empid']}</th>";
    //         $_SESSION['member'] .= "</tr>";
    //         $_SESSION['member'] .= "<tr>";
    //         $_SESSION['member'] .= "<td>initials</td>";
    //         $_SESSION['member'] .= "<td>{$selected_mem['initials']}</td>";
    //         $_SESSION['member'] .= "</tr>";
    //         $_SESSION['member'] .= "<tr>";
    //         $_SESSION['member'] .= "<td>Surname</td>";
    //         $_SESSION['member'] .= "<td>{$selected_mem['sname']}</td>";
    //         $_SESSION['member'] .= "</tr>";
    //         $_SESSION['member'] .= "<tr>";
    //         $_SESSION['member'] .= "<td>Scheme</td>";
    //         $_SESSION['member'] .= "<td>{$selected_mem['schemename']}</td>";
    //         $_SESSION['member'] .= "</tr>";
    //         $_SESSION['member'] .= "<tr>";
    //         $_SESSION['member'] .= "<td>Member type</td>";
    //         $_SESSION['member'] .= "<td>{$selected_mem['member_type']}</td>";
    //         $_SESSION['member'] .= "</tr>";
    //         $_SESSION['member'] .= "<tr>";
    //         $_SESSION['member'] .= "<td><a href=\"msmmemberUpdateC.php?std_index={$selected_mem['empid']}\"><button type=\"submit\" class=\"button\">Update</button></a></td>";
    //         $_SESSION['member'] .= "</tr>";
    //         $_SESSION['member'] .= "<tr>";
    //         $_SESSION['member'] .= "<td><a href=\"msmdeleteMemberC.php?std_index={$selected_mem['empid']}\"><button type=\"submit\" class=\"button\">Delete</button></a></td>";
    //         $_SESSION['member'] .= "</tr>";
            
    //         header('Location:../view/medicalSchemeMaintainer/msmViewMemberDetailsV.php');
    //     }
    // }
?>