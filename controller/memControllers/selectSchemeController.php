<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel.php');
?>

<?php

        if(isset($_POST['yes-submit'])){

            $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
            $memType = memModel::getMemType($user_id, $connect);
            $mem_type = mysqli_fetch_array($memType);
            $type = $mem_type[0];
            
            $diff = memModel::getDateDiffFromJoin($user_id, $connect);
            $appoint_diff = mysqli_fetch_array($diff);
            $date_diff = (int)$appoint_diff[0];
            $expInMonth = $date_diff/30;
            $expMonth = (int)$expInMonth;

            $_SESSION['schemeName'] = '';
            $_SESSION['user_id'] = $user_id;

            if($type == 'Permanent'){
                
                $schemes = memModel::getPermanentSchemes($expMonth, $connect);
                
                if (mysqli_num_rows($schemes)>0) {
                    while ($scheme = mysqli_fetch_array($schemes)) {
                        $_SESSION['schemeName'] .= "<option value='".$scheme['schemeName']."'>".$scheme['schemeName']."</option>";
                        
                    }
    
                    header('Location:../../view/medicalSchemeMember/memSelectSchemeV.php');
                }
                else{
                    header('Location:../../view/medicalSchemeMember/memNoSchemeAvaliableV.php');
                }
            }

            //--------------------------------------------------------------------------------------------

            elseif($type == 'Temporary'){
                
                $schemes = memModel::getTemporarySchemes($expMonth, $connect);

                if (mysqli_num_rows($schemes)>0) {
                    while ($scheme = mysqli_fetch_array($schemes)) {
                        $_SESSION['schemeName'] .= "<option value='".$scheme['schemeName']."'>".$scheme['schemeName']."</option>";
                        
                    }
    
                    header('Location:../../view/medicalSchemeMember/memSelectSchemeV.php');
                }
                else{
                    header('Location:../../view/medicalSchemeMember/memNoSchemeAvaliableV.php');
                }
            }

            //--------------------------------------------------------------------------------------------

            elseif($type == 'Contract'){
               
                $schemes = memModel::getContractSchemes($expMonth, $connect);
                
                if (mysqli_num_rows($schemes)>0) {
                    while ($scheme = mysqli_fetch_array($schemes)) {
                        $_SESSION['schemeName'] .= "<option value='".$scheme['schemeName']."'>".$scheme['schemeName']."</option>";
                        
                    }
    
                    header('Location:../../view/medicalSchemeMember/memSelectSchemeV.php');
                }
                else{
                    header('Location:../../view/medicalSchemeMember/memNoSchemeAvaliableV.php');
                }
            }

            else{
                echo "no member type";
            }
            

    }
?>