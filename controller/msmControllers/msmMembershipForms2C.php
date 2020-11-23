<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/Model.php');

    $user_id = mysqli_real_escape_string($connect, $_GET['mem_index']);
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

            header('Location:../../view/medicalSchemeMaintainer/msmViewMemberDetailsV.php');
        } 
    }
?>