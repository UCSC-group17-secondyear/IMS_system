<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/rvModel/mahapolaModel.php');
?>

<?php
    if(isset($_POST['view-nom-degree-list']) || ($_GET['btn']==21)){

        $batch_numbers = mahapolaModel::getBatchNumbers($connect);
        $degrees = mahapolaModel::getDegrees($connect);

        $_SESSION['batch_number'] = '';
        $_SESSION['degree'] = '';

        if(mysqli_num_rows($batch_numbers)>0 && mysqli_num_rows($degrees)>0){
            while ($batch_no = mysqli_fetch_array($batch_numbers)) {
                $_SESSION['batch_number'] .= "<option value='".$batch_no['batch_number']."'>".$batch_no['batch_number']."</option>";
                
            }

            while ($degree = mysqli_fetch_array($degrees)) {
                $_SESSION['degree'] .= "<option value='".$degree['degree_id']."'>".$degree['degree_abbriviation']." - ".$degree['degree_name']."</option>";
                    
            }
        
            header('Location:../../view/reportViewer/rvViewMahapolaNominatedListV.php');
        }
        else{
            header('Location:../../view/mahapolaSchemeMaintainer/rvNoRecordsV.php');        
        }

    }

    elseif(isset($_POST['display-nom-list'])){

        $batch_no = mysqli_real_escape_string($connect, $_POST['batch_no']);
        $degree = mysqli_real_escape_string($connect, $_POST['degree']);

        $result_nominated = mahapolaModel::getNominatedList($batch_no, $degree, $connect);

        $_SESSION['nominated_stu'] = '';

        if(mysqli_num_rows($result_nominated) > 0){
            while($row_nominated = mysqli_fetch_assoc($result_nominated)){
                
                $_SESSION['nominated_stu'] .= "<tr>";
                $_SESSION['nominated_stu'] .= "<td>{$row_nominated['index_no']}</td>";
                $_SESSION['nominated_stu'] .= "<td>{$row_nominated['registration_no']}</td>";
                $_SESSION['nominated_stu'] .= "<td>{$row_nominated['initials']}.{$row_nominated['last_name']}</td>";
                $_SESSION['nominated_stu'] .= "<td>{$row_nominated['mahapola_category']}</td>";
                $_SESSION['nominated_stu'] .= "</tr>";

                header('Location:../../view/reportViewer/rvMahapolaNominatedListV.php');
            }
        }
        else{
            header('Location:../../view/reportViewer/rvNoStudentListRecordsV.php');
        }
    }

?>