<?php
    session_start();
    require_once('../../model/mmModel/studentDetModel.php');
    require_once('../../config/database.php');

?>

<?php

    if(isset($_POST['view-degree-list']) || isset($_GET['btn'])){

        $batch_numbers = studentDetModel::getBatchNumbers($connect);
        $degrees = studentDetModel::getDegrees($connect);

        $_SESSION['batch_number'] = '';
        $_SESSION['degree'] = '';

        if(mysqli_num_rows($batch_numbers)>0 && mysqli_num_rows($degrees)>0){
            while ($batch_no = mysqli_fetch_array($batch_numbers)) {
                $_SESSION['batch_number'] .= "<option value='".$batch_no['batch_number']."'>".$batch_no['batch_number']."</option>";
                
            }

            
            while ($degree = mysqli_fetch_array($degrees)) {
                $_SESSION['degree'] .= "<option value='".$degree['degree_id']."'>".$degree['degree_abbriviation']." - ".$degree['degree_name']."</option>";
                    
            }
        
            header('Location:../../view/mahapolaSchemeMaintainer/mmSelectDegreeV.php');
            
            
        }
        else{
            header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
        }
    }

    elseif(isset($_POST['display-stu-list'])){
        
        $batch_number = mysqli_real_escape_string($connect, $_POST['batch_number']);
        $degree = mysqli_real_escape_string($connect, $_POST['degree']);

        $_SESSION['batch_number'] = $batch_number;
        $_SESSION['stu_degree'] = $degree;

        $student_list = studentDetModel::getStudentList($batch_number, $degree, $connect);

        $_SESSION['student_list'] = '';

        if(mysqli_num_rows($student_list) > 0){

            while($row = mysqli_fetch_assoc($student_list)){

                $_SESSION['student_list'] .= "<tr>";
                $_SESSION['student_list'] .= "<td>{$row['index_no']}</td>";
                $_SESSION['student_list'] .= "<td>{$row['initials']} {$row['last_name']}</td>";
                $_SESSION['student_list'] .= "<td><a href=\"../../controller/mmControllers/viewStuDetailsController.php?std_id={$row['std_id']}\">View Details</a></td>";
                $_SESSION['student_list'] .= "</tr>";

                header('Location:../../view/mahapolaSchemeMaintainer/mmMarkMahapolaStudentsListV.php');
            }
        }
        else{
            header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
        }
        
    }

    elseif(isset($_POST['mark-submit'])){
            //echo "yes submit";
        $stu_id = $_SESSION['std_id'];
        $student_index = mysqli_real_escape_string($connect, $_POST['student_index']);
        echo $mahapola_nominated = mysqli_real_escape_string($connect, $_POST['mahapola-nominated']);

        $_SESSION['degree_id_new'] = $_SESSION['degree_id'];
        $_SESSION['batch_no'] = $_SESSION['stu_batch_no'];

        if($mahapola_nominated == 1){
            echo $mahapola_category = mysqli_real_escape_string($connect, $_POST['mahapola-category']);
        }
        
        $update_stu = studentDetModel::updateMahapolaStuDetails($stu_id, $mahapola_nominated,$mahapola_category,$connect);

        if($update_stu){
            header('Location:../../view/mahapolaSchemeMaintainer/mmStudentDetailsSaveV.php');
        }
        else{
            echo "Failed Query";
        }
        
    }

?>
