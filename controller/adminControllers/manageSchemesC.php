<?php 
    require_once('../../model/adminModel/manageSchemesModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addScheme-submit'])) {
        $schemeName = $_POST['schemeName'];
        $maxRoomCharge = $_POST['maxRoomCharge'];
        $hospitalCharges = $_POST['hospitalCharges'];
        $annualPremium = $_POST['annualPremium']; 
        $monthlyPremium = $_POST['monthlyPremium'];
        $gvtNoPayingWard = $_POST['gvtNoPayingWard'];
        $gvtChildBirthCover = $_POST['gvtChildBirthCover'];
        $travelExpensesCover = $_POST['travelExpensesCover'];
        $annualLimit = $_POST['annualLimit'];
        $consultantFee = $_POST['consultantFee'];
        $investigationsCost = $_POST['investigationsCost'];
        $spectaclesCost = $_POST['spectaclesCost'];
        $eleigibilityConditions = $_POST['eleigibilityConditions'];

        $result = adminModel::addScheme($schemeName, $maxRoomCharge, $hospitalCharges, $annualPremium, $monthlyPremium, $gvtNoPayingWard, $gvtChildBirthCover, $travelExpensesCover, $annualLimit, $consultantFee, $investigationsCost,  $spectaclesCost, $eleigibilityConditions, $connect);

        if ($result) {
            echo "Scheme is added successfully";
        }
        else {
            echo "Scheme was not added";
        }
    }
?>