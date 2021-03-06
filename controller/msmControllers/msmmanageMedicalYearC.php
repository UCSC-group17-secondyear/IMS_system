<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel/manageMedicalYearModel.php');

    if(isset($_POST['addMY-submit'])) {
        $medical_year = mysqli_real_escape_string($connect, $_POST['medical_year']);
        $start_date = mysqli_real_escape_string($connect, $_POST['start_date']);
        $end_date = mysqli_real_escape_string($connect, $_POST['end_date']);

        $checkmy = msmModel::checkMedicalYear($medical_year, $connect);

        if (mysqli_num_rows($checkmy) != 0) {
            header('Location:../../view/medicalSchemeMaintainer/msmMYExists.php');
        } else {
            $result = msmModel::addMedicalYear($medical_year, $start_date, $end_date, $connect);
            $allemails = msmModel::getEmailsofmembers($connect);

            if ($result) {
                while ($m = mysqli_fetch_array($allemails)) {
                    $to_email = $m['email'];
                    $subject = "Renew Membership";
                    $body =  "Next medical year starts on ".$start_date.". So, please renew your membership before 14 days.";
                    $headers = "From: ims.ucsc@gmail.com";

                    $sendMail = mail($to_email, $subject, $body, $headers);
                }
                header('Location:../../view/medicalSchemeMaintainer/msmMYAdded.php');
            }
            else {
                header('Location:../../view/medicalSchemeMaintainer/msmMYNotAdded.php');
            }

        }
    } elseif(isset($_POST['viweMYDetails-submit'])) {
        $_SESSION['medy_list'] = '';

        $records = msmModel::viewMedicalYears($connect);

        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['medy_list'] .= "<tr>";
                $_SESSION['medy_list'] .= "<td>{$record['medical_year']}</td>";
                $_SESSION['medy_list'] .= "<td>{$record['start_date']}</td>";
                $_SESSION['medy_list'] .= "<td>{$record['end_date']}</td>";
                $_SESSION['medy_list'] .= "</tr>";

                header('Location:../../view/medicalSchemeMaintainer/msmViewMYDetailsV.php');
            }
        }
    } elseif(isset($_POST['viweMYList-submit'])) {
        $records = msmModel::viewMedicalYears($connect);
        $_SESSION['MYNamesList'] = '';
        $count = 0;

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                if($record['end_date'] >= date("Y-m-d")) {
                    echo "ssss ";
                    $count = $count+1;
                    $_SESSION['MYNamesList'] .= "<option value='".$record['medical_year']."'>".$record['medical_year']."</option>";
                }
            }
            if($count == 0){
                header('Location:../../view/medicalSchemeMaintainer/msmNoUpdateMYV.php');
            } else {
                header('Location:../../view/medicalSchemeMaintainer/msmUpdateViewMYV.php');
            }
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmNoMYV.php');
        }

    } elseif(isset($_POST['updateMY-submit'])) {
        $medical_year = mysqli_real_escape_string($connect, $_POST['med_year']);
        $_SESSION['MYdetails'] = '';

        $records = msmModel::checkMedicalYear($medical_year, $connect);

        if ($records) {
            if(mysqli_num_rows($records) == 1){
                $record = mysqli_fetch_assoc($records);
                $_SESSION['medical_year'] = $record['medical_year'];
                $_SESSION['start_date'] = $record['start_date'];
                $_SESSION['end_date'] = $record['end_date'];
            }

            header('Location:../../view/medicalSchemeMaintainer/msmUpdateMYV.php');
        }
    } elseif(isset($_POST['myupdate-submit'])) {
        $medical_year = mysqli_real_escape_string($connect, $_POST['medical_year']);
        $start_date = mysqli_real_escape_string($connect, $_POST['start_date']);
        $end_date = mysqli_real_escape_string($connect, $_POST['end_date']);

        $records = msmModel::updateMedicalYear($medical_year, $start_date, $end_date, $connect);

        if ($records) {
            header('Location:../../view/medicalSchemeMaintainer/msmMYUpdated.php');
        } else {
            header('Location:../../view/medicalSchemeMaintainer/msmMYNotUpdated.php');
        }
    }
?>