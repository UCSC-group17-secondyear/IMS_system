<?php
    session_start();
    require_once('../../model/mmModel.php');
    require_once('../../config/database.php');

?>

<?php

    if(isset($_POST['mahapola-mark-submit'])){
   

            header('Location:../../view/mahapolaSchemeMaintainer/mmStudentDetailsV.php');
   
    }
?>