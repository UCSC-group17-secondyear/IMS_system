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
            $checkSubCode = amModel::checkSubCode ($subject_code, $degree_id, $connect);
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
            header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
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
                $_SESSION['subject_id'] = $result['subject_id'];
                $_SESSION['subject_code'] = $result['subject_code'];
                $_SESSION['subject_name'] = $result['subject_name'];
                $_SESSION['degree'] = $degree_name;
                $_SESSION['degree_id'] = $degree_id;
                $_SESSION['academic_year'] = $result['academic_year'];
                $_SESSION['semester'] = $result['semester'];

                header('Location:../../view/attendanceMaintainer/amDeleteUpdateSubjectV.php');
            }
            else {
                header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
            }
        }
        else {
            header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
        }
    }

    elseif(isset($_POST['updateSubject-submit'])) {
        session_start();
        $subject_id = $_SESSION['subject_id'];
    	$subject_code = $_POST['subject_code'];
    	$subject_name = $_POST['subject_name'];
    	$degree = $_POST['degree'];
        $academic_year = $_POST['academic_year'];
        $semester = $_POST['semester'];

        if (1 <= $academic_year && $academic_year <=4) {
            if (1 <= $semester && $semester <= 2) {
                $fetchDegree = amModel::get_degree_id($degree, $connect);
                $degree_rows = mysqli_fetch_assoc($fetchDegree);
                $degree_id = $degree_rows['degree_id'];

                if ($degree_id) {
                    $check_subCodeToUpdate = amModel::check_subCodeToUpdate ($subject_id, $degree_id, $subject_code, $connect);
                    if (mysqli_num_rows($check_subCodeToUpdate) != 0) {
                        header('Location:../../view/attendanceMaintainer/amSubjectCodeExists.php');
                    }
                    else {
                        $check_subjectToUpdate = amModel::check_subjectToUpdate ($subject_id, $subject_name, $degree_id, $connect);

                        if (mysqli_num_rows($check_subjectToUpdate) != 0) {
                            header('Location:../../view/attendanceMaintainer/amSubjectAvailableV.php');
                        }
                        else {
                            $result = amModel::saveUpdatedSubject ($subject_id, $subject_code, $subject_name, $degree_id, $academic_year, $semester, $connect);

                            if ($result) {
                                header('Location:../../view/attendanceMaintainer/amSubjectUpdated.php');
                            }
                            else {
                                header('Location:../../view/attendanceMaintainer/amSubjectNotUpdated.php');
                            }
                        }
                    }
                }
                else {
                    header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
                }
            }
            else {
                header('Location:../../view/attendanceMaintainer/amInvalidSemesterV.php');
            }
        }
        else {
            header('Location:../../view/attendanceMaintainer/amInvalidAcademicYrV.php');
        }
    }

    elseif(isset($_POST['remeoveSubject-submit'])) {
        session_start();
    	$subject_id = $_SESSION['subject_id'];

        $result = amModel::removeSubject ($subject_id, $connect);

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

                $degree_id = $record['degree_id'];
                $fetchDegree = amModel::get_degree_name ($degree_id, $connect);
                $degree_rows = mysqli_fetch_assoc($fetchDegree);
                $degree_name = $degree_rows['degree_name'];
                
                if ($degree_name) {
                    $_SESSION['subject_list'] .= "<tr>";
                    $_SESSION['subject_list'] .= "<td>{$record['subject_code']}</td>";
                    $_SESSION['subject_list'] .= "<td>{$record['subject_name']}</td>";
                    $_SESSION['subject_list'] .= "<td>{$degree_name}</td>";
                    $_SESSION['subject_list'] .= "<td>{$record['academic_year']}</td>";
                    $_SESSION['subject_list'] .= "<td>{$record['semester']}</td>";
                    $_SESSION['subject_list'] .= "</tr>";

                    header('Location:../../view/attendanceMaintainer/amViewSubjects.php');
                }
                else {
                    header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
                }
            }
        }
        
        else {
        	header('Location:../../view/attendanceMaintainer/amNoSubjectsAvailable.php');
        }
    }

    elseif (isset($_POST['getDegreeList-submit'])) {
        $get_degrees = amModel::getDegreeList($connect);

        if ($get_degrees) {
            session_start();
            $_SESSION['degreeList'] = '';

            while ($record = mysqli_fetch_assoc($get_degrees)) {
                $_SESSION['degreeList'] .= "<option value='".$record['degree_name']."'>".$record[ 'degree_name']."</option>";
            }
            header('Location:../../view/attendanceMaintainer/amSelectDegreeV.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
        }
    }

    elseif (isset($_POST['getDegreeSubjects-submit'])) {
        $degree_name = $_POST['degree_name'];
        session_start();
        $_SESSION['degree_name'] = $degree_name;
        $_SESSION['subjectList'] = '';

        $get_degree_id = amModel:: get_degree_id($degree_name, $connect);
        $result_degree_id = mysqli_fetch_array($get_degree_id);
        $degree_id = $result_degree_id['degree_id'];

        if ($degree_id) {
            $get_subList = amModel:: get_degreeSubjectList ($degree_id, $connect);

            if (mysqli_num_rows($get_subList)) {
                while ($record = mysqli_fetch_assoc($get_subList)) {
                    $_SESSION['subjectList'] .= "<tr>";
                    $_SESSION['subjectList'] .= "<td>{$record['subject_code']}</td>";
                    $_SESSION['subjectList'] .= "<td>{$record['subject_name']}</td>";
                    $_SESSION['subjectList'] .= "<td>{$record['academic_year']}</td>";
                    $_SESSION['subjectList'] .= "<td>{$record['semester']}</td>";
                    $_SESSION['subjectList'] .= "</tr>";
                }
                header('Location:../../view/attendanceMaintainer/amSubjectsOfDegreeV.php');
            }
            else {
                header('Location:../../view/attendanceMaintainer/amNoSubForDegreeV.php');
            }
        }
        else {
            header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
        }
    }

    elseif (isset($_POST['getAyearSubjects-submit'])) {
        $academic_year = $_POST['academic_year'];
        session_start();
        $_SESSION['academic_year'] = $academic_year;

        $_SESSION['subjectListA'] = '';
        $get_subList = amModel:: get_aySubjectList ($academic_year, $connect);
        if (mysqli_num_rows($get_subList)) {
                while ($record = mysqli_fetch_assoc($get_subList)) {
                    $degree_id = $record['degree_id'];
                    $fetchDegree = amModel::get_degree_name ($degree_id, $connect);
                    $degree_rows = mysqli_fetch_assoc($fetchDegree);
                    $degree_name = $degree_rows['degree_name'];

                    $_SESSION['subjectListA'] .= "<tr>";
                    $_SESSION['subjectListA'] .= "<td>{$record['subject_code']}</td>";
                    $_SESSION['subjectListA'] .= "<td>{$record['subject_name']}</td>";
                    $_SESSION['subjectListA'] .= "<td>{$degree_name}</td>";
                    $_SESSION['subjectListA'] .= "<td>{$record['semester']}</td>";
                    $_SESSION['subjectListA'] .= "</tr>";
                }
                header('Location:../../view/attendanceMaintainer/amSubjectsOfAcademicYear.php');
            }
            else {
                header('Location:../../view/attendanceMaintainer/amNoSubForAcademicYearV.php');
            }
    }

    else {
    	header('Location:../../view/attendanceMaintainer/amQueryFailedV.php');
    }