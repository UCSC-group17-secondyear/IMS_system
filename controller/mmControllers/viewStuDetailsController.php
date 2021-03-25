<?php
    session_start();
    require_once('../../model/mmModel/studentDetModel.php');
    require_once('../../config/database.php');

?>

<?php
   
        $student_id = mysqli_real_escape_string($connect, $_GET['std_id']);
        $_SESSION['std_id'] = $student_id;
        $result_student = studentDetModel::getStuDetails($student_id, $connect);

            $stu = mysqli_fetch_assoc($result_student);

            $_SESSION['stu_index'] = $stu['index_no'];
            $_SESSION['stu_reg_no'] = $stu['registration_no'];
            $_SESSION['stu_initials'] = $stu['initials'];
            $_SESSION['stu_surname'] = $stu['last_name'];

            $degree_name = studentDetModel::getStuDegree($stu['degree_id'],$connect);
            $degree = mysqli_fetch_assoc($degree_name);

            $_SESSION['degree_id'] = $degree['degree_id'];
            $_SESSION['stu_degree'] = $degree['degree_name'];
            $_SESSION['stu_batch_no'] = $stu['batch_number'];

            header('Location:../../view/mahapolaSchemeMaintainer/mmStudentDetailsV.php');

?>