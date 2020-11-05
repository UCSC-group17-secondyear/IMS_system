<?php
    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

        $schemes = Model::getSchemes($connect);
        
        $_SESSION['scheme_name'] = '';

        if ($schemes) {
            while ($scheme = mysqli_fetch_array($schemes)) {
                $_SESSION['scheme_name'] .= "<option value='".$scheme['scheme_name']."'>".$scheme['scheme_name']."</option>";
                
            }
    
            header('Location:../view/medicalSchemeMember/memSelectSchemeV.php');
        }
        else {
            echo "Database query failed";
        } 
?>