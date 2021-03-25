<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel/memModel.php');
?>

<?php
    if(isset($_POST['get-years-submit'])){
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        $result_year = memModel::getMemYears($connect);

        $_SESSION['medical_year'] = '';

        if (mysqli_num_rows($result_year)>0) {
            while ($year = mysqli_fetch_array($result_year)) {
                $_SESSION['medical_year'] .= "<option value='".$year['medical_year']."'>".$year['medical_year']."</option>";
                
            }

            header('Location:../../view/medicalSchemeMember/memGetClaimDetailsV.php');
        }
        else{
            header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
        }
    }

    elseif(isset($_POST['year-claim-submit'])){

            $user_id = mysqli_escape_string($connect,$_GET['user_id']);
            $year = $_POST['medical_year'];
           
            $result = memModel::getClaimDetails($user_id,$year,$connect);

            if($result){
                if(mysqli_num_rows($result)==1){

                    $result_one = mysqli_fetch_assoc($result);

                    $_SESSION['scheme'] = $result_one['scheme'];
                    $_SESSION['initial_amount'] = $result_one['initial_amount'];
                    $_SESSION['used_amount'] = $result_one['used_amount'];
                    $_SESSION['remain_amount'] = $result_one['remain_amount'];

                    header('Location:../../view/medicalSchemeMember/memYearClaimDetailsV.php');

                }
                else{
                    header('Location:../../view/medicalSchemeMember/memNoYearClaimRecordV.php');
                }

            }
            else{
                header('Location:../../view/medicalSchemeMember/memFailedToFetch.php');
            }
    }
?>