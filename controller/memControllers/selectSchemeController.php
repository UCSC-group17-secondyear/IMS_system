<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/memModel.php');
    require_once('../../model/memModel/renewModel.php');
?>

<?php

        if(isset($_POST['yes-submit'])){

            $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
            $memType = renewModel::getMemType($user_id, $connect);
            $mem_type = mysqli_fetch_array($memType);
            $type = $mem_type[1];
            $type_id = $mem_type[0];
            
            $diff = renewModel::getDateDiffFromJoin($user_id, $connect);
            $appoint_diff = mysqli_fetch_array($diff);
            $date_diff = (int)$appoint_diff[0];
            $expInMonth = $date_diff/30;
            $expMonth = (int)$expInMonth;

            $_SESSION['schemeName'] = '';
            $_SESSION['user_id'] = $user_id;

            if($type_id == '3'){
                
                $schemes = memModel::getPermanentSchemes($expMonth, $connect);
                
                if ($schemes) {
                    while ($scheme = mysqli_fetch_array($schemes)) {
                        $_SESSION['schemeName'] .= "<option value='".$scheme['scheme_id']."'>".$scheme['schemeName']."</option>";
                        
                    }
    
                    header('Location:../../view/medicalSchemeMember/memSelectSchemeV.php');
                }
                else{
                    header('Location:../../view/medicalSchemeMember/memNoSchemeAvaliableV.php');
                }
            }

            //--------------------------------------------------------------------------------------------

            elseif($type_id == '1'){
                
                $schemes = memModel::getTemporarySchemes($expMonth, $connect);

                if ($schemes) {
                    while ($scheme = mysqli_fetch_array($schemes)) {
                        $_SESSION['schemeName'] .= "<option value='".$scheme['scheme_id']."'>".$scheme['schemeName']."</option>";
                        
                    }
    
                    header('Location:../../view/medicalSchemeMember/memSelectSchemeV.php');
                }
                else{
                    header('Location:../../view/medicalSchemeMember/memNoSchemeAvaliableV.php');
                }
            }

            //--------------------------------------------------------------------------------------------

            elseif($type_id == '2'){
               
                $schemes = memModel::getContractSchemes($expMonth, $connect);
                
                if ($schemes) {
                    while ($scheme = mysqli_fetch_array($schemes)) {
                        $_SESSION['schemeName'] .= "<option value='".$scheme['scheme_id']."'>".$scheme['schemeName']."</option>";
                        
                    }
    
                    header('Location:../../view/medicalSchemeMember/memSelectSchemeV.php');
                }
                else{
                    header('Location:../../view/medicalSchemeMember/memNoSchemeAvaliableV.php');
                }
            }

            else{
                header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
            }
            

    }
?>