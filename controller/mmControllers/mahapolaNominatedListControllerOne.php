<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/mmModel/mmModel.php');
?>

<?php

    $batch_numbers = mmModel::getBatchNumbers($connect);
    $degrees = mmModel::getDegrees($connect);

    $_SESSION['batchNumber'] = '';
    $_SESSION['degree'] = '';

    if(mysqli_num_rows($batch_numbers)>0){
        while ($batch_no = mysqli_fetch_array($batch_numbers)) {
            $_SESSION['batchNumber'] .= "<option value='".$batch_no['batch_number']."'>".$batch_no['batch_number']."</option>";
            
        }

        if(mysqli_num_rows($degrees)>0){
            while ($degree = mysqli_fetch_array($degrees)) {
                $_SESSION['degree'] .= "<option value='".$degree['degree_id']."'>".$degree['degree_id']." - ".$degree['degree_abbriviation']." - ".$degree['degree_name']."</option>";
                
            }
    
            header('Location:../../view/mahapolaSchemeMaintainer/mmViewMahapolaNominatedListV.php');
        }
        else{
            echo "No degree records.";
        }
        
    }
    else{
        echo "No batch records";
    }

    

    

?>