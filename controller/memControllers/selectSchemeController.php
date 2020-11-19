<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel.php');

        $schemes = memModel::getSchemes($connect);
        
        $_SESSION['scheme_name'] = '';
        
        
        if ($schemes) {
            while ($scheme = mysqli_fetch_array($schemes)) {
                $_SESSION['scheme_name'] .= "<option value='".$scheme['schemeName']."'>".$scheme['schemeName']."</option>";
                
            }

            header('Location:../../view/medicalSchemeMember/memSelectSchemeV.php');
        }
        else {
            echo "Database query failed";
        } 
?>