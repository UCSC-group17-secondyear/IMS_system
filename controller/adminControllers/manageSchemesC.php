<?php 
    session_start();
    require_once('../../model/adminModel/manageSchemesModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addScheme-submit'])) {
        $schemeName = mysqli_real_escape_string($connect, $_POST['schemeName']);
        $maxRoomCharge = mysqli_real_escape_string($connect, $_POST['maxRoomCharge']);
        $hospitalCharges = mysqli_real_escape_string($connect, $_POST['hospitalCharges']);
        $annualPremium = mysqli_real_escape_string($connect, $_POST['annualPremium']);
        $gvtNoPayingWard = mysqli_real_escape_string($connect, $_POST['gvtNoPayingWard']);
        $gvtChildBirthCover = mysqli_real_escape_string($connect, $_POST['gvtChildBirthCover']);
        $consultantFee = mysqli_real_escape_string($connect, $_POST['consultantFee']);
        $spectaclesCost = mysqli_real_escape_string($connect, $_POST['spectaclesCost']);
        $permanentStaff = mysqli_real_escape_string($connect, $_POST['permanentStaff']);
        $contractStaff = mysqli_real_escape_string($connect, $_POST['contractStaff']);
        $temporaryStaff = mysqli_real_escape_string($connect, $_POST['temporaryStaff']);

        $schemeExists = adminModel::checkScheme($schemeName, $connect);

        if (mysqli_num_rows($schemeExists)==1) {
            header('Location:../../view/admin/aSchemeExists.php');
        }
        else {
            $result = adminModel::addScheme($schemeName, $maxRoomCharge, $hospitalCharges, $annualPremium, $gvtNoPayingWard, $gvtChildBirthCover, $consultantFee, $spectaclesCost, $permanentStaff, $contractStaff, $temporaryStaff, $connect);

            if ($result) {
                header('Location:../../view/admin/aSchemeAdded.php');
            }
            else {
                header('Location:../../view/admin/aSchemeNotAdded.php');
            }
        }
    }

    else if(isset($_POST['getscheme-submit'])) {
        $schemeName = $_POST['schemeName'];
        $result_set = adminModel::getScheme($schemeName, $connect);

        if ($result_set) {
            if(mysqli_num_rows($result_set)==1){
                $result = mysqli_fetch_assoc($result_set);
                $_SESSION['scheme_id'] = $result['scheme_id'];
                $_SESSION['schemeName'] = $result['schemeName'];
                $_SESSION['maxRoomCharge'] = $result['maxRoomCharge'];
                $_SESSION['hospitalCharges'] = $result['hospitalCharges'];
                $_SESSION['annualPremium'] = $result['annualPremium'];
                $_SESSION['gvtNoPayingWard'] = $result['gvtNoPayingWard'];
                $_SESSION['gvtChildBirthCover'] = $result['gvtChildBirthCover'];
                $_SESSION['consultantFee'] = $result['consultantFee'];
                $_SESSION['spectaclesCost'] = $result['spectaclesCost'];
                $_SESSION['permanentStaff'] = $result['permanentStaff'];
                $_SESSION['contractStaff'] = $result['contractStaff'];
                $_SESSION['temporaryStaff'] = $result['temporaryStaff'];

                header('Location:../../view/admin/aUpdateScehemeFoundV.php');
            }
            else {
                header('Location:../../view/admin/aQueryFailedV.php');
            }
        }
        else {
            header('Location:../../view/admin/aNoSchemesAvailableV.php');
        }
    }

    else if(isset($_POST['updateScheme-submit'])) {
        $schemeName = $_SESSION['schemeName'];
        $maxRoomCharge = $_POST['maxRoomCharge'];
        $hospitalCharges = $_POST['hospitalCharges'];
        $annualPremium = $_POST['annualPremium']; 
        $gvtNoPayingWard = $_POST['gvtNoPayingWard'];
        $gvtChildBirthCover = $_POST['gvtChildBirthCover'];
        $consultantFee = $_POST['consultantFee'];
        $spectaclesCost = $_POST['spectaclesCost'];
        $permanentStaff = $_POST['permanentStaff'];
        $contractStaff = $_POST['contractStaff'];
        $temporaryStaff = $_POST['temporaryStaff'];

        $result = adminModel::updateScheme($schemeName, $maxRoomCharge, $hospitalCharges, $annualPremium, $gvtNoPayingWard, $gvtChildBirthCover, $consultantFee, $spectaclesCost, $permanentStaff, $contractStaff, $temporaryStaff, $connect);

        if ($result) {
            header('Location:../../view/admin/aSchemeUpdated.php');
        }
        else {
            header('Location:../../view/admin/aSchemeNotUpdated.php');
        }
    }

    else if(isset($_POST['removeScheme-submit'])) {
        $schemeName = $_POST['schemeName'];
        $result_set = adminModel::removeScheme($schemeName, $connect);

        if ($result_set== true) {
            header('Location:../../view/admin/aSchemeRemoved.php');
        }
        else {
            header('Location:../../view/admin/aSchemeNotRemoved.php');
        }
    }

    else {
        echo "no button is submitted";
    }
?>