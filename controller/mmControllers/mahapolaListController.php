<?php
    session_start();
    require_once('../../model/mmModel.php');
    require_once('../../config/database.php');

?>

<?php

        if(isset($_POST['display-report'])){

            $reportType = mysqli_escape_string($connect,$_POST['reporttype']);

            if($reportType =='monthlyEligibiltyList'){

                header('Location:../../view/mahapolaSchemeMaintainer/mmEligibilityListV.php');
                
            }

            if($reportType=='monthlyInEligibiltyList'){

                header('Location:../../view/mahapolaSchemeMaintainer/mmInEligibilityListV.php');
                
            }

            if($reportType=='monthlyReconciliationReport'){

                header('Location:../../view/mahapolaSchemeMaintainer/mmReconcilationReportV.php');
                
            }

        }

?>