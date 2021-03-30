<?php 
    require_once('../../model/amModel/amManageStdModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['enterStudents-submit'])) {
        $records = amModel::getDegreeList($connect);
        session_start();
        $_SESSION['degreeList'] = '';

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['degreeList'] .= "<option value='".$record['degree_name']."'>".$record['degree_name']."</option>";
            }
            header('Location:../../view/attendanceMaintainer/amEnterStudentDetailsV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amNoDegreesAvailableV.php');
        }
    }

    elseif(isset($_POST['addStudent-submit'])) {
        $index_no = $_POST['index_no'];
        $registration_no = $_POST['registration_no'];
        $initials = $_POST['initials'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $academic_year = $_POST['academic_year'];
        $semester = $_POST['semester'];
        $degree = $_POST['degree'];
        $batch_number = $_POST['batch_number'];
        $indexFlag = 0;
        $regNumFlag = 0;
        $mailFlag = 0;

        $checkIndex = amModel::checkIndex ($index_no, $connect);
        // check whether the student index exists already
        if (mysqli_num_rows($checkIndex) == 1) {
            $indexFlag = 1;
        }

        $checkRegNum = amModel::checkRegNum ($registration_no, $connect);
        // check whether the student registration number exists already
        if (mysqli_num_rows($checkRegNum) == 1) {
            $regNumFlag = 1;
        }

        $checkEmail = amModel::checkEmail ($email, $connect);
        // check whether the student email exists already
        if (mysqli_num_rows($checkEmail) == 1) {
            $mailFlag = 1;
        }

        if ($indexFlag == 1 && $regNumFlag == 1) {
            if ($mailFlag == 1) {
                // Student index, registration number and email all three exist already
                header('Location:../../view/attendanceMaintainer/amIndexRegnumEmailExist.php');
            }
            else {
                // both index and registration number exist already
                header('Location:../../view/attendanceMaintainer/amIndexRegnumExist.php');
            }
        }
        elseif ($indexFlag == 1 && $mailFlag == 1) {
            // both index and email exists already
            header('Location:../../view/attendanceMaintainer/amIndexEmailExist.php');
        }
        elseif ($regNumFlag == 1 && $mailFlag == 1) {
            // both registration number and email exists already
            header('Location:../../view/attendanceMaintainer/amRegnumEmailExist.php');
        }
        elseif ($indexFlag == 1) {
            header('Location:../../view/attendanceMaintainer/amIndexExist.php');
        }
        elseif ($regNumFlag == 1) {
            header('Location:../../view/attendanceMaintainer/amRegnumExist.php');
        }
        elseif ($mailFlag == 1) {
            header('Location:../../view/attendanceMaintainer/amEmailExist.php');
        }
        else {
            $get_degreeId = amModel::degreeId ($degree, $connect);
            $result_degreeId = mysqli_fetch_assoc($get_degreeId);
            $degree_id = $result_degreeId['degree_id'];

            if ($degree_id) {
                $result = amModel::addStudent ($index_no, $registration_no, $initials, $last_name, $email, $academic_year, $semester, $degree_id, $batch_number, $connect);

                if ($result) {
                    session_start();
                    $_SESSION['index_no'] =  $index_no;

                    header('Location:../../view/attendanceMaintainer/amStudentAdded.php');
                }
                else {
                    header('Location:../../view/attendanceMaintainer/amStudentNotAdded.php');
                }
            }
            else {
                header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
            }
        }
    }

    elseif (isset($_POST['getMandatory_submit'])) {
        session_start();
        $index_no = $_SESSION['index_no'];
        $std_name = $_SESSION['std_name'];
         $_SESSION['mandatoryList'] = "";

        $get_stdDegreeAyearSem = amModel::fetchStudent ($index_no, $connect);
        $result_stdDegreeAyearSem = mysqli_fetch_assoc($get_stdDegreeAyearSem);
        $degree_id = $result_stdDegreeAyearSem['degree_id'];
        $academic_year = $result_stdDegreeAyearSem['academic_year'];
        $semester = $result_stdDegreeAyearSem['semester'];

        $mandatorySubjects = amModel::get_mandatorySubjects ($degree_id, $academic_year, $semester, $connect);
        if (mysqli_num_rows($mandatorySubjects) != 0) {
             while ($record = mysqli_fetch_assoc($mandatorySubjects)) {
                $_SESSION['mandatoryList'] .= "<tr>";
                $_SESSION['mandatoryList'] .= "<td>{$record['subject_code']}</td>";
                $_SESSION['mandatoryList'] .= "<td>{$record['subject_name']}</td>";
                $_SESSION['mandatoryList'] .= "</tr>";
            }
            $_SESSION['index_no'] = $index_no;
            header('Location:../../view/attendanceMaintainer/amDisplayStudentsSubjectsV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amStdHasNoManSubjectsV.php');
        }
    }

    elseif (isset($_POST['getNonMandatory-submit'])) {
        $index_no = $_POST['index_no'];

        $get_std_id = amModel::fetchStudent ($index_no, $connect);
        $result_std_id = mysqli_fetch_assoc($get_std_id);
        $std_id = $result_std_id['std_id'];

        $get_stdDegreeAyearSem = amModel::fetchStudent ($index_no, $connect);
        $result_stdDegreeAyearSem = mysqli_fetch_assoc($get_stdDegreeAyearSem);
        $degree_id = $result_stdDegreeAyearSem['degree_id'];
        $academic_year = $result_stdDegreeAyearSem['academic_year'];
        $semester = $result_stdDegreeAyearSem['semester'];

        $nonMandatorySubjects = amModel::get_nonMandatorySubjects ($degree_id, $academic_year, $semester, $connect);

        if (mysqli_num_rows($nonMandatorySubjects) != 0) {
            session_start();
            $_SESSION['index_no'] = $index_no;
            $_SESSION['nonMandatoryList'] = "";
            $_SESSION['std_id'] = $std_id;

            while ($record1 = mysqli_fetch_assoc($nonMandatorySubjects)) {
                $subject_id = $record1['subject_id'];

                $_SESSION['nonMandatoryList'] .= "<tr>";
                $_SESSION['nonMandatoryList'] .= "<td>{$record1['subject_code']}</td>";
                $_SESSION['nonMandatoryList'] .= "<td>{$record1['subject_name']}</td>";
                $_SESSION['nonMandatoryList'] .= "<td> <input type='checkbox' name='checkbox[]' value='".$subject_id."'> </td>";
                $_SESSION['nonMandatoryList'] .= "</tr>";
            }
            header('Location:../../view/attendanceMaintainer/amStdNonMandSubjectsV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amYearHasNoNonManSubjectsV.php');
        }
    }

    elseif (isset($_POST['fetchNonMandatory-submit'])) {
        $index_no = $_POST['index_no'];
        session_start();
        $_SESSION['nonMandatorySubList'] = "";

        $get_std_id = amModel::fetchStudent ($index_no, $connect);
        $result_std_id = mysqli_fetch_assoc($get_std_id);
        $std_id = $result_std_id['std_id'];

        $get_subjects = amModel::get_assignedNonMandatorySubjects ($std_id, $connect);

        if ($get_subjects) {
            while ($record1 = mysqli_fetch_assoc($get_subjects)) {
                $subject_id = $record1['subject_id'];

                $get_subjects = amModel::get_Subjects ($subject_id, $connect);
                $result_subjects = mysqli_fetch_assoc($get_subjects);

                $subject_code = $result_subjects['subject_code'];
                $subject_name = $result_subjects['subject_name'];

                if ($result_subjects) {
                    $_SESSION['nonMandatorySubList'] .= "<tr>";
                    $_SESSION['nonMandatorySubList'] .= "<td>{$subject_code}</td>";
                    $_SESSION['nonMandatorySubList'] .= "<td>{$subject_name}</td>";
                    $_SESSION['nonMandatorySubList'] .= "<td> <input type='checkbox' name='checkbox[]' value='".$subject_id."'> </td>";
                    $_SESSION['nonMandatorySubList'] .= "</tr>";
                }
                else {
                    header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
                }
            }
            $_SESSION['std_id'] = $std_id;
            header('Location:../../view/attendanceMaintainer/amRemoveNonManSubjects.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amStdHasNoNonManSubjectsV.php');
        }
    }

    elseif(isset($_POST['removeNonMandatory-submit'])) {
        session_start();
        $std_id = $_SESSION['std_id'];

        $get_checkBox = $_POST['checkbox'];
        $removeFlag = 0;
        $subject_count = 0;

        foreach ($get_checkBox as $subject_id) {
            $subject_count = $subject_count + 1; 
            
            $removeSubject = amModel::removeSubject ($std_id, $subject_id, $connect);
            if ($removeSubject) {
                $removeFlag = $removeFlag + 1;
            }
        }
        if ($removeFlag == $subject_count) {
            header('Location:../../view/attendanceMaintainer/amRemovedNonManSubjectsV.php');
        }
        elseif ($removeFlag==0 && $subject_count != 0) {
            header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amNonManSubjectsNotRemovedV.php');
        }
    }

    elseif(isset($_POST['assignNonMandatory-submit'])) {
        session_start();
        $std_id = $_SESSION['std_id'];

        $get_checkBox = $_POST['checkbox'];

        $assignFlag = 0;
        $subject_count = 0;

        foreach ($get_checkBox as $subject_id) {
            $subject_count = $subject_count + 1;

            $check_assignedSub = amModel::check_assignedSub($std_id, $subject_id, $connect);
            $result_assignedSub = mysqli_fetch_assoc($check_assignedSub);

            if ($result_assignedSub) {
                $assignFlag = $assignFlag + 1;
            }
            else {
                $assignSubject = amModel::assignSubject ($std_id, $subject_id, $connect);
                if ($assignSubject) {
                    $assignFlag = $assignFlag + 1;
                }
            }
        }
        if ($assignFlag == $subject_count) {
           header('Location:../../view/attendanceMaintainer/amAssignedToNonManSubjectsV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
        }
    }

    elseif(isset($_POST['fetchStudents-submit'])) {
        $records = amModel::viewStudents ($connect);
        session_start();
        $_SESSION['stdIndexList'] = '';

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['stdIndexList'] .= "<option value='".$record['index_no']."'>".$record['index_no']."</option>";
            }
            header('Location:../../view/attendanceMaintainer/amDeleteUpdateStudentSearchV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amNoStudentsAvailableV.php');
        }
    }

    elseif(isset($_POST['deleteupdateStudent-submit'])) {
        $index_no = $_POST['index_no'];
        $fetchStudent = amModel::fetchStudent ($index_no, $connect);

        if (mysqli_num_rows($fetchStudent) == 1) {
            session_start();
            $result = mysqli_fetch_assoc($fetchStudent);
            $_SESSION['index_no'] = $result['index_no'];
            $_SESSION['registration_no'] = $result['registration_no'];
            $_SESSION['initials'] = $result['initials'];
            $_SESSION['last_name'] = $result['last_name'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['academic_year'] = $result['academic_year'];
            $_SESSION['semester'] = $result['semester'];
            $_SESSION['degree'] = $result['degree'];
            $_SESSION['batch_number'] = $result['batch_number'];

            header('Location:../../view/attendanceMaintainer/amDeleteUpdateStudentV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
        }
    }

    elseif(isset($_POST['updateStudent-submit'])) {
        $index_no = $_POST['index_no'];
        $registration_no = $_POST['registration_no'];
        $initials = $_POST['initials'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $academic_year = $_POST['academic_year'];
        $degree = $_POST['degree'];

        $regNumFlag = 0;
        $mailFlag = 0;

        $regNumExist = amModel::regNumExist ($index_no, $registration_no, $connect);
        // check whether the updated registration number exists already for another student
        if (mysqli_num_rows($regNumExist) == 1) {
            $regNumFlag = 1;
            // registration number belongs to another student.
        }
        $emailExist = amModel::emailExist ($index_no, $email, $connect);
        // check whether the updated student email exists for another student
        if (mysqli_num_rows($emailExist) == 1) {
            $mailFlag = 1;
            // email address belongs to another student.
        }

        if ($mailFlag == 1 && $regNumFlag == 1) {
            header('Location:../../view/attendanceMaintainer/amRegnumEmailReserved.php');
        }
        elseif ($mailFlag == 1) {
            header('Location:../../view/attendanceMaintainer/amEmailReserved.php');
        }
        elseif ($regNumFlag == 1) {
            header('Location:../../view/attendanceMaintainer/amRegnumReserved.php');
        }
        else {
            $result = amModel::updateStd ($index_no, $registration_no, $initials, $last_name, $email, $academic_year, $degree, $connect);

            if ($result) {
                header('Location:../../view/attendanceMaintainer/amStudentUpdatedV.php');
            }
            else {
                header('Location:../../view/attendanceMaintainer/amStudentNotUpdatedV.php');
            }
        }
    }

    elseif(isset($_POST['removeStudent-submit'])) {
        $index_no = $_POST['index_no'];

        $result = amModel::deleteStd ($index_no, $connect);

        if ($result) {
            header('Location:../../view/attendanceMaintainer/amStudentRemoved.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amStudentNotRemoved.php');
        }
    }

    elseif(isset($_POST['viewStudents-submit'])) {
        session_start();
        $_SESSION['student_list'] = '';

        $records = amModel::viewStudents($connect);

        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $degree_id = $record['degree_id'];
                $get_degree_name = amModel::get_degree_name ($degree_id, $connect);
                $result_degree_name = mysqli_fetch_assoc($get_degree_name);
                $degree_name = $result_degree_name['degree_name'];

                $_SESSION['student_list'] .= "<tr>";
                $_SESSION['student_list'] .= "<td>{$record['index_no']}</td>";
                $_SESSION['student_list'] .= "<td>{$record['registration_no']}</td>";
                $_SESSION['student_list'] .= "<td>{$record['initials']}</td>";
                $_SESSION['student_list'] .= "<td>{$record['last_name']}</td>";
                $_SESSION['student_list'] .= "<td>{$record['email']}</td>";
                $_SESSION['student_list'] .= "<td>{$record['academic_year']}</td>";
                $_SESSION['student_list'] .= "<td>{$record['semester']}</td>";
                $_SESSION['student_list'] .= "<td>{$degree_name}</td>";
                $_SESSION['student_list'] .= "<td>{$record['batch_number']}</td>";
                $_SESSION['student_list'] .= "</tr>";

                header('Location:../../view/attendanceMaintainer/amViewStudentDetailsV.php');
            }
        }
        else {
            header('Location:../../view/attendanceMaintainer/amNoStdAvailable.php');
        }
    }

    elseif(isset($_POST['getStudents-submit'])) {
        $records = amModel::viewStudents ($connect);
        session_start();
        $_SESSION['stdIndexList'] = '';

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['stdIndexList'] .= "<option value='".$record['index_no']."'>".$record['index_no']."</option>";
            }
            header('Location:../../view/attendanceMaintainer/amGetStudentV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
        }
    }

    elseif(isset($_POST['getStdIndexList-submit'])) {
        $records = amModel::viewStudents ($connect);
        session_start();
        $_SESSION['stdIndexList'] = '';

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['stdIndexList'] .= "<option value='".$record['index_no']."'>".$record['index_no']."</option>";
            }
            header('Location:../../view/attendanceMaintainer/amFetchStudentV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
        }
    }

    elseif (isset($_POST['getBatchList-submit'])) {
        $records = amModel::getBatchList ($connect);
        
        session_start();
        $_SESSION['batchList'] = '';

        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['batchList'] .= "<option value='".$record['batch_number']."'>".$record['batch_number']."</option>";
            }
            header('Location:../../view/attendanceMaintainer/amGetBatchV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
        }
    }

    elseif (isset($_POST['getBatch-submit'])) {
        $batch_number = $_POST['batch_number'];
        session_start();
        $_SESSION['batch_number'] = $batch_number;
        $_SESSION['batchStd'] = '';

        $get_BstdList = amModel::get_BstdList ($batch_number, $connect);

        if (mysqli_num_rows($get_BstdList) != 0) {
            while ($record = mysqli_fetch_assoc($get_BstdList)) {
                $get_degree_name = amModel::get_degree_name ($record['degree_id'], $connect);
                $result_degree_name = mysqli_fetch_assoc($get_degree_name);
                $degree_name = $result_degree_name['degree_name'];

                $_SESSION['batchStd'] .= "<tr>";
                $_SESSION['batchStd'] .= "<td> {$record['index_no']} </td>";
                $_SESSION['batchStd'] .= "<td> {$record['registration_no']} </td>";
                $_SESSION['batchStd'] .= "<td> {$record['initials']} </td>";
                $_SESSION['batchStd'] .= "<td> {$record['last_name']} </td>";
                $_SESSION['batchStd'] .= "<td> {$record['email']} </td>";
                $_SESSION['batchStd'] .= "<td> {$record['academic_year']} </td>";
                $_SESSION['batchStd'] .= "<td> {$record['semester']} </td>";
                $_SESSION['batchStd'] .= "<td> {$degree_name} </td>";
                $_SESSION['batchStd'] .= "</tr>";
            }
            header('Location:../../view/attendanceMaintainer/amBatchListV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
        }
    }

    elseif (isset($_POST['getDegreeList-submit'])) {
        $getDegreeList = amModel:: getDegreeList($connect);
        session_start();
        $_SESSION['degreeList'] = '';

        if (mysqli_num_rows($getDegreeList) != 0) {
            while ($record = mysqli_fetch_assoc($getDegreeList)) {
                $_SESSION['degreeList'] .="<option value='".$record['degree_name']."'>".$record['degree_name']."</otpion>";
            }
            header('Location:../../view/attendanceMaintainer/amDegreeListV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
        }
    }

    elseif (isset($_POST['getDegree-submit'])) {
        $degree_name = $_POST['degree_name'];
        session_start();
        $_SESSION['degree_name'] = $degree_name;
        $_SESSION['degreeStd'] = '';

        $get_degreeId = amModel::degreeId ($degree_name, $connect);
        $result_degreeId = mysqli_fetch_assoc($get_degreeId);
        $degree_id = $result_degreeId['degree_id'];

        if ($degree_id) {
            $get_DstdList = amModel::get_DstdList($degree_id, $connect);

            if (mysqli_num_rows($get_DstdList) != 0) {
                while ($record = mysqli_fetch_assoc($get_DstdList)) {
                    $_SESSION['degreeStd'] .= "<tr>";
                    $_SESSION['degreeStd'] .= "<td> {$record['index_no']} </td>";
                    $_SESSION['degreeStd'] .= "<td> {$record['registration_no']} </td>";
                    $_SESSION['degreeStd'] .= "<td> {$record['initials']} </td>";
                    $_SESSION['degreeStd'] .= "<td> {$record['last_name']} </td>";
                    $_SESSION['degreeStd'] .= "<td> {$record['email']} </td>";
                    $_SESSION['degreeStd'] .= "<td> {$record['academic_year']} </td>";
                    $_SESSION['degreeStd'] .= "<td> {$record['semester']} </td>";
                    $_SESSION['degreeStd'] .= "<td> {$record['batch_number']} </td>";
                    $_SESSION['degreeStd'] .= "</tr>";
                }
                header('Location:../../view/attendanceMaintainer/amDegreeStdListV.php');
            }
            else {
                echo "amDegreeStdListV";
                /*header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');*/
            }
        }
        else {
            echo "degree_id";
            /*header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');*/
        }
    }

    else {
        header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
    }
?>