<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/rvModel/rvViewSchemesModel.php');

    $_SESSION['scheme_list'] = '';

    $records = rvModel::viewSchemes($connect);

    if ($records) {
        while ($record = mysqli_fetch_assoc($records)) {
            $_SESSION['scheme_list'] .= "<tr>";
            $_SESSION['scheme_list'] .= "<td>{$record['schemeName']}</td>";
            $_SESSION['scheme_list'] .= "<td>{$record['maxRoomCharge']}</td>";
            $_SESSION['scheme_list'] .= "<td>{$record['hospitalCharges']}</td>";
            $_SESSION['scheme_list'] .= "<td>{$record['annualPremium']}</td>";
            $_SESSION['scheme_list'] .= "<td>{$record['gvtNoPayingWard']}</td>";
            $_SESSION['scheme_list'] .= "<td>{$record['gvtChildBirthCover']}</td>";
            $_SESSION['scheme_list'] .= "<td>{$record['consultantFee']}</td>";
            $_SESSION['scheme_list'] .= "<td>{$record['spectaclesCost']}</td>";
            $_SESSION['scheme_list'] .= "<td>{$record['permanentStaff']} months</td>";
            $_SESSION['scheme_list'] .= "<td>{$record['contractStaff']} months</td>";
            $_SESSION['scheme_list'] .= "<td>{$record['temporaryStaff']} months</td>";
            $_SESSION['scheme_list'] .= "</tr>";
        }
        header('Location:../../view/reportViewer/rvViewSchemeDetailsV.php');
    }
    else {
        header('Location:../../view/reportViewer/rvNoSchemsV.php');
    }

?>