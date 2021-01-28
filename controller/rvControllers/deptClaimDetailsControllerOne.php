<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/rvModel/viewClaimDetailsModel.php');
?>

<?php
        $dept = viewClaimDetailsModel::viewDept($connect);
        $result_year = viewClaimDetailsModel::getMemYears($connect);

        $_SESSION['department'] = '';
        $_SESSION['medical_year'] = '';

        if (mysqli_num_rows($dept)>0 && mysqli_num_rows($result_year)>0) {
            while ($row = mysqli_fetch_array($dept)) {
                $_SESSION['department'] .= "<option value='".$row['department']."'>".$row['department']."</option>";
                
            }

            while ($year = mysqli_fetch_array($result_year)) {
                $_SESSION['medical_year'] .= "<option value='".$year['medical_year']."'>".$year['medical_year']."</option>";
                
            }

            header('Location:../../view/reportViewer/rvViewDeptClaimDetailsV.php');
        }
?>