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

    else {
    	echo "no button clicked";
    }