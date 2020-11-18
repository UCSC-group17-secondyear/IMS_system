<?php
    session_start();
    require_once('../../model/mmModel.php');
    require_once('../../config/database.php');

?>

<?php
        if(isset($_POST['display-list'])){

            header('Location:../../view/mahapolaSchemeMaintainer/mmNominatedListV.php');
            
        }

?>