<?php 
    require_once('../../model/amModel/amManageSubjectModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addSubject-submit'])) {
    	$subject_code = $_POST['subject_code'];
    	$subject_name = $_POST['subject_name'];
    	$degree = $_POST['degree'];

    	$checkSubCode = amModel::checkSubCode ($subject_code, $connect);
    	if (mysqli_num_rows($checkSubCode) == 1) {
    		header('Location:../../view/attendanceMaintainer/amSubjectExists.php');
            // echo "subject_code exists";
        }
        else {
        	$result = amModel::addSubject ($subject_code, $subject_name, $degree, $connect);

            if ($result) {
                header('Location:../../view/attendanceMaintainer/amSubjectAdded.php');
            }
            else {
                header('Location:../../view/attendanceMaintainer/amSubjectNotAdded.php');
            }
        }
    }

    elseif(isset($_POST['deleteupdateSubject-submit'])) {
    	$subject_code = $_POST['subject_code'];

    	$fetchSubject = amModel::fetchSubject ($subject_code, $connect);

    	if (mysqli_num_rows($fetchSubject) == 1) {
    		session_start();
    		$result = mysqli_fetch_assoc($fetchSubject);
            $_SESSION['subject_code'] = $result['subject_code'];
            $_SESSION['subject_name'] = $result['subject_name'];
            $_SESSION['degree'] = $result['degree'];

            header('Location:../../view/attendanceMaintainer/amDeleteUpdateSubjectV.php');
    	}
    	else {
    		echo "subject_code does not exists";
    	}
    }

    elseif(isset($_POST['updateSubject-submit'])) {
    	$subject_code = $_POST['subject_code'];
    	$subject_name = $_POST['subject_name'];
    	$degree = $_POST['degree'];

    	$result = amModel::saveUpdatedSubject ($subject_code, $subject_name, $degree, $connect);

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

    else {
    	echo "no button clicked";
    }