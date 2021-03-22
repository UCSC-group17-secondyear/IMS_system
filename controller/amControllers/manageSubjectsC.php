<?php 
    require_once('../../model/amModel/amManageSubjectModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['fetchDegress-submit'])) {
        $records = amModel::getDegreeList($connect);
        session_start();
        $_SESSION['degreeList'] = '';

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['degreeList'] .= "<option value='".$record['degree_name']."'>".$record['degree_name']."</option>";
            }
            header('Location:../../view/attendanceMaintainer/amEnterSubjectDetails.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amNoDegreesAvailableV.php');
        }
    }

    elseif(isset($_POST['addSubject-submit'])) {
    	$subject_code = $_POST['subject_code'];
    	$subject_name = $_POST['subject_name'];
    	$degree = $_POST['degree'];
        $academic_year = $_POST['academic_year'];
        $semester = $_POST['semester'];
        $mandatory_subject = $_POST['mandatory_subject'];

        $get_degree_id = amModel:: get_degree_id($degree, $connect);
        $result_degree_id = mysqli_fetch_array($get_degree_id);
        $degree_id = $result_degree_id['degree_id'];

        if ($degree_id) {
            $checkSubCode = amModel::checkSubCode ($subject_code, $connect);
            $check_Subject = amModel::check_Subject ($subject_name, $degree_id, $connect);
            $subCode_rows = mysqli_num_rows($checkSubCode);
            $subject_rows = mysqli_num_rows($check_Subject);

            if ($subCode_rows>0 || $subject_rows>0 ) {
                header('Location:../../view/attendanceMaintainer/amSubjectExists.php');
            }
            else {
                $result = amModel::addSubject ($subject_code, $subject_name, $degree_id, $academic_year, $semester, $mandatory_subject, $connect);

                if ($result) {
                    header('Location:../../view/attendanceMaintainer/amSubjectAdded.php');
                }
                else {
                    header('Location:../../view/attendanceMaintainer/amSubjectNotAdded.php');
                }
            }
        }
        else {
            echo "failed";
        }
    }

    elseif (isset($_POST['fetchSubjects-submit'])) {
        $records1 = amModel::getSubjectsList($connect);
        session_start();
        $_SESSION['subjectList'] = '';

        $records2 = amModel::getDegreeList($connect);
        $_SESSION['degreeList'] = '';

        if ($records1 && $records2) {
            while ($record = mysqli_fetch_array($records1)) {
                $_SESSION['subjectList'] .= "<option value='".$record['subject_name']."'>".$record['subject_name']."</option>";
            }
             while ($record = mysqli_fetch_array($records2)) {
                $_SESSION['degreeList'] .= "<option value='".$record['degree_name']."'>".$record['degree_name']."</option>";
            }
            header('Location:../../view/attendanceMaintainer/amDeleteUpdateSubjectSearch.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amNoSubjectsAvailableV.php');
        }
    }

    elseif(isset($_POST['deleteupdateSubject-submit'])) {
    	$subject_name = $_POST['subject_name'];
        $degree_name = $_POST['degree_name'];

        $fetchDegree = amModel::get_degree_id($degree_name, $connect);
        $degree_rows = mysqli_fetch_assoc($fetchDegree);
        $degree_id = $degree_rows['degree_id'];

        if ($degree_id) {
            $fetchSubject = amModel::fetchSubject ($subject_name, $degree_id, $connect);
            $subject_rows = mysqli_num_rows($fetchSubject);

            if ($subject_rows == 1) {
                session_start();
                $result = mysqli_fetch_assoc($fetchSubject);
                $_SESSION['subject_id '] = $result['subject_id'];
                $_SESSION['subject_code'] = $result['subject_code'];
                $_SESSION['subject_name'] = $result['subject_name'];
                $_SESSION['degree'] = $degree_name;
                $_SESSION['degree_id'] = $degree_id;
                $_SESSION['academic_year'] = $result['academic_year'];
                $_SESSION['semester'] = $result['semester'];

                header('Location:../../view/attendanceMaintainer/amDeleteUpdateSubjectV.php');
            }
            else {
                echo "subject_code does not exists";
            }
        }
        else {
            echo "failed";
        }
    }

    elseif(isset($_POST['updateSubject-submit'])) {
    	$subject_code = $_POST['subject_code'];
    	$subject_name = $_POST['subject_name'];
    	$degree = $_POST['degree'];
        $academic_year = $_POST['academic_year'];
        $semester = $_POST['semester'];

    	$result = amModel::saveUpdatedSubject ($subject_code, $subject_name, $degree, $academic_year, $semester, $connect);

        if ($result) {
            header('Location:../../view/attendanceMaintainer/amSubjectUpdated.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amSubjectNotUpdated.php');
        }
    }

    elseif(isset($_POST['remeoveSubject-submit'])) {
    	$subject_code = $_POST['subject_code'];

    	$result = amModel::removeSubject ($subject_code, $connect);

        if ($result) {
            header('Location:../../view/attendanceMaintainer/amSubjectRemoved.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amSubjectNotRemoved.php');
        }
    }

    elseif(isset($_POST['viewSubjects-submit'])) {
    	session_start();
        $_SESSION['subject_list'] = '';

        $records = amModel::viewSubjects ($connect);
        
        if ($records) {
        	while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['subject_list'] .= "<tr>";
                $_SESSION['subject_list'] .= "<td>{$record['subject_code']}</td>";
                $_SESSION['subject_list'] .= "<td>{$record['subject_name']}</td>";
                $_SESSION['subject_list'] .= "<td>{$record['degree']}</td>";
                $_SESSION['subject_list'] .= "<td>{$record['academic_year']}</td>";
                $_SESSION['subject_list'] .= "<td>{$record['semester']}</td>";
                $_SESSION['subject_list'] .= "</tr>";

                header('Location:../../view/attendanceMaintainer/amViewSubjects.php');
            }
        }
        
        else {
        	header('Location:../../view/attendanceMaintainer/amNoSubjectsAvailable.php');
        }
    }

    else {
    	echo "no button clicked";
    }