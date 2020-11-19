<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel.php');

        $schemes = memModel::getSchemes($connect);
        
        $_SESSION['scheme_name'] = '';
        $cur_scheme = $_SESSION['scheme'];
        
        if ($schemes) {
            while ($scheme = mysqli_fetch_array($schemes)) {
                $_SESSION['scheme_name'] .= "<option value='".$scheme['scheme_name']."'>".$scheme['scheme_name']."</option>";
                
            }
            $_SESSION['scheme'] = $cur_scheme;
            header('Location:../../view/medicalSchemeMember/memSelectSchemeV.php');
        }
        else {
            echo "Database query failed";
        } 
?>